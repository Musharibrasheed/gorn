{{-- * Template Name : Healthcare Professionals * --}}
@extends('frontend.master') @section('page-title') {!!
($pageContent->meta_title) ? $pageContent->meta_title : meta_title() !!} @stop
@section('meta-keywords') {!! ($pageContent->meta_keywords) ?
$pageContent->meta_keywords : meta_keywords() !!} @stop
@section('meta-description') {!! ($pageContent->meta_description) ?
$pageContent->meta_description : meta_description() !!} @stop
@section('body-class') home-page @stop 
@push('styles')
    <link rel="stylesheet" href="assets/css/health-care.css" />
    <style type="text/css">
    li.nav-item.active-healthcarepro a {
      border-bottom: 2px solid #fff;
      transition: 0.5s;
      border-radius: 1px;
    }

    /*.slide.slick-slide.slick-current.slick-active{
  width: 200px !important;
  }*/
  </style>
@endpush
@section('content')
<?php 
// echo '<pre>'; // print_r($page_meta); // exit; ?>
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

<!-- section 2 start -->
<div class="section-2-hcare-1">
    <div class="container">
        <div class="row-sec2">
            <div class="column1-sec2">
                @if( !empty($page_meta['hc_section1_image']) )
                <div class="col-1-image-sec2">
                    <img src="{{ asset($page_meta['hc_section1_image']) }}" alt="" />
                </div>
                @endif
                <div class="col-1-icons sec2">
                    <div class="google-icon-col-1">
                        <a href="#">
                            <i class="fa-brands fa-google-play"></i> Google Play
                        </a>
                    </div>

                    <div class="app-icon-col-1">
                        <a href="#">
                            <i class="fa-brands fa-apple"></i> App Store
                        </a>
                    </div>
                </div>
            </div>
            <div class="column2-sec2">
                <div class="content-col-2">
                    <h1>{{ $page_meta['hc_sec1_heading'] ?? '' }}</h1>
                    <p>
                    {{ $page_meta['hc_sec1_text'] ? strip_tags($page_meta['hc_sec1_text']) : '' }}
                    </p>
                    <div class="btn-col-2-sec2">
                        <a href="#">Apply Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section 2 end -->

<!-- section 3 start -->

<div class="section-3-hcare">
    <div class="cont ">
        <div class="slideshow-container">
            <div class="mySlides-fade container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="for-slider-contant">
                            <section class="column-1-sec3">
                                <h5>{{ $page_meta['hc_sec2_tagline'] ?? '' }}</h5>
                                <h1>
                                {{ $page_meta['hc_sec2_heading'] ?? '' }}
                                </h1>
                                <p>
                                {{ $page_meta['hc_sec2_text'] ? strip_tags($page_meta['hc_sec2_text']) : '' }}
                                </p>
                                <section class="btn-col-2-sec2">
                                    <a href="#">Apply Here</a>
                                </section>
                            </section>
                        </div>
                    </div>

                    <div class="col-md-6">
                    @if( !empty($page_meta['hc_section2_image']) )
                        <div class="for-slider-image">
                            <img src="{{ asset($page_meta['hc_section2_image']) }}" alt="" />
                        </div>
                    @endif
                    </div>
                </div>
            </div>

            <!-- HTML -->

            <div class="container forslider-content-style">
                <section class="logos-slider slider">
                    <div class="slide">
                        <div class="tabsWrapper">
                            <ul class="tabs">
                                <li data-id="contentOne" class="active">RNs</li>
                            </ul>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="tabsWrapper">
                            <ul class="tabs">
                                <li data-id="contentTwo">LVNs/LPNs</li>
                            </ul>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="tabsWrapper">
                            <ul class="tabs">
                                <li data-id="contentThree">CNAs</li>
                            </ul>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="tabsWrapper">
                            <ul class="tabs">
                                <li data-id="contentFour">
                                    Nurse Practitioners
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="tabsWrapper">
                            <ul class="tabs">
                                <li data-id="contentOne" class="active">RNs</li>
                            </ul>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="tabsWrapper">
                            <ul class="tabs">
                                <li data-id="contentTwo">LVNs/LPNs</li>
                            </ul>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="tabsWrapper">
                            <ul class="tabs">
                                <li data-id="contentThree">CNAs</li>
                            </ul>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="tabsWrapper">
                            <ul class="tabs">
                                <li data-id="contentFour">
                                    Nurse Practitioners
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <!-- HTML-END -->
        </div>
    </div>
