@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 mt-5 order-2 order-lg-1"><img class="img-fluid mx-auto d-block" src="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/official-themes/review-process.svg" alt=""></div>
            <div class="col-lg-5 order-1 order-lg-2">
              <h1 class="mb-2 text-bold w-75">Every theme gets reviewed by us.</h1>
              <p class="fs-16 text-gray-soft">The Boostrap team reviews every new theme and update against a set of guidelines we wrote. These cover tons of factors including design, component flexibility, class naming, directory structure, build tooling, plugin reusability…the list goes on and on.</p>
            </div>
        </div>

        <div class="row align-items-center justify-content-between mt-5 my-lg-5 pt-5">
            <div class="col-lg-5 mb-3 mb-lg-5">
              <h1 class="mb-2 text-bold w-75">Build tools and full documention.</h1>
              <p class="fs-16 text-gray-soft">Components, plugins, and build tools are all thoroughly documented with live examples and markup for easier use and customization—just like Bootstrap itself. Not comfortable diving that deep? No worries, you just use the compiled CSS and examples pages!</p>
              <a class="btn btn-brand" href="https://bootstrap-themes.github.io/dashboard/docs/">Explore the Dashboard docs</a>
            </div>
            <div class="col-lg-6 mb-4 mt-4"><img class="img-fluid mx-auto d-block" src="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/official-themes/terminal.jpg" alt=""></div>
        </div>


        <div class="row align-items-center justify-content-between mb-5 pt-5 mb-lg-3 text-center">
            <div class="col-sm-4 px-sm-4 pb-5">
              <img src="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/official-themes/components-icon.svg">
              <h5 class="my-2 text-bold">Components and examples</h5>
              <p class="text-gray-soft">Each theme features new components built to match Bootstrap's level of quality and re-usability.</p>
            </div>
            <div class="col-sm-4 px-sm-4 pb-5">
            <img src="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/official-themes/sliders-icon.svg">
              <h5 class="my-2 text-bold">Tons of variables</h5>
              <p class="text-gray-soft">Themes inherit their style from custom variables, like Bootstrap, so basic customization is easy.</p>
            </div>
            <div class="col-sm-4 px-sm-4 pb-5">
            <img src="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/official-themes/wrenches-icon.svg">
              <h5 class="my-2 text-bold">Source files</h5>
              <p class="text-gray-soft">Each theme includes all the source and compiled files, making deep customization possible.</p>
            </div>
        </div>

    </div>
@endsection
