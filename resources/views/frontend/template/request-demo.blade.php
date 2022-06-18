{{-- * Template Name : Request Demo * --}}
@extends('frontend.master') @section('page-title') {!!
($pageContent->meta_title) ? $pageContent->meta_title : meta_title() !!} @stop
@section('meta-keywords') {!! ($pageContent->meta_keywords) ?
$pageContent->meta_keywords : meta_keywords() !!} @stop
@section('meta-description') {!! ($pageContent->meta_description) ?
$pageContent->meta_description : meta_description() !!} @stop
@section('body-class') home-page @stop 
@push('styles')
    <link rel="stylesheet" href="assets/css/demo.css">
    <style>
        .for-About-GORN-section-heading {
            background-color: transparent;
            position: relative;
            color: #3d1152;
            padding: 0;
            text-align:left;
            top:0;
            right:0;
            width: auto;
        }
        .for-video-popup-image-secion img {
            box-shadow: none;
        }
        body {
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
            padding-top: 0px !important;
        }

        a:hover,
        a:focus {
            color: #ffffff !important;
            text-decoration: none !important;
        }

        nav.for-header-nav .applynow a:hover {
            color: #000 !important;
        }

        a.for-icon-box-a:hover {
            color: #000 !important;
        }

        a#adobeXd:hover,
        a#sketch:hover {
            color: #000 !important;
        }
        li.nav-item.active-demo a {
    border-bottom: 2px solid #fff;
    transition: 0.5s;
    border-radius: 1px;
}
    </style>
@endpush
@section('content')



