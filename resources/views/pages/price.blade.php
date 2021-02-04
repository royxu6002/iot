@extends('layouts.app')

@section('title', 'price system')

@section('content')
<h1>Trial Price List</h1>
<div id="app">
    <table _ngcontent-direct-web-c38="" class="table">
        <thead _ngcontent-direct-web-c38="">
            <tr _ngcontent-direct-web-c38="">
                <th _ngcontent-direct-web-c38="" class="hide-on-mobile"></th>
                <th _ngcontent-direct-web-c38="">GMT+8</th>
                <th _ngcontent-direct-web-c38="" class="text-center">Time left</th>
                <th _ngcontent-direct-web-c38=""></th>
                <th _ngcontent-direct-web-c38="">Event</th>
                <th _ngcontent-direct-web-c38="" class="text-center">imp.</th>
                <th _ngcontent-direct-web-c38="" class="text-center hide-on-mobile">Actual</th>
                <th _ngcontent-direct-web-c38="" class="text-center hide-on-mobile">Consensus</th>
                <th _ngcontent-direct-web-c38="" class="text-center hide-on-mobile">Previous</th>
                <th _ngcontent-direct-web-c38=""></th>
            </tr>
        </thead>
        <tbody _ngcontent-direct-web-c38="">
            <!----><!----><!----><!---->
            <tr _ngcontent-direct-web-c38="" class="ng-star-inserted">
                <td _ngcontent-direct-web-c38="" class="text-center date-label" colspan="10"> February 4 </td></tr><!----><!---->
            <tr _ngcontent-direct-web-c38="" class="ng-star-inserted open">
                <td _ngcontent-direct-web-c38="" class="hide-on-mobile"><i _ngcontent-direct-web-c38="" class="dr-symbol-right arrow"></i></td><td _ngcontent-direct-web-c38="">02:00</td>
                <td _ngcontent-direct-web-c38="" class="text-center gray"><!----><i _ngcontent-direct-web-c38="" class="text-success dr-symbol-check ng-star-inserted"></i><!----></td>
                <td _ngcontent-direct-web-c38=""><div _ngcontent-direct-web-c38="" class="country"><i _ngcontent-direct-web-c38="" class="flag flag-us"></i> USD </div></td>
                <td _ngcontent-direct-web-c38="">Fed's Bullard speech</td>
                <td _ngcontent-direct-web-c38="" class="text-center">
                    <div _ngcontent-direct-web-c38="" class="priority"><i class="dr-symbol-priority text-warning"></i><i class="dr-symbol-priority text-warning"></i><i class="dr-symbol-priority"></i></div></td>
                <td _ngcontent-direct-web-c38="" class="text-center hide-on-mobile"></td>
                <td _ngcontent-direct-web-c38="" class="text-center hide-on-mobile"></td>
                <td _ngcontent-direct-web-c38="" class="text-center hide-on-mobile"></td>
                <td _ngcontent-direct-web-c38="" class="hide-on-mobile"><span _ngcontent-direct-web-c38="" class="bullet"></span></td>
            </tr>
                <!---->
            <tr _ngcontent-direct-web-c38="" class="collapsed open ng-star-inserted">
                    <td _ngcontent-direct-web-c38="" colspan="10"><a href="http://www.federalreserve.gov/aboutthefed/bios/banks/pres08.htm" target="_blank">James Bullard</a> is the President of the <a href="http://www.stlouisfed.org/" target="_blank">Federal Reserve Bank of St. Louis</a>. Dr. Bullard took office on April 1, 2008, as the twelfth chief executive of the Eighth District Federal Reserve Bank, at St. Louis. He is currently serving a full term that began March 1, 2011. In 2013, he serves as a voting member of the Federal Open Market Committee. </td></tr>


                    <tr _ngcontent-direct-web-c38="" class="ng-star-inserted"><td _ngcontent-direct-web-c38="" class="hide-on-mobile"><i _ngcontent-direct-web-c38="" class="dr-symbol-right arrow"></i></td><td _ngcontent-direct-web-c38="">23:30</td><td _ngcontent-direct-web-c38="" class="text-center gray"><!----><!----><span _ngcontent-direct-web-c38="" class="ng-star-inserted">10h 10m</span></td><td _ngcontent-direct-web-c38=""><div _ngcontent-direct-web-c38="" class="country"><i _ngcontent-direct-web-c38="" class="flag flag-us"></i> USD </div></td><td _ngcontent-direct-web-c38="">EIA Natural Gas Storage Change</td><td _ngcontent-direct-web-c38="" class="text-center"><div _ngcontent-direct-web-c38="" class="priority"><i class="dr-symbol-priority text-success"></i><i class="dr-symbol-priority"></i><i class="dr-symbol-priority"></i></div></td><td _ngcontent-direct-web-c38="" class="text-center hide-on-mobile"></td>
        <td _ngcontent-direct-web-c38="" class="text-center hide-on-mobile"></td><td _ngcontent-direct-web-c38="" class="text-center hide-on-mobile">-128.00
        </td>
        <td _ngcontent-direct-web-c38="" class="hide-on-mobile">
            <span _ngcontent-direct-web-c38="" class="bullet">
            </span>
        </td>
    </tr><!----><!----><!----><!---->
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

