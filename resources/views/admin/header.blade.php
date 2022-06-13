<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <title>@yield('page-title')</title>
    <meta charset="utf-8" />
    <meta description="@yield('meta-description')" />
    <meta keyword="@yield('meta-keywords')" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link href="{{ asset('admin_assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin_assets/libs/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/charts/chartist-bundle/chartist.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/charts/morris-bundle/morris.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/charts/c3charts/c3.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}" />
    @yield('header_styles')
    <!--[if lt IE 9]>
    <script src="js/html5/respond.min.js"></script>
    <![endif]-->
</head>

<body class="@yield('body-class')">

    <div class="dashboard-main-wrapper">

        @include('admin.includes.top_bar')
        @include('admin.includes.menu')

        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
