$(document).ready(function () {
	
	//Calling statistics type by selected type
	//We can also call main-statistics-tabs li a yet tab-head is better
	var records = {}; 
	records._token = $("meta[name=csrf-token]").attr("content");
	$(".tab-head").click(function () {
		var CurTab = $(this); 
		var viewTab =  CurTab.attr('href').replace("#", "");

		records.type = CurTab.data('aim'); 
		  $.post( "/backend/select-type", records, function( data ) {
						//Here HTML contenet is appended	  	
		  				 $("#"+viewTab).html( data);
		  			// 	var html ="";
       //                	// Here is a good working area vor Angular js
	      //               $.each(data, function( index, v ) {
	      //                 	html += "<div class='report-item col-md-12'><div class='col-md-3'>"+v.TypeName +"</div> <div class='col-md-9'>"+v.TypeCount+"</div></div>";
							// });

	      //               $("#"+viewTab).html( html);
                    }).done(function(d) {
                        
                      })
                      .fail(function(e) {
                        console.log( e.responseText );
                      });
	}); 
}); 