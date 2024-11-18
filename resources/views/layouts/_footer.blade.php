    <footer class="bg-dark pt-5">
      <div class="container">
        <div class="row pb-2">
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Products</h3>
              <ul class="widget-list">
                @if(isset($category))
                        @foreach($category as $key=>$category_name)
                            <li class="widget-list-item">
                                <a class="widget-list-link" href="{{ asset('/category/'.$category_name->category_slug) }}">
                                    {{ $category_name->category_name }}
                                </a>
                            </li>
                        @endforeach
                @endif
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">About us</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="{{  route('about') }}">Company</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="{{ route('contact') }}">Contact</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="{{ route('blogs.index') }}">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Stay informed</h3>
                @if(session()->has('subscribe-response'))
                    {{ session('subscribe-response') }}
                @else
                <form action="{{ route('subscribe.store') }}" method="post">
                    @csrf
                  <div class="form-row flex-column flex-md-row">
                    <div class="col-12">
                      <input type="email" class="form-control mb-2 @error('email') is-invalid @enderror" placeholder="Email Address" name="email" required="">
                      @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror

                    </div>
                    <div class="col-auto">
                      <button type="submit" class="btn btn-primary btn-loading btn-block">
                        <span>Subscribe</span>
                      </button>
                    </div>
                  </div>
                </form>
                <small class="text-muted form-text">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</small>
            @endif
            <div class="mt-4">
                <div class="">
                <a class="social-btn sb-light sb-twitter ml-2" href="https://www.facebook.com/roy.xu.3572">
                    <img src="{{asset('/images/facebook.svg')}}" alt="">
                </a>
                <a class="social-btn sb-light sb-twitter ml-2" href="https://twitter.com/Royxu16">
                    <img src="{{asset('/images/twitter.svg')}}" alt="">
                </a>
                <a class="social-btn sb-light sb-twitter ml-2" href="https://www.pinterest.com/comlibra">
                    <img src="{{asset('/images/pinterest.svg')}}" alt="">
                </a>
              </div>
            </div>

          </div>

            </div>

          </div>
        </div>
      </div>

      <div class="container">
        <hr class="hr-light pb-4 mb-3">
        <div class="row pb-2">
            <div class="col-md-6 text-center text-md-left mb-4">
              <div class="text-nowrap mb-4">
                <div class="pb-4 font-size-sm text-light opacity-50 text-center text-md-left">© Copyright {{date('Y')}} Comlibra Electronic Co., LTD.
                </div>
              </div>
            </div>
          </div>
        </div>
    </footer>

{{-- back-to-top archor --}}
<a href="#" class="btn back-to-top btn-primary btn-round aos-init aos-animate" data-smooth-scroll="" data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="injected-svg icon" data-src="assets/img/icons/theme/navigation/arrow-up.svg">
        <title>Icon For Arrow-up</title>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
        <rect fill="#000000" x="11" y="5" width="2" height="14" rx="1"></rect>
        <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero"></path>
        </g>
    </svg>
</a>
{{-- end of back-to-top archor --}}
