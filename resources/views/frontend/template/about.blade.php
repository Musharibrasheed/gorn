{{-- * Template Name : About * --}}
@extends('frontend.master') @section('page-title') {!!
($pageContent->meta_title) ? $pageContent->title : meta_title() !!} @stop
@section('meta-keywords') {!! ($pageContent->meta_keywords) ?
$pageContent->meta_keywords : meta_keywords() !!} @stop
@section('meta-description') {!! ($pageContent->meta_description) ?
$pageContent->meta_description : meta_description() !!} @stop
@section('body-class') inner-page @stop @section('content') @push('styles')
<link rel="stylesheet" href="assets/css/about.css" />
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css"
/>
<style>
    body {
        font-family: "Roboto", sans-serif !important;
    }
</style>
@endpush

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
<section class="hero-second-sec ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-gorn-sec">
                    <h1>{{ $page_meta['abt_sec1_heading'] ?? '' }}</h1>
                    
					{!! isset($page_meta['abt_sec1_text']) ? $page_meta['abt_sec1_text'] : '' !!}
                    
                    <div class="ankr-b">
                        <a href="https://dev.appearls.com/GO-RN/apply-form.html"
                            >APPLY NOW</a
                        >
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="about-sec-img">
                    <img src="assets/images/Untitled-2.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="hero-second-sec2">
    <div class="container">
        <div class="row mission-sec">
            <div class="col-md-6">
                <div class="about-sec-img">
                    <img src="assets/images/img5.png" alt="" />
                </div>
            </div>

            <div class="col-md-6">
                <div class="about-gorn-sec">
                    <h1>{{ $page_meta['abt_sec2_heading'] ?? '' }}</h1>
                    <p>
					{{ isset($page_meta['abt_sec2_text']) ? strip_tags($page_meta['abt_sec2_text']) : '' }}
                    </p>

                    <div class="ankr-b">
                        <a href="https://dev.appearls.com/GO-RN/apply-form.html"
                            >APPLY NOW</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slick-sider-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slide-sec">
                    <h1 class="about-sec2">Our Team</h1>
                    <!-- Slider main container -->
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="flex-direction">
                                    <img src="assets/images/img4.png" alt="" />
                                    <h4 class="text-hover">
                                        Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore
                                        magna aliquam erat volutpat. Ut wisi
                                        enim ad minim veniam, quis nostrud
                                        exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo
                                        consequat.
                                    </h4>
                                    <h1>
                                        Phillip Anthropy
                                    </h1>

                                    <p>CTO @ SWB</p>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex-direction">
                                    <img
                                        src="assets/images/client1.png"
                                        alt=""
                                    />
                                    <h4 class="text-hover">
                                        Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore
                                        magna aliquam erat volutpat. Ut wisi
                                        enim ad minim veniam, quis nostrud
                                        exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo
                                        consequat.
                                    </h4>
                                    <h1>
                                        Jacob Benavides
                                    </h1>

                                    <p>Cheif Success Officer</p>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex-direction">
                                    <img src="assets/images/img2.png" alt="" />
                                    <h4 class="text-hover">
                                        Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore
                                        magna aliquam erat volutpat. Ut wisi
                                        enim ad minim veniam, quis nostrud
                                        exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo
                                        consequat.
                                    </h4>
                                    <h1>
                                        Allison Mendoza, RN, BSN
                                    </h1>

                                    <p>Chief Nursing Officer</p>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex-direction">
                                    <img src="assets/images/img3.png" alt="" />
                                    <h4 class="text-hover">
                                        Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore
                                        magna aliquam erat volutpat. Ut wisi
                                        enim ad minim veniam, quis nostrud
                                        exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo
                                        consequat.
                                    </h4>
                                    <h1>
                                        Brady Hampton
                                    </h1>

                                    <p>Chief Financial Officer</p>
                                </div>
                            </div>
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </div>
                        <div class="swiper-button-next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<h1 class="about-sec">History</h1>

<div class="footer-p-sec">
    <section class="uper-foot-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="foot-sec-img">
                        <div class="flex-cond">
                            <div class="icon-sec">
                                <img src="assets/images/img7.png" alt="" />

                                <h1 class="year-sec">2022</h1>
                            </div>

                            <p>
                                Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit, sed diam nonummy
                            </p>
                            <h2>
                                PROFIT SHARING
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="img-2-sec">
                        <img src="assets/images/Untitled-3.png" alt="" />
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="foot-sec-img2">
                        <div class="flex-cond">
                            <div class="icon-sec">
                                <img src="assets/images/11.png" alt="" />

                                <h1 class="year-sec">2020</h1>
                            </div>

                            <p>
                                Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit, sed diam nonummy
                            </p>
                            <h2>
                                GAIN SHARING
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="img-2-sec">
                        <img src="assets/images/img9.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uper-foot-sec">
        <div class="container">
            <div class="row flex-direction2">
                <div class="col-md-3">
                    <div class="img-work">
                        <img src="assets/images/img8.png" alt="" />
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="color-shade-img">
                        <div class="color-shade-icon-img">
                            <img src="assets/images/13.png" alt="" />
                            <h1 class="year-sec2">2021</h1>
                        </div>

                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy
                        </p>
                        <h2>
                            PAY FOR KNOWLEDGE
                        </h2>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="img-work2">
                        <img src="assets/images/14.png" alt="" />
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="lst-sec-img">
                        <div class="img-16-work">
                            <img src="assets/images/16.png" alt="" />
                            <h1 class="year-sec2">2019</h1>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy
                        </p>
                        <h2>
                            LUMP-SUM BONUS
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@section('footer_script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>

<script>
    $(document).ready(function() {
        // Swiper: Slider
        new Swiper(".swiper-container", {
            loop: true,
            nextButton: ".swiper-button-next",
            prevButton: ".swiper-button-prev",
            slidesPerView: 4,
            paginationClickable: true,
            spaceBetween: 20,
            breakpoints: {
                1920: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
                1028: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 10
                }
            }
        });
    });

    // Slick version 1.5.8
</script>

@stop @endsection
