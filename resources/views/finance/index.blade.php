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

<section>
    <div class="container">
        <div class="row justify-content-center text-center mb-6">
            <div class="col-xl-8 col-lg-9">
                <h2 class="display-4 mx-xl-6">
                    长久物流
                </h2>
                <p class="lead">
                    月线看位置, 周线看阴阳, 日线看K线, 小时看突破
                </p>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-xl-11">
                <ul class="nav justify-content-center" role="tablist">
                    <li class="nav-item mx-1">
                        <a class="nav-link active" href="#saas-tab-1" data-toggle="tab" role="tab" aria-controls="saas-tab-1" aria-selected="true">
                            <div class="icon-round icon-round-sm bg-primary">
                                <svg t="1654945907621" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="961" width="200" height="200"><path d="M960 1024H64a64 64 0 0 1-64-64V128a64 64 0 0 1 64-64h64v128a64 64 0 0 0 64 64h64a64 64 0 0 0 64-64V64h384v128a64 64 0 0 0 64 64h64a64 64 0 0 0 64-64V64h64a64 64 0 0 1 64 64v832a64 64 0 0 1-64 64zM896 320H128v640h768V320zM448 448l64 192 64-192h128l128 384h-128l-64-192-64 192H448l-64-192-64 192H192l128-384h128z m320-256V0h64v192h-64zM192 192V0h64v192H192z" p-id="962"></path></svg>
                            </div>
                            Month
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#saas-tab-2" data-toggle="tab" role="tab" aria-controls="saas-tab-2" aria-selected="false">
                            <div class="icon-round icon-round-sm bg-primary">
                            <svg t="1654946221451" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5156" width="200" height="200"><path d="M866.461538 137.846154h-98.461538V98.461538c0-31.507692-25.6-59.076923-59.076923-59.076923-31.507692 0-59.076923 25.6-59.076923 59.076923v39.384616H374.153846V98.461538c0-31.507692-25.6-59.076923-59.076923-59.076923-31.507692 0-59.076923 25.6-59.076923 59.076923v39.384616H157.538462c-43.323077 0-78.769231 35.446154-78.769231 78.769231v49.230769c0 15.753846 13.784615 29.538462 29.538461 29.538461h807.384616c15.753846 0 29.538462-13.784615 29.538461-29.538461V216.615385c0-43.323077-35.446154-78.769231-78.769231-78.769231z m49.23077 256h-807.384616c-15.753846 0-29.538462 13.784615-29.538461 29.538461V905.846154c0 43.323077 35.446154 78.769231 78.769231 78.769231h708.923076c43.323077 0 78.769231-35.446154 78.769231-78.769231V423.384615c0-15.753846-13.784615-29.538462-29.538461-29.538461z m-269.784616 187.076923l-124.061538 263.876923c-5.907692 13.784615-19.692308 21.661538-35.446154 21.661538-21.661538 0-37.415385-17.723077-37.415385-35.446153 0-3.938462 1.969231-9.846154 3.938462-15.753847L557.292308 590.769231h-149.661539c-17.723077 0-33.476923-11.815385-33.476923-29.538462 0-15.753846 15.753846-29.538462 33.476923-29.538461h204.8c19.692308 0 37.415385 15.753846 37.415385 35.446154 0 5.907692-1.969231 9.846154-3.938462 13.784615z" p-id="5157"></path></svg>
                            </div>
                            Week
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#saas-tab-3" data-toggle="tab" role="tab" aria-controls="saas-tab-3" aria-selected="false">
                            <div class="icon-round icon-round-sm bg-primary">
                            <svg t="1654946000320" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2606" width="200" height="200"><path d="M64 928c0 53 43 96 96 96h704c53 0 96-43 96-96V384H64v544z m128-384c0-17.6 14.4-32 32-32h192c17.6 0 32 14.4 32 32v192c0 17.6-14.4 32-32 32H224c-17.6 0-32-14.4-32-32v-192zM864 128h-96V32c0-17.6-14.4-32-32-32h-64c-17.6 0-32 14.4-32 32v96H384V32c0-17.6-14.4-32-32-32h-64c-17.6 0-32 14.4-32 32v96H160C107 128 64 171 64 224v96h896v-96c0-53-43-96-96-96z" p-id="2607"></path></svg>
                            </div>
                            Day
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#saas-tab-4" data-toggle="tab" role="tab" aria-controls="saas-tab-4" aria-selected="false">
                            <div class="icon-round icon-round-sm bg-primary">
                                <svg t="1654946063224" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3455" width="200" height="200"><path d="M856.746667 730.453333c-6.826667-3.413333-10.24-13.653333-6.826667-23.893333s13.653333-10.24 23.893333-6.826667l75.093334 40.96c34.133333-64.853333 54.613333-136.533333 58.026666-215.04H921.6c-10.24 0-17.066667-6.826667-17.066667-17.066666s6.826667-17.066667 17.066667-17.066667h85.333333c-3.413333-78.506667-23.893333-150.186667-58.026666-215.04l-75.093334 40.96c-3.413333 0-6.826667 3.413333-10.24 3.413333-6.826667 0-10.24-3.413333-13.653333-10.24-3.413333-6.826667-3.413333-17.066667 6.826667-23.893333l71.68-40.96c-40.96-64.853333-92.16-116.053333-157.013334-157.013333l-40.96 71.68c-3.413333 10.24-6.826667 13.653333-13.653333 13.653333-3.413333 0-6.826667 0-10.24-3.413333-6.826667-3.413333-10.24-13.653333-6.826667-23.893334l40.96-75.093333c-64.853333-34.133333-136.533333-54.613333-215.04-58.026667V102.4c0 10.24-6.826667 17.066667-17.066666 17.066667s-13.653333-6.826667-13.653334-17.066667V17.066667c-78.506667 3.413333-150.186667 23.893333-215.04 58.026666l40.96 75.093334c6.826667 6.826667 3.413333 17.066667-6.826666 20.48 0 3.413333-3.413333 3.413333-6.826667 3.413333-6.826667 0-10.24-3.413333-13.653333-6.826667L249.173333 92.16C187.733333 133.12 133.12 187.733333 92.16 249.173333l71.68 40.96c10.24 6.826667 13.653333 17.066667 6.826667 27.306667-3.413333 3.413333-6.826667 6.826667-13.653334 6.826667-3.413333 0-6.826667 0-10.24-3.413334L75.093333 279.893333c-34.133333 64.853333-54.613333 136.533333-58.026666 215.04H102.4c10.24 0 17.066667 6.826667 17.066667 17.066667s-6.826667 17.066667-17.066667 17.066667H17.066667c3.413333 78.506667 23.893333 150.186667 58.026666 215.04l75.093334-40.96c6.826667-3.413333 17.066667-3.413333 23.893333 6.826666 3.413333 6.826667 3.413333 17.066667-6.826667 23.893334l-71.68 40.96c40.96 64.853333 92.16 116.053333 157.013334 157.013333l40.96-71.68c3.413333-10.24 13.653333-13.653333 20.48-6.826667 6.826667 3.413333 10.24 13.653333 6.826666 23.893334l-40.96 75.093333c64.853333 34.133333 136.533333 54.613333 215.04 58.026667V921.6c0-10.24 6.826667-17.066667 17.066667-17.066667s17.066667 6.826667 17.066667 17.066667v85.333333c78.506667-3.413333 150.186667-23.893333 215.04-58.026666l-40.96-75.093334c-3.413333-6.826667-3.413333-17.066667 6.826666-23.893333 6.826667-3.413333 17.066667-3.413333 23.893334 6.826667l40.96 71.68c64.853333-40.96 116.053333-92.16 157.013333-157.013334l-75.093333-40.96z" fill="" p-id="3456"></path></svg>
                            </div>
                            Hour
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
                            <div 
                            class="popover-hotspot bg-primary-2" 
                            style="top: 20%; left: 85%;" 
                            data-toggle="popover" 
                            title="月线" 
                            data-content="上影线下一根收盘价应该是吞没">
                            </div>
                            <img src="{{ asset('images/compound/summary/cjwl_month.png') }}" alt="Image" class="rounded border shadow-lg">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="saas-tab-2" role="tabpanel" aria-labelledby="saas-tab-2">
                        <div class="popover-image">
                            <div class="popover-hotspot bg-primary-2" style="top: 35%; left: 79%;" data-toggle="popover" 
                            title="周线" 
                            data-content="多阳不吃一阴, 单位时间内触及的涨幅也不及预期"></div>
                            <img src="{{ asset('images/compound/summary/cjwl_week.png') }}" alt="Image" class="rounded border shadow-lg">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="saas-tab-3" role="tabpanel" aria-labelledby="saas-tab-3">
                        <div class="popover-image">
                            <div class="popover-hotspot bg-primary-2" style="top: 35%; left: 89.5%;" data-toggle="popover" 
                            title="日线" 
                            data-content="日线应该是涨停, 但是当日回撤较大, 次日亏损"></div>
                            <img src="{{ asset('images/compound/summary/cjwl_day.png') }}" alt="Image" class="rounded border shadow-lg">
                        </div>
                    </div>
                    <div class="tab-pane fade" 
                        id="saas-tab-4" role="tabpanel" 
                        aria-labelledby="saas-tab-4">
                        <div class="popover-image">
                            
                            <div class="popover-hotspot bg-primary-2" style="top: 23%; left: 82%;" data-toggle="popover" 
                            title="突破" 
                            data-content="该买点最终会造成亏损"></div>

                            <img src="{{ asset('images/compound/summary/cjwl_hour.png') }}" alt="Image" class="rounded border shadow-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
