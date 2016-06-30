// function getCookie(name, records) {
    
   
//   var value = "; " + document.cookie;
//   var parts = value.split("; " + name + "=");
//   console.log(parts.length);
//   var finVal = ""; 
//   if (parts.length == 2) {
//      console.log(parts);
//     finVal = parts.pop().split(";").shift();
//   }  else {
//     var UniquCookie = Math.floor(Math.random() * 1000) + 100; 
//     var un_cookie = records.ip+UniquCookie;
    
//     document.cookie = 'UniwVisitor='+un_cookie+';expires=2090;domain='+records.domain+';path=/;'; 
//      console.log(document.cookie);
//     finVal = un_cookie;
//   }
//    return finVal; 
                  
  
// }

function setCookie(cname,cvalue,exdays, records) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires+";domain="+window.location.hostname+";path=/;";

}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie(UniqueVisitor, records) {
    var un_cookie=getCookie(UniqueVisitor);
    
    if (un_cookie != "") {
        return un_cookie ;
    } else {
       
       var UniquCookie = Math.floor(Math.random() * 1000) + 100; 
       var un_cookie = records.ip+UniquCookie;
       if (un_cookie != "" && un_cookie != null) {
           setCookie(UniqueVisitor, un_cookie, 30, records);
       }
       return un_cookie;
    }
}
function getReferrer () {
    var referrer =  document.referrer;
    var referrerDomain = "---self---";
    var CurDoain = window.location.hostname;
    
    if(referrer && referrer.indexOf(CurDoain) < 1){
      var exRef = document.referrer.split("/", 3);   
      referrerDomain = exRef[0]+"//"+exRef[2];
    }

    var currentpageEx = document.location.href.split(CurDoain, 2);
    var currentpage = currentpageEx[1] ? currentpageEx[1] : "/";
    
    return {ref:referrerDomain, page:currentpage};
}

 $(document).ready(function () {
           // $.plot($("#flot-placeholder"), dataSet, options);
            //$("#flot-placeholder").UseTooltip();
          var addresBar = getReferrer(records);
         
            var records = {
                browser:browserName,
                os:OPSystem,
                page:addresBar.page, 
                referrer:addresBar.ref,
                geo:'',
                ip:'',
                un_cookie:'',
                _token: '', 
            }

            records._token = $("meta[name=csrf-token]").attr("content");
         

            
            $.getJSON("http://jsonip.com/?callback=?", function (data) {
               $("#echo").innerHTML = data.ip+"|URI "+window.location.href;
               records.ip =  data.ip;
                 $.getJSON("http://ipinfo.io/"+data.ip+"/json", function (res) {
                    records.geo =  res.country;
                    records.un_cookie = checkCookie("UniquVisitorX", records);
                    $.post( "/analitic", records, function( data ) {                     

                    }).fail(function(e) {
                       // console.log( e.responseText );
                      });
                   
                });
        
        });
    });