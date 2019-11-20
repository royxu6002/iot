@extends('layouts.app')
@section('title', 'Contact us')

@section('content')
<section class="bg-primary-alt header-inner o-hidden">
      <div class="container layer-2 position-relative">
        <div class="row py-6 text-center justify-content-center align-items-center">
          <div class="col-xl-8 col-lg-10">
            <h1 class="display-4">Get In Touch</h1>
            <p class="lead mb-0">Thanks, a member of our team will be in touch shortly.<p>
          </div>
        </div>
      </div>
      <div class="divider layer-1">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="96px" viewBox="0 0 100 100" version="1.1" preserveAspectRatio="none" class="injected-svg" data-src="assets/img/dividers/divider-2.svg">
    <path d="M0,0 C16.6666667,66 33.3333333,99 50,99 C66.6666667,99 83.3333333,66 100,0 L100,100 L0,100 L0,0 Z"></path>
</svg>
      </div>
      <div class="decoration bottom left scale-3 d-none d-md-block" data-jarallax-element="100" style="z-index: 0; transform: translate3d(0px, -103.584px, 0px);">
        <svg xmlns="http://www.w3.org/2000/svg" width="122" height="159" viewBox="0 0 122 159" fill="none" class="injected-svg bg-primary" data-src="assets/img/decorations/deco-blob-8.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<path d="M43.3108 158.858C40.6218 158.483 36.6428 158.086 32.7288 157.341C28.0118 156.445 23.4148 155.108 19.0668 152.959C13.3088 150.112 8.31079 146.303 4.40679 141.229C1.07479 136.896 -0.380207 131.883 0.168793 126.365C0.270793 125.334 0.340783 124.288 0.285783 123.256C-0.0442177 116.983 0.760791 110.818 1.89479 104.67C2.70679 100.272 3.49979 95.862 4.07279 91.428C4.44979 88.507 4.4598 85.534 4.5568 82.582C4.6658 79.229 4.61579 75.872 4.77379 72.522C4.90479 69.731 5.29379 66.952 5.46479 64.162C5.76579 59.223 6.00778 54.28 6.23578 49.337C6.36878 46.465 6.29779 43.579 6.54479 40.719C7.07379 34.544 9.1428 28.896 12.6698 23.781C14.2108 21.548 15.6228 19.227 17.1598 16.992C18.8648 14.51 21.0678 12.511 23.7648 11.197C30.0168 8.15502 36.1088 4.77203 42.6608 2.36703C44.1038 1.83703 45.5008 1.46702 47.0728 1.48202C48.7348 1.50002 50.4318 1.28303 52.0588 0.923029C55.2108 0.226028 58.0978 1.07101 60.9238 2.23501C68.2928 5.27001 74.5858 9.82801 79.8258 15.839C80.9798 17.163 82.2148 18.418 83.3938 19.721C86.5828 23.239 89.0248 27.236 91.2488 31.423C96.8208 41.91 99.6038 53.347 102.804 64.644C105.115 72.806 107.562 80.9 111.333 88.547C114.78 95.535 117.247 102.858 118.53 110.582C118.96 113.166 120.063 115.631 120.661 118.195C121.202 120.518 121.557 122.894 121.825 125.265C121.938 126.265 121.669 127.325 121.479 128.339C120.834 131.806 118.846 134.257 115.741 135.874C110.286 138.716 104.977 141.846 99.1958 144.04C97.4068 144.719 95.6798 145.578 93.9658 146.436C89.2058 148.816 84.1218 150.163 78.9738 151.382C75.4778 152.21 72.0718 153.404 68.5888 154.305C63.9498 155.505 59.3098 156.744 54.6098 157.651C51.3318 158.284 47.9488 158.387 43.3108 158.858Z" fill="black"></path>