<div class="container">
        <div class="row justify-content-center text-center mb-6">
            <div class="col-xl-8 col-lg-9">
                <h2 class="display-4 mx-xl-6">
                    上海九百    
                </h2>
                <p class="lead">
                    月线看位置, 周线看阴阳, 日线看K线, 小时看突破
                </p>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-xl-11">
                <ul class="nav justify-content-center" role="tablist">
                    <li class="nav-item mx-1">
                        <a class="nav-link active" href="#shjb-month" data-toggle="tab" role="tab" aria-controls="shjb-month" aria-selected="true">
                            <div class="icon-round icon-round-sm bg-primary">
                                <svg t="1654945907621" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="961" width="200" height="200"><path d="M960 1024H64a64 64 0 0 1-64-64V128a64 64 0 0 1 64-64h64v128a64 64 0 0 0 64 64h64a64 64 0 0 0 64-64V64h384v128a64 64 0 0 0 64 64h64a64 64 0 0 0 64-64V64h64a64 64 0 0 1 64 64v832a64 64 0 0 1-64 64zM896 320H128v640h768V320zM448 448l64 192 64-192h128l128 384h-128l-64-192-64 192H448l-64-192-64 192H192l128-384h128z m320-256V0h64v192h-64zM192 192V0h64v192H192z" p-id="962"></path></svg>
                            </div>
                            Month
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#shjb-week" data-toggle="tab" role="tab" aria-controls="shjb-week" aria-selected="false">
                            <div class="icon-round icon-round-sm bg-primary">
                            <svg t="1654946221451" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5156" width="200" height="200"><path d="M866.461538 137.846154h-98.461538V98.461538c0-31.507692-25.6-59.076923-59.076923-59.076923-31.507692 0-59.076923 25.6-59.076923 59.076923v39.384616H374.153846V98.461538c0-31.507692-25.6-59.076923-59.076923-59.076923-31.507692 0-59.076923 25.6-59.076923 59.076923v39.384616H157.538462c-43.323077 0-78.769231 35.446154-78.769231 78.769231v49.230769c0 15.753846 13.784615 29.538462 29.538461 29.538461h807.384616c15.753846 0 29.538462-13.784615 29.538461-29.538461V216.615385c0-43.323077-35.446154-78.769231-78.769231-78.769231z m49.23077 256h-807.384616c-15.753846 0-29.538462 13.784615-29.538461 29.538461V905.846154c0 43.323077 35.446154 78.769231 78.769231 78.769231h708.923076c43.323077 0 78.769231-35.446154 78.769231-78.769231V423.384615c0-15.753846-13.784615-29.538462-29.538461-29.538461z m-269.784616 187.076923l-124.061538 263.876923c-5.907692 13.784615-19.692308 21.661538-35.446154 21.661538-21.661538 0-37.415385-17.723077-37.415385-35.446153 0-3.938462 1.969231-9.846154 3.938462-15.753847L557.292308 590.769231h-149.661539c-17.723077 0-33.476923-11.815385-33.476923-29.538462 0-15.753846 15.753846-29.538462 33.476923-29.538461h204.8c19.692308 0 37.415385 15.753846 37.415385 35.446154 0 5.907692-1.969231 9.846154-3.938462 13.784615z" p-id="5157"></path></svg>
                            </div>
                            Week
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#shjb-day" data-toggle="tab" role="tab" aria-controls="shjb-day" aria-selected="false">
                            <div class="icon-round icon-round-sm bg-primary">
                            <svg t="1654946000320" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2606" width="200" height="200"><path d="M64 928c0 53 43 96 96 96h704c53 0 96-43 96-96V384H64v544z m128-384c0-17.6 14.4-32 32-32h192c17.6 0 32 14.4 32 32v192c0 17.6-14.4 32-32 32H224c-17.6 0-32-14.4-32-32v-192zM864 128h-96V32c0-17.6-14.4-32-32-32h-64c-17.6 0-32 14.4-32 32v96H384V32c0-17.6-14.4-32-32-32h-64c-17.6 0-32 14.4-32 32v96H160C107 128 64 171 64 224v96h896v-96c0-53-43-96-96-96z" p-id="2607"></path></svg>
                            </div>
                            Day
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#shjb-hour" data-toggle="tab" role="tab" aria-controls="shjb-hour" aria-selected="false">
                            <div class="icon-round icon-round-sm bg-primary">
                                <svg t="1654946063224" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3455" width="200" height="200"><path d="M856.746667 730.453333c-6.826667-3.413333-10.24-13.653333-6.826667-23.893333s13.653333-10.24 23.893333-6.826667l75.093334 40.96c34.133333-64.853333 54.613333-136.533333 58.026666-215.04H921.6c-10.24 0-17.066667-6.826667-17.066667-17.066666s6.826667-17.066667 17.066667-17.066667h85.333333c-3.413333-78.506667-23.893333-150.186667-58.026666-215.04l-75.093334 40.96c-3.413333 0-6.826667 3.413333-10.24 3.413333-6.826667 0-10.24-3.413333-13.653333-10.24-3.413333-6.826667-3.413333-17.066667 6.826667-23.893333l71.68-40.96c-40.96-64.853333-92.16-116.053333-157.013334-157.013333l-40.96 71.68c-3.413333 10.24-6.826667 13.653333-13.653333 13.653333-3.413333 0-6.826667 0-10.24-3.413333-6.826667-3.413333-10.24-13.653333-6.826667-23.893334l40.96-75.093333c-64.853333-34.133333-136.533333-54.613333-215.04-58.026667V102.4c0 10.24-6.826667 17.066667-17.066666 17.066667s-13.653333-6.826667-13.653334-17.066667V17.066667c-78.506667 3.413333-150.186667 23.893333-215.04 58.026666l40.96 75.093334c6.826667 6.826667 3.413333 17.066667-6.826666 20.48 0 3.413333-3.413333 3.413333-6.826667 3.413333-6.826667 0-10.24-3.413333-13.653333-6.826667L249.173333 92.16C187.733333 133.12 133.12 187.733333 92.16 249.173333l71.68 40.96c10.24 6.826667 13.653333 17.066667 6.826667 27.306667-3.413333 3.413333-6.826667 6.826667-13.653334 6.826667-3.413333 0-6.826667 0-10.24-3.413334L75.093333 279.893333c-34.133333 64.853333-54.613333 136.533333-58.026666 215.04H102.4c10.24 0 17.066667 6.826667 17.066667 17.066667s-6.826667 17.066667-17.066667 17.066667H17.066667c3.413333 78.506667 23.893333 150.186667 58.026666 215.04l75.093334-40.96c6.826667-3.413333 17.066667-3.413333 23.893333 6.826666 3.413333 6.826667 3.413333 17.066667-6.826667 23.893334l-71.68 40.96c40.96 64.853333 92.16 116.053333 157.013334 157.013333l40.96-71.68c3.413333-10.24 13.653333-13.653333 20.48-6.826667 6.826667 3.413333 10.24 13.653333 6.826666 23.893334l-40.96 75.093333c64.853333 34.133333 136.533333 54.613333 215.04 58.026667V921.6c0-10.24 6.826667-17.066667 17.066667-17.066667s17.066667 6.826667 17.066667 17.066667v85.333333c78.506667-3.413333 150.186667-23.893333 215.04-58.026666l-40.96-75.093334c-3.413333-6.826667-3.413333-17.066667 6.826666-23.893333 6.826667-3.413333 17.066667-3.413333 23.893334 6.826667l40.96 71.68c64.853333-40.96 116.053333-92.16 157.013333-157.013334l-75.093333-40.96z" fill="" p-id="3456"></path></svg>
                            </div>
                            Hour
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-11 aos-init aos-animate" data-aos="fade-up">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="shjb-month" role="tabpanel" aria-labelledby="shjb-month">
                        <div class="popover-image">
                            <div 
                            class="popover-hotspot bg-primary-2" 
                            style="top: 35%; left: 88%;" 
                            data-toggle="popover" 
                            title="月线" 
                            data-content="上影线较长">
                            </div>
                            <img src="{{ asset('images/compound/summary/shjb_month.png') }}" alt="Image" class="rounded border shadow-lg">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="shjb-week" role="tabpanel" aria-labelledby="shjb-week">
                        <div class="popover-image">
                            <div class="popover-hotspot bg-primary-2" style="top: 30%; left: 92%;" data-toggle="popover" 
                            title="周线" 
                            data-content="周线看多"></div>
                            <img src="{{ asset('images/compound/summary/shjb_week.png') }}" alt="Image" class="rounded border shadow-lg">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="shjb-day" role="tabpanel" aria-labelledby="shjb-day">
                        <div class="popover-image">
                            <div class="popover-hotspot bg-primary-2" style="top: 20%; left: 91%;" data-toggle="popover" 
                            title="日线" 
                            data-content="日线看不到明显的转折位"></div>
                            <img src="{{ asset('images/compound/summary/shjb_day.png') }}" alt="Image" class="rounded border shadow-lg">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="shjb-hour" role="tabpanel" aria-labelledby="shjb-hour">
                        <div class="popover-image">
                            <div 
                                class="popover-hotspot bg-primary-2" 
                                style="top: 25%; left: 67%;" 
                                data-toggle="popover" 
                                title="小时" 
                                data-content="三顶点上涨, 应当卖出">
                            </div>
                            <div 
                                class="popover-hotspot bg-primary-2" 
                                style="top: 60%; left: 92%;" data-toggle="popover" 
                                title="小时线的下跌" 
                                data-content="小时线的反转一直未出现">
                            </div>
                            <img src="{{ asset('images/compound/summary/shjb_hour.png') }}" alt="Image" class="rounded border shadow-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
