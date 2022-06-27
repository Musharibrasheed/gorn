{{-- * Template Name : Post * --}}
@extends('frontend.master') @section('page-title') {} @stop
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
                                        Articles
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




<section class="hero-second-sec2">
    <div class="container">
        <div class="row mission-sec">
          

            <div class="col-md-12">
                <div class="about-gorn-sec">
          

                    <?php
                    $counter=1;
                    foreach($pageContent as $key => $value)
                    {
                     ?>
                         <a href="{{$value->slug}}" style="text-decoration: none;"><h1 style="font-size: 25px;padding: 10px;"><?php echo $counter;?> - {{$value->title}}</h1></a>






                    <?php  $counter++;} ?>

                    
                 

                 
                </div>
            </div>
        </div>
    </div>
</section>




@section('footer_script')



@stop @endsection
