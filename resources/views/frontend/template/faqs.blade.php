{{-- * Template Name : FAQS * --}}
@extends('frontend.master') @section('page-title') {!!
($pageContent->meta_title) ? $pageContent->title : meta_title() !!} @stop
@section('meta-keywords') {!! ($pageContent->meta_keywords) ?
$pageContent->meta_keywords : meta_keywords() !!} @stop
@section('meta-description') {!! ($pageContent->meta_description) ?
$pageContent->meta_description : meta_description() !!} @stop
@section('body-class') inner-page @stop @section('content') @push('styles')
<link rel="stylesheet" type="text/css" href="assets/css/faq.css" />
<style type="text/css">
    .container-fluid.hero-main {
        overflow: hidden;
    }
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

<div class="container-fuild bg">
    <div class="container">
        <div class="row">
            <div class="accordion-container">
                <div class="accordion_set">
                    <div class="select_div">
                        {{ $page_meta['faqs_q1'] ?? '' }}
                        <div class="line lineone"></div>
                        <div class="line linetwo"></div>
                    </div>
                    <div class="content">
                        {!! $page_meta['faqs_ans1'] ?? '' !!}
                    </div>
                </div>
                <div class="accordion_set">
                    <div class="select_div">
                        {{ $page_meta['faqs_q2'] ?? '' }}
                        <div class="line lineone"></div>
                        <div class="line linetwo"></div>
                    </div>
                    <div class="content">
                        {!! $page_meta['faqs_ans2'] ?? '' !!}
                    </div>
                </div>
                <div class="accordion_set">
                    <div class="select_div">
                        {{ $page_meta['faqs_q3'] ?? '' }}
                        <div class="line lineone"></div>
                        <div class="line linetwo"></div>
                    </div>
                    <div class="content">
                        {!! $page_meta['faqs_ans3'] ?? '' !!}
                    </div>
                </div>
                <div class="accordion_set">
                    <div class="select_div">
                        {{ $page_meta['faqs_q4'] ?? '' }}
                        <div class="line lineone"></div>
                        <div class="line linetwo"></div>
                    </div>
                    <div class="content">
                        {!! $page_meta['faqs_ans4'] ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- button -->

        <div class="button-div">
            <button class="custom-btn btn-3 "><span>View More</span></button>
        </div>

        <!-- button close -->
    </div>
</div>

@endsection



@section('footer_script')

<script type="text/javascript">
    // Uncomment the currently commented out code to enable only one section to be open at a time. 

    jQuery(document).ready(function () {
      //   open first section
      jQuery(".accordion_set > .select_div").first().addClass('active');
      jQuery('.lineone').first().addClass("rotateone");
      jQuery('.linetwo').first().addClass("rotateone");
      jQuery(".content").first()
        .slideDown(200);
      //   end open first section
      jQuery(".accordion_set > .select_div").on("click", function () {
        if (jQuery(this).hasClass("active")) {
          jQuery(this).removeClass("active");
          jQuery(this)
            .siblings(".content")
            .slideUp(200);
          jQuery(this)
            .siblings(".content")
          jQuery(this).find("div").removeClass("rotateone")
        } else {
          jQuery(".accordion_set > .select_div div")
          // .removeClass("rotateone")
          jQuery(this)
            .find("div")
            .addClass("rotateone");
          //   jQuery(".accordion_set > .select_div").removeClass("active");
          jQuery(this).addClass("active");
          // jQuery(".content").slideUp(200);   
          jQuery(this)
            .siblings(".content")
            .slideDown(200);
        }
      });
    });
  </script>

@stop