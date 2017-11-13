@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-md-center">
     <div class="col col-md-6">
            
            <div class="card border-primary mt-3">
              <div class="card-header">
                Login
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label for="username" class="control-label">Username</label>
                    
                        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                        
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">Password</label>

                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        
                    </div>

                    <div class="form-group">
                        
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        
                            <button type="submit" class="btn btn-primary btn-shadow btn-gradient">
                                Login
                            </button>
                            Or
                            <a href="{{ route('register') }}" class="btn btn-primary btn-outline btn-gradient">
                                Register
                            </a>
                    </div>
                </form>

              </div>
            <div class="card-footer">
                <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
            </div>
            </div>

        </div>
    </div>
</div>
@endsection
