{{-- * Template Name : Market * --}}
@extends('frontend.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Safina Bay | #1 Islamic Network' !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Safina Bay | #1 Islamic Network' !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Safina Bay | #1 Islamic Network' !!}
@stop
@section('body-class') inner-page market-inner-dt-pg logged-in  @stop
@section('content')


<section>

	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<span>
						<a href="{!! URL::to('/') !!}">Home</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Market</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Electronic Devices</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">I-BOOK Dual Core i7</a>
					</span>

				</div>
			</div>
		</div>
	</div>

</section>

<section class="main-content ptpx-50 pbpx-50">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<div class="product-slider">
					<div class="product-img">
						<i class="halal-ico"></i>
						<figure>
							{{ HTML::image('images/market/product-img.png', 'Safina Bay') }}
						</figure>
					</div>
					<div class="product-thumb">
						<ul>
							<li>
								<figure>
									{{ HTML::image('images/market/product-img.png', 'Safina Bay') }}
								</figure>
							</li>
							<li>
								<figure>
									{{ HTML::image('images/market/product-img-1.png', 'Safina Bay') }}
								</figure>
							</li>
							<li>
								<figure>
									{{ HTML::image('images/market/product-img-2.png', 'Safina Bay') }}
								</figure>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-7">
				<div class="product-dt">
					<h1>I-BOOK Dual Core i7</h1>
					<h4>Brand:  <span>Infocus</span></h4>
					<h4>Categories:  <span>Electronic</span></h4>
					<div class="rating">
						<figure>
							{{ HTML::image('images/market/5-star.png', 'Safina Bay') }}
						</figure>
					</div>

					<h3>$700.00</h3>

					<p>All Exclusive Comes with Marketo Theme. Maore power with Extended Features. Multiple niche demos with huge extensive options</p>

					<div class="qty clearfix">
						 <div class="quantity buttons_added">
							<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
						</div>
					</div>

					<a href="javascript:;" class="primary-btn lg">Add to Cart</a>
				</div>
			</div>
		</div>

		<div class="row product-desc">
			<div class="col-sm-12">
				<ul class="tabs mbpx-22">
					<li><a href="javascript:;" class="active" data-tabc="desc">Description</a></li>
					<li><a href="javascript:;" data-tabc="reviews">Reviews <span>(5)</span></a> </li>
				</ul>
				<hr>
			</div>
			<div class="col-sm-12">
				<div class="tab-content desc" style="display: block;">
					<p>Record smoother, clearer videos-even when you’re on the move. Steady Record 2.0 analyzes each frame to provide smoother playback of your video recordings. Capture higher quality audio with your video recordings with 3 High AOP mics to record clean, lossless audio that matches the quality of your video. Expand your selfie experience with the front-facing 120-degree wide angle lens and get the bigger picture no matter what the subject. This 5MP camera allows you to capture photos and videos with a wider background so you can include more friends in your selfies. <br><br> Record smoother, clearer videos-even when you’re on the move. Steady Record 2.0 analyzes each frame to provide smoother playback of your video recordings. Capture higher quality audio with your video recordings with 3 High AOP mics to record clean. Get more of every moment with Dual Rear Cameras. Featuring a 16 MP Standard-Angle Lens cameransor, f/2.4 low light) camera.<br><br>Create Store-specific attrittbutes on the fly<br> Simple, Configurable (e.g. size, color, etc.), Bundled<br>Downloadable/Digital Products, Virtual Products<br>Enjoy premium audio through wired headphones or speakers for a crisper, fuller playback experience.With a 135-degree perspective, the LG V20 dual rear cameras give you more flexibility than ever to capture the perfect shot.<br><br>Get more of every moment with Dual Rear Cameras. Featuring a 16 MP Standard-Angle Lens camera (75 degrees, 1/2.8″ image sensor, f/1.8 low light) and 8 MP Wide-Angle Lens (135 degrees, 1/4″ image sensor, f/2.4 low light) camera.</p>
				</div>

				<div class="tab-content reviews">
					<p>Record smoother, clearer videos-even when you’re on the move. Steady Record 2.0 analyzes each frame to provide smoother playback of your video recordings. Capture higher quality audio with your video recordings with 3 High AOP mics to record clean, lossless audio that matches the quality of your video. Expand your selfie experience with the front-facing 120-degree wide angle lens and get the bigger picture no matter what the subject. This 5MP camera allows you to capture photos and videos with a wider background so you can include more friends in your selfies. <br><br> Record smoother, clearer videos-even when you’re on the move. Steady Record 2.0 analyzes each frame to provide smoother playback of your video recordings. Capture higher quality audio with your video recordings with 3 High AOP mics to record clean. Get more of every moment with Dual Rear Cameras. Featuring a 16 MP Standard-Angle Lens cameransor, f/2.4 low light) camera.<br><br>Create Store-specific attrittbutes on the fly<br> Simple, Configurable (e.g. size, color, etc.), Bundled<br>Downloadable/Digital Products, Virtual Products<br>Enjoy premium audio through wired headphones or speakers for a crisper, fuller playback experience.With a 135-degree perspective, the LG V20 dual rear cameras give you more flexibility than ever to capture the perfect shot.<br><br>Get more of every moment with Dual Rear Cameras. Featuring a 16 MP Standard-Angle Lens camera (75 degrees, 1/2.8″ image sensor, f/1.8 low light) and 8 MP Wide-Angle Lens (135 degrees, 1/4″ image sensor, f/2.4 low light) camera.</p>
				</div>
				<hr class="mtpx-50">
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="related-sec">
					<div class="row">
						<div class="col-sm-12">
							<h2>Related Products</h2>
						</div>
					</div>
					<div class="row">
						<div class="item">
							<div class="cont">
								<div class="item-img">
									{{ HTML::image('images/market/xpeed-laptop.png', 'Safina Bay') }}
								</div>
								<div class="item-text">
									<h6>accessories</h6>
									<h4>Cotton Square Scarf</h4>
									<p class="price">$30.00</p>
									{{ HTML::image('images/market/star-rating-3.png', 'Safina Bay') }}
								</div>
							</div>
						</div>

						<div class="item">
							<div class="cont">
								<i class="halal-ico"></i>
								<div class="item-img">
									{{ HTML::image('images/market/fea-sec-6.png', 'Safina Bay') }}
								</div>
								<div class="item-text">
									<h6>Electronic Devices</h6>
									<h4>The Holy Quran Speaker</h4>
									<p class="price">$180.00</p>
									{{ HTML::image('images/market/5-star.png', 'Safina Bay') }}
								</div>
							</div>
						</div>

						<div class="item">
							<div class="cont">
								<div class="item-img">
									{{ HTML::image('images/market/fea-sec-7.png', 'Safina Bay') }}
								</div>
								<div class="item-text">
									<h6>Electronic Devices</h6>
									<h4>3D Glasses</h4>
									<p class="price">$200.00</p>
									{{ HTML::image('images/market/star-rating-4.png', 'Safina Bay') }}
								</div>
							</div>
						</div>

						<div class="item">
							<div class="cont">
								<i class="halal-ico"></i>
								<div class="item-img">
									{{ HTML::image('images/market/laptop.png', 'Safina Bay') }}
								</div>
								<div class="item-text">
									<h6>accessories</h6>
									<h4>Jungle Toys For Kids</h4>
									<p class="price">$80.00</p>
									{{ HTML::image('images/market/star-rating-3.png', 'Safina Bay') }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection




