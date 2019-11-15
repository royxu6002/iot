@extends('layouts.app')

@section('content')
<section class="min-vh-100 py-5">
      <div class="container">
        <div class="row justify-content-center pt-6">
          <div class="col-xl-4 col-lg-5 col-md-6">
            <div class="text-center mb-4">
              <h1 class="mb-1">Welcome back</h1>
              <span>Enter your account details below</span>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

              <div class="form-group">
                <input type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <small><a href="{{ route('password.request') }}">Forgot your password?</a>
                </small>
              </div>





              <div class="form-group">
                <button class="btn-block btn btn-primary" type="submit">Sign in</button>
              </div>

              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label text-small text-muted" for="remember">Keep me signed in</label>
              </div>

              <hr>
              <div class="text-center text-small text-muted">
                <span>Don't have an account yet? <a href="{{route('register')}}">Create one</a>
                </span>
              </div>

               <div class="text-center text-small text-muted">
                <span>Login with &nbsp;<a href="{{ route('login.account', ['account'=>'github']) }}">Github</a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>

@endsection
