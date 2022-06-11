@extends('layouts.app')
@section('title', 'this is a page for favorite asked questions')
@section('content')
<section class="bg-primary-3 text-light">
    <div class="container">
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

          <img src="../images/compound/wave/yhjt_day.png" alt="Image" class="rounded border shadow-lg">
        </div>

      </div>    
    </div>
    
  </section>

  <section class="bg-primary-3 text-light">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-xl-8 col-lg-9">
          <h2 class="h1">
            大趋势决定小趋势
          </h2>
          <p class="lead">
            小的走势再完美, 在大周期的关键位置会回调. 要看是否有足够的上升空间, 是否有明显的阻力位, 否则形态再完美是没意义的.
          </p>
        </div>

        <div class="popover-image">
          <div class="popover-hotspot bg-primary-2" style="top: 53%; left: 13%;" data-toggle="popover" title="月线" data-content="有明显阻力位">
          </div>
          <div class="popover-hotspot bg-primary-2" style="top: 47%; left: 43%;" data-toggle="popover" title="周线" data-content="连K的看不到阻力位">
          </div>

          <div class="popover-hotspot bg-primary-2" style="top: 34%; left: 88%;" data-toggle="popover" title="日线" data-content="不均匀的K线">
          </div>

          <div class="popover-hotspot bg-primary-2" style="top: 52%; left: 92%;" data-toggle="popover" title="小时线" data-content="按照买点, 起码有7的点亏损, 若止损不严格, 很可能被套">
          </div>

          <img src="../images/compound/wave/fhgx_day.png" alt="Image" class="rounded border shadow-lg">
        </div>

      </div>    
    </div>
    
  </section>


  <section class="bg-primary-3 text-light">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-xl-8 col-lg-9">
          <h2 class="h1">
            买入的时机
          </h2>
          <p class="lead">
            走势再完美, 如果不给足够的机会入场, 那么就会有陷阱.
          </p>
        </div>

        <div class="popover-image">
          <div class="popover-hotspot bg-primary-2" style="top: 29%; left: 33%;" data-toggle="popover" title="小时" data-content="驱动到此结束">
          </div>    
          <div class="popover-hotspot bg-primary-2" style="top: 29%; left: 81.5%;" data-toggle="popover" title="调整结束" data-content="宽幅震荡, 调整很复杂, 尤其是调整的第四波">
          </div> 
          <div class="popover-hotspot bg-primary-2" style="top: 2%; left: 85.5%;" data-toggle="popover" title="价格高开" data-content="昨日4分钟涨停, 次日又高开7-8个点, 这个时候不能买入, 因为庄家的利润很好, 接近20%">
          </div> 
          <img src="../images/compound/wave/zlzn.png" alt="Image" class="rounded border shadow-lg">
        </div>
      </div>    
    </div>

    <div class="container mt-5">
      <div class="row justify-content-center text-center">
        <div class="col-xl-8 col-lg-9">
          <p class="lead">
            均匀的3波流, 突破就是入场机会.
          </p>
        </div>

        <div class="popover-image">
          <div class="popover-hotspot bg-primary-2" style="top: 50%; left: 62%;" data-toggle="popover" title="小时线" data-content="3波流突破入场">
          </div>    
          <img src="../images/compound/3/dyrs.png" alt="Image" class="rounded border shadow-lg">
        </div>
      </div>    
    </div>
    
  </section>
@endsection