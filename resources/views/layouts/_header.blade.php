<nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <a href="{{ route('root') }}" class="navbar-brand ml-3">
                <img src="{{asset('images/logo.svg')}}" width="98">
            </a>

            <div class="d-flex">
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#globalNavbar" aria-controls="globalNavbar" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            {{-- diversify category 手动写类别--}}
            <div class="navbar-collapse collapse justify-content-around" id="globalNavbar">
                <ul class="navbar-nav mega-nav pr-lg-2 mr-lg-2">
                    <li class="nav-item dropdown show">

                        <a class="nav-link dropdown-toggle pl-0" href="#" data-toggle="dropdown" aria-expanded="true">
                            <svg t="1607589544053" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3690" width="300" height="300"><path d="M489.557333 736.554667a202.112 202.112 0 1 1-202.112-202.112h202.112v202.112z m44.885334 0a202.112 202.112 0 1 0 202.112-202.112h-202.112v202.112zM489.557333 287.445333a202.112 202.112 0 1 0-202.112 202.112h202.112V287.445333z m44.885334 0a202.112 202.112 0 1 1 202.112 202.112h-202.112V287.445333z" fill="#666666" p-id="3691"></path></svg>
                            Products
                        </a>
                            <ul class="dropdown-menu show">
                                <li class="dropdown mega-dropdown">
                                    <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">
                                        Weighing Scale
                                    </a>
                                      <div class="dropdown-menu p-0">
                                        {{-- column-left --}}
                                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                                          <div class="mega-dropdown-column py-4 px-3">
                                            <div class="widget widget-links">
                                              <h6 class="font-size-base mb-3">Household Scale</h6>
                                              <ul class="widget-list">
                                                <li class="widget-list-item pb-1">
                                                    <a class="widget-list-link" href="{{ asset('/category/'.'app-bathroom-scale') }}">App Bathroom Scale</a>
                                                </li>
                                                <li class="widget-list-item pb-1">
                                                    <a class="widget-list-link" href="{{ asset('/category/'.'bathroom-scale') }}">Bathroom Scale</a>
                                                </li>
                                                <li class="widget-list-item pb-1">
                                                    <a class="widget-list-link" href="{{ asset('/category/'.'kitchen-scale') }}">Kitchen Scale</a>
                                                </li>
                                                <li class="widget-list-item pb-1">
                                                    <a class="widget-list-link" href="{{ asset('/category/'.'luggage-scale') }}">Luggage Scale</a>
                                                </li>
                                                <li class="widget-list-item pb-1">
                                                    <a class="widget-list-link" href="{{ asset('/category/'.'pocket-scale') }}">Pocket Scale</a>
                                                </li>
                                              </ul>
                                            </div>
                                          </div>
                                        {{-- column-middle --}}
                                          <div class="mega-dropdown-column py-4 px-3">
                                            <div class="widget widget-links">
                                              <h6 class="font-size-base mb-3">Accessories</h6>
                                              <ul class="widget-list">
                                                <li class="widget-list-item pb-1">
                                                    <a class="widget-list-link" href="{{asset('/category/load-cell')}}">Load Cell</a>
                                                </li>
                                                <li class="widget-list-item pb-1">
                                                    <a class="widget-list-link" href="{{asset('category/battery-for-scale')}}">Battery</a>
                                                </li>
                                                <li class="widget-list-item pb-1">
                                                    <a class="widget-list-link" href="{{asset('category/other-accessories')}}">Others</a>
                                                </li>
                                              </ul>
                                            </div>
                                            <div class="widget widget-links mt-3">

                                            <h6 class="font-size-base">Price & Weight Scale</h6>
                                                <ul class="widget-list">
                                                <li class="widget-list-item pb-1">
                                                    <a class="widget-list-link" href="{{ asset('/category/tabletop-price-scale') }}">Tabletop Price Scale
                                                    </a>
                                                </li>
                                                <li class="widget-list-item pb-1">
                                                    <a class="widget-list-link" href="{{ asset('/category/platform-scale') }}">Platform Scale
                                                    </a>
                                                </li>
                                                <li class="widget-list-item pb-1">
                                                    <a class="widget-list-link" href="{{ asset('/category/floor-scale') }}">Floor Scale
                                                    </a>
                                                </li>

                                                </ul>
                                            </div>
                                          </div>
                                        {{-- column-right, recommend products --}}
                                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center">
                                            <a class="d-block mb-2" href="#">
                                            <img src="{{asset('images/2f866274299a1f94edb58e29a9c6380d.png')}}">
                                            </a>
                                            <div class="font-size-sm mb-3">Connected Bathroom Scale
                                            </div>
                                            <a class="btn btn-primary btn-shadow btn-sm" href="{{asset('products/eb8104-connected-bathroom-scale')}}">View
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                            </ul>
                    </li>
                </ul>


              <form method="post" class="form-inline form-navbar my-2 my-lg-0 mx-3" action="{{ route('products.search') }}">
                @csrf
                <input class="form-control @error('s') invalid-feedback @enderror prepended-form-control" name="s" type="text" placeholder="Search" style="border-radius: 150px; padding-right: 30px" required>
                <button type="submit" style="background: rgba(0,0,0,0);border: none;cursor: pointer; margin: 0;padding: 0; width: 20px; margin-left:-30px; opacity: 0.5;display: inline-block">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-fw">
                            <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" class=""></path>
                        </svg>
                        <span class="sr-only">Search!</span>
                    </button>
              </form>

            <ul class="navbar-nav d-none d-lg-flex ml-2 order-3">
                @if(Auth::check())
                    <li class="nav-item dropdown">
                      <a class="nav-link nav-link--user dropdown-toggle" id="userProfile" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <div class="nav-link--user__initials">
                                <img src="{{ asset('images/user.svg') }}" style="width: 20px">
                            </div>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userProfile">
                        {{-- <a class="dropdown-item" href="https://themes.getbootstrap.com/my-account/edit-account/">Account
                        </a> --}}
                        {{-- <div class="dropdown-divider"> --}}

                        {{-- </div> --}}
                        <a href="" class="dropdown-item">
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <input type="submit" value="Logout" class="btn btn-primary btn-md">
                            </form>
                        </a>
                      </div>
                    </li>
                @else
                  <li class="nav-item"><a class="nav-link" href="{{route('login')}}">
                    <svg t="1607590804668" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4490" width="200" height="200"><path d="M756.142 927.584c-27.89 0-54.283-5.309-79.186-15.938-24.903-10.625-46.652-25.233-65.244-43.826-18.59-18.594-33.198-40.339-43.825-65.241-10.624-24.903-15.938-51.294-15.938-79.19 0-27.89 5.315-54.283 15.938-79.185 10.627-24.902 25.237-46.488 43.825-64.744 18.592-18.263 40.341-32.707 65.244-43.331 24.902-10.627 51.295-15.939 79.186-15.939 27.892 0 54.286 5.312 79.188 15.939 24.903 10.624 46.483 25.067 64.745 43.331 18.262 18.259 32.704 39.845 43.33 64.744 10.624 24.902 15.94 51.294 15.94 79.185 0 27.893-5.317 54.287-15.94 79.19s-25.067 46.646-43.33 65.241c-18.263 18.595-39.843 33.203-64.745 43.826-24.901 10.628-51.295 15.938-79.188 15.938z m100.604-237.062h-73.709v-68.728c0-9.3-2.984-17.266-8.963-23.909-5.977-6.639-13.613-9.96-22.912-9.96-9.294 0-16.6 3.321-21.91 9.96-5.311 6.644-7.97 14.609-7.97 23.909v68.728h-64.745c-9.294 0-17.262 3.316-23.903 9.962-6.641 6.638-9.961 14.61-9.961 23.903 0 9.294 3.32 16.27 9.961 20.92 6.642 4.648 14.609 6.968 23.903 6.968h64.745v70.722c0 9.3 2.659 17.266 7.97 23.906 5.31 6.644 12.616 9.96 21.91 9.96 9.299 0 16.934-3.317 22.913-9.96 5.978-6.641 8.963-14.606 8.963-23.906v-70.722h73.709v1.995c9.298 0 17.265-2.655 23.904-7.966 6.644-5.316 9.961-12.622 9.961-21.916 0-9.293-3.317-17.266-9.961-23.903-6.638-6.646-14.606-9.963-23.904-9.963zM610.72 442.502c-2.657 10.623-5.317 20.252-7.972 28.885-2.655 7.305-5.978 14.775-9.96 22.41-3.985 7.636-8.299 13.448-12.947 17.431-5.978 4.648-10.127 9.63-12.452 14.942a137.486 137.486 0 0 0-5.978 16.432 514.32 514.32 0 0 1-5.475 17.431c-1.996 5.978-5.317 11.955-9.96 17.929-15.278 19.92-26.733 39.18-34.369 57.773-7.636 18.593-12.947 36.522-15.938 53.79-2.987 17.264-3.818 34.367-2.493 51.294 1.329 16.936 3.984 33.371 7.971 49.307 2.656 11.95 6.64 24.402 11.95 37.353 5.316 12.946 13.118 26.23 23.407 39.844 10.293 13.613 23.408 26.89 39.349 39.843 15.935 12.947 35.854 25.397 59.764 37.353-15.939 3.317-34.533 6.308-55.781 8.964-17.932 1.996-40.009 3.817-66.236 5.475-26.231 1.667-56.282 2.493-90.146 2.493-17.267 0-37.353-0.662-60.262-1.99a2953.947 2953.947 0 0 1-70.721-4.98 2393.943 2393.943 0 0 1-71.718-6.974c-23.569-2.656-45.155-5.478-64.745-8.467-19.587-2.986-36.191-6.143-49.804-9.463-13.609-3.319-22.077-6.308-25.399-8.963-5.977-5.317-10.622-20.092-13.943-44.329-3.322-24.232-2.325-55.944 2.987-95.123 3.321-21.914 12.119-38.679 26.395-50.304 14.278-11.619 31.043-20.747 50.304-27.391 19.254-6.64 39.343-12.783 60.261-18.428 20.918-5.642 39.347-13.443 55.285-23.403 12.617-7.969 22.246-15.442 28.884-22.413 6.638-6.974 11.287-14.111 13.943-21.417 2.656-7.3 3.985-14.942 3.985-22.908 0-7.967-0.331-16.601-0.996-25.9-1.33-13.943-6.139-24.902-14.442-32.868-8.302-7.971-17.1-15.939-26.395-23.905-5.317-3.987-9.961-9.959-13.948-17.931-3.984-7.966-7.301-15.603-9.961-22.907-3.317-8.634-5.974-18.263-7.967-28.885a45.896 45.896 0 0 1-12.946-5.978c-3.322-2.655-6.975-6.644-10.959-11.956-3.983-5.31-7.636-13.278-10.958-23.905-3.322-9.961-4.483-19.255-3.486-27.887 0.995-8.634 2.825-15.938 5.481-21.917 2.656-7.305 6.308-13.614 10.954-18.923 0-22.577 1.332-45.155 3.989-67.736 2.656-19.254 6.803-39.844 12.452-61.752 5.642-21.916 14.775-41.506 27.392-58.767 11.95-16.604 24.736-30.218 38.345-40.839 13.613-10.627 27.726-18.924 42.334-24.902 14.608-5.978 29.218-10.126 43.828-12.452 14.606-2.322 28.554-3.485 41.835-3.485 17.264 0 33.863 1.995 49.802 5.978 15.938 3.982 30.712 9.294 44.326 15.938 13.616 6.638 25.733 14.11 36.356 22.411 10.627 8.298 19.259 16.764 25.899 25.397 15.272 19.256 26.394 40.508 33.371 63.747 6.969 23.243 12.114 45.155 15.436 65.741 3.322 23.905 4.65 47.809 3.985 71.721 3.984 3.317 7.306 7.3 9.96 11.949 2.654 3.983 4.649 9.3 5.978 15.938 1.329 6.638 1.329 14.942 0 24.902-1.329 12.617-3.985 22.578-7.966 29.883-3.988 7.306-8.302 12.946-12.952 16.936-5.317 4.644-10.962 7.966-16.936 9.961z" p-id="4491"></path></svg>
                  </a></li>
{{--                   <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Sign up</a></li> --}}
                @endif

            </ul>

            <ul class="navbar-nav d-lg-none">
              <li class="nav-item-divider"></li>
              <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Sign in</a></li>
              {{-- <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Sign up</a></li> --}}
            </ul>

          </div>
    </div>
</nav>
