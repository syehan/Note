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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NoteWeb') }}</title>

    <!-- Styles -->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

          <div class="nav-wrapper">

                {{-- <a class="brand-logo" href="{{ url('/') }}">
                    {{ config('app.name', 'NoteWeb') }}
                </a> --}}
                <div class="container">
            </div>
                <!-- Left Side Of Navbar -->

                <!-- Right Side Of Navbar -->
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                  @if (Auth::guest())
       <li><a href="{{url('/register')}}"></a></li>
       <li><a href="{{ url('/login') }}"></a></li>
     @else
       <li>
           <a href="#" class="dropdown-button" data-toggle="dropdown1">
               {{ Auth::user()->name }} <span class="caret"></span>
           </a>

           <ul class="dropdown-content" id="dropdown1" role="menu">
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

            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
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
