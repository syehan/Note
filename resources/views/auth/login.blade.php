@extends('layouts.app')

@section('content')
<div class="container">
  <div class="section">
  <div class="col s12 m4 l8">
              <h2 class="center-align"><img href="{{url('/')}}" src="image/notebook3.png" /></h2>
              <div class="row">
                <div class="col s12 m4 8"></div>
                  <form class="col s12 m4 12">
                      <div class="row">
                          <div class="input-field col s12">
                              <input id="email" type="email" class="validate">
                              <label for="email">Email</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="input-field col s12">
                              <input id="pass" type="password" class="validate">
                              <label for="pass">Password</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col s12">
                              <p>
                                  <input type="checkbox" id="remember">
                                  <label for="remember">Remember me</label>
                              </p>
                          </div>
                      </div>
                      <div class="divider"></div>
                      <div class="row">
                          <div class="col m12">
                            <p class="left-align">

                            </p>
                              <p class="right-align">
                                <a href="{{url('/register')}}">Sign Up</a>
                                  <button href="{{url('/')}}" class="btn btn-large waves-effect waves-light" type="button" name="action">Login</button>
                              </p>
                          </div>
                      </div>
                  </form
                  <div class="col s12 m4 8"></div>
              </div>
          </div>
      </div>
  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>
  {{-- <div class="container">
  <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
<form class="col s12" method="POST" action="{{ url('/login') }}">
{{ csrf_field() }}
    <div class="row">
      <div class='col s12'>
      </div>
    </div>

      <div class="row">
        <div class='input-field col s12'>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class='input-field col s12'>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      </div>
                    </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
