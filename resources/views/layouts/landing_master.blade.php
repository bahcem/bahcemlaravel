<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{setting('app_name')}} | {{setting('app_short_description')}}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{$app_logo}}" />

{{--    <!-- Font Awesome -->--}}
{{--    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}">--}}
{{--    <!-- Ionicons -->--}}
{{--    <link href="https://unpkg.com/ionicons@4.1.2/dist/css/ionicons.min.css" rel="stylesheet">--}}
{{--    <!-- Theme style -->--}}
{{--    <link rel="stylesheet" href="{{asset('dist/css/adminlte.css')}}">--}}
{{--    <!-- iCheck -->--}}
{{--    <link rel="stylesheet" href="{{asset('plugins/iCheck/flat/blue.css')}}">--}}

{{--    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
</head>
<body class="">

    @yield('content')

<!-- jQuery -->
{{--<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>--}}
{{--<!-- Bootstrap 4 -->--}}
{{--<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>--}}
{{--<!-- iCheck -->--}}
{{--<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>--}}
</body>
</html>