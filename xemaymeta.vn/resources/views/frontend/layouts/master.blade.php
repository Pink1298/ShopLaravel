<!DOCTYPE html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link href="{{ asset('css/csshd.css') }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('image/favicon.png') }}" type="image/x-icon" />
    <link rel="icon" href="{{ asset('image/favicon.png') }}" type="image/x-icon" />
    @yield('custom-css')
</head>

<body>
    @include('frontend.layouts.partials.header')
    @include('frontend.layouts.partials.flash-message')
    @yield('main-content')
    @include('frontend.layouts.partials.footer')
    <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    @yield('custom-scripts')
</body>
</html>