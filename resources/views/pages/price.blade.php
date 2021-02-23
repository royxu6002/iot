@extends('layouts.app')

@section('title', 'price system')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/purchase.css')}}">
@endsection

@section('content')
<div id="app" class="container" v-cloak>
    <div class="price-header">
        <h4 class="ml-2 mt-4">Price List</h4>
        <select name="" id="" v-model="catId">Please Select A Catalogue
            <option value="">All</option>
            <option value="1">Connected Bathroom Scale</option>
            <option value="2">Bathroom Scale</option>
            <option value="3">Kitchen Scale</option>
            <option value="4">Luggage Scale</option>
            <option value="5">Pocket Scale</option>
            <option value="6">Tabletop Price Scale</option>
            <option value="7">Pocket Scale</option>
            <option value="8">Hanging Scale</option>
            <option value="15">Floor Scale</option>
            <option value="25">Conveyor Scale</option>
            <option value="22">Load Cell</option>
            <option value="26">Height Scale</option>
            <option value="16">Other Accessories</option>
            <option value="16">Timer</option>
        </select>

        <span class="small">
            <a href="{{asset('/policy')}}">ODM/OEM Policy</a>
        </span>
    </div>

    <div class="row price-detail">
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
                    <tr class="ng-star-inserted open" v-for="(p, indx) in filteredProductsData()" :key="indx">
                        <td  class="hide-on-mobile">
                            <img :src="p.imgs[0]" alt="" class="price-img">
                        </td>
                        <td >
                            <a :href="'/products/'+p.product_slug" class="">
                                @{{ p.product_name }}
                            </a>
                        </td>
                        <td  class="text-center" vertical-align="middle">
                            @{{p.stocks[0].price}}USD
                        </td>
                        <td class="text-center">
                            @{{p.stocks[0].moq}}PCS
                        </td>
                        <td class="text-center">
                            @{{p.stocks[0].quantity}}PCS
                        </td>
                        <td  class="text-center">
                            @{{p.stocks[0].note}}
                        </td>
                    </tr>

            <!----><!----><!----><!---->
                </tbody>
            </table>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    var vm = new Vue({
        el: '#app',
        data: {
            productsData: '',
            catId: ''
        },
        methods: {
            getProductStocksData() {
               window.axios.get('/api/v1/products/stocks')
                .then(res => this.productsData = res.data)
                .catch(err => alert(err))
            }
        },
        computed: {
            filteredProductsData() {
                if(this.catId == '') {
                    return () => {
                        return this.productsData.filter(z => z.stocks.length>0)
                    };
                }
                return () => {
                    return this.productsData.filter(x => x.category_id == this.catId).filter(
                        y => y.stocks.length > 0);
                }
            }
        },
        created() {
            this.getProductStocksData();
        }
    });
</script>
@endsection

