<!DOCTYPE html>
<html >

<head>

    {{-- Base Meta Tags --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Custom Meta Tags --}}
    @yield('meta_tags')

    {{-- Title --}}
    <title>
        @yield('title', config('adminlte.title', 'KMData'))
    </title>

    {{-- Custom stylesheets (pre AdminLTE) --}}
    @yield('adminlte_css_pre')

    {{-- Base Stylesheets --}}
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
  

    {{-- Extra Configured Plugins Stylesheets --}}
    @include('adminlte::plugins', ['type' => 'css'])


    {{-- Custom Stylesheets (post AdminLTE) --}}
    @yield('adminlte_css')

    {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" />


</head>
<!-- C:\laragon\www\newlv\public\vendor\adminlte\dist\js\adminlte.js -->
<!-- <script src="public/vendor/adminlte/dist/js/adminlte.js"></script> -->
<script src="../public/vendor/adminlte/dist/js/adminlte.js"></script>
<!-- <script src="../vendor/adminlte/dist/js/adminlte.js"></script> -->
<!-- <script src="./vendor/adminlte/dist/js/adminlte.js"></script> -->
<!-- <script src="/vendor/adminlte/dist/js/adminlte.js"></script> -->
<body class="sidebar-mini sidebar-collapse">
    <div class="wrapper">
    @include('partials.navbar.topnav')
    @include('partials.sidebar.left-sidebar')


    @yield('body')

    </div>
    @yield('content')
    {{-- Custom Scripts --}}
    @yield('adminlte_js')

</body>

</html>
