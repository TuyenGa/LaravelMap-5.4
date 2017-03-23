<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('css/style.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    @include('flash')
    <div id="app">
        @include('partials.nav')
        {{--@include('partials.nav')--}}

            @yield('content')


    </div>

    <!-- Scripts -->
    @yield('scripts.footer')
    <script src="{{asset('js/app.js')}}">    </script>

    <script src="{{asset('js/jquery-3.1.1.js')}}"></script>
    {{--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDRcv6FvY2DG0oU4MDLBJ-3LOPQKPH4gBw&sensor=false&signed_in=true&libraries=geometry,places">
    </script>
    <script src="{{asset('js/List.js')}}"></script>
    <script src="{{asset('js/Maperizer.js')}}"></script>
    <script src="{{ asset('js/map-options.js') }}"></script>
    <script src="{{asset('js/jqueryui.maperizer.js')}}"></script>
    <script src="{{asset('js/showMap.js')}}"></script>




</body>
</html>