<div class="container">
        <div class="row justify-content-center text-center mb-6">
            <div class="col-xl-8 col-lg-9">
                <h2 class="display-4 mx-xl-6">
                    富邦股份    
                </h2>
                <p class="lead">
                    月线看位置, 周线看阴阳, 日线看K线, 小时看突破
                </p>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-xl-11">
                <ul class="nav justify-content-center" role="tablist">
                    <li class="nav-item mx-1">
                        <a class="nav-link active" href="#fbgf-month" data-toggle="tab" role="tab" aria-controls="fbgf-month" aria-selected="true">
                            <div class="icon-round icon-round-sm bg-primary">
                                <svg t="1654945907621" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="961" width="200" height="200"><path d="M960 1024H64a64 64 0 0 1-64-64V128a64 64 0 0 1 64-64h64v128a64 64 0 0 0 64 64h64a64 64 0 0 0 64-64V64h384v128a64 64 0 0 0 64 64h64a64 64 0 0 0 64-64V64h64a64 64 0 0 1 64 64v832a64 64 0 0 1-64 64zM896 320H128v640h768V320zM448 448l64 192 64-192h128l128 384h-128l-64-192-64 192H448l-64-192-64 192H192l128-384h128z m320-256V0h64v192h-64zM192 192V0h64v192H192z" p-id="962"></path></svg>
                            </div>
                            Month
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#fbgf-week" data-toggle="tab" role="tab" aria-controls="fbgf-week" aria-selected="false">
                            <div class="icon-round icon-round-sm bg-primary">
                            <svg t="1654946221451" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5156" width="200" height="200"><path d="M866.461538 137.846154h-98.461538V98.461538c0-31.507692-25.6-59.076923-59.076923-59.076923-31.507692 0-59.076923 25.6-59.076923 59.076923v39.384616H374.153846V98.461538c0-31.507692-25.6-59.076923-59.076923-59.076923-31.507692 0-59.076923 25.6-59.076923 59.076923v39.384616H157.538462c-43.323077 0-78.769231 35.446154-78.769231 78.769231v49.230769c0 15.753846 13.784615 29.538462 29.538461 29.538461h807.384616c15.753846 0 29.538462-13.784615 29.538461-29.538461V216.615385c0-43.323077-35.446154-78.769231-78.769231-78.769231z m49.23077 256h-807.384616c-15.753846 0-29.538462 13.784615-29.538461 29.538461V905.846154c0 43.323077 35.446154 78.769231 78.769231 78.769231h708.923076c43.323077 0 78.769231-35.446154 78.769231-78.769231V423.384615c0-15.753846-13.784615-29.538462-29.538461-29.538461z m-269.784616 187.076923l-124.061538 263.876923c-5.907692 13.784615-19.692308 21.661538-35.446154 21.661538-21.661538 0-37.415385-17.723077-37.415385-35.446153 0-3.938462 1.969231-9.846154 3.938462-15.753847L557.292308 590.769231h-149.661539c-17.723077 0-33.476923-11.815385-33.476923-29.538462 0-15.753846 15.753846-29.538462 33.476923-29.538461h204.8c19.692308 0 37.415385 15.753846 37.415385 35.446154 0 5.907692-1.969231 9.846154-3.938462 13.784615z" p-id="5157"></path></svg>
                            </div>
                            Week
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#fbgf-day" data-toggle="tab" role="tab" aria-controls="fbgf-day" aria-selected="false">
                            <div class="icon-round icon-round-sm bg-primary">
                            <svg t="1654946000320" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2606" width="200" height="200"><path d="M64 928c0 53 43 96 96 96h704c53 0 96-43 96-96V384H64v544z m128-384c0-17.6 14.4-32 32-32h192c17.6 0 32 14.4 32 32v192c0 17.6-14.4 32-32 32H224c-17.6 0-32-14.4-32-32v-192zM864 128h-96V32c0-17.6-14.4-32-32-32h-64c-17.6 0-32 14.4-32 32v96H384V32c0-17.6-14.4-32-32-32h-64c-17.6 0-32 14.4-32 32v96H160C107 128 64 171 64 224v96h896v-96c0-53-43-96-96-96z" p-id="2607"></path></svg>
                            </div>
                            Day
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#fbgf-hour" data-toggle="tab" role="tab" aria-controls="fbgf-hour" aria-selected="false">
                            <div class="icon-round icon-round-sm bg-primary">
                                <svg t="1654946063224" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3455" width="200" height="200"><path d="M856.746667 730.453333c-6.826667-3.413333-10.24-13.653333-6.826667-23.893333s13.653333-10.24 23.893333-6.826667l75.093334 40.96c34.133333-64.853333 54.613333-136.533333 58.026666-215.04H921.6c-10.24 0-17.066667-6.826667-17.066667-17.066666s6.826667-17.066667 17.066667-17.066667h85.333333c-3.413333-78.506667-23.893333-150.186667-58.026666-215.04l-75.093334 40.96c-3.413333 0-6.826667 3.413333-10.24 3.413333-6.826667 0-10.24-3.413333-13.653333-10.24-3.413333-6.826667-3.413333-17.066667 6.826667-23.893333l71.68-40.96c-40.96-64.853333-92.16-116.053333-157.013334-157.013333l-40.96 71.68c-3.413333 10.24-6.826667 13.653333-13.653333 13.653333-3.413333 0-6.826667 0-10.24-3.413333-6.826667-3.413333-10.24-13.653333-6.826667-23.893334l40.96-75.093333c-64.853333-34.133333-136.533333-54.613333-215.04-58.026667V102.4c0 10.24-6.826667 17.066667-17.066666 17.066667s-13.653333-6.826667-13.653334-17.066667V17.066667c-78.506667 3.413333-150.186667 23.893333-215.04 58.026666l40.96 75.093334c6.826667 6.826667 3.413333 17.066667-6.826666 20.48 0 3.413333-3.413333 3.413333-6.826667 3.413333-6.826667 0-10.24-3.413333-13.653333-6.826667L249.173333 92.16C187.733333 133.12 133.12 187.733333 92.16 249.173333l71.68 40.96c10.24 6.826667 13.653333 17.066667 6.826667 27.306667-3.413333 3.413333-6.826667 6.826667-13.653334 6.826667-3.413333 0-6.826667 0-10.24-3.413334L75.093333 279.893333c-34.133333 64.853333-54.613333 136.533333-58.026666 215.04H102.4c10.24 0 17.066667 6.826667 17.066667 17.066667s-6.826667 17.066667-17.066667 17.066667H17.066667c3.413333 78.506667 23.893333 150.186667 58.026666 215.04l75.093334-40.96c6.826667-3.413333 17.066667-3.413333 23.893333 6.826666 3.413333 6.826667 3.413333 17.066667-6.826667 23.893334l-71.68 40.96c40.96 64.853333 92.16 116.053333 157.013334 157.013333l40.96-71.68c3.413333-10.24 13.653333-13.653333 20.48-6.826667 6.826667 3.413333 10.24 13.653333 6.826666 23.893334l-40.96 75.093333c64.853333 34.133333 136.533333 54.613333 215.04 58.026667V921.6c0-10.24 6.826667-17.066667 17.066667-17.066667s17.066667 6.826667 17.066667 17.066667v85.333333c78.506667-3.413333 150.186667-23.893333 215.04-58.026666l-40.96-75.093334c-3.413333-6.826667-3.413333-17.066667 6.826666-23.893333 6.826667-3.413333 17.066667-3.413333 23.893334 6.826667l40.96 71.68c64.853333-40.96 116.053333-92.16 157.013333-157.013334l-75.093333-40.96z" fill="" p-id="3456"></path></svg>
                            </div>
                            Hour
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-11 aos-init aos-animate" data-aos="fade-up">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="fbgf-month" role="tabpanel" aria-labelledby="fbgf-month">
                        <div class="popover-image">
                            <div 
                            class="popover-hotspot bg-primary-2" 
                            style="top: 35%; left: 88%;" 
                            data-toggle="popover" 
                            title="月线" 
                            data-content="上影线较长">
                            </div>
                            <img src="{{ asset('images/compound/summary/fbgf_month.png') }}" alt="Image" class="rounded border shadow-lg">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="fbgf-week" role="tabpanel" aria-labelledby="fbgf-week">
                        <div class="popover-image">
                            <div class="popover-hotspot bg-primary-2" style="top: 30%; left: 92%;" data-toggle="popover" 
                            title="周线" 
                            data-content="周线看多"></div>
                            <img src="{{ asset('images/compound/summary/fbgf_week.png') }}" alt="Image" class="rounded border shadow-lg">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="fbgf-day" role="tabpanel" aria-labelledby="fbgf-day">
                        <div class="popover-image">
                            <div class="popover-hotspot bg-primary-2" style="top: 20%; left: 91%;" data-toggle="popover" 
                            title="日线" 
                            data-content="日线看不到明显的转折位"></div>
                            <img src="{{ asset('images/compound/summary/fbgf_day.png') }}" alt="Image" class="rounded border shadow-lg">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="fbgf-hour" role="tabpanel" aria-labelledby="fbgf-hour">
                        <div class="popover-image">
                            <div 
                                class="popover-hotspot bg-primary-2" 
                                style="top: 25%; left: 67%;" 
                                data-toggle="popover" 
                                title="小时" 
                                data-content="三顶点上涨, 应当卖出">
                            </div>
                            <div 
                                class="popover-hotspot bg-primary-2" 
                                style="top: 60%; left: 92%;" data-toggle="popover" 
                                title="小时线的下跌" 
                                data-content="小时线的反转一直未出现">
                            </div>
                            <img src="{{ asset('images/compound/summary/fbgf_hour.png') }}" alt="Image" class="rounded border shadow-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
