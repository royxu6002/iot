@extends('layouts.app')

@section('title', 'price system')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/purchase.css')}}">
@endsection

@section('content')
<div id="app" class="container">
    <div class="price-header">
        <h4 class="ml-2 mt-4">Stock Items' Price List</h4>
        <span class="small">
            <a href="{{asset('/policy')}}">ODM/OEM Policy</a>
        </span>
    </div>
    <table  class="table">
        <thead >
            <tr >
                <th>IMAGE</th>
                <th class="text-center">ARTICLE</th>
                <th class="text-center">UNIT PRICE</th>
                <th class="text-center">OEM MOQ</th>
                <th class="text-center hide-on-mobile">IN STOCK</th>
                <th class="text-center hide-on-mobile">REMARK</th>
                <th></th>
            </tr>
        </thead>
        <tbody >
                <!----><!---->
            <tr class="ng-star-inserted open">
                <td  class="hide-on-mobile">
                    <img src="http://comlibra.com/images/22e1ed919672e5ba7c27f3440292f77f.jpg" alt="" class="price-img">
                </td>
                <td >
                    <a href="http://comlibra.com/products/cf470bt-connected-fat-scale">CT470BT Connected Fat Scale</a>
                </td>
                <td  class="text-center" vertical-align="middle">
                    6.00USD
                </td>
                <td class="text-center">1000PCS</td>
                <td class="text-center">3268PCS</td>
                <td  class="text-center">Black Color
                </td>
            </tr>
                <!---->
          {{--   <tr class="collapsed open ng-star-inserted">
                <td  colspan="6">
                    <a href="http://www.federalreserve.gov/aboutthefed/bios/banks/pres08.htm" target="_blank">James Bullard</a> is the President of the <a href="http://www.stlouisfed.org/" target="_blank">Federal Reserve Bank of St. Louis</a>. Dr. Bullard took office on April 1, 2008, as the twelfth chief executive of the Eighth District Federal Reserve Bank, at St. Louis. He is currently serving a full term that began March 1, 2011. In 2013, he serves as a voting member of the Federal Open Market Committee.
                </td>
            </tr> --}}


            <tr  class="ng-star-inserted">
                <td >
                    <img src="http://comlibra.com/images/8d86deb0a73e76f0d1e0e3bab0e80aff.jpg" alt="" class="price-img">
                </td>
                <td>
                    <a href="http://comlibra.com/products/cf570bt-connected-fat-scale">
                        CK570BT Connected Fat Scale
                    </a>
                </td>
                <td  class="text-center gray" vertical-align="middle">
                    6.50USD
                </td>
                <td class="text-center">1000PCS</td>
                <td class="text-center">1021PCS</td>
                <td  class="text-center">Black color
                </td>
            </tr>
    <!----><!----><!----><!---->
    </tbody>
    </table>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    var vm = new Vue({
        el: '#app',
        data: {
            test: 10000,
        },

    });
</script>
@endsection

