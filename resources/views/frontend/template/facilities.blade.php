{{-- * Template Name : Facilities * --}}
@extends('frontend.master') @section('page-title') {!!
($pageContent->meta_title) ? $pageContent->meta_title : meta_title() !!} @stop
@section('meta-keywords') {!! ($pageContent->meta_keywords) ?
$pageContent->meta_keywords : meta_keywords() !!} @stop
@section('meta-description') {!! ($pageContent->meta_description) ?
$pageContent->meta_description : meta_description() !!} @stop
@section('body-class') home-page @stop 
@push('styles')
    <link rel="stylesheet" href="assets/css/facilities.css" />
    <style>

        body{
            font-family: 'Roboto', sans-serif !important;
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
<div class="container-fluid floatpools">
		<div class="container">
			<div class="row">

				<div class="col-md-12">
					<div class="top-heading">
						<h1>{{ $page_meta['fac_sec1_heading'] ?? '' }}</h1>
						<p>{{ $page_meta['fac_sec1_tagline'] ? strip_tags($page_meta['fac_sec1_tagline']) : '' }}</p>
					</div>
				</div>

			</div>


			<div class="row for-1-icon-style">

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
                                                                <img src="assets/images/dynamic-purple-icon.png"
                                                                    alt="hover effect">
                                                                <img src="assets/images/dynamic-white-icon.png"
                                                                    alt="hover effect">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- contant main -->

                                                <div class="contant-main-icon-box">
                                                    <div class="for-icon-box-heading">
                                                        <h6 class="for-icon-box-h6">{{ $page_meta['fac_sec1_bx1_heading'] ?? '' }}</h6>
                                                    </div>
                                                    <div class="for-icon-box-pera">
                                                        <p class="for-icon-box-p">
                                                            {!! $page_meta['fac_sec1_bx1_text'] ? strip_tags($page_meta['fac_sec1_bx1_text']) : '' !!}</p>
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
                                                                <img src="assets/images/human-saving-purple-icon.png"
                                                                    alt="hover effect">
                                                                <img src="assets/images/human-saving-white-icon.png"
                                                                    alt="hover effect">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- contant main -->

                                                <div class="contant-main-icon-box">
                                                    <div class="for-icon-box-heading">
                                                        <h6 class="for-icon-box-h6"> {{ $page_meta['fac_sec1_bx2_heading'] ?? '' }}</h6>
                                                    </div>
                                                    <div class="for-icon-box-pera">
                                                        <p class="for-icon-box-p"> {{ $page_meta['fac_sec1_bx2_text'] ? strip_tags($page_meta['fac_sec1_bx2_text']) : '' }}</p>
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
                                                                <img src="assets/images/form-done-purple-icon.png"
                                                                    alt="hover effect">
                                                                <img src="assets/images/form-done-white-icon.png"
                                                                    alt="hover effect">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- contant main -->

                                                <div class="contant-main-icon-box">
                                                    <div class="for-icon-box-heading">
                                                        <h6 class="for-icon-box-h6">{{ $page_meta['fac_sec1_bx3_heading'] ?? '' }}</h6>
                                                    </div>
                                                    <div class="for-icon-box-pera">
                                                        <p class="for-icon-box-p">{!! $page_meta['fac_sec1_bx3_text'] ? strip_tags($page_meta['fac_sec1_bx3_text']) : '' !!}</p>
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
                                                                <img src="assets/images/health-mobile-purple-icon.png"
                                                                    alt="hover effect">
                                                                <img src="assets/images/health-mobile-white-icon.png"
                                                                    alt="hover effect">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- contant main -->

                                                <div class="contant-main-icon-box">
                                                    <div class="for-icon-box-heading">
                                                        <h6 class="for-icon-box-h6">{{ $page_meta['fac_sec1_bx4_heading'] ?? '' }}</h6>
                                                    </div>
                                                    <div class="for-icon-box-pera">
                                                        <p class="for-icon-box-p">{!! $page_meta['fac_sec1_bx4_text'] ? strip_tags($page_meta['fac_sec1_bx4_text']) : '' !!}</p>
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
                                                                <img src="assets/images/check-purple-icon.png"
                                                                    alt="hover effect">
                                                                <img src="assets/images/check-white-icon.png"
                                                                    alt="hover effect">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- contant main -->

                                                <div class="contant-main-icon-box">
                                                    <div class="for-icon-box-heading">
                                                        <h6 class="for-icon-box-h6">{{ $page_meta['fac_sec1_bx5_heading'] ?? '' }}</h6>
                                                    </div>
                                                    <div class="for-icon-box-pera">
                                                        <p class="for-icon-box-p">{!! $page_meta['fac_sec1_bx5_text'] ? strip_tags($page_meta['fac_sec1_bx5_text']) : '' !!}</p>
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
                                                                <img src="assets/images/invers-purple-icon.png"
                                                                    alt="hover effect">
                                                                <img src="assets/images/invers-white-icon.png"
                                                                    alt="hover effect">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- contant main -->

                                                <div class="contant-main-icon-box">
                                                    <div class="for-icon-box-heading">
                                                        <h6 class="for-icon-box-h6">{{ $page_meta['fac_sec1_bx6_heading'] ?? '' }}</h6>
                                                    </div>
                                                    <div class="for-icon-box-pera">
                                                        <p class="for-icon-box-p">{{ $page_meta['fac_sec1_bx6_text'] ? strip_tags($page_meta['fac_sec1_bx6_text']) : '' }}</p>
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


				<div class="view-more">
					<a href="#">View More</a>
				</div>
			</div>
		</div>
	</div>





	<div class="container-fluid get-section" style="background-image: url({{ $page_meta['fac_sec2_image'] }});">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="get-inner-section">
						<h1>{{ $page_meta['fac_sec2_heading'] ?? '' }}</h1>
						<p>{{ $page_meta['fac_sec2_text'] ? strip_tags($page_meta['fac_sec2_text']) : '' }}</p>
						<a href="#">Schedule Demo</a>
					</div>
				</div>
			</div>
		</div>
	</div>







	<div class="container-fluid partner-section">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="partner-section-image">
						<img src="{!! asset($page_meta['fac_sec3_image']) !!}">
					</div>
				</div>

				<div class="col-md-5 bg-imager">
					<div class="partner-section-content">
                    {!! $page_meta['fac_sec3_text'] ?? '' !!}


						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>





	<div class="container-fluid cascade-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="top-heading">
						<h1>{{ $page_meta['fac_sec4_heading'] ?? '' }}</h1>
						<p>{{ $page_meta['fac_sec4_text'] ? strip_tags($page_meta['fac_sec4_text']) : '' }} </p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="image-box">
						<img src="assets/images/humans-icon.png">
						<p>In House (Core House)<br>Float Pool</p>
					</div>
				</div>


				<div class="col-md-4">
					<div class="image-box box-second">
						<img src="assets/images/circulate.png">
						<p>In Network<br>Float Pool</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="image-box">
						<img class="homies" src="assets/images/homies.png">
						<p>Agency</p>
					</div>
				</div>





			</div>
		</div>
	</div>





	<div class="container-fluid what-people-say">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="what-inner-section">
						<h1>What People Are Saying</h1>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing </p>
					</div>

					<div class="testimonial">

						<div class="section-5-hcare">
							<div class="container">
								<div class="content-slider">
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
					</div>


				</div>
			</div>
		</div>
	</div>





	<div class="container-fluid learn-more">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="learn-more-section">
						<h1>{{ $page_meta['fac_sec5_heading'] ?? '' }}</h1>
					</div>
				</div>

				<div class="col-md-6 video-bg-imager">
					<div class="learn-more-image">
						<div class="">
                            <div class="partner-section-content">
                                {!! $page_meta['fac_sec5_text'] ?? '' !!}
                            </div>
                        </div>
					</div>
				</div>

				<div class="col-md-6 for-second-section-padding">
					<div class="learn-more-video">

						<iframe width="420" height="345" src="{{ $pageContent->page_video ?? '' }}"></iframe>

					</div>
				</div>

			</div>
		</div>
	</div>




	<div class="container-fluid what-goingon-say">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="what-goingon-section">
						<h1>What's Going On</h1>
					</div>
				</div>
                <?php $first_article = (!empty($articles) && $articles->count() > 0 ) ? $articles->first() : '' ?>
                @if( !empty($articles) && $articles->count() > 0)
				<div class="col-md-6">
                    <div class="big-post">
                            <img src="{{ $first_article->image ? asset($first_article->image) : '' }}" />
                            <ul>
                                <li><a href="javascript:;">{{ date('M d, Y', strtotime($first_article->created_at) ) }}</a></li>
                                <!-- <li><a href="#">Education</a></li> -->
                                <!-- <li><a href="#">1 Comment</a></li> -->
                            </ul>
                            <h5 class="h5-margin">{{ $first_article->title ?? ''}}</h5>
                    </div>
				</div>
                @endif
				<div class="col-md-6">
					<div class="row">
                    @if( !empty($articles) && $articles->count() > 0)
                        @foreach( $articles->skip(1) as $key => $article )
                            <div class="col-md-6">
                                <div class="mini-post">
                                    <img src="{{ asset($article->image ?? '') }}" />
                                    <ul>
                                        <li><a href="#">{{ date('M d, Y', strtotime($article->created_at) ) }}</a></li>
                                        <!-- <li><a href="#">Education</a></li> -->
                                        <!-- <li><a href="#">1 Comment</a></li> -->
                                    </ul>
                                    <h5>{{ $article->title ?? ''}}</h5>
                                </div>
                            </div>
                        @endforeach
                    @endif


					</div>
				</div>

				<div class="view-more postcs">
					<a href="#">View More</a>
				</div>
			</div>
		</div>
	</div>
@section('footer_script')

<script type="text/javascript">
        // const hamburger = document.querySelector(".hamburger");
        // const navMenu = document.querySelector(".nav-menu");

        // hamburger.addEventListener("click", () => {
        //     hamburger.classList.toggle("active");
        //     navMenu.classList.toggle("active");
        // });

      
    </script>

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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
	<script>
		var prevButton =
			'<button type="button" data-role="none" class="slick-prev" aria-label="prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" version="1.1"><path fill="#FFFFFF" d="M 16,16.46 11.415,11.875 16,7.29 14.585,5.875 l -6,6 6,6 z" /></svg></button>',
			nextButton =
				'<button type="button" data-role="none" class="slick-next" aria-label="next"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#FFFFFF" d="M8.585 16.46l4.585-4.585-4.585-4.585 1.415-1.415 6 6-6 6z"></path></svg></button>';

		$(".single-item").slick({
			infinite: true,
			dots: false,
			autoplay: true,
			autoplaySpeed: 4000,
			speed: 500,
			cssEase: "ease-in-out",
		});

		$(".quote-container").mousedown(function () {
			$(".single-item").addClass("dragging");
		});
		$(".quote-container").mouseup(function () {
			$(".single-item").removeClass("dragging");
		});
	</script>

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
