@extends('layouts.app')

@section('title', 'Contact us')

@section('content')
<section class="has-divider" style="background-color: rgba(11,196,131,0.79);">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2>About Us</h2>
            <p class="lead mb-0">
                Comlibra Electronic is dedicated to design and source health-related products to make people live in a healthy and comfortable way, we work with manufacturers on development, improvement and optimization of the exclusive products with commitment of quality.
            </p>
          </div>
        </div>
      </div>
      <div class="divider" style="">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="96px" viewBox="0 0 100 100" version="1.1" preserveAspectRatio="none" class="injected-svg bg-white" data-src="assets/img/dividers/divider-5.svg">
          <path fill="#ffffff" d="M0,-2.13162821e-14 C16.6666667,66.6666667 33.3333333,100 50,100 C66.6666667,100 83.3333333,66.6666667 100,-2.13162821e-14 L100,100 L0,100 L0,-2.13162821e-14 Z"></path>
          <path fill="#ffffff" d="M0,2.13162821e-14 C11.1107835,33.3333333 19.4438711,50 24.9992629,50 C33.3328419,50 41.666421,5.09814413e-13 50,5.09814413e-13 C58.333579,5.09814413e-13 66.6671581,50 75.0007371,50 C80.5561289,50 88.8892165,33.3333333 100,2.13162821e-14 L100,100 L0,100 L0,2.13162821e-14 Z" fill-opacity="0.1"></path>
          <path fill="#ffffff" d="M0,2.13162821e-14 C44.4442806,66.6666667 69.4442806,100 75,100 C80.5553918,100 88.8887251,66.6666667 100,2.13162821e-14 L100,100 L0,100 L0,2.13162821e-14 Z" fill-opacity="0.1"></path>
          <path fill="#ffffff" d="M0,-2.13162821e-14 C44.4442806,66.6666667 69.4442806,100 75,100 C80.5553918,100 88.8887251,66.6666667 100,-2.13162821e-14 L100,100 L0,100 L0,-2.13162821e-14 Z" fill-opacity="0.1" transform="translate(50.000000, 50.000000) scale(-1, 1) translate(-50.000000, -50.000000) "></path>
        </svg>
      </div>
</section>

<section class="o-hidden">
      <div class="container">
        <div class="row o-hidden o-lg-visible">
          <div class="col d-flex flex-column align-items-center">
            <ol class="process-vertical">
              <li data-aos="fade-left" class="aos-init aos-animate">
                <div class="process-circle bg-primary"></div>
                <div>
                  <span class="text-small text-muted">October 2014</span>
                  <h5 class="mb-0">start to focus on smart scale line</h5>
                </div>
              </li>
              <li data-aos="fade-left" class="aos-init aos-animate">
                <div class="process-circle bg-primary"></div>
                <div>
                  <span class="text-small text-muted">until October 2015</span>
                  <h5 class="mb-0">make significant improvement on App. E.g. user interface, function... </h5>
                </div>
              </li>
              <li data-aos="fade-left" class="aos-init aos-animate">
                <div class="process-circle bg-primary"></div>
                <div>
                  <span class="text-small text-muted">from April 2016</span>
                  <h5 class="mb-0">create many projects for smart scales</h5>
                </div>
              </li>
              <li data-aos="fade-left" class="aos-init aos-animate">
                <div class="process-circle bg-primary"></div>
                <div>
                  <span class="text-small text-muted">June 2016</span>
                  <h5 class="mb-0">get App updated in Spanish, Polish, Turkey ...language</h5>
                </div>
              </li>
              <li data-aos="fade-left" class="aos-init aos-animate">
                <div class="process-circle bg-primary"></div>
                <div>
                  <span class="text-small text-muted">April 2017</span>
                  <h5 class="mb-0">get Bluetooth® modul diversed...</h5>
                </div>
              </li>
              <li data-aos="fade-left" class="aos-init aos-animate">
                <div class="process-circle bg-primary"></div>
                <div>
                  <span class="text-small text-muted"> 2018</span>
                  <h5 class="mb-0">make big improvments on user interface, communication protocol...</h5>
                </div>
              </li>
              <li data-aos="fade-left" class="aos-init aos-animate">
                <div class="process-circle bg-primary"></div>
                <div>
                  <span class="text-small text-muted">May 2019</span>
                  <h5 class="mb-0">we have wi-fi connected scale available</h5>
                </div>
              </li>
              <li data-aos="fade-left" class="aos-init aos-animate">
                <div class="process-circle bg-primary"></div>
                <div>
                  <span class="text-small text-muted">October 2019</span>
                  <h5 class="mb-0">have heart rate measurement function equiped on scales</h5>
                </div>
              </li>
            </ol>
          </div>
        </div>
      </div>
</section>

<section>
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row align-items-center justify-content-around">
          <div class="col-md-5 col-xl-6 mb-4 mb-md-0">
            <img src="{{ asset('images/coding.jpeg') }}" alt="Image" class="rounded shadow-3d">
          </div>
          <div class="col-md-7 col-xl-6">
            <div class="row justify-content-center">
              <div class="col-xl-8 col-lg-10">
                <span class="badge badge-primary">Our Mission</span>
                <div class="my-3">
                  <span class="h1">Continuous Innovation and Improvement</span>
                </div>
                <p class="lead mb-0">set-up with an ambition to dive deep into health related products and trendy electronics, and we sincerely hope our work will help you establish your business advantages and rollover your turnovers.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
@endsection
