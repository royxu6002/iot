@extends('layouts.app')
@section('title', 'this is a page for favorite asked questions')
@section('content')
<section class="bg-primary-3 header-inner p-0 jarallax position-relative o-hidden" data-overlay="">
    <div class="container py-0 layer-2">
      <div class="row my-3 text-light">
        <div class="col">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Elements</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Accordions</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row my-4 my-md-6 text-light aos-init aos-animate" data-aos="fade-up">
        <div class="col-lg-9 col-xl-6">
          <h1 class="display-4">周期多形态观察</h1>
          <p class="lead mb-0">月线看位置, 周线看阴阳, 日线看K线, 小时看突破</p>
        </div>
      </div>
      <div class="alert alert-primary mb-5">
        <div class="d-flex">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="injected-svg icon bg-primary" data-src="assets/img/icons/theme/files/selected-file.svg">
  <title>Icon For Selected-file</title>
  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
      <path d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
      <path d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero"></path>
  </g>
</svg>
          <div class="ml-2 flex-grow-1">
            This page demonstrates Accordions functionality, 
          </div>
        </div>
      </div>
    </div>
    <div class="decoration right middle-y scale-4">
      <svg xmlns="http://www.w3.org/2000/svg" width="181" height="248" viewBox="0 0 181 248" fill="none" class="injected-svg bg-primary" data-src="assets/img/decorations/deco-blob-3.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<path d="M173.496 137.406C174.74 140.125 174.201 142.961 172.992 145.955C171.785 148.945 171.244 152.203 170.371 155.332C169.545 158.285 169.023 161.391 167.74 164.135C164.455 171.167 160.851 178.053 157.302 184.959C156.15 187.203 154.769 189.328 153.507 191.517C150.778 196.252 146.98 200.155 143.411 204.207C139.247 208.934 134.907 213.528 130.36 217.884C126.981 221.119 123.356 224.19 119.477 226.79C110.78 232.623 101.875 238.142 91.7499 241.311C88.3119 242.386 84.9839 243.811 81.5509 244.904C73.1449 247.579 64.4319 248.129 55.8069 247.077C43.0409 245.519 34.2129 238.431 30.1099 226.075C28.8639 222.324 28.1059 218.372 27.5139 214.454C26.8169 209.821 26.5859 205.12 26.0709 200.456C25.3349 193.802 24.3459 187.22 21.4659 181.048C18.4739 174.631 16.5169 167.857 15.4639 160.864C14.0029 151.18 11.2059 141.854 8.4269 132.5C6.2689 125.236 4.1689 117.936 3.2239 110.374C3.0229 108.764 2.7159 107.161 2.3649 105.576C1.5039 101.679 1.03089 97.749 1.08989 93.75C1.11089 92.31 1.1309 90.823 0.8169 89.433C-0.1261 85.264 0.427893 81.211 1.17589 77.083C2.60189 69.223 4.9509 61.659 7.8319 54.234C11.6759 44.329 17.4339 35.662 24.7729 28.024C27.4019 25.289 30.1459 22.662 32.7379 19.892C41.5149 10.511 52.7829 5.93202 64.9919 3.34302C76.9139 0.815015 89.0599 0.543025 101.144 1.31003C118.3 2.39903 134.746 6.51404 149.367 15.95C158.662 21.948 165.805 29.942 169.615 40.639C172.851 49.726 174.459 59.13 175.758 68.625C176.248 72.201 176.719 75.792 177.459 79.32C179.471 88.912 180.406 98.573 180.119 108.383C179.885 116.393 178.273 124.157 176.322 131.861C175.854 133.709 174.568 135.353 173.496 137.406ZM114.193 74.056C116.129 74.66 116.129 74.66 116.709 73.132C115.756 73.482 114.975 73.769 114.193 74.056Z" fill="black"></path>
</svg>
    </div>
  </section>
  <section class="bg-primary-3 text-light">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-xl-8 col-lg-9">
          <h2 class="h1">
            进攻的角度很重要
          </h2>
          <p class="lead">
            友好集团的日线进攻, 顶部V下来, 日线上涨出现拧麻花形态, 两头大, 中间小. 小时线是内三角形态.
          </p>
        </div>

        <div class="popover-image">
          <div class="popover-hotspot bg-primary-2" style="top: 38%; left: 74%;" data-toggle="popover" title="顶部V" data-content="V下来一般需要两天的反转, 形成相互渗透(开盘价低于昨天的收盘价, 收盘价高于昨日最高价)的3连或2连阳">
          </div>
          <div class="popover-hotspot bg-primary-2" style="top: 9%; left: 78.5%;" data-toggle="popover" title="上涨形态" data-content="3天形成拧麻花形态, 两头大, 中间小">
          </div>

          <img src="{{  asset('images/compound/wave/yhjt_day.png') }}" alt="Image" class="rounded border shadow-lg">
        </div>

      </div>    
    </div>
    
  </section>

  <section>
      <div class="container">
        <div class="row justify-content-center text-center mb-6">
          <div class="col-xl-8 col-lg-9">
            <h2 class="display-4 mx-xl-6">Build it from the ground up.</h2>
            <p class="lead">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
            </p>
          </div>
        </div>
        <div class="row justify-content-center mb-5">
          <div class="col-xl-11">
            <ul class="nav justify-content-center" role="tablist">
              <li class="nav-item mx-1">
                <a class="nav-link active" href="#saas-tab-1" data-toggle="tab" role="tab" aria-controls="saas-tab-1" aria-selected="true">
                  <div class="icon-round icon-round-sm bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="injected-svg icon bg-primary" data-src="assets/img/icons/theme/shopping/box-2.svg">
    <title>Icon For Box#2</title>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect opacity="0" x="0" y="0" width="24" height="24"></rect>
        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
    </g>
