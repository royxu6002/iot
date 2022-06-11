<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Comlibra Electronic - weighing scale, weight scale, Bluetooth scale, Bluetooth weighing scale, smart weighing scales, body scale, body weight scale, bathroom scale, digital weighing scales, smart scales from China')</title>
    <link rel="stylesheet" href="{{ asset('css/theme-mobile-app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/2theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/submenu.css') }}">
    @yield('styles')
</head>
<body data-aos-easing="ease" data-aos-duration="400" class="loaded">
    @include('layouts._header')
    <main class="{{ route_class() }}-page" >
        @yield('content')
        @include('layouts._footer')
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script>
    $(function() {
        $("[data-toggle='popover']").popover();
    });
</script>
    <script>
        var _hmt = _hmt || [];
        (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b5b1a710f055c5afd3217cf6a92962c6";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
        })();
    </script>

    @yield('scripts')
</body>
</html>
