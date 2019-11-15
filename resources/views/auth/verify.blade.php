@extends('layouts.app')

@section('content')

<section class="min-vh-100 py-5">
      <div class="container">
        <div class="row justify-content-center pt-6">
          <div class="col-xl-4 col-lg-5 col-md-6">
            <div class="text-center mb-4">
              <h1 class="mb-1">Forgot Password</h1>
              <span>Enter your details to recieve a reset link</span>
            </div>
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            <form method="POST" action="{{ route('verification.resend') }}">
                @csrf
              <div class="form-group">
                <input type="email" name="forgot-password-email" placeholder="Email Address" class="form-control">
              </div>
              <div class="form-group">
                <button class="btn-block btn btn-primary" type="submit">Send Reset Link</button>
              </div>
            </form>



            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }},


          </div>
        </div>
      </div>
    </section>
@endsection