</div>

<!-- section 3 end -->

<!-- section 4 start -->
<div class="section-4-hcare">
    <div class="container cont-width">
        <div class="row-1-s4">
            <div class="col-1-s4">
                <div class="main-content">
                    <div class="content-s4">
                        <h1>{{ $page_meta['hc_sec3_heading'] ?? '' }}</h1>
                        <p>
                            {{ $page_meta['hc_sec3_text'] ? strip_tags($page_meta['hc_sec3_text']) : '' }}
                        </p>
                    </div>

                    <div class="content-box-inner">
                        <div class="row-1-inner-box">
                            <div class="col-1-inner">
                                <p>SALES & MARKETING CORDINATOR</p>
                                <p>
                                    <i class="fa-solid fa-earth-americas"></i
                                    >Germaany, Hanover
                                </p>
                                <p><i class="fa-solid fa-lock"></i>Expired</p>
                            </div>
                            <div class="col-2-inner">
                                <p>
                                    <i class="fa-solid fa-money-bill-1"></i
                                    >$31000
                                </p>
                                <p>
                                    <i class="fa-solid fa-clock"></i>Full Time
                                </p>
                            </div>
                            <div class="col-3-inner">
                                <div class="btn-col-2-sec2">
                                    <a href="#">View Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="row-1-inner-box">
                            <div class="col-1-inner">
                                <p>CAR <span>Featured</span></p>
                                <p>
                                    <i class="fa-solid fa-earth-americas"></i
                                    >Netherlaands, Arnhem
                                </p>
                            </div>

                            <div class="col-2-inner">
                                <p>
                                    <i class="fa-solid fa-money-bill-1"></i
                                    >$31000
                                </p>
                                <p>
                                    <i class="fa-solid fa-clock"></i>Part Time
                                </p>
                            </div>
                            <div class="col-3-inner">
                                <div class="btn-col-2-sec2">
                                    <a href="#">View Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="row-1-inner-box">
                            <div class="col-1-inner">
                                <p>SALES & MARKETING CORDINATOR</p>
                                <p>
                                    <i class="fa-solid fa-earth-americas"></i
                                    >Germaany, Hanover
                                </p>
                                <p><i class="fa-solid fa-lock"></i>Expired</p>
                            </div>
                            <div class="col-2-inner">
                                <p>
                                    <i class="fa-solid fa-money-bill-1"></i
                                    >$31000
                                </p>
                                <p>
                                    <i class="fa-solid fa-clock"></i>Full Time
                                </p>
                            </div>
                            <div class="col-3-inner">
                                <div class="btn-col-2-sec2">
                                    <a href="#">View Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="row-1-inner-box">
                            <div class="col-1-inner">
                                <p>SALES & MARKETING CORDINATOR</p>
                                <p>
                                    <i class="fa-solid fa-earth-americas"></i
                                    >Germaany, Hanover
                                </p>
                                <p><i class="fa-solid fa-lock"></i>Expired</p>
                            </div>
                            <div class="col-2-inner">
                                <p>
                                    <i class="fa-solid fa-money-bill-1"></i
                                    >$31000
                                </p>
                                <p>
                                    <i class="fa-solid fa-clock"></i>Full Time
                                </p>
                            </div>
                            <div class="col-3-inner">
                                <div class="btn-col-2-sec2">
                                    <a href="#">View Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2-s4">
                <div class="content-inner-s4">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe
                                width="100%"
                                height="100%"
                                id="gmap_canvas"
                                src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0"
                                scrolling="no"
                                marginheight="0"
                                marginwidth="0"
                            ></iframe
                            ><a href="https://www.whatismyip-address.com"></a
                            ><br />
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 600px;
                                }</style
                            ><a href="https://www.embedgooglemap.net"
                                >insert google map into website</a
                            >
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 600px;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section 4 end -->

