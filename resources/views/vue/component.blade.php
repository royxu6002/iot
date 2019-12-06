@extends('layouts.app');
@section('title')
@section('content')
<section>
    <div class="container">
        <div id="app">
            <div data-chapter="chapter-7.2.2">
                <my-component :initial-count="1"></my-component>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script>
    Vue.component('my-component',{
        props: ['initialCount'],
        template: '<div>@{{ count }}</div>',
        data: function(){
            return {
                count: this.initialCount,
            }
        },
    });
    var vm = new Vue({
        el: '#app',

    });
</script>
@endsection