</svg>
      <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;"><div style="position: fixed;"></div></div></div>
      <div class="decoration middle-y left scale-2 blend-mode-multiply d-none d-md-block" data-jarallax-element="200" style="z-index: 0; transform: translate3d(0px, -142.454px, 0px);">
        <svg xmlns="http://www.w3.org/2000/svg" width="183" height="169" viewBox="0 0 183 169" fill="none" class="injected-svg bg-primary-2" data-src="assets/img/decorations/deco-ring-3.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<path d="M0.541185 59.96C0.541185 57.603 0.621179 55.242 0.525179 52.889C0.304179 47.457 0.990188 42.098 1.86919 36.774C2.96319 30.139 6.05518 24.357 10.0192 19.003C13.1442 14.785 16.7922 11.028 21.0932 8.09097C26.8292 4.17397 33.1592 1.34798 40.2222 1.13498C44.6152 1.00198 49.0272 1.62397 53.4332 1.86297C60.4172 2.24297 67.1772 4.00798 74.0332 5.16998C79.0492 6.01998 83.9862 5.67398 88.9722 4.95898C99.7552 3.41198 110.542 1.87497 121.359 0.590969C126.925 -0.0700307 132.529 0.498974 138.103 1.10898C145.382 1.90498 152.341 3.95696 159.156 6.47796C161.888 7.48896 164.482 8.98796 166.961 10.546C168.969 11.81 170.543 13.666 171.234 16.023C172.779 21.293 174.379 26.553 175.703 31.88C177.527 39.214 179.162 46.596 180.787 53.978C181.459 57.035 182.199 60.125 182.385 63.231C182.881 71.558 183.307 79.915 181.108 88.116C179.903 92.602 177.965 96.675 175.321 100.568C172.438 104.809 169.604 109.029 165.8 112.483C160.347 117.433 154.792 122.27 148.273 125.82C146.554 126.756 144.755 127.545 142.996 128.405C135.328 132.155 127.726 136.049 119.976 139.617C112.04 143.271 103.925 146.528 95.9552 150.107C89.7772 152.88 83.7252 155.933 77.5742 158.769C67.7892 163.28 57.6172 166.328 46.8262 167.413C40.8342 168.016 34.8922 168.443 28.9672 167.305C23.5962 166.273 19.2442 163.624 15.6942 159.26C10.2272 152.54 7.75618 144.656 5.90518 136.484C3.86018 127.461 3.08318 118.281 2.83118 109.037C2.67918 103.453 2.17318 97.88 1.82918 92.302C1.78618 91.616 1.73118 90.928 1.74718 90.242C1.86418 84.829 1.20618 79.475 0.739183 74.096C0.333183 69.417 0.655184 64.677 0.655184 59.963C0.615184 59.96 0.578185 59.96 0.541185 59.96ZM4.51018 98.377C4.32218 98.39 4.13318 98.403 3.94618 98.417C4.19218 102.328 4.42819 106.24 4.68819 110.15C4.87019 112.889 5.16819 115.623 5.27019 118.365C5.61419 127.759 7.58118 136.831 10.4952 145.732C11.9172 150.076 14.2372 153.948 16.8822 157.605C18.6052 159.988 20.8042 161.903 23.4542 163.388C27.9312 165.9 32.8522 166.373 37.7022 166.373C42.6732 166.373 47.6652 165.548 52.6062 164.814C61.6202 163.475 70.0422 160.185 78.2802 156.443C82.7412 154.417 87.0122 151.972 91.4832 149.974C98.4692 146.851 105.628 144.108 112.577 140.907C120.681 137.173 128.634 133.109 136.659 129.205C140.276 127.446 144.054 125.966 147.509 123.936C154.734 119.692 161.259 114.473 166.935 108.303C170.187 104.771 173.257 101.01 174.103 96.008C174.201 95.437 174.374 94.82 174.703 94.359C175.193 93.667 175.742 92.791 176.461 92.529C178.109 91.927 178.545 90.653 179.023 89.214C180.185 85.718 180.414 82.075 180.578 78.467C180.805 73.475 180.928 68.449 180.619 63.468C180.176 56.3 177.974 49.42 176.51 42.421C175.787 38.965 174.842 35.555 173.959 32.134C172.908 28.054 171.77 23.995 170.754 19.905C169.654 15.465 166.795 12.628 162.856 10.557C159.618 8.85597 156.272 7.55796 152.731 6.66296C149.784 5.91896 146.942 4.69797 143.967 4.14697C136.34 2.73597 128.68 1.68797 120.863 2.70297C112.988 3.72497 105.041 4.23697 97.1972 5.44497C90.5112 6.47397 83.8532 7.60496 77.0932 8.01196C76.7102 8.03396 76.3102 8.02798 75.9392 7.94098C73.5582 7.38098 71.1892 6.77495 68.8062 6.22195C59.9842 4.17895 50.9972 3.53496 41.9862 3.28296C38.9682 3.19796 35.9312 3.38995 32.9612 4.32995C21.5392 7.94395 13.4572 15.613 7.82619 25.782C2.89219 34.693 1.94119 44.588 2.62319 54.654C2.72819 56.209 2.65818 57.775 2.64418 59.336C2.60518 63.749 2.30618 68.176 2.55818 72.571C3.04718 81.184 3.84218 89.776 4.51018 98.377Z" fill="black"></path>
