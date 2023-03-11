<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Broccoli - Organic Food HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{!! asset('main/img/favicon.png') !!}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{!! asset('main/css/font-icons.css') !!}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{!! asset('main/css/plugins.css') !!}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{!! asset('main/css/style.css') !!}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{!! asset('main/css/responsive.css') !!}">
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="wrapper">

    <!-- HEADER AREA START (header-5) -->
    @include('main.partial.navbar')
    <!-- HEADER AREA END -->


    @yield('content')

    @include('main.partial.footer')

    @include('components.main.modal-product')



</div>
<!-- Body main wrapper end -->

<!-- All JS Plugins -->
<script src="{!! asset('main/js/plugins.js') !!}"></script>
<!-- Main JS -->
<script src="{!! asset('main/js/main.js') !!}"></script>


@stack('js')

</body>
</html>

