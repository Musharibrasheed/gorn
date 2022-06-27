{{-- * Template Name : Staffing * --}}
@extends('frontend.master') @section('page-title') {!!
($pageContent->meta_title) ? $pageContent->meta_title : meta_title() !!} @stop
@section('meta-keywords') {!! ($pageContent->meta_keywords) ?
$pageContent->meta_keywords : meta_keywords() !!} @stop
@section('meta-description') {!! ($pageContent->meta_description) ?
$pageContent->meta_description : meta_description() !!} @stop
@section('body-class') home-page @stop 
@push('styles')
    <link rel="stylesheet" href="assets/css/staffing.css" />
    <style> body { background-color: #fff} </style>
@endpush
@section('content')


<!-- section 2 start -->
<div class="container-fuild bg1">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
 				<div class="Healthcare-suffering">
 					<h1>{{ $pageContent->title ?? '' }}</h1>
 					<p class="understand">{{ $pageContent->content ? strip_tags($pageContent->content) : '' }}</p>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>


<div class="container-fuild bg-icons">


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="suffering-solution">
				<h1>{{ $page_meta['staff_sec1_heading'] ?? '' }}</h1>
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
                                                                <img src="assets/images/sheet-icon.png"
                                                                    alt="hover effect">
                                                                <img src="assets/images/sheet-icon-white.png"
                                                                    alt="hover effect">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- contant main -->

                                                <div class="contant-main-icon-box">
                                                    <div class="for-icon-box-heading">
                                                        <h6 class="for-icon-box-h6">{{ $page_meta['staff_sec1_bx1_heading'] ?? '' }}</h6>
                                                    </div>
                                                    <div class="for-icon-box-pera">
                                                        <p class="for-icon-box-p">{{ $page_meta['staff_sec1_bx1_text'] ? strip_tags($page_meta['staff_sec1_bx1_text']) : '' }}</p>
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
                                                                <img src="assets/images/icon2.png"
                                                                    alt="hover effect">
                                                                <img src="assets/images/icon2-white.png"
                                                                    alt="hover effect">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- contant main -->

                                                <div class="contant-main-icon-box">
                                                    <div class="for-icon-box-heading">
                                                        <h6 class="for-icon-box-h6">{{ $page_meta['staff_sec1_bx2_heading'] ?? '' }}</h6>
                                                    </div>
                                                    <div class="for-icon-box-pera">
                                                        <p class="for-icon-box-p">{{ $page_meta['staff_sec1_bx2_text'] ? strip_tags($page_meta['staff_sec1_bx2_text']) : '' }}</p>
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
                                                                <img src="assets/images/hand-on-click-purple.png"
                                                                    alt="hover effect">
                                                                <img src="assets/images/hand-on-click-white.png"
                                                                    alt="hover effect">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- contant main -->

                                                <div class="contant-main-icon-box">
                                                    <div class="for-icon-box-heading">
                                                        <h6 class="for-icon-box-h6">{{ $page_meta['staff_sec1_bx3_heading'] ?? '' }}</h6>
                                                    </div>
                                                    <div class="for-icon-box-pera">
                                                        <p class="for-icon-box-p">{{ $page_meta['staff_sec1_bx3_text'] ? strip_tags($page_meta['staff_sec1_bx3_text']) : '' }}</p>
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

<!-- complete section -->

<div class="container-fuild">
	<div class="py-5">
    <div class="row-two-boxes">
      <!-- DEMO 1 Item-->
      <div class="col-md-6">
        <div class="hover hover-1 text-white rounded"><img src="assets/images/img1.jpg" alt="">
          <div class="hover-overlay over-12"></div>
          <div class="hover-1-content px-5 py-4">
            <h3 class="hover-1-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">{{ $page_meta['staff_sec2_bx1_heading'] ?? '' }}</span></h3>
            <p class="hover-1-description font-weight-light mb-0">{{ $page_meta['staff_sec2_bx1_text'] ? strip_tags($page_meta['staff_sec2_bx1_text']) : '' }} </p>
          </div>
        </div>
      </div>
      <!-- DEMO 1 Item-->
      <div class="col-md-6">
        <div class="hover hover-1 text-white rounded"><img src="assets/images/img2.jpg" alt="">
          <div class="hover-overlay over-12"></div>
          <div class="hover-1-content px-5 py-4">
            <h3 class="hover-1-title text-uppercase font-weight-bold mb-0">
                <span class="font-weight-light">{{ $page_meta['staff_sec2_bx2_heading'] ?? '' }}</span>
                <p class="hover-1-description font-weight-light mb-0">{{ $page_meta['staff_sec2_bx2_text'] ? strip_tags($page_meta['staff_sec2_bx2_text']) : '' }} </p>
            </h3>
           
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- section close -->






<div class="d-flex flex-d-c ">
  <div class="col-md-6 img-1">

      <img src="{!! $page_meta['staff_sec3_image'] ?? '' !!}" />
    </div>
  <!--  image left  -->
  <div class="container align-items-1">
  
    <!-- /.col-md-6 -->
    <div class="">

      <div class="row align-items-center h-100">
        <div >
        {!! $page_meta['staff_sec3_text'] ?? '' !!}

        </div>
      </div>

    </div>
   
</div>
</div>

<!-- Master booking section close -->

<!-- Analytics -->

<div class="container-fuild d-flex">
	
	<div class="container">
		<div class="row" >
		<div class="col-md-6">
			<div class="main-analytics">
			<div class="analytics">
                {!! $page_meta['staff_sec4_text'] ?? '' !!}
			</div>
			</div>	
	</div>

	<div class="img-1 col-md-6">
		
			<img src="{!! $page_meta['staff_sec4_image'] ?? '' !!}" width="67%">
		
	</div>

	</div>
	</div>

</div>
@section('footer_script')

</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
    <!-- header script End -->
  
    <!-- header Dropdown menu script -->
  
    <script type="text/javascript">
        $(document).ready(function () {
            $(".Menu-button").click(function () {
                $(".dropdown a").removeClass("clicked");
                $(".dropdown a").children("span").removeClass("clicked");
                $(".arrow").toggleClass("open");
                $(".dropdown").toggleClass("open");
            });
  
            $(".dropdown a").click(function () {
                $(".dropdown a").removeClass("clicked");
                $(".dropdown a").children("span").removeClass("clicked");
                $(this).toggleClass("clicked"); $(this).children("span").toggleClass("clicked");
            });
        });
    </script>
  
    <!-- header Dropdown script End -->

        <!-- hover image script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript">

        $(".box").on({
            mouseover: function () {
                $(this).find("img:nth-child(1)").stop().animate({ opacity: 0 }, 500);
                $(this).find("img:nth-child(2)").stop().animate({ opacity: 1 }, 500);
            }, mouseout: function () {
                $(this).find("img:nth-child(1)").stop().animate({ opacity: 1 }, 500);
                $(this).find("img:nth-child(2)").stop().animate({ opacity: 0 }, 500);
            }
        });
    </script>

@stop


@endsection
