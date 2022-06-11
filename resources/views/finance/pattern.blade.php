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
                            <a href="{{ route('finance.index') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('finance.pattern') }}">
                                Pattern
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('finance.breakthrough') }}">
                                Breakthrough
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
      <div class="row my-4 my-md-6 text-light aos-init aos-animate" data-aos="fade-up">
        <div class="col-lg-9 col-xl-6">
          <h1 class="display-4">
            在小时线中, 存在二种节奏的股票:
          </h1>
          <p class="lead mb-0">
            a.单K调整
            b.形态调整
          </p>
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
            一波日线的下跌如果是 V 下来的,
            <div>
              超过2-3天, 或者幅度超过了上升的50%, 基本直接 V 上去反转可能性不大,
              如果调整了2-3天, 还在一根大阳线范围内活动, 那么 V 上去的可能性很大,
              单K的调整一般不会超过两天, 否则趋势的节奏就被破坏了, 这时候的节奏往往是 b.形态调整
            </div>
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

  <section class="has-divider bg-primary-alt">
    <div class="container">
      <div>
        <h3 class="display-6">

        </h3>
        <p class="lead mb-0">

        </p>
      </div>
      <div class="row justify-content-center text-center mb-4">
        <div class="col-xl-8 col-lg-9">
          <h2 class="h3">形态调整: 在价格行为走势中必须找到驱动和调整</h2>
          <p class="lead">
            调整的 K 线走势一般是不连贯的,
          </p>
        </div>
      </div>
      <div class="row justify-content-between align-items-center o-hidden pt-3">
        <div class="col-md-6 col-lg-5">
          <div class="d-flex mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="NaN">
            <div class="process-circle bg-primary">

            </div>

            <div class="ml-3">
              <h5>1. 毛刺</h5>
              <p>
                收盘价距离最高点最低点很远, 即有明显的影线
              </p>
            </div>
          </div>
          <div class="d-flex mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="NaN">
            <div class="process-circle bg-primary"></div>
            <div class="ml-3">
              <h5>2.假突破</h5>
              <p>
                收盘价未有效突破一个横盘区域, 故入场往往要等小时线完成或再等待一根K线
              </p>
            </div>
          </div>
          <div class="d-flex mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="NaN">
            <div class="process-circle bg-primary"></div>
            <div class="ml-3">
              <h5>3.情绪化</h5>
              <p>
                K线两根振幅相差巨大, 即 K 线实体大小不均匀,没有持续性
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 aos-init aos-animate" data-aos="fade-left">
          <div class="popover-image">
            <div class="popover-hotspot bg-primary-2" style="top: 38%; left: 64%;" data-toggle="popover" title="4型走势" data-content="4波流突破前高">
            </div>
            <img src="../images/compound/wave/zlzn.png" alt="Image" class="rounded border shadow-lg">
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="divider">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="96px"
        viewBox="0 0 100 100" version="1.1" preserveAspectRatio="none" class="injected-svg"
        data-src="assets/img/dividers/divider-2.svg">
        <path d="M0,0 C16.6666667,66 33.3333333,99 50,99 C66.6666667,99 83.3333333,66 100,0 L100,100 L0,100 L0,0 Z">
        </path>
      </svg>
    </div> -->

  </section>

  <section>
    <div class="container">
      <div class="row justify-content-center text-center mb-6">
        <div class="col-xl-8 col-lg-9">
          <h1 class="h3 mx-xl-6">
            如何判断调整的结束
          </h1>
          <p class="lead">
            调整未破下跌趋势线, 这时候会出现以时间来换空间<br>
            在调整的<strong>小时线</strong>中找到最近的结点, 如果节点很远, 往往用3, 4波流来接近节点, 买点是最起码的一波流破颈线来买入, 后面还有机会介入.
            实际价格走势中, 调整结束时, 启动进攻会有很多各种走势, 即所谓的价格下跌的转势形态:
          </p>


          <div class="card card-sm card-body shadow-sm">
            <div data-target="#panel-0" class="accordion-panel-title collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
              <span class="h6 mb-0"> 0型走势</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg icon" data-src="assets/img/icons/interface/plus.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M19 11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11Z" fill="#212529"></path>
                <path d="M13 19L13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5L11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19Z" fill="#212529"></path>
              </svg>
            </div>
            <div class="collapse" id="panel-0" style="">
              <div class="pt-3">
                <p class="mb-0">
                  小时线不断创新高, 不停留, 直接涨停过前高
                </p>
              </div>
            </div>
          </div>

          <div class="card card-sm card-body shadow-3d">
            <div data-target="#panel-1" class="accordion-panel-title collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
              <span class="h6 mb-0"> 1波流走势</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg icon" data-src="assets/img/icons/interface/plus.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M19 11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11Z" fill="#212529"></path>
                <path d="M13 19L13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5L11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19Z" fill="#212529"></path>
              </svg>
            </div>

            <div class="collapse" id="panel-1" style="">
              <div class="pt-3">
                <p class="mb-0">
                  买点是破颈线(前面高点)来买入, 出现该走势是因为吃节点的走势很强, 最强走势为当次吃节点, 这时候等回调后往往走势很强 
                </p>
              </div>
            </div>
          </div>

          <div class="card card-sm card-body shadow-sm">
            <div data-target="#panel-2" class="accordion-panel-title collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
              <span class="h6 mb-0"> N型走势</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg icon" data-src="assets/img/icons/interface/plus.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M19 11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11Z" fill="#212529"></path>
                <path d="M13 19L13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5L11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19Z" fill="#212529"></path>
              </svg>
            </div>
            <div class="collapse" id="panel-2" style="">
              <div class="pt-3">
                <p class="mb-0">
                  N型走势, 破最近一个低点的底, 此时回调是很凶猛的, 常给人以下跌要开始的错觉. 
                  N型走势如果不破附近的前低点, 一般也是很接近的. 如果是破了前低, 可能演变成宽幅震荡
                </p>
              </div>
            </div>
          </div>

          <div class="card card-sm card-body shadow-sm">
            <div data-target="#panel-2-shrink" class="accordion-panel-title collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
              <span class="h6 mb-0"> 内三角走势</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg icon" data-src="assets/img/icons/interface/plus.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M19 11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11Z" fill="#212529"></path>
                <path d="M13 19L13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5L11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19Z" fill="#212529"></path>
              </svg>
            </div>
            <div class="collapse" id="panel-2-shrink" style="">
              <div class="pt-3">
                <p class="mb-0">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                  totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                  sunt explicabo.
                </p>
              </div>
            </div>
          </div>

          <div class="card card-sm card-body shadow-sm">
            <div data-target="#panel-2-expand" class="accordion-panel-title collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
              <span class="h6 mb-0"> 宽三角走势,</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg icon" data-src="assets/img/icons/interface/plus.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M19 11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11Z" fill="#212529"></path>
                <path d="M13 19L13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5L11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19Z" fill="#212529"></path>
              </svg>
            </div>
            <div class="collapse" id="panel-2-expand" style="">
              <div class="pt-3">
                <p class="mb-0">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                  totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                  sunt explicabo.
                </p>
              </div>
            </div>
          </div>

          <div class="card card-sm card-body shadow-sm">
            <div data-target="#panel-2-zigzag" class="accordion-panel-title collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
              <span class="h6 mb-0"> 旗形走势,</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg icon" data-src="assets/img/icons/interface/plus.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M19 11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11Z" fill="#212529"></path>
                <path d="M13 19L13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5L11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19Z" fill="#212529"></path>
              </svg>
            </div>
            <div class="collapse" id="panel-2-zigzag" style="">
              <div class="pt-3">
                <p class="mb-0">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                  totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                  sunt explicabo.
                </p>
              </div>
            </div>
          </div>

          <div class="card card-sm card-body shadow-sm">
            <div data-target="#panel-3-4-daos" class="accordion-panel-title collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
              <span class="h6 mb-0">3波流, 4波流走势</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg icon" data-src="assets/img/icons/interface/plus.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M19 11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11Z" fill="#212529"></path>
                <path d="M13 19L13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5L11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19Z" fill="#212529"></path>
              </svg>
            </div>
            <div class="collapse" id="panel-3-4-daos" style="">
              <div class="pt-3">
                <p class="mb-0">
                  一波涨势中出现3-4个顶分型, 且符合道氏理论的原则. 该形态形成的原因是离最近的节点很远, 自创造节点来不断上升. 说明市场是比较弱势的.
                </p>
              </div>
            </div>
          </div>

          <div class="card card-sm card-body shadow-sm">
            <div data-target="#panel-4-abc" class="accordion-panel-title collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
              <span class="h6 mb-0">ABC走势</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg icon" data-src="assets/img/icons/interface/plus.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M19 11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11Z" fill="#212529"></path>
                <path d="M13 19L13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5L11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19Z" fill="#212529"></path>
              </svg>
            </div>
            <div class="collapse" id="panel-4-abc" style="">
              <div class="pt-3">
                <p class="mb-0">
                  上升ABC走势如果叠加四波流会形成6波驱动
                </p>
              </div>
            </div>
          </div>
          

        </div>
      </div>

      <div class="row justify-content-center mb-5">
        <div class="col-xl-11">
          <ul class="nav justify-content-center" role="tablist">

            <li class="nav-item mx-1">
              <a class="nav-link" href="#saas-tab-0" data-toggle="tab" role="tab" aria-controls="saas-tab-0" aria-selected="false">
                <div class="icon-round icon-round-sm bg-primary">
                  <svg t="1653719795010" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5713" width="200" height="200"><path d="M502.944 145.056a32 32 0 0 1 29.12 5.248l3.04 2.688 271.552 271.52a32 32 0 0 1-42.24 47.904l-3.04-2.656L544 252.352 544 832a32 32 0 0 1-64 0V253.248l-216.576 216.576a32 32 0 0 1-45.248-45.248l271.52-271.552c2.88-2.88 6.176-5.088 9.696-6.624l3.552-1.344z" p-id="5714"></path></svg>
                </div>
                0 型
              </a>
            </li>

            <li class="nav-item mx-1">
              <a class="nav-link active" href="#saas-tab-1" data-toggle="tab" role="tab" aria-controls="saas-tab-1" aria-selected="true">
                <div class="icon-round icon-round-sm bg-primary">
                  <svg t="1653719936426" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="7281" width="200" height="200"><path d="M760.896 256a32 32 0 0 1 32 32v448a32 32 0 0 1-64 0V365.216L278.656 815.52a32 32 0 1 1-45.28-45.248L683.616 320H312.896a32 32 0 1 1 0-64h448z" fill="#000000" p-id="7282"></path></svg>
                </div>
                1型
              </a>
            </li>

            <li class="nav-item mx-1">
              <a class="nav-link" href="#saas-tab-2" data-toggle="tab" role="tab" aria-controls="saas-tab-2" aria-selected="false">
                <div class="icon-round icon-round-sm bg-primary">
                  <svg t="1653719289788" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1266" width="200" height="200"><path d="M42.666667 810.666667c-12.8 0-21.333333-4.266667-29.866667-12.8-17.066667-17.066667-17.066667-42.666667 0-59.733334l320-320c17.066667-17.066667 42.666667-17.066667 59.733333 0l183.466667 183.466667 375.466667-375.466667c17.066667-17.066667 42.666667-17.066667 59.733333 0s17.066667 42.666667 0 59.733334l-405.333333 405.333333c-17.066667 17.066667-42.666667 17.066667-59.733334 0l-183.466666-183.466667-290.133334 290.133334c-8.533333 8.533333-17.066667 12.8-29.866666 12.8z" p-id="1267"></path><path d="M981.333333 554.666667c-25.6 0-42.666667-17.066667-42.666666-42.666667V298.666667h-213.333334c-25.6 0-42.666667-17.066667-42.666666-42.666667s17.066667-42.666667 42.666666-42.666667h256c25.6 0 42.666667 17.066667 42.666667 42.666667v256c0 25.6-17.066667 42.666667-42.666667 42.666667z" p-id="1268"></path></svg>
                </div>
                N型
              </a>
            </li>

            <li class="nav-item mx-1">
              <a class="nav-link" href="#saas-tab-2-shrink" data-toggle="tab" role="tab" aria-controls="saas-tab-2-shrink" aria-selected="false">
                <div class="icon-round icon-round-sm bg-primary">
                  <svg t="1653718876807" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1398" width="200" height="200"><path d="M275.692308 897.575385V127.606154c0-35.84 36.312615-62.424615 72.152615-41.511385 28.750769 16.817231 603.175385 355.249231 652.209231 384.196923a48.285538 48.285538 0 0 1 0 83.416616c-35.288615 21.228308-611.918769 361.432615-653.666462 385.063384C315.785846 956.140308 275.692308 936.999385 275.692308 897.575385" p-id="1399"></path></svg>
                </div>
                内三角型
              </a>
            </li>

            <li class="nav-item mx-1">
              <a class="nav-link" href="#saas-tab-2-expand" data-toggle="tab" role="tab" aria-controls="saas-tab-2-expand" aria-selected="false">
                <div class="icon-round icon-round-sm bg-primary">
                  <svg t="1653718845347" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1262" width="200" height="200"><path d="M123.766 508.941l775.679 511.82 0-1016.782z" p-id="1263"></path></svg>
                </div>
                扩三角型
              </a>
            </li>

            <li class="nav-item mx-1">
              <a class="nav-link" href="#saas-tab-2-zigzag" data-toggle="tab" role="tab" aria-controls="saas-tab-2-zigzag" aria-selected="false">
                <div class="icon-round icon-round-sm bg-primary">
                  <svg t="1653718170341" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="850" width="200" height="200"><path d="M98.645333 384L42.666667 448.426667l161.024 139.946666 64.384 55.978667 55.978666-64.426667 65.706667-75.52 96.597333 83.968 64.426667 55.978667 55.936-64.426667 65.621333-75.477333 96.554667 83.925333 64.426667 55.978667 55.936-64.426667 84.010666-96.597333-64.426666-55.978667-83.968 96.597334L663.850667 384l-55.978667 64.426667h0.085333l-65.621333 75.52L381.312 384l-37.674667 43.349333-83.968 96.597334L98.645333 384z" fill="#000000" p-id="851"></path></svg>

                </div>
                旗型
              </a>
            </li>

            <li class="nav-item mx-1">
              <a class="nav-link" href="#saas-tab-4" data-toggle="tab" role="tab" aria-controls="saas-tab-4" aria-selected="false">
                <div class="icon-round icon-round-sm bg-primary">
                  <svg version="1.1" id="图层_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 1049.39" fill="#000000" xml:space="preserve" class="icon">
               <g>
                 <g>
                   <g>
                     <g>
                       <g>
                         <g>
                           <g>
                             <g>
                               <path d="M1282.3,262.35l78.4,78.41l-166.4,166.4l-135.98-135.99l-204.1,205.51l-90.41-90.42L512.9,738.89l46.11,48.15
                                 l204.8-204.8l89.33,89.33l2.4-2.54c0.85-0.29,1.66-0.76,2.34-1.44l200.44-200.44l135.99,135.99l214.39-214.4l78.4,78.41
                                 v-204.8L1282.3,262.35L1282.3,262.35z"></path>
                             </g>
                           </g>
                         </g>
                       </g>
                     </g>
                   </g>
                 </g>
               </g>
               </svg>
                </div>
                3-4型
              </a>
            </li>

            <li class="nav-item mx-1">
              <a class="nav-link" href="#saas-tab-4-abc" data-toggle="tab" role="tab" aria-controls="saas-tab-4" aria-selected="false">
                <div class="icon-round icon-round-sm bg-primary">
                  <svg t="1653728859909" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1227" width="200" height="200"><path d="M718.933333 731.733333l61.44-61.44-208.213333-208.213333-140.373333 140.373333a42.496 42.496 0 0 1-60.16 0l-256-256.426666A42.496 42.496 0 1 1 175.786667 285.866667L401.493333 512l140.373334-140.373333a42.496 42.496 0 0 1 60.16 0l238.506666 238.08 61.44-61.44a21.333333 21.333333 0 0 1 36.266667 14.933333v183.04c0 11.946667-9.386667 21.333333-21.333333 21.333333H733.866667c-18.773333 0.426667-28.16-22.613333-14.933334-35.84z" p-id="1228"></path></svg>
                </div>
                平台型
              </a>
            </li>

          </ul>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-11 aos-init aos-animate" data-aos="fade-up">
          <div class="tab-content">

            <div class="tab-pane fade" id="saas-tab-0" role="tabpanel" aria-labelledby="saas-tab-0">
              <div class="popover-image">
                <div class="popover-hotspot bg-primary-2" style="top: 2%; left: 58%;" data-toggle="popover" title="0型走势" data-content="这一波上涨是没有回撤的">
                </div>
                <img src="../images/compound/0/stfz.png" alt="Image" class="rounded border shadow-lg">
              </div>
            </div>

            <div class="tab-pane fade active show" id="saas-tab-1" role="tabpanel" aria-labelledby="saas-tab-1">
              <div class="popover-image">
                <div class="popover-hotspot bg-primary-2" style="top: 58%; left: 26%;" data-toggle="popover" title="1型" data-content="小时线上涨吃掉日线的节点, 很强的启动,但是回调也比较长">
                </div>

                <img src="../images/compound/1/dbgf.png" alt="Image" class="rounded border shadow-lg">
              </div>
            </div>

            <div class="tab-pane fade" id="saas-tab-2" role="tabpanel" aria-labelledby="saas-tab-2">
              <div class="popover-image">
                <div class="popover-hotspot bg-primary-2" style="top: 46%; left: 57.5%;" data-toggle="popover" title="N型" data-content="走势破了前低">
                </div>
                <img src="../images/compound/n/zlgf.png" alt="Image" class="rounded border shadow-lg">
              </div>
            </div>

            <div class="tab-pane fade" id="saas-tab-2-shrink" role="tabpanel" aria-labelledby="saas-tab-2-shrink">
              <div class="popover-image">
                <div class="popover-hotspot bg-primary-2" style="top: 40%; left: 81%;" data-toggle="popover" title="小时线" data-content="内三角调整, 大一级别日线是N型">
                </div>
                <img src="../images/compound/shrink/ztkc_hour.png" alt="Image" class="rounded border shadow-lg">
              </div>
            </div>

            <div class="tab-pane fade" id="saas-tab-2-expand" role="tabpanel" aria-labelledby="saas-tab-2-expand">
              <div class="popover-image">
                <div class="popover-hotspot bg-primary-2" style="top: 36%; left: 50.5%;" data-toggle="popover" title="日线" data-content="N型驱动">
                </div>
                <div class="popover-hotspot bg-primary-2" style="top: 60%; left: 78%;" data-toggle="popover" title="日线" data-content="扩三角调整">
                </div>
                <img src="../images/compound/expand/dqhk.png" alt="Image" class="rounded border shadow-lg">
              </div>
            </div>

            <div class="tab-pane fade" id="saas-tab-2-zigzag" role="tabpanel" aria-labelledby="saas-tab-2-zigzag">
              <div class="popover-image">
                <div class="popover-hotspot bg-primary-2" style="top: 48%; left: 74%;" data-toggle="popover" title="日线驱动" data-content="N型走势">
                </div>
                <div class="popover-hotspot bg-primary-2" style="top: 57%; left: 89%;" data-toggle="popover" title="调整" data-content="ZigZag下跌">
                </div>
                <img src="../images/compound/zigzag/szrj.png" alt="Image" class="rounded border shadow-lg">
              </div>
            </div>

            <div class="tab-pane fade" id="saas-tab-4" role="tabpanel" aria-labelledby="saas-tab-4">
              <div class="popover-image">
                <div class="popover-hotspot bg-primary-2" style="top: 38%; left: 64%;" data-toggle="popover" title="4型走势" data-content="4波流突破前高">
                </div>
                <img src="../images/compound/4/zjdc.png" alt="Image" class="rounded border shadow-lg">
              </div>
            </div>

            <div class="tab-pane fade" id="saas-tab-4-abc" role="tabpanel" aria-labelledby="saas-tab-4-abc">
              <div class="popover-image">
                <div class="popover-hotspot bg-primary-2" style="top: 38%; left: 48%;" data-toggle="popover" title="驱势" data-content="四波流的驱动">
                </div>

                <div class="popover-hotspot bg-primary-2" style="top: 39%; left: 75%;" data-toggle="popover" title="ABC走势" data-content="不断用形态来累计突破前高">
                </div>

                <img src="../images/compound/abc/nfzy.png" alt="Image" class="rounded border shadow-lg">
              </div>
            </div>

            


            

          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="bg-primary-3 text-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-4">
        <div class="col-xl-8 col-lg-9">
          <h2 class="h3">
            价格走势是不断演化的
          </h2>
          <p class="lead">
            已经判断的调整也有可能会出错, 这时候需要结合日线的整体趋势, 甚至周线, 月线的走势, 提前构想某一种走势的可能. 
          </p>
        </div>

        <div class="popover-image">
          <div class="popover-hotspot bg-primary-2" style="top: 44%; left: 63%;" data-toggle="popover" title="突破内三角?" data-content="这里是个符合买点的形态">
          </div>
          <div class="popover-hotspot bg-primary-2" style="top: 39%; left: 86%;" data-toggle="popover" title="再一次突破三角" data-content="这里的上涨是有力度的">
          </div>

          <img src="../images/compound/wave/dyny.png" alt="Image" class="rounded border shadow-lg">
        </div>

      </div>

      <div class="row justify-content-center text-center mb-4">
        <div class="col-xl-8 col-lg-9">
          <p class="lead">
            从内三角形态调整预判, 走势逐渐不符合, 最后成为了 ABC 的调整
          </p>
        </div>

        <div class="popover-image">
          <div class="popover-hotspot bg-primary-2" style="top: 33%; left: 66%;" data-toggle="popover" title="内三角形态?" data-content="等待买点">
          </div>
          <div class="popover-hotspot bg-primary-2" style="top: 25%; left: 76%;" data-toggle="popover" title="突破三角?" data-content="这里的上涨是假突破">
          </div>

          <div class="popover-hotspot bg-primary-2" style="top: 32%; left: 81.5%;" data-toggle="popover" title="调整的最后一笔" data-content="这里的最终调整形态为ABC">
          </div>

          <img src="../images/compound/wave/stkd_hour.png" alt="Image" class="rounded border shadow-lg">
        </div>

      </div>


    
    </div>
  </section>

@endsection