</svg>
                  </div>
                  Custom Dashboard
                </a>
              </li>
              <li class="nav-item mx-1">
                <a class="nav-link" href="#saas-tab-2" data-toggle="tab" role="tab" aria-controls="saas-tab-2" aria-selected="false">
                  <div class="icon-round icon-round-sm bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="injected-svg icon bg-primary" data-src="assets/img/icons/theme/shopping/chart-pie.svg">
    <title>Icon For Chart-pie</title>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect opacity="0" x="0" y="0" width="24" height="24"></rect>
        <path d="M4.00246329,12.2004927 L13,14 L13,4.06189375 C16.9463116,4.55399184 20,7.92038235 20,12 C20,16.418278 16.418278,20 12,20 C7.64874861,20 4.10886412,16.5261253 4.00246329,12.2004927 Z" fill="#000000" opacity="0.3"></path>
        <path d="M3.0603968,10.0120794 C3.54712466,6.05992157 6.91622084,3 11,3 L11,11.6 L3.0603968,10.0120794 Z" fill="#000000"></path>
    </g>
</svg>
                  </div>
                  Smart Analytics
                </a>
              </li>
              <li class="nav-item mx-1">
                <a class="nav-link" href="#saas-tab-3" data-toggle="tab" role="tab" aria-controls="saas-tab-3" aria-selected="false">
                  <div class="icon-round icon-round-sm bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="injected-svg icon bg-primary" data-src="assets/img/icons/theme/design/saturation.svg">
    <title>Icon For Saturation</title>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect opacity="0" x="0" y="0" width="24" height="24"></rect>
        <path d="M7,14 C7,16.7614237 9.23857625,19 12,19 C14.7614237,19 17,16.7614237 17,14 C17,12.3742163 15.3702913,9.86852817 12,6.69922982 C8.62970872,9.86852817 7,12.3742163 7,14 Z M12,21 C8.13400675,21 5,17.8659932 5,14 C5,11.4226712 7.33333333,8.08933783 12,4 C16.6666667,8.08933783 19,11.4226712 19,14 C19,17.8659932 15.8659932,21 12,21 Z" fill="#000000" fill-rule="nonzero"></path>
        <path d="M12,4 C16.6666667,8.08933783 19,11.4226712 19,14 C19,17.8659932 15.8659932,21 12,21 L12,4 Z" fill="#000000"></path>
    </g>
</svg>
                  </div>
                  Dark Mode
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-11 aos-init aos-animate" data-aos="fade-up">
            <div class="tab-content">
              <div class="tab-pane fade active show" id="saas-tab-1" role="tabpanel" aria-labelledby="saas-tab-1">
                <div class="popover-image">
                  <div class="popover-hotspot bg-primary-2" style="top: 25%; left: 10%;" data-toggle="popover" title="Hotspot title" data-content="And here's some amazing content. It's very engaging. Right?"></div>
                  <div class="popover-hotspot bg-primary-2" style="top: 10%; left: 90%;" data-toggle="popover" title="Hotspot title" data-content="And here's some amazing content. It's very engaging. Right?"></div>
                  <div class="popover-hotspot bg-primary-2" style="top: 90%; left: 20%;" data-toggle="popover" title="Hotspot title" data-content="And here's some more amazing content. It's very engaging. Right?"></div>
                  <img src="assets/img/saas-1.jpg" alt="Image" class="rounded border shadow-lg">
                </div>
              </div>
              <div class="tab-pane fade" id="saas-tab-2" role="tabpanel" aria-labelledby="saas-tab-2">
                <div class="popover-image">
                  <div class="popover-hotspot bg-primary-2" style="top: 25%; left: 90%;" data-toggle="popover" title="Hotspot title" data-content="And here's some amazing content. It's very engaging. Right?"></div>
                  <div class="popover-hotspot bg-primary-2" style="top: 90%; left: 10%;" data-toggle="popover" title="Hotspot title" data-content="And here's some amazing content. It's very engaging. Right?"></div>
                  <div class="popover-hotspot bg-primary-2" style="top: 30%; left: 60%;" data-toggle="popover" title="Hotspot title" data-content="And here's some more amazing content. It's very engaging. Right?"></div>
                  <img src="assets/img/saas-2.jpg" alt="Image" class="rounded border shadow-lg">
                </div>
              </div>
              <div class="tab-pane fade" id="saas-tab-3" role="tabpanel" aria-labelledby="saas-tab-3">
                <div class="popover-image">
                  <div class="popover-hotspot bg-primary-2" style="top: 2%; left: 2%;" data-toggle="popover" title="Hotspot title" data-content="And here's some amazing content. It's very engaging. Right?"></div>
                  <div class="popover-hotspot bg-primary-2" style="top: 35%; left: 95%;" data-toggle="popover" title="Hotspot title" data-content="And here's some amazing content. It's very engaging. Right?"></div>
                  <div class="popover-hotspot bg-primary-2" style="top: 90%; left: 50%;" data-toggle="popover" title="Hotspot title" data-content="And here's some more amazing content. It's very engaging. Right?"></div>
                  <img src="assets/img/saas-3.jpg" alt="Image" class="rounded border shadow-lg">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('scripts')
<script src="{{  asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- <script src="{{ asset('js/jquery.js') }}"></script> -->

<script>
    $(function () { 
	$("[data-toggle='popover']").popover();   
});
</script>
@endsection