<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css" >

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>

<div id="app">
    @include('partials.nav')
    <div class="container">
        @yield('content')
    </div>
</div>
    @yield('scripts.footer')
    <script src="{{asset('js/app.js')}}"></script>
@include('flash')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?AIzaSyDRcv6FvY2DG0oU4MDLBJ-3LOPQKPH4gBw&`sensor=false&signed_in=true&libraries=geometry,places">
    </script>
    <script src="{{asset('js/List.js')}}"></script>
    <script src="{{asset('js/Maperizer.js')}}"></script>
    <script src="{{ asset('js/map-options.js') }}"></script>
    <script src="{{asset('js/jqueryui.maperizer.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>