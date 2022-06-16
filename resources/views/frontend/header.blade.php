<!DOCTYPE HTML>

<html>
	<head>
		<title>@yield('page-title')</title>
		<meta charset="utf-8">
		<meta description="@yield('meta-description')">
		<meta keyword="@yield('meta-keywords')">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Theme CSS -->
        <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/style.css">
		<!-- <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/app.css"> -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700|Roboto" rel="stylesheet">

		    <!-- CSS only -->
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- css link -->



    <!-- Website-title -->

    <title>GORN-WEBSITE</title>

    <!-- for popup video links and scripts -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />

    <!-- font faimily links -->
    <link href="http://fonts.cdnfonts.com/css/roboto" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <!-- font awsome links -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- testimonial link -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css" />


    <!-- style -->

    <style>

        body{
            font-family: 'Roboto', sans-serif !important;
        }
        a.carousel-control.right,
        a.carousel-control.left {
            background: none;
            z-index: 999;
        }

        .carousel-control {
            top: 40% !important;
            height: 37px !important;
            width: 7% !important;
        }

        .navbar {
            min-height: 0 !important;
            margin-bottom: 0 !important;
            border: none !important;
            padding: 0 !important;
            padding-top: 5px !important;
        }
        a:hover, a:focus {
    color: #ffffff !important;
    text-decoration: none !important;
}
nav.for-header-nav .applynow a:hover {
    color: #000 !important;
}
a.for-icon-box-a:hover {
    color: #000 !important;
}
a#adobeXd:hover,a#sketch:hover {
    color: #000 !important;
}
    </style>

		<!--[if lt IE 9]>
			<script src="js/html5/respond.min.js"></script>
		<![endif]-->
        @stack('styles')
	</head>
	<body class="@yield('body-class') @if( isUserLoggedIn() ) logged-in @endif">
<?php //print_b($menu_header); exit;?>
<div class="for-hole-main-section">
        <div class="for-hole-inner-section">

            <!-- header section -->

            <div class="for-header-section-main">
                <div class="for-hero-section-inner">
                    <div class="header-menu">
                        <nav class="for-header-nav">
                            <div class="logo"><a href="https://dev.appearls.com/GO-RN"><img src="assets/images/logo.png"></a></div>

                            <div class="navbar">
                                <ul class="nav-menu">
                                    <li class="nav-item active-solutions"><a href="https://dev.appearls.com/GO-RN/solutions.html" class="nav-link">Solutions</a></li>
                                    <li class="nav-item active-healthcarepro"><a href="https://dev.appearls.com/GO-RN/healthcarepro.html" class="nav-link">Healthcare Professionals</a></li>
                                    <li class="nav-item for-dropdown nav-link">
                                        <!-- dropdown menu -->
                                        <div class="containeraa">
                                            <div class="Menu-button">
                                                <p>Facilities</p>
                                                <img src="https://svgshare.com/i/8u6.svg" alt="" class="arrow">
                                            </div>
                                            <div class="dropdown">
                                                <a href="https://dev.appearls.com/GO-RN/facilities.html" id="adobeXd">Workforce Management
                                                    <span class="for-dropdown-span"></span>
                                                </a>
                                                <a href="https://dev.appearls.com/GO-RN/staffing.html" id="sketch">Healthcare Staffing
                                                    <span class="for-dropdown-span"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- dropdown menu end -->
                                    </li>
                                    <li class="nav-item active-demo"><a href="https://dev.appearls.com/GO-RN/demo.html" class="nav-link">Demo</a></li>
                                </ul>
                            </div>

                            <div class="applynow">
                                <a href="https://dev.appearls.com/GO-RN/apply-form.html">Apply Now</a>
                            </div>

                            <div class="hamburger">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- header section End -->
