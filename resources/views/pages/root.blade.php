@extends('layouts.app')

@section('content')
<section class="pb-0 pt-3 pt-lg-6" style="background-color: rgba(11,196,131,0.79);transition: background 0.3s,border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding: 0px 0px 30px 0px;">
      <div class="container">
        <div class="row align-items-center justify-content-between p-3">
          <div class="col-lg-6 col-xl-5 text-center px-md-6 px-lg-0" style="color: white">
            <h1>Connected weight scale with Bluetooth 4.0 Wireless technology</h1>
            <p class="leap mt-3">
              Provides you with a detailed body weight and BMI including graphical statistics on your body weight improvements. When connecting your body weight scale, the App will receive data sent from scale and continuously record on your App.
            </p>
            <div class="d-flex justify-content-center my-2 my-md-4">
              <a href="#" class="btn btn-md btn-primary mx-sm-2 mb-3 mb-sm-0 mr-3">
                <img src="{{asset('images/apple.svg')}}" alt="" class="injected-svg icon">
                <span>App Store</span>
              </a>
              <a href="#" class="btn btn-md btn-primary mx-sm-2 mb-3 mb-sm-0">
                <img src="{{asset('images/google.svg')}}" alt="" class="injected-svg icon">
                <span>Google Play</span>
              </a>
            </div>
          </div>

          <div class="col-lg-6 mt-5">
            <div class="row justify-content-center mb-5">
              <div class="col-lg-12 col-11 mt-4 mt-lg-0">
                <img style="max-width: 100%; border-radius: 30px;" src="http://comlibra.com/wp-content/uploads/2018/07/BMI.jpg" alt="Image" data-aos="fade-left" class="aos-init aos-animate">
              </div>
            </div>

          </div>
        </div>

        <div class="row justify-content-between align-items-center p-3 text-center">
          <div class="d-flex flex-column" style="color: white">
            <div class="row mb-5">
              <div class="col-md-3 col-6">
                <img src="{{asset('images/health.svg')}}" alt="" width="80px" height="80px" class="injected-svg icon icon-lg">
                <p class="mt-2">
                  Weighing yourself to keep track.
                </p>
              </div>

              <div class="col-md-3 col-6">
                <img src="{{asset('images/connection.svg')}}" alt=""  width="80px" height="80px" viewBox="0 0 24 24" version="1.1" class="injected-svg icon icon-lg">
                <p class="mt-2">
                  Connection to the smartphone and tablet app.
                </p>
              </div>

              <div class="col-md-3 col-6">
                <img src="{{asset('images/bmi.svg')}}" alt=""  width="80px" height="80px" class="injected-svg icon icon-lg">
                <p class="mt-2">
                  This BMI calculator is ideally suited as a protocol for dieting, losing weight, muscle building and weight gain.
                </p>
              </div>

               <div class="col-md-3 col-6">
                <img src="{{asset('images/lifestyle.svg')}}" alt=""  width="80px" height="80px" class="injected-svg icon icon-lg">
                <p class="mt-2">
                  The perfect companion  for dieting and losing weight.
                </p>
              </div>

              </div>

            </div>
          </div>
        </div>
      </div>
</section>

<section class="pt-0" style="background-image: url({{asset('images/bg-2.png')}}); background-size: auto; opacity: 0.8; background-position: bottom right; background-repeat: no-repeat; background-size: cover; background-color: rgba(29,157,211,0.91);  height: 300px">
    {{-- <div width="100%" height="100%" style="">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 p-5" style="color: white">

            </div>
        </div>
    </div> --}}
</section>

<section class="o-hidden">
      <div class="container">
        <div class="row justify-content-center text-center mb-6">
          <div class="col-xl-8 col-lg-9">
            <h2 class="display-4 mx-xl-6">Take a closer look</h2>
            <p class="lead">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="slider-phone">
              <img src="{{ asset('images/iphone-xr.svg') }}" alt="Phone" class="col-9 col-md-5 col-lg-4 col-xl-3">
              <div data-flickity='{ "imagesLoaded": true, "wrapAround": true }'>
                <div class="carousel-cell col-9 col-md-5 col-lg-4 col-xl-3 mx-4 ">
                  <img src="{{ asset('images/app-1.png') }}" alt="Image">
                </div>
                <div class="carousel-cell col-9 col-md-5 col-lg-4 col-xl-3 mx-4">
                  <img src="{{ asset('images/app-2.png') }}" alt="Image">
                </div>
                <div class="carousel-cell col-9 col-md-5 col-lg-4 col-xl-3 mx-4">
                  <img src="{{ asset('images/app-3.png') }}" alt="Image">
                </div>
                <div class="carousel-cell col-9 col-md-5 col-lg-4 col-xl-3 mx-4">
                  <img src="{{ asset('images/app-4.png') }}" alt="Image">
                </div>
                <div class="carousel-cell col-9 col-md-5 col-lg-4 col-xl-3 mx-4">
                  <img src="{{ asset('images/app-5.png') }}" alt="Image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>

<section style="background-color: #51e8c9">
  <div class="container">
    <div class="row text-center mb-5">
      <div class="col" style="color:white;">
        <small class="lead text-uppercase">Trusted by companies like</small>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <ul class="d-flex flex-wrap justify-content-center list-unstyled">
          <li class="mx-4 mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <img src="{{asset('images/go-clever.png')}}" alt="" height="36" viewBox="0 0 201 36" fill="none" class="injected-svg icon icon-logo icon-md opacity-55">
          </li>
          <li class="mx-4 mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <img src="{{asset('images/xbilitz.png')}}" alt="" height="36" viewBox="0 0 141 36" fill="red" class="injected-svg icon icon-logo icon-md opacity-55">
          </li>
          <li class="mx-4 mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            <img src="{{asset('images/media-tech.png')}}" alt="" height="36" class="injected-svg icon icon-logo icon-md opacity-55">
          </li>
          <li class="mx-4 mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
            <img src="{{asset('images/coby.png')}}" alt="" height="36" class="injected-svg icon icon-logo icon-md opacity-55">
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

@endsection
