@extends('layouts.app')

@section('title', 'vue shop')

@section('content')
    <section>
        <div class="container">
            <div id="app">

            </div>
        </div>
    </section>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</style>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('js/main.js')}} "></script>
@endsection
