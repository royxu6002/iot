@extends('layouts.app')

@section('content')
<section class="pb-0 pt-3 pt-lg-6" style="background-color: rgba(11,196,131,0.79);transition: background 0.3s,border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding: 0px 0px 30px 0px;">
      <div class="container">
        <div class="row align-items-center justify-content-between p-3">
          <div class="col-lg-6 col-xl-5 text-center px-md-6 px-lg-0" style="color: white">
            <h1>Stainless Steel Kitchen Scale with Bluetooth 4.0 Wireless technology</h1>
            <p class="leap mt-3">
              A well designed, elegantly slim stainless steel kitchen scale, with 1g increment maximum measuring 5kgs.
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
              <div class="col-lg-8 col-7 mt-4 mt-lg-0">
                <img style="max-width: 100%; border-radius: 30px;" src="{{asset('images/kitchen-app.png')}}" alt="Image" data-aos="fade-left" class="aos-init aos-animate">
              </div>
            </div>

          </div>
        </div>

        <div class="row justify-content-between align-items-center p-3 text-center">
          <div class="d-flex flex-column" style="color: white">
            <div class="row mb-5">
              <div class="col-md-3 col-6">
                <img src="{{asset('images/kitchen.svg')}}" alt="" width="80px" height="80px" class="injected-svg icon icon-lg">
                <p class="mt-2">Precisely measure ingredients according to the recipe. </p>
              </div>

              <div class="col-md-3 col-6">
                <img src="{{asset('images/connection.svg')}}" alt=""  width="80px" height="80px" viewBox="0 0 24 24" version="1.1" class="injected-svg icon icon-lg">
                <p class="mt-2">
                  Connection to the smartphone and tablet app.
                </p>
              </div>

              <div class="col-md-3 col-6">
                <img src="{{asset('images/nutrition.svg')}}" alt=""  width="80px" height="80px" class="injected-svg icon icon-lg">
                <p class="mt-2">Monitoring values as calories, proteins, fat, cholesterol, protein…</p>
              </div>

               <div class="col-md-3 col-6">
                <img src="{{asset('images/CoffeeBrewing.svg')}}" alt=""  width="80px" height="80px" class="injected-svg icon icon-lg">
                <p class="mt-2">Control the extraction time and brew exactly wanted coffee.</p>
              </div>

              </div>

            </div>
          </div>
        </div>
      </div>
</section>
<section class="pb-0 pt-3 pt-lg-6" style="background-color: rgba(11,196,131,0.79);transition: background 0.3s,border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding: 0px 0px 30px 0px;">
      <div class="container">
        <div class="row align-items-center justify-content-between p-3">
          <div class="col-lg-6 mt-5">
            <div class="row justify-content-center mb-5">
              <div class="col-lg-8 col-7 mt-4 mt-lg-0">
                <img style="max-width: 100%; border-radius: 30px;" src="{{asset('images/kitchen-app2.png')}}" alt="Image" data-aos="fade-left" class="aos-init aos-animate">
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-5 text-center px-md-6 px-lg-0" style="color: white">
            <h1>Coffee brewing scale</h1>
            <p class="leap mt-3">
             A built-in function to help you brew perfect coffee.  Time counting controls the extraction time you want and tap zero to calculate the coffee power and water, measuring in 1gram increments improves your brewing, avoiding that bitter mess you accidentally crafted, making coffee you love.
            </p>
          </div>
        </div>
      </div>
</section>


<section class="pt-0" style="background-image: url({{asset('images/app-kitchen-scale.jpg')}}); background-size: auto; opacity: 0.8; background-position: right; background-repeat: no-repeat; background-size: cover; background-color: rgba(29,157,211,0.91);  height: 500px">
</section>

<section class="o-hidden">
      <div class="container">
        <div class="row justify-content-center text-center mb-6">
          <div class="col-xl-8 col-lg-9">
            <h2 class="display-4 mx-xl-6">Take a closer look</h2>
            <p class="lead">
             Get a general look of our app or you may down the app for a evaluation.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="slider-phone">
              <img src="{{ asset('images/iphone-xr.svg') }}" alt="Phone" class="col-9 col-md-5 col-lg-4 col-xl-3">
              <div data-flickity='{ "imagesLoaded": true, "wrapAround": true }'>
                <div class="carousel-cell col-9 col-md-5 col-lg-4 col-xl-3 mx-4 ">
                  <img src="{{ asset('images/kitchen-01.png') }}" alt="Image">
                </div>
                <div class="carousel-cell col-9 col-md-5 col-lg-4 col-xl-3 mx-4">
                  <img src="{{ asset('images/kitchen-02.png') }}" alt="Image">
                </div>
                <div class="carousel-cell col-9 col-md-5 col-lg-4 col-xl-3 mx-4">
                  <img src="{{ asset('images/kitchen-03.png') }}" alt="Image">
                </div>
                <div class="carousel-cell col-9 col-md-5 col-lg-4 col-xl-3 mx-4">
                  <img src="{{ asset('images/kitchen-04.png') }}" alt="Image">
                </div>
{{--                 <div class="carousel-cell col-9 col-md-5 col-lg-4 col-xl-3 mx-4">
                  <img src="{{ asset('images/kitchen-05.png') }}" alt="Image">
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
@endsection