<!-- section 5 start -->

<div class="section-5-hcare">
                <div class="container">
                    <div class="content-slider">
                        <h1>Testimonials From Our Clients</h1>
                        <p class="plorem">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing
                        </p>
                        <div class="slider single-item">
                            @if( !empty($testimonials) && $testimonials->count() > 0 )
                                @foreach( $testimonials as $key => $testimonial )
                                    <div class="slider-1">
                                        <div class="slider-inner">
                                            <h5>{{ $testimonial->title ?? '' }}</h5>
                                            {!! $testimonial->client_comments ?? '' !!}
                                            <div class="image-avatar">
                                                <img src="{{ !empty($testimonial->image) ? asset($testimonial->image) : '' }}" alt="" />
                                            </div>
                                            <h5>{{ $testimonial->client_name ?? '' }}</h5>
                                            <p>{{ $testimonial->client_profession ?? '' }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>

<!-- section 5 end -->

<!-- section 6 start -->
<div class="section-6-hcare">
    <div class="container sec-6-container">
        <div class="content-inner-s6">
            <h1>{{ $page_meta['hc_sec4_heading'] ?? '' }}</h1>
            <p class="p-btm">
                {{ $page_meta['hc_sec4_tagline'] ?? '' }}
            </p>
            <!-- icon section -->

            <div class="for-icon-section-bg">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <!-- icon 1 -->

                            <div class="col-md-4">
                                <div class="for-icon-main-section">
                                    <div class="for-icon-inner-section">
                                        <div class="for-icon-section-content">
                                            <div
                                                class="for-icon-box box for-icon-box-1"
                                            >
                                                <div class="for-icon-box-img">
                                                    <div class="box-wrap">
                                                        <div
                                                            class="box-wrap-image"
                                                        >
                                                            <div class="img">
                                                                <img
                                                                    src="assets/images/health-mobile-purple-icon.png"
                                                                    alt="hover effect"
                                                                />
                                                                <img
                                                                    src="assets/images/health-mobile-white-icon.png"
                                                                    alt="hover effect"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- contant main -->

                                                <div
                                                    class="contant-main-icon-box"
                                                >
                                                    <div
                                                        class="for-icon-box-heading"
                                                    >
                                                        <h6
                                                            class="for-icon-box-h6"
                                                        >
                                                        {{ $page_meta['hc_sec4_bx1_heading'] ?? '' }}
                                                        </h6>
                                                    </div>
                                                    <div
                                                        class="for-icon-box-pera"
                                                    >
                                                        <p
                                                            class="for-icon-box-p"
                                                        >
                                                        {{ $page_meta['hc_sec4_bx1_text'] ? strip_tags($page_meta['hc_sec4_bx1_text']) : '' }}
                                                        </p>
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
                                            <div
                                                class="for-icon-box box for-icon-box-2"
                                            >
                                                <div class="for-icon-box-img">
                                                    <div class="box-wrap">
                                                        <div
                                                            class="box-wrap-image"
                                                        >
                                                            <div class="img">
                                                                <img
                                                                    src="assets/images/shadule-check-purple-icon.png"
                                                                    alt="hover effect"
                                                                />
                                                                <img
                                                                    src="assets/images/shadule-check-white-icon.png"
                                                                    alt="hover effect"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- contant main -->

                                                <div
                                                    class="contant-main-icon-box"
                                                >
                                                    <div
                                                        class="for-icon-box-heading"
                                                    >
                                                        <h6
                                                            class="for-icon-box-h6"
                                                        >
                                                        {{ $page_meta['hc_sec4_bx2_heading'] ?? '' }}
                                                        </h6>
                                                    </div>
                                                    <div
                                                        class="for-icon-box-pera"
                                                    >
                                                        <p
                                                            class="for-icon-box-p"
                                                        >
                                                        {{ $page_meta['hc_sec4_bx2_text'] ? strip_tags($page_meta['hc_sec4_bx2_text']) : '' }}
                                                        </p>
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
                                            <div
                                                class="for-icon-box box for-icon-box-3"
                                            >
                                                <div class="for-icon-box-img">
                                                    <div class="box-wrap">
                                                        <div
                                                            class="box-wrap-image"
                                                        >
                                                            <div class="img">
                                                                <img
                                                                    src="assets/images/form-done-purple-icon.png"
                                                                    alt="hover effect"
                                                                />
                                                                <img
                                                                    src="assets/images/form-done-white-icon.png"
                                                                    alt="hover effect"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- contant main -->

                                                <div
                                                    class="contant-main-icon-box"
                                                >
                                                    <div
                                                        class="for-icon-box-heading"
                                                    >
                                                        <h6
                                                            class="for-icon-box-h6"
                                                        >
                                                        {{ $page_meta['hc_sec4_bx3_heading'] ?? '' }}
                                                        </h6>
                                                    </div>
                                                    <div
                                                        class="for-icon-box-pera"
                                                    >
                                                        <p
                                                            class="for-icon-box-p"
                                                        >
                                                        {{ $page_meta['hc_sec4_bx3_text'] ? strip_tags($page_meta['hc_sec4_bx3_text']) : '' }}
                                                        </p>
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
            <div class="btn-col-2-sec2 s6-btn">
                <a href="#">Apply Here</a>
            </div>
        </div>
    </div>
</div>

<!-- section 6 end -->

<!-- section 7 start -->
<div class="section-7-hcare">
    <div class="container-fluid what-goingon-say">
        <div class="container sec-7-container">
            <div class="col-md-12">
                <div class="what-goingon-section">
                    <h1 class="clr">Articles</h1>
                </div>
            </div>
            <div class="flx-s7">
                <?php 

                $first_article = $posts->first(); 
      
                   
                   $first_post_image="";     

                foreach($posts as $key => $first_post)
                {

                    $first_post_image= $first_post->page_video;
                    break;
                }

                ?>
                @if( !empty($posts) && $posts->count() > 0)
                <div class="content-bx-1">
                    <div class="col-md-6 bx-1">
                        <div class="big-post">
                            <a href="https://dev.appearls.com/appear/public/article/{{ $first_article->slug  }}">
                            <img src="{{ $first_post_image ? asset($first_post_image) : '' }}" />
                        </a>
                            <ul>
                                <li><a href="javascript:;">{{ date('M d, Y', strtotime($first_article->created_at) ) }}</a></li>
                                <!-- <li><a href="#">Education</a></li> -->
                                <!-- <li><a href="#">1 Comment</a></li> -->
                            </ul>
                            <h5 class="h5-margin">{{ $first_article->title ?? ''}}</h5>
                        </div>
                    </div>
                </div>
                @endif
                @if( !empty($posts) && $posts->count() > 0)
                <div class="content-bx-2">
                    <div class="col-md-6 bx-3">
                        <div class="row">
                            @foreach( $posts->skip(1) as $key => $article )
                            <div class="col-md-6">
                                <div class="mini-post">
                                    <a href="https://dev.appearls.com/appear/public/article/{{ $article->slug  }}"><img src="{{ asset($article->page_video ?? '') }}" /></a>
                                    <ul>
                                        <li><a href="https://dev.appearls.com/appear/public/article/{{ $article->slug  }}">{{ date('M d, Y', strtotime($article->created_at) ) }}</a></li>
                                        <!-- <li><a href="#">Education</a></li> -->
                                        <!-- <li><a href="#">1 Comment</a></li> -->
                                    </ul>
                                    <h5>{{ $article->title ?? ''}}</h5>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <div class="btn-col-2-sec2 s6-btn">
                <a href="https://dev.appearls.com/appear/public/showarticles">View More</a>
            </div>
        </div>
    </div>
</div>

@section('footer_script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script>


$('.logos-slider').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1500,
  arrows: true,
  dots: false,
  pauseOnHover: false,
  responsive: [{
    breakpoint: 768,
    settings: {
      slidesToShow: 3
    }
  }, {
    breakpoint: 520,
    settings: {
      slidesToShow: 2
    }
  }]
});
</script>
@stop


@endsection
