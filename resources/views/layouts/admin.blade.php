<html>
  <head>
{!! Html::style('css/bootstrap.min.css') !!}
{!! Html::style('css/style.css') !!}
<meta name="csrf-token" content="{{ csrf_token() }}">
 <title>@yield('title')</title>
  </head>
  <body>
  	<nav class="navbar navbar-inverse navbar-fixed-top">
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
              <li><a href="/"></a></li>
              
             
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li> <a href="/">Site</a></li>
              <li> <a href="/logout">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

    <div class="container main-wrap">
      @yield('content')
    </div>
    <footer></footer>
    {!! Html::script('js/jquery-2.2.3.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/statistics-report.js') !!}

  
  </body>
</html>