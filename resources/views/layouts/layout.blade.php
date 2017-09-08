<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="materialize/css/materialize.css" media="screen" title="no title">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen" title="no title">
<style>
html {
  font-family: GillSans, Calibri, Trebuchet, sans-serif;

}
</style>
<head>
    <meta charset="UTF-8">
    <title>NoteWeb</title>
    {{-- <link rel="stylesheet" href="{{asset('dist/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/foundation.css')}}">
    <link rel="stylesheet" href="{{asset('css/foundation.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/apps.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}"> --}}


</head>

  <body>
    <div class="navbar-fixed">


      <nav class="teal lighten-3">
    <div class="nav-wrapper">
      <a id="logo-container" href="{{route("index")}}" class="brand-logo center">
       <img src="image/notebook.png" alt="" />
     </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        @if (Auth::guest())
        @else
          <li><a class="dropdown-button" data-activates="dropdown1" href="#">  {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i></a></li>

          <ul id="dropdown1" class="dropdown-content">
            <li><a href="{{ url('/logout') }}"onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">Logout </a>
                     <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                         {{ csrf_field() }}
                     </form>
                   </li>
      </ul>
    </div>
      @endif
    </div>
  </nav>
        {{-- <nav class="navbar  navbar-dark bg-primary">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
                &#9776;
            </button>
            <div class="collapse navbar-toggleable-xs" id="navbar-header">
                <a class="navbar-brand" href="{{route("index")}}">NoteWeb</a>


                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    @else
                        <li class="dropdown" style="padding-left:1200px; padding-top:5px">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" style="left:1px; padding-top:5px">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>

        </nav> --}}
        <!-- /navbar -->
        <!-- Main component for call to action -->

        @yield('content')
    </div>
    <!-- /container -->

    <script src="{{'dist/js/jquery3.min.js'}}"></script>
    <script src="{{'dist/js/bootstrap.js'}}"></script>
    <script src="{{'js/vendor/foundation.js'}}"></script>
    <script src="{{'js/vendor/foundation.min.js'}}"></script>
    <script src="{{'js/vendor/jquery.js'}}"></script>
    <script src="{{'js/vendor/what-input.js'}}"></script>
    <script src="{{'js/apps.js'}}"></script>
    <script src="{{'materialize/js/materialize.js'}}"></script>
    <script src="{{'materialize/js/materialize.min.js'}}"></script>
    <script src="{{'js/init.js'}}"></script>

</body>

</html>
