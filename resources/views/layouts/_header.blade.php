<nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <a href="#" class="navbar-brand">IOTSCALES BRAND</a>

            <div class="d-flex ml-auto">
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#globalNavbar" aria-controls="globalNavbar" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="navbar-collapse collapse" id="globalNavbar" style="">

              <form class="form-inline form-navbar my-2 my-lg-0 order-2" action="">
                <input class="form-control" name="s" type="text" placeholder="Search">
              </form>

              <ul class="navbar-nav mr-auto order-1">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
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
                  <a class="nav-link" href="">Why buy from us?</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="">Coopearation</a>
                </li>

            </ul>

            <ul class="navbar-nav d-none d-lg-flex ml-2 order-3">
              <li class="nav-item"><a class="nav-link" href="">Sign in</a></li>
              <li class="nav-item"><a class="nav-link" href="">Sign up</a></li>
            </ul>

            <ul class="navbar-nav d-lg-none">
              <li class="nav-item-divider"></li>
              <li class="nav-item"><a class="nav-link" href="">Sign in</a></li>
              <li class="nav-item"><a class="nav-link" href="">Sign up</a></li>
            </ul>

          </div>
    </div>
</nav>
