@extends('layouts.app')

@section('content')
    <section class="min-vh-100 py-5">
      <div class="container">
        <div class="row justify-content-center pt-6">
          <div class="col-xl-4 col-lg-5 col-md-6">
            <div class="text-center mb-4">
              <h3 class="mb-1">Forgot Password</h3>
              <span>Enter your register email to recieve a reset link</span>
            </div>
            <form method="POST" action="{{ route('password.email') }}">
              @csrf
              <div class="form-group">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <button class="btn-block btn btn-primary" type="submit">Send Reset Link</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection
