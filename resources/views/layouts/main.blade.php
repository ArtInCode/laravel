<html>
  <head>
{!! Html::style('css/bootstrap.min.css') !!}
{!! Html::style('css/style.css') !!}
<meta name="csrf-token" content="{{ csrf_token() }}">
 <title>@yield('title')</title>
  </head>
  <body>
  	<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="/">Home</a></li>
              <li><a href="/about">About</a></li>
          
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cars <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/cars/jeep">Jeep</a></li>
                  <li><a href="/cars/sedan">Sedan</a></li>
                  <li><a href="/cars/coupe">Coupe</a></li>
                  <li><a href="/cars/sport-cars">Sport Cars</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                   <li><a href="/news">News</a></li>
                   <li><a href="/news/vidoes">Vidoes</a></li>
                </ul>
              </li>
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tools <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/tools/jeep">Jeep</a></li>
                  <li><a href="/tools/sedan">Sedan</a></li>
                  <li><a href="/tools/coupe">Coupe</a></li>
                  <li><a href="/tools/sport-cars">Sport Cars</a></li>
                  
                </ul>
              </li>
              <li> <a href="/gallery">Gallery</a></li>
              <li> <a href="/contact">Contact</a></li>
             
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li> <a href="/backend/">Admin</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

    <div class="container">
      @yield('content')
    </div>
    <footer></footer>
    {!! Html::script('js/jquery-2.2.3.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/data-collector.js') !!}    
    {!! Html::script('js/spy.js') !!}
  </body>
</html>