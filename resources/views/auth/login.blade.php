@extends('layout.auth')

@section('content')
<div class="container">

<header style="text-align: center; padding:40px;">
    <a href="#" class="brand-logo center"><img style="border-radius:50%;" src="{{asset('images/aat-logo-71x71.jpg')}}"></a><br>
    <span style="margin: 10px;" ><strong>AAT's Dashboard Login</strong></span>
</header>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card panel panel-default">

                <div class="panel-heading"><strong>Login</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="input-field col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                            <!-- Switch -->
                              <div class="switch">
                                <label>
                                Remember Me
                                  <input type="checkbox">
                                  <span class="lever" name="remember" {{ old('remember') ? 'checked' : '' }} ></span>
                                  
                                </label>
                              </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a><br>
                                <strong>Dont Have a Account ?</strong><br>
                                <a class="btn btn-success" href="{{ url('/register') }}">
                                    Register Now
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