</svg>
      <div id="jarallax-container-1" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;"><div style="position: fixed;"></div></div></div>
      <div class="decoration middle-y scale-2 right blend-mode-multiply d-none d-xl-block" data-jarallax-element="50 50" style="z-index: 0; transform: translate3d(-24.2744px, -24.2744px, 0px);">
        <svg xmlns="http://www.w3.org/2000/svg" width="114" height="64" viewBox="0 0 114 64" fill="none" class="injected-svg bg-primary-3" data-src="assets/img/decorations/deco-dots-6.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<path d="M73.32 8.86801C73.459 7.62901 72.664 7.25601 71.906 6.76901C70.867 6.10101 70.59 5.277 71.031 4.345C71.222 3.945 71.58 3.52399 71.969 3.33499C73.746 2.47299 76.209 3.20301 77.276 4.85901C77.698 5.51701 77.764 6.25802 77.266 6.87702C76.352 8.01402 75.258 8.90001 73.32 8.86801Z" fill="black"></path>
<path d="M33.5251 51.6231C32.8901 51.3521 32.2261 51.1311 31.6251 50.7981C30.5961 50.2291 29.8591 49.4331 29.9791 48.1321C30.0831 46.9981 31.0281 46.0351 32.3131 45.7621C32.5471 45.7121 32.7801 45.6531 33.0181 45.6251C34.1571 45.4901 34.8851 45.9071 35.2481 46.9691C35.5371 47.8111 35.6291 48.6821 35.3671 49.5591C35.1191 50.3861 34.8261 50.7141 33.5251 51.6231Z" fill="black"></path>
<path d="M3.47102 38.293C3.28302 38.205 2.79302 38.133 2.59002 37.854C1.75002 36.698 0.916028 35.502 0.709028 34.047C0.582028 33.168 1.12103 32.389 1.85003 32.159C2.72303 31.885 3.61003 31.74 4.24803 32.605C4.86303 33.436 5.44502 34.295 5.98002 35.179C6.42302 35.909 6.49802 36.75 5.98002 37.446C5.43202 38.186 4.63102 38.556 3.47102 38.293Z" fill="black"></path>
<path d="M67.549 22.483C67.445 22.721 67.2249 23.225 67.0039 23.7311C66.5509 24.7751 64.135 25.134 63.51 24.034C63.164 23.424 62.795 22.809 62.571 22.15C62.307 21.368 62.7659 20.481 63.5589 20.271C64.3169 20.071 65.121 19.966 65.907 19.967C67.271 19.969 67.865 20.8 67.549 22.483Z" fill="black"></path>
<path d="M113.014 61.366C112.778 62.277 112.307 62.954 111.313 63.154C110.467 63.323 109.659 63.007 109.295 62.258C108.984 61.621 108.719 60.96 108.49 60.29C108.24 59.564 108.351 58.879 108.888 58.29C109.443 57.681 110.148 57.632 110.87 57.811C112.268 58.155 113.34 59.966 113.014 61.366Z" fill="black"></path>
<path d="M77.145 37.633C77.024 37.16 77.006 36.559 76.731 36.115C76.016 34.961 76.557 34.14 77.311 33.351C77.944 32.688 78.721 32.651 79.52 32.996C80.547 33.439 81.223 34.154 81.262 35.35C81.305 36.698 80.594 37.668 79.283 37.959C78.568 38.118 77.859 38.126 77.145 37.633ZM79.16 34.699C79.01 34.366 78.969 34.112 78.818 33.978C78.531 33.719 78.056 33.958 77.957 34.434C77.918 34.622 78.053 34.848 78.107 35.057C78.438 34.945 78.768 34.833 79.16 34.699Z" fill="black"></path>
<path d="M20.1408 2.24493C19.9418 3.29493 19.8318 4.24094 19.5608 5.13894C19.4088 5.63894 19.0378 6.10193 18.6738 6.49993C18.2758 6.93693 17.7188 7.04993 17.1448 6.84093C16.5428 6.62293 16.3168 6.10692 16.2898 5.53292C16.2688 5.06392 16.3778 4.58994 16.4228 4.11794C16.4678 3.64594 16.5828 3.16294 16.5228 2.70394C16.4528 2.16194 16.1598 1.58792 16.8118 1.25292C17.4618 0.918921 18.1768 0.801922 18.8448 1.22292C19.2418 1.47292 19.5878 1.80293 20.1408 2.24493Z" fill="black"></path>
<path d="M23.2341 25.618C24.1191 26.151 24.435 26.944 24.58 27.828C24.73 28.752 24.307 29.665 23.58 30.052C22.793 30.472 22.0041 30.371 21.3551 29.843C20.8821 29.458 20.466 28.929 20.201 28.379C19.627 27.184 20.1251 26.191 21.4371 25.85C22.0351 25.693 22.6721 25.686 23.2341 25.618Z" fill="black"></path>
<path d="M53.8851 37.898C53.8231 38.16 53.7891 38.316 53.7461 38.469C53.3441 39.94 52.426 40.185 51.365 39.093C51.033 38.751 50.7011 38.396 50.4451 37.997C49.6231 36.716 50.181 35.248 51.636 34.79C52.845 34.41 53.9041 35.085 53.9821 36.337C54.0181 36.89 53.9161 37.449 53.8851 37.898Z" fill="black"></path>
<path d="M96.3362 23.504C96.6952 24.849 96.9922 25.958 97.3112 27.15C96.9012 27.557 96.5022 28.055 96.0062 28.419C95.2012 29.007 94.0222 28.583 93.6902 27.628C93.3722 26.714 93.1762 25.818 93.8382 24.92C94.4672 24.064 95.0642 23.255 96.3362 23.504Z" fill="black"></path>
<path d="M107.16 42.976C106.738 42.19 106.299 41.369 105.873 40.572C106.926 38.66 107.978 38.166 109.469 38.85C110.057 39.12 110.299 39.577 110.153 40.205C109.954 41.068 109.678 41.916 108.983 42.514C108.492 42.935 107.914 43.205 107.16 42.976Z" fill="black"></path>
<path d="M45.7482 13.598C45.4982 14.83 43.6893 15.898 42.5393 15.523C42.3933 15.475 42.2343 15.396 42.1313 15.286C41.5783 14.695 41.5333 12.985 42.0393 12.364C42.7253 11.522 44.2422 11.273 45.0762 11.93C45.6042 12.346 45.8182 12.954 45.7482 13.598Z" fill="black"></path>
<path d="M62.6021 60.476C60.2951 60.503 60.295 60.503 60.123 59.02C60.377 58.64 60.6561 58.923 60.9351 58.978C61.4471 59.076 61.8301 58.914 62.1091 58.435C62.6521 57.508 62.67 57.518 63.929 57.089C64.077 57.409 64.3251 57.734 64.3701 58.084C64.4811 58.947 64.5461 59.822 64.5461 60.692C64.5461 61.367 64.2671 61.915 63.3231 62.044C63.0881 61.533 62.8401 60.995 62.6021 60.476Z" fill="black"></path>
<path d="M84.02 54.013C84.163 54.756 83.719 55.267 83.211 55.602C82.498 56.072 81.695 56.422 80.899 56.745C80.362 56.963 79.821 56.411 79.895 55.8C80.032 54.663 80.752 53.941 81.704 53.484C82.557 53.073 83.383 53.232 84.02 54.013Z" fill="black"></path>
</svg>
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
              <p class="lead">Please specify your needs so that our professional team could work with.
              </p>
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
                    <input name="email" type="email" placeholder="you@yoursite.com" class="form-control @error('email') is-invalid @enderror" required>
                    @error('email')
                        <div class="invalid-feedback">
                         {{ $message }}
                        </div>
                    @enderror
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
              <a href="mailto:info@comlibra.com">info@comlibra.com</a>
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