<div class="for-hero-section-bg">
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
                    <div class="row for-item-align-center">
                        <div class="col-md-6">
                            <div class="for-About-GORN-main-section">
                                <div class="for-About-GORN-inner-section">

                                    <div class="for-About-GORN-section-content">
                                        <div class="for-About-GORN-section-1pera">
                                            <p class="for-About-GORN-section-p for-pera-style">
                                                {{ $page_meta['rd_sec1_tagline'] ?? '' }}
                                            </p>
                                        </div>
                                        <div class="for-About-GORN-section-heading">
                                            <h3 class="for-About-GORN-section-h3 for-all-headings">
                                                {{ $page_meta['rd_sec1_heading'] ?? '' }}
                                            </h3>
                                        </div>
                                        <div class="for-About-GORN-section-pera">
                                            <p class="for-About-GORN-section-p for-pera-style">
                                                {{ isset($page_meta['rd_sec1_text']) ? strip_tags($page_meta['rd_sec1_text']) : '' }}
                                            </p>
                                        </div>
                                        <div class="for-icon-box-button btn">
                                            <a class="for-about-GORN-button for-purple-button"
                                                href="https://dev.appearls.com/GO-RN/apply-form.html">Apply
                                                here</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="for-About-GORN-section-video">
                                <div class="for-video-popup-image-secion">
                                    <img src="assets/images/Do-mobile.png" alt="">
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
                                        <h3 class="for-icon-section-h3 for-all-headings">{{ $page_meta['rd_sec2_heading'] ?? '' }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row for-icon-section-style">

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
                                                            <img src="assets/images/mobile-app-purple-icon.png"
                                                                alt="hover effect">
                                                            <img src="assets/images/mobile-app-white-icon.png"
                                                                alt="hover effect">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- contant main -->

                                            <div class="contant-main-icon-box">
                                                <div class="for-icon-box-heading">
                                                    <h6 class="for-icon-box-h6">{{ $page_meta['rd_sec2_bx1_heading'] ?? '' }}</h6>
                                                </div>
                                                <div class="for-icon-box-pera">
                                                    <p class="for-icon-box-p">{{ isset($page_meta['rd_sec2_bx1_text']) ? strip_tags($page_meta['rd_sec2_bx2_text']) : '' }}</p>
                                                </div>
                                                <!-- <div class="for-icon-box-button btn">
                                                    <a class="for-icon-box-a" href="#">Read More</a>
                                                </div> -->
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
                                                            <img src="assets/images/shadule-purple-icon.png"
                                                                alt="hover effect">
                                                            <img src="assets/images/shadule-white-icon.png"
                                                                alt="hover effect">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- contant main -->

                                            <div class="contant-main-icon-box">
                                                <div class="for-icon-box-heading">
                                                    <h6 class="for-icon-box-h6">{{ $page_meta['rd_sec2_bx2_heading'] ?? '' }}</h6>
                                                </div>
                                                <div class="for-icon-box-pera">
                                                    <p class="for-icon-box-p">{{ isset($page_meta['rd_sec2_bx2_text']) ? strip_tags($page_meta['rd_sec2_bx2_text']) : '' }}</p>
                                                </div>
                                                <!-- <div class="for-icon-box-button btn">
                                                    <a class="for-icon-box-a" href="#">Read More</a>
                                                </div> -->
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
                                                            <img src="assets/images/cloud-purple-icon.png"
                                                                alt="hover effect">
                                                            <img src="assets/images/cloud-white-icon.png"
                                                                alt="hover effect">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- contant main -->

                                            <div class="contant-main-icon-box">
                                                <div class="for-icon-box-heading">
                                                    <h6 class="for-icon-box-h6">{{ $page_meta['rd_sec2_bx3_heading'] ?? '' }}</h6>
                                                </div>
                                                <div class="for-icon-box-pera">
                                                    <p class="for-icon-box-p">{{ isset($page_meta['rd_sec2_bx3_text']) ? strip_tags($page_meta['rd_sec2_bx3_text']) : '' }}</p>
                                                </div>
                                                <!-- <div class="for-icon-box-button btn">
                                                    <a class="for-icon-box-a" href="#">Read More</a>
                                                </div> -->
                                            </div>

                                            <!-- contant main End -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- icon 3 End -->

                    </div>

                    <div class="row">

                        <!-- icon 1 -->

                        <div class="col-md-4">
                            <div class="for-icon-main-section">
                                <div class="for-icon-inner-section">
                                    <div class="for-icon-section-content">
                                        <div class="for-icon-box box for-icon-box-1-1">
                                            <div class="for-icon-box-img">
                                                <div class="box-wrap">
                                                    <div class="box-wrap-image">
                                                        <div class="img">
                                                            <img src="assets/images/team-support-purple-icon.png"
                                                                alt="hover effect">
                                                            <img src="assets/images/team-support-white-icon.png"
                                                                alt="hover effect">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- contant main -->

                                            <div class="contant-main-icon-box">
                                                <div class="for-icon-box-heading">
                                                    <h6 class="for-icon-box-h6">{{ $page_meta['rd_sec2_bx4_heading'] ?? '' }}</h6>
                                                </div>
                                                <div class="for-icon-box-pera">
                                                    <p class="for-icon-box-p">{{ isset($page_meta['rd_sec2_bx4_text']) ? strip_tags($page_meta['rd_sec2_bx4_text']) : '' }}</p>
                                                </div>
                                                <!-- <div class="for-icon-box-button btn">
                                                    <a class="for-icon-box-a" href="#">Read More</a>
                                                </div> -->
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
                                        <div class="for-icon-box box for-icon-box-2-2">
                                            <div class="for-icon-box-img">
                                                <div class="box-wrap">
                                                    <div class="box-wrap-image">
                                                        <div class="img">
                                                            <img src="assets/images/laptop-tools-purple-icon.png"
                                                                alt="hover effect">
                                                            <img src="assets/images/laptop-tools-white-icon.png"
                                                                alt="hover effect">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- contant main -->

                                            <div class="contant-main-icon-box">
                                                <div class="for-icon-box-heading">
                                                    <h6 class="for-icon-box-h6">{{ $page_meta['rd_sec2_bx5_heading'] ?? '' }}</h6>
                                                </div>
                                                <div class="for-icon-box-pera">
                                                    <p class="for-icon-box-p">{{ isset($page_meta['rd_sec2_bx5_text']) ? strip_tags($page_meta['rd_sec2_bx5_text']) : '' }}</p>
                                                </div>
                                                <!-- <div class="for-icon-box-button btn">
                                                    <a class="for-icon-box-a" href="#">Read More</a>
                                                </div> -->
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
                                        <div class="for-icon-box box for-icon-box-3-3">
                                            <div class="for-icon-box-img">
                                                <div class="box-wrap">
                                                    <div class="box-wrap-image">
                                                        <div class="img">
                                                            <img src="assets/images/world-build-purple-icon.png"
                                                                alt="hover effect">
                                                            <img src="assets/images/world-build-white-icon.png"
                                                                alt="hover effect">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- contant main -->

                                            <div class="contant-main-icon-box">
                                                <div class="for-icon-box-heading">
                                                    <h6 class="for-icon-box-h6">{{ $page_meta['rd_sec2_bx6_heading'] ?? '' }}</h6>
                                                </div>
                                                <div class="for-icon-box-pera">
                                                    <p class="for-icon-box-p">{{ isset($page_meta['rd_sec2_bx6_text']) ? strip_tags($page_meta['rd_sec2_bx6_text']) : '' }}</p>
                                                </div>
                                                <!-- <div class="for-icon-box-button btn">
                                                    <a class="for-icon-box-a" href="#">Read More</a>
                                                </div> -->
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
                        <div class="col-md-12">
                            <div class="for-icon-heading-main-section">
                                <div class="for-icon-inner-heading-section">
                                    <div class="for-icon-section-heading">
                                        <h3 class="for-icon-section-h3 for-all-headings">{{ $page_meta['rd_sec3_heading'] ?? '' }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="for-Nurses-image-section">
                                <img src="assets/images/cover-section-img.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="for-Nurses-main-section">
                                <div class="for-Nurses-inner-section">

                                    <div class="for-Nurses-section-content">
                                        <div class="for-Nurses-section-heading">
                                            <h3 class="for-Nurses-section-h3 for-all-headings">
                                                {{ $page_meta['rd_sec3_subheading'] ?? '' }}
                                            </h3>
                                        </div>
                                        <div class="for-Nurses-section-pera">
                                            <p class="for-Nurses-section-p for-pera-style">
                                                {{ isset($page_meta['rd_sec3_text']) ? strip_tags($page_meta['rd_sec3_text']) : '' }}
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

        <!-- Nurses section End -->

        <!-- shadule form section -->

        <div class="for-shadule-section-bg">
            <div class="container-fluid">
                <div class="container">
                    <div class="row for-row-style">
                        <div class="col-md-12">
                            <div class="for-shadule-heading-main-section">
                                <div class="for-shadule-inner-heading-section">
                                    <p class="for-shadule-section-upper-heading">
                                    <h6 class="for-shadule-section-p for-all-pera">{{ $page_meta['rd_sec4_tagline'] ?? '' }}</h6>
                                    </p>
                                    <div class="for-shadule-section-heading">
                                        <h3 class="for-shadule-section-h3 for-all-headings">{{ $page_meta['rd_sec4_heading'] ?? '' }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">

                                <div class="for-shadule-form-main-section">
                                    <div class="for-shadule-inner-form-section">
                                        <div class="for-shadule-section-form">

                                            <!-- shadule form start -->

                                            <div class="center">
                                                <div class="form-container">

                                                    <div class="form form__1">
                                                        <label for="name" class="form__label">First name</label>
                                                        <input type="text" class="form__input" placeholder=""
                                                            id="name" required>
                                                    </div>

                                                    <div class="form form__1">
                                                        <label for="name" class="form__label">Last name</label>
                                                        <input type="text" class="form__input" placeholder=""
                                                            id="name" required>
                                                    </div>

                                                    <div class="form form__3">
                                                        <label for="phone" class="form__label">Phone</label>
                                                        <input type="tel" class="form__input" placeholder=""
                                                            id="phone" required
                                                            pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                                    </div>

                                                    <div class="form form__1">
                                                        <label for="name" class="form__label">Facility Name</label>
                                                        <input type="text" class="form__input" placeholder=""
                                                            id="name" required>
                                                    </div>

                                                    <div class="form form__1">
                                                        <label for="name" class="form__label">Facility
                                                            Address</label>
                                                        <input type="text" class="form__input" placeholder=""
                                                            id="name" required>
                                                    </div>

                                                    <div class="form form__2">
                                                        <label for="email" class="form__label">Email address</label>
                                                        <input type="email" class="form__input" placeholder=""
                                                            id="email" required>
                                                    </div>

                                                    <!-- recapcha -->

                                                    <!--you can put this line anywhere in the site-->

                                                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

                                                    <!--NOTE THE ACTION IS POINTING TO form-data.com-->
                                                    <form action="https://api.form-data.com/f/bqtxth46icif4r4ot1p5qn"
                                                        method="post">

                                                        <div class="g-recaptcha"
                                                            data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR">
                                                        </div>

                                                    </form>

                                                    <!-- recapcha end -->

                                                    <button class="form__btn">
                                                        <span class="form__btn--visible">
                                                            <p>Submit&nbsp;&nbsp;</p>
                                                            <i class="fa-solid fa-arrow-right-long"></i>
                                                        </span>
                                                        <span class="form__btn--invisible">Message sent!</span>
                                                    </button>

                                                </div>
                                            </div>

                                            <!-- shadule form start end -->

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-2"></div>
                        </div>


                    
                </div>
            </div>
        </div>
    </div>
</div>

@section('footer_script')


@stop


@endsection
