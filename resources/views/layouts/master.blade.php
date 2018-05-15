<!doctype html>
<html class="no-js" lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>@yield('pageTitle')</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <link rel="shortcut icon" href="{{ URL::to('images/icon-tab.jpg') }}" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,400i,700,700i,900|Montserrat:400,700|PT+Serif' rel='stylesheet' type='text/css'>
    <!-- Library CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/background.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/position.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/clear.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/common.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/carouFredSel.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/sm-clean.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/hover.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::to('css/jquery.fileuploader.css') }}" media="all" rel="stylesheet">
    <link href="{{ URL::to('css/jquery.fileuploader-theme-dragdrop.css') }}" media="all" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @yield('header')
</head>
<body>
<!-- Partials header -->
@include('partials.header')
<!-- //Partials header -->

<!-- Breadcrumbs -->
@include('partials.breadcrumb')
<!-- Content -->
@yield('content')
<!-- //Content -->

<!-- Partials footer -->
@include('partials.footer')
<!-- Scripts footer -->
<script type="text/javascript" src="{{ URL::to('//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.smartmenus.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/isotope.pkgd.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.carouFredSel-6.2.0-packed.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.touchSwipe.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/imagesloaded.pkgd.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
<!-- //Scripts footer -->
<!-- //Partials footer -->
@yield('footer')
</body>
</html>