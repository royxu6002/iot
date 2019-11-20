@extends('layouts.app')

@section('content')
    <section class="min-vh-100 py-5">
      <div class="container">
        <div class="row justify-content-center pt-6">
          <div class="col-xl-4 col-lg-5 col-md-6">
            <div class="text-center mb-4">
              <h3 class="mb-1">Reset Password</h3>
            </div>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
              <div class="form-group">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <small class="text-muted">Must be at least 8 characters</small>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation">
              </div>
              <div class="form-group">
                <button class="btn-block btn btn-primary" type="submit">Reset password</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection
