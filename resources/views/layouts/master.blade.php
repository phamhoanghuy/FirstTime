<!doctype html>
<html class="no-js" lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('pageTitle')</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
   {{-- <link rel="shortcut icon" href="{{ Module::asset('admin:img/common/icon-tab.png') }}" type="image/png">
    <!-- Custom styles for this template -->
    <link href="{{ Module::asset('admin:css/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ Module::asset('admin:css/error.css') }}" rel="stylesheet" type="text/css" >
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <script type="text/javascript" src="{{ Module::asset('admin:js/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ Module::asset('admin:js/process_date.js') }}"></script>
    <script type="text/javascript" src="{{ Module::asset('admin:js/process_number.js') }}"></script>--}}
    @yield('header')
</head>

<body>

<!-- Partials header -->
@include('admin::partials.header')
<!-- //Partials header -->

<!-- Content -->
<main><div id="content" @yield('background-content')>
        <!--Content Upper-->
    @include('admin::partials.contentupper')
    <!-- //Content Upper-->
        @yield('maincontent')
    </div>
</main>
<!-- //Content -->
<!-- Partials footer -->
@include('admin::partials.footer')
<!-- //Partials footer -->
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript" src="{{ Module::asset('admin:js/scroller.js') }}"></script>
<script type="text/javascript" src="{{ Module::asset('admin:js/common.js') }}"></script>--}}
@yield('footer')
</body>
</html>