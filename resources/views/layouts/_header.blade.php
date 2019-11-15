<nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <a href="{{ route('root') }}" class="navbar-brand ml-3">
                <img src="http://iot.test/images/logo.svg" width="80">
            </a>

            <div class="d-flex">
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#globalNavbar" aria-controls="globalNavbar" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="navbar-collapse collapse justify-content-end" id="globalNavbar">
              <form method="post" class="form-inline form-navbar my-2 my-lg-0 mx-3" action="{{ route('products.search') }}">
                @csrf
                <input class="form-control @error('s') invalid-feedback @enderror" name="s" type="text" placeholder="Search" style="border-radius: 150px; padding-right: 30px" required>
                <button type="submit" style="background: rgba(0,0,0,0);border: none;cursor: pointer; margin: 0;padding: 0; width: 20px; margin-left:-30px; opacity: 0.5;display: inline-block">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-fw">
                            <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" class=""></path>
                        </svg>
                        <span class="sr-only">Search!</span>
                    </button>
              </form>

              <ul class="navbar-nav mr-3 order-1">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Products
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @if(isset($category))
                        @foreach($category as $key=>$category_name)
                            <a class="dropdown-item" href="{{ url('/category/'.$category_name->category_slug) }}">{{ $category_name->category_name }}</a>
                        @endforeach
                    @endif
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{  route('about') }}">About</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{ route('blogs.index') }}">Blog</a>
                </li>

            </ul>

            <ul class="navbar-nav d-none d-lg-flex ml-2 order-3">
                @if(Auth::guard('api')->check())
                    <li class="nav-item dropdown">
                      <a class="nav-link nav-link--user dropdown-toggle" id="userProfile" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <div class="nav-link--user__initials">
                                <img src="{{ asset('images/user.svg') }}" style="width: 20px">
                            </div>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userProfile">
                        <a class="dropdown-item" href="https://themes.getbootstrap.com/my-account/edit-account/">Account
                        </a>
                        <div class="dropdown-divider">

                        </div>
                        <a href="" class="dropdown-item">
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <input type="submit" value="Logout" class="btn btn-primary btn-md">
                            </form>
                        </a>
                      </div>
                    </li>
                @else
                  <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Sign in</a></li>
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
