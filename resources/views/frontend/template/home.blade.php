{{-- * Template Name : Home * --}}
@extends('frontend.master')

@section('page-title')
    {!! ($pageContent->meta_title) ? $pageContent->meta_title : meta_title() !!}
@stop

@section('meta-keywords')
    {!! ($pageContent->meta_keywords) ? $pageContent->meta_keywords : meta_keywords() !!}
@stop

@section('meta-description')
    {!! ($pageContent->meta_description) ? $pageContent->meta_description : meta_description() !!}
@stop
@section('body-class') home-page @stop
@section('content')

@push('styles')
    <link rel="stylesheet" href="assets/css/style.css" />
   
@endpush
<div class="for-hero-section-bg" style="background-image: url({{ $pageContent->image ? asset($pageContent->image) : '' }}) !important;">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="for-hero-main-section">
                                    <div class="for-hero-inner-section">

                                        <div class="for-hero-section-content">
                                            <div class="for-hero-section-heading">
                                                <h3 class="for-hero-section-h3">
                                                    {{ $pageContent->title ?? '' }}
                                                </h3>
                                            </div>
                                            <div class="for-hero-section-pera">
                                                <p class="for-hero-section-p">
												{{ $pageContent->content ? strip_tags($pageContent->content) : '' }}
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- hero section End -->

            <!-- About-GORN section -->

            <div class="for-About-GORN-section-bg">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 for-about-GORN-bg-img">
                                <div class="for-About-GORN-main-section">
                                    <div class="for-About-GORN-inner-section">

                                        <div class="for-About-GORN-section-content">
                                            <div class="for-About-GORN-section-heading">
                                                <h3 class="for-About-GORN-section-h3 for-all-headings">
                                                    {{ $page_meta['about_gorn_heading'] ?? '' }}
                                                </h3>
                                            </div>
                                            <div class="for-About-GORN-section-pera">
                                                <p class="for-About-GORN-section-p for-pera-style">
													{{ isset($page_meta['about_gorn_text']) ? strip_tags($page_meta['about_gorn_text']) : '' }}
                                                </p>
                                            </div>
                                            <div class="for-icon-box-button btn">
                                                <a class="for-about-GORN-button for-purple-button" href="{{ URL::to('/') }}/apply-now">Apply
                                                    here</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="for-About-GORN-section-video">
                                    <div class="for-video-popup-image-secion">
                                        <img src="assets/images/video-image.png" alt="">
                                    </div>
                                    <div class="for-video-popup-secion">
                                        <div class="vpop" data-type="youtube" data-id="{{ $pageContent->page_video ?? '' }}"
                                            data-autoplay='true'><img src="assets/images/play-button-img.png" alt="">
                                        </div>

                                        <!-- copy this stuff and down -->
                                        <div id="video-popup-overlay"></div>

                                        <div id="video-popup-container">
                                            <div id="video-popup-close" class="fade">&#10006;</div>
                                            <div id="video-popup-iframe-container">
                                                <iframe id="video-popup-iframe" src="" width="100%" height="100%"
                                                    frameborder="0"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About-GORN section End -->


            <!-- icon section -->


            <div class="for-icon-section-bg">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="for-icon-heading-main-section">
                                    <div class="for-icon-inner-heading-section">
                                        <div class="for-icon-section-heading">
                                            <h3 class="for-icon-section-h3 for-all-headings">{{ $page_meta['section2_heading'] ?? '' }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <!-- icon 1 -->

                            <div class="col-md-4">
                                <div class="for-icon-main-section">
                                    <div class="for-icon-inner-section">
                                        <div class="for-icon-section-content">
                                            <div class="for-icon-box box for-icon-box-1">
                                                <div class="for-icon-box-img">
                                                    <div class="box-wrap">
                                                        <div class="box-wrap-image">
                                                            <div class="img">
                                                                <img src="assets/images/human-setting-purple.png"
                                                                    alt="hover effect">
                                                                <img src="assets/images/human-setting.png"
                                                                    alt="hover effect">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- contant main -->

                                                <div class="contant-main-icon-box">
                                                    <div class="for-icon-box-heading">
                                                        <h6 class="for-icon-box-h6">{{ $page_meta['section2_bx1_heading'] ?? '' }}</h6>
                                                    </div>
                                                    <div class="for-icon-box-pera">
                                                        <p class="for-icon-box-p">{{ isset($page_meta['section2_bx1_text']) ? strip_tags($page_meta['section2_bx1_text']) : '' }}</p>
                                                    </div>
                                                    <div class="for-icon-box-button btn">
                                                        <a class="for-icon-box-a" href="#">Read More</a>
                                                    </div>
                                                </div>

                                                <!-- contant main End -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- icon 1 End -->

                            <!-- icon 2 -->

                            <div class="col-md-4">
                                <div class="for-icon-main-section">
                                    <div class="for-icon-inner-section">
                                        <div class="for-icon-section-content">
                                            <div class="for-icon-box box for-icon-box-2">
                                                <div class="for-icon-box-img">
                                                    <div class="box-wrap">
                                                        <div class="box-wrap-image">
                                                            <div class="img">
                                                                <img src="assets/images/world-service-purple.png"
                                                                    alt="hover effect">
                                                                <img src="assets/images/world-service-white.png"
                                                                    alt="hover effect">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- contant main -->

                                                <div class="contant-main-icon-box">
                                                    <div class="for-icon-box-heading">
                                                        <h6 class="for-icon-box-h6">{{ $page_meta['section2_bx2_heading'] ?? '' }}</h6>
                                                    </div>
                                                    <div class="for-icon-box-pera">
                                                        <p class="for-icon-box-p">{{ isset($page_meta['section2_bx2_text']) ? strip_tags($page_meta['section2_bx2_text']) : '' }}</p>
                                                    </div>
                                                    <div class="for-icon-box-button btn">
                                                        <a class="for-icon-box-a" href="#">Read More</a>
                                                    </div>
                                                </div>

                                                <!-- contant main End -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- icon 2 End -->

                            <!-- icon 3 -->

                            <div class="col-md-4">
                                <div class="for-icon-main-section">
                                    <div class="for-icon-inner-section">
                                        <div class="for-icon-section-content">
                                            <div class="for-icon-box box for-icon-box-3">
                                                <div class="for-icon-box-img">
                                                    <div class="box-wrap">
                                                        <div class="box-wrap-image">
                                                            <div class="img">
                                                                <img src="assets/images/Dollar-man-purple.png"
                                                                    alt="hover effect">
                                                                <img src="assets/images/Dollar-man-white.png"
                                                                    alt="hover effect">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- contant main -->

                                                <div class="contant-main-icon-box">
                                                    <div class="for-icon-box-heading">
                                                        <h6 class="for-icon-box-h6">{{ $page_meta['section2_bx3_heading'] ?? '' }}</h6>
                                                    </div>
                                                    <div class="for-icon-box-pera">
                                                        <p class="for-icon-box-p">{{ isset($page_meta['section2_bx3_text']) ? strip_tags($page_meta['section2_bx3_text']) : '' }}</p>
                                                    </div>
                                                    <div class="for-icon-box-button btn">
                                                        <a class="for-icon-box-a" href="#">Read More</a>
                                                    </div>
                                                </div>

                                                <!-- contant main End -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- icon 3 End -->

                        </div>
                    </div>
                </div>
            </div>

            <!-- icon section End -->

            <!-- Nurses section -->

            <div class="for-Nurses-section-bg">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="for-Nurses-main-section">
                                    <div class="for-Nurses-inner-section">

                                        <div class="for-Nurses-section-content">
                                            <div class="for-Nurses-section-heading">
                                                <h3 class="for-Nurses-section-h3 for-all-headings">
                                                    {{ $page_meta['section3_heading'] ?? '' }}
                                                </h3>
                                            </div>
                                            <div class="for-Nurses-section-pera">
                                                <p class="for-Nurses-section-p for-pera-style">
												{{ isset($page_meta['section3_text']) ? strip_tags($page_meta['section3_text']) : '' }}
                                                </p>
                                            </div>
                                            <div class="for-icon-box-button btn">
                                                <a class="for-purple-button for-Nurses-button" href="https://dev.appearls.com/GO-RN/apply-form.html">Apply here</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="for-Nurses-image-section">
                                   
                                    @if( isset($page_meta['section3_image'] ))
                                        <img src="{{ asset($page_meta['section3_image']) }}" alt="">
                                    @endif
                                    <!-- <img src="assets/images/Nurses-section-bg.png" alt=""> -->
                                </div>
                                <div class="for-main-social-media-button">
                                    <div class="for-icon-box-button btn">
                                        <a class="for-purple-button for-Nurses-button" href="#"><i
                                                class="fa-brands fa-google-play">&nbsp;Google Play</i></a>
                                    </div>
                                    <div class="for-icon-box-button btn">
                                        <a class="for-purple-button for-Nurses-button" href="#"><i
                                                class="fa-brands fa-apple">&nbsp;App Store</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Nurses section End -->



            <!-- tastimonial -->

            <!-- section 5 start -->

            <div class="section-5-hcare">
                <div class="container">
                    <div class="content-slider">
                        <h1>Testimonials From Our Clients</h1>
                        <p class="plorem">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing
                        </p>
                        <div class="slider single-item">
                            <div class="slider-1">
                                <div class="slider-inner">
                                    <h5>Great Quality!</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                        aliquam erat volutpat.
                                    </p>
                                    <div class="image-avatar">
                                        <img src="assets/images/avatar.png" alt="" />
                                    </div>
                                    <h5>James Nolan</h5>
                                    <p>Consultant</p>
                                </div>
                            </div>

                            <div class="slider-1">
                                <div class="slider-inner">
                                    <h5>Great Quality!</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                        aliquam erat volutpat.
                                    </p>
                                    <div class="image-avatar">
                                        <img src="assets/images/avatar.png" alt="" />
                                    </div>
                                    <h5>James Nolan</h5>
                                    <p>Consultant</p>
                                </div>
                            </div>

                            <div class="slider-1">
                                <div class="slider-inner">
                                    <h5>Great Quality!</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                        aliquam erat volutpat.
                                    </p>
                                    <div class="image-avatar">
                                        <img src="assets/images/avatar.png" alt="" />
                                    </div>
                                    <h5>James Nolan</h5>
                                    <p>Consultant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- section 5 end -->



            <!-- testimonial End -->

            <!-- Award section -->

            <div class="for-Award-section-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="for-Award-main-section">
                                <div class="for-Award-inner-section">

                                    <div class="for-Award-section-content">
                                        <div class="for-Award-image-section">
                                            @if( isset($page_meta['section_left1']) )
                                                <img src="{{ asset($page_meta['section_left1']) }}" alt="">
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 for-award-section-style">
                            <div class="for-Award-section-slider">
                                <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet'
                                    type='text/css'>
                                <link rel="stylesheet"
                                    href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
                                <link rel="stylesheet"
                                    href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
                                <script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
                                <script
                                    src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

                                <div class="carousel slide" id="myCarousel" data-ride="carousel">

                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                    </ol>

                                    <div class="carousel-inner">

                                        <div class="item active">
                                            @if( isset($page_meta['section_right1']) )
                                                <img src="{{ asset($page_meta['section_right1']) }}" alt="">
                                            @endif
                                            @if( isset($page_meta['section_right2']) )
                                                <img src="{{ asset($page_meta['section_right2']) }}" alt="">
                                            @endif
                                            @if( isset($page_meta['section_right3']) )
                                                <img src="{{ asset($page_meta['section_right3']) }}" alt="">
                                            @endif
                                            @if( isset($page_meta['section_right4']) )
                                                <img src="{{ asset($page_meta['section_right4']) }}" alt="">
                                            @endif
                                        </div>

                                        <div class="item">
                                        @if( isset($page_meta['section_right1']) )
                                                <img src="{{ asset($page_meta['section_right1']) }}" alt="">
                                            @endif
                                            @if( isset($page_meta['section_right2']) )
                                                <img src="{{ asset($page_meta['section_right2']) }}" alt="">
                                            @endif
                                            @if( isset($page_meta['section_right3']) )
                                                <img src="{{ asset($page_meta['section_right3']) }}" alt="">
                                            @endif
                                            @if( isset($page_meta['section_right4']) )
                                                <img src="{{ asset($page_meta['section_right4']) }}" alt="">
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Carousel nav -->
                                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                        <span class="fas fa-angle-left"></span>
                                    </a>
                                    <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                        <span class="fas fa-angle-right"></span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

@endsection




