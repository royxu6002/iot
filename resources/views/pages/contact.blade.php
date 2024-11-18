@extends('layouts.app')
@section('title', 'Contact us')

@section('content')
<section class="header-inner o-hidden" style="background-color: rgba(11,196,131,0.79);">
      <div class="container layer-2 position-relative">
        <div class="row py-6 text-center justify-content-center align-items-center">
          <div class="col-xl-8 col-lg-10">
            <h1 class="display-4">Get In Touch</h1>
            <p class="lead mb-0">Please specify your needs so that our professional team could work with. A member of our team will be in touch shortly.<p>
          </div>
        </div>
      </div>
      <div class="divider layer-1">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="96px" viewBox="0 0 100 100" version="1.1" preserveAspectRatio="none" class="injected-svg" data-src="assets/img/dividers/divider-2.svg">
            <path d="M0,0 C16.6666667,66 33.3333333,99 50,99 C66.6666667,99 83.3333333,66 100,0 L100,100 L0,100 L0,0 Z"></path>
        </svg>
      </div>
      <div class="decoration bottom left scale-3 d-none d-md-block" data-jarallax-element="100" style="z-index: 0; transform: translate3d(0px, -103.584px, 0px);">

      <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;">
        <div style="position: fixed;"></div>
      </div>
    </div>
      <div class="decoration middle-y left scale-2 blend-mode-multiply d-none d-md-block" data-jarallax-element="200" style="z-index: 0; transform: translate3d(0px, -142.454px, 0px);">

      <div id="jarallax-container-1" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;"><div style="position: fixed;"></div></div></div>
      <div class="decoration middle-y scale-2 right blend-mode-multiply d-none d-xl-block" data-jarallax-element="50 50" style="z-index: 0; transform: translate3d(-24.2744px, -24.2744px, 0px);">

      <div id="jarallax-container-2" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;"><div style="position: fixed;"></div></div></div>
    </section>


<section>
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-md-7 col-lg-6 mb-3 mb-md-0">
              @if(session()->has('enquiry-response'))
                  <h5>
                      {{ session('enquiry-response') }}
                  </h5>
              @else
            <div class="text-center mb-4">
              <h2 class="h1">Leave a message</h2>
            </div>

            <form action="{{ route('enquiry.store') }}" method="post">
                @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Your Name *</label>
                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" required>
                    @error('name')
                    <div class="invalid-feedback">
                     {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email Address *</label>
                    <input name="email" type="email" placeholder="you@yoursite.com" class="form-control " required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Company Name</label>
                    <input name="company" type="text" class="form-control @error('company') is-invalid @enderror" required>
                    @error('company')
                        <div class="invalid-feedback">
                         {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Contact Number</label>
                    <input name="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" required>
                    @error('phone')
                        <div class="invalid-feedback">
                         {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label>Message:</label>
                    <textarea class="form-control @error('enquiry') is-invalid @enderror" name="enquiry" rows="10" placeholder="How can we help?"></textarea>
                    @error('enquiry')
                        <div class="invalid-feedback">
                         {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
                <div class="col">
                  <button type="submit" class="btn btn-primary btn-loading" data-loading-text="Sending">
                    <span>Send Enquiry</span>
                  </button>
                </div>
              </div>
            </form>
            @endif
          </div>

          <div class="col-md-4 col-lg-3">
            <h2>Hangzhou</h2>
            <div class="mb-3">
              <h6 class="mb-1">Address</h6>
              <address>
                Room 2112, Xiaoshan Baolong Square
                <br>Hangzhou
                <br>311215
              </address>
            </div>
            <div class="mb-3">
              <h6 class="mb-1">Phone</h6>
              <span>+86 182 5819 4466</span>
            </div>
            <div class="mb-3">
              <h6 class="mb-1">Email</h6>
              <a href="mailto:info@comlibra.com">info@comlibra.cn</a>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection

@section('styles')
@endsection

@section('scripts')
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>
@endsection
