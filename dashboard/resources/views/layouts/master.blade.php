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

    <!-- MetisMenu CSS -->
    <link href="{{ asset('sb-admin-2/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{ asset('sb-admin-2/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    @yield('include-styles')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>


    <div id="wrapper">

        @if(Route::getCurrentRoute()->uri() != 'login-page')
            @include('layouts.nav')
        @endif

        @yield('content')

    </div>
    <!-- /#wrapper -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('sb-admin-2/vendor/metisMenu/metisMenu.min.js') }}"></script>

    @yield('include-scripts')

</body>
</html>
