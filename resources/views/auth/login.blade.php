@extends('layouts.app')

@section('content')
    <section class="min-vh-100 py-5">
      <div class="container">
        <div class="row justify-content-center pt-6">
          <div class="col-xl-4 col-lg-5 col-md-6">
            <div class="text-center mb-4">
              <h3 class="mb-1">Hi, welcome back</h3>
              <span>Enter your account details below</span>
            </div>
            <form method="post" action="{{route('login')}}">
              @csrf
              <div class="form-group">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address" >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <small><a href="{{route('password.request')}}">Forgot your password?</a>
                </small>
              </div>
              <div class="form-group">
                <button class="btn-block btn btn-primary" type="submit">Sign in</button>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="login-remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label text-small text-muted" for="login-remember">Keep me signed in</label>
              </div>
              <hr>
              <div class="text-center text-small text-muted">
                <span>Don't have an account yet? <a href="{{route('register')}}">Create one</a>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection
