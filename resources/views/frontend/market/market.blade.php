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
@section('body-class') inner-page market-pg logged-in  @stop
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
				</div>
			</div>
		</div>
	</div>

</section>

<section class="main-content">
	<div class="container">
		<div class="top-sec">
			<div class="row">
				<div class="col-sm-3">
					<div class="primary-btn bx">
						<i class="fa fa-list" aria-hidden="true"></i>
						<select>
							<option>All Categories</option>
						</select>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="search-bar cat-srch">
						<input type="text" name="search" placeholder="Search...">
						<select>
							<option>All Categories</option>
						</select>
						<button><i class="fa fa-search"></i></button>
					</div>
				</div>
			</div>
		</div>

		<div class="main-banner">
			<div class="row">
				<div class="col-sm-8">
					<div class="ban-lft" style="background-image: url('images/market-banner-left.jpg');"></div>
				</div>
				<div class="col-sm-4">
					<div class="ban-rft" style="background-image: url('images/market-banner-right.jpg');"></div>
				</div>
			</div>
		</div>

		<div class="top-cat">
			<div class="row">
				<div class="col-sm-12">
					<h2>Top Categories</h2>
				</div>
			</div>
			<div class="row">
				<div class="item">
					<div class="cont">
						<div class="item-img">
							{{ HTML::image('images/market/top-cat-1.jpg', 'Safina Bay') }}
						</div>
						<div class="item-text">
							<p>Electronic Devices</p>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="cont">
						<div class="item-img">
							{{ HTML::image('images/market/pets.png', 'Safina Bay') }}
						</div>
						<div class="item-text">
							<p>Groceries &amp; Pets</p>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="cont">
						<div class="item-img">
							{{ HTML::image('images/market/grocerry.png', 'Safina Bay') }}
						</div>
						<div class="item-text">
							<p>Home &amp; Lifestyle</p>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="cont">
						<div class="item-img">
							{{ HTML::image('images/market/women-fashion.png', 'Safina Bay') }}
						</div>
						<div class="item-text">
							<p>Women's Fashion</p>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="cont">
						<div class="item-img">
							{{ HTML::image('images/market/football.png', 'Safina Bay') }}
						</div>
						<div class="item-text">
							<p>Sports &amp; Outdoor</p>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="special-offer">
			<div class="row">
				<div class="col-sm-12">
					<div class="clearfix">
						<h2>Special Offers</h2>
						<ul class="tabs tab-data">
							<li><a href="javascript:;" data-tabc="hot-sell" class="active">Hot Sell</a></li>
							<li><a href="javascript:;" data-tabc="trend">Trend</a></li>
							<li><a href="javascript:;" data-tabc="best-sell">Best Sell</a></li>
						</ul>
					</div>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 tab-content hot-sell" style="display:block;">
					<div class="row">
						<div class="col-sm-4">
							<div class="item-box">
								<div class="item-img">
									<figure>
										{{ HTML::image('images/market/special-offer-1.png', 'Safina Bay') }}
									</figure>
								</div>
								<div class="item-text">
									<p>Shawl Women Cotton Lady</p>
									<p class="price"><span>$200.00</span> $200.00</p>
									{{ HTML::image('images/market/star-rating.png', 'Safina Bay') }}
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item-box">
								<i class="halal-ico"></i>
								<div class="item-img">
									<figure>
										{{ HTML::image('images/market/plain-silk.jpg', 'Safina Bay') }}
									</figure>
								</div>
								<div class="item-text">
									<p>Plain Silk Wool Fabric Hijab Scarf</p>
									<p class="price"><span>$200.00</span> $200.00</p>
									{{ HTML::image('images/market/star-rating-4.png', 'Safina Bay') }}
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item-box">
								<div class="item-img">
									<figure>
										{{ HTML::image('images/market/women-casual.jpg', 'Safina Bay') }}
									</figure>
								</div>
								<div class="item-text">
									<p>Women Casual Soft Sweater</p>
									<p class="price"><span>$200.00</span> $200.00</p>
									{{ HTML::image('images/market/star-rating.png', 'Safina Bay') }}
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item-box">
								<i class="halal-ico"></i>
								<div class="item-img">
									<figure>
										{{ HTML::image('images/market/bracellet-watch.png', 'Safina Bay') }}
									</figure>
								</div>
								<div class="item-text">
									<p>Bracelet Watch</p>
									<p class="price"><span>$500.00</span> $400.00</p>
									{{ HTML::image('images/market/5-star.png', 'Safina Bay') }}
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item-box">
								<div class="item-img">
									<figure>
										{{ HTML::image('images/market/xpeed-laptop.png', 'Safina Bay') }}
									</figure>
								</div>
								<div class="item-text">
									<p>Xpeed Laptop V2</p>
									<p class="price"><span>$200.00</span> $200.00</p>
									{{ HTML::image('images/market/star-rating-4.png', 'Safina Bay') }}
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item-box">

								<i class="halal-ico"></i>
								<div class="item-img">
									<figure>
										{{ HTML::image('images/market/travel-scarrf.png', 'Safina Bay') }}
									</figure>
								</div>
								<div class="item-text">
									<p>Travel Scarf Polyester Scarf</p>
									<p class="price"><span>$200.00</span> $200.00</p>
									{{ HTML::image('images/market/star-rating.png', 'Safina Bay') }}
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="col-sm-12 tab-content trend">
					<div class="row">
						<div class="col-sm-4">
							<div class="item-box">
								<div class="item-img">
									<figure>
										{{ HTML::image('images/market/special-offer-1.png', 'Safina Bay') }}
									</figure>
								</div>
								<div class="item-text">
									<p>Shawl Women Cotton Lady</p>
									<p class="price"><span>$200.00</span> $200.00</p>
									{{ HTML::image('images/market/star-rating.png', 'Safina Bay') }}
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item-box">
								<i class="halal-ico"></i>
								<div class="item-img">
									<figure>
										{{ HTML::image('images/market/special-offer-1.png', 'Safina Bay') }}
									</figure>
								</div>
								<div class="item-text">
									<p>Shawl Women Cotton Lady</p>
									<p class="price"><span>$200.00</span> $200.00</p>
									{{ HTML::image('images/market/star-rating.png', 'Safina Bay') }}
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item-box">
								<div class="item-img">
									<figure>
										{{ HTML::image('images/market/special-offer-1.png', 'Safina Bay') }}
									</figure>
								</div>
								<div class="item-text">
									<p>Shawl Women Cotton Lady</p>
									<p class="price"><span>$200.00</span> $200.00</p>
									{{ HTML::image('images/market/star-rating.png', 'Safina Bay') }}
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item-box">
								<i class="halal-ico"></i>
								<div class="item-img">
									<figure>
										{{ HTML::image('images/market/special-offer-1.png', 'Safina Bay') }}
									</figure>
								</div>
								<div class="item-text">
									<p>Shawl Women Cotton Lady</p>
									<p class="price"><span>$200.00</span> $200.00</p>
									{{ HTML::image('images/market/star-rating.png', 'Safina Bay') }}
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item-box">
								<div class="item-img">
									<figure>
										{{ HTML::image('images/market/special-offer-1.png', 'Safina Bay') }}
									</figure>
								</div>
								<div class="item-text">
									<p>Shawl Women Cotton Lady</p>
									<p class="price"><span>$200.00</span> $200.00</p>
									{{ HTML::image('images/market/star-rating.png', 'Safina Bay') }}
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item-box">

								<i class="halal-ico"></i>
								<div class="item-img">
									<figure>
										{{ HTML::image('images/market/special-offer-1.png', 'Safina Bay') }}
									</figure>
								</div>
								<div class="item-text">
									<p>Shawl Women Cotton Lady</p>
									<p class="price"><span>$200.00</span> $200.00</p>
									{{ HTML::image('images/market/star-rating.png', 'Safina Bay') }}
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="col-sm-12 tab-content best-sell">
					<div class="row">
						<div class="col-sm-4">
							<div class="item-box">
								<div class="item-img">
									<figure>
										{{ HTML::image('images/market/special-offer-1.png', 'Safina Bay') }}
									</figure>
								</div>
								<div class="item-text">
									<p>Shawl Women Cotton Lady</p>
									<p class="price"><span>$200.00</span> $200.00</p>
									{{ HTML::image('images/market/star-rating.png', 'Safina Bay') }}
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item-box">
								<i class="halal-ico"></i>
								<div class="item-img">
									<figure>
										{{ HTML::image('images/market/special-offer-1.png', 'Safina Bay') }}
									</figure>
								</div>
								<div class="item-text">
									<p>Shawl Women Cotton Lady</p>
									<p class="price"><span>$200.00</span> $200.00</p>
									{{ HTML::image('images/market/star-rating.png', 'Safina Bay') }}
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item-box">
								<div class="item-img">
									<figure>
										{{ HTML::image('images/market/special-offer-1.png', 'Safina Bay') }}
									</figure>
								</div>
								<div class="item-text">
									<p>Shawl Women Cotton Lady</p>
									<p class="price"><span>$200.00</span> $200.00</p>
									{{ HTML::image('images/market/star-rating.png', 'Safina Bay') }}
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item-box">
								<i class="halal-ico"></i>
								<div class="item-img">
									<figure>
										{{ HTML::image('images/market/special-offer-1.png', 'Safina Bay') }}
									</figure>
								</div>
								<div class="item-text">
									<p>Shawl Women Cotton Lady</p>
									<p class="price"><span>$200.00</span> $200.00</p>
									{{ HTML::image('images/market/star-rating.png', 'Safina Bay') }}
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item-box">
								<div class="item-img">
									<figure>
										{{ HTML::image('images/market/special-offer-1.png', 'Safina Bay') }}
									</figure>
								</div>
								<div class="item-text">
									<p>Shawl Women Cotton Lady</p>
									<p class="price"><span>$200.00</span> $200.00</p>
									{{ HTML::image('images/market/star-rating.png', 'Safina Bay') }}
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item-box">

								<i class="halal-ico"></i>
								<div class="item-img">
									<figure>
										{{ HTML::image('images/market/special-offer-1.png', 'Safina Bay') }}
									</figure>
								</div>
								<div class="item-text">
									<p>Shawl Women Cotton Lady</p>
									<p class="price"><span>$200.00</span> $200.00</p>
									{{ HTML::image('images/market/star-rating.png', 'Safina Bay') }}
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>


	</div>

	<div class="brands-sec">
		<div class="container">
			<div class="row">
				<ul>
					<li>
						<figure>
							{{ HTML::image('images/market/brand-sec.png', 'Safina Bay') }}
						</figure>
					</li>
					<li>
						<figure>
							{{ HTML::image('images/market/brand-sec-1.png', 'Safina Bay') }}
						</figure>
					</li>
					<li>
						<figure>
							{{ HTML::image('images/market/brand-sec-2.png', 'Safina Bay') }}
						</figure>
					</li>
					<li>
						<figure>
							{{ HTML::image('images/market/brand-sec-3.png', 'Safina Bay') }}
						</figure>
					</li>
					<li>
						<figure>
							{{ HTML::image('images/market/brand-sec-4.png', 'Safina Bay') }}
						</figure>
					</li>
					<li>
						<figure>
							{{ HTML::image('images/market/brand-sec-5.png', 'Safina Bay') }}
						</figure>
					</li>
					<li>
						<figure>
							{{ HTML::image('images/market/brand-sec-6.png', 'Safina Bay') }}
						</figure>
					</li>
					<li>
						<figure>
							{{ HTML::image('images/market/brand-sec-7.png', 'Safina Bay') }}
						</figure>
					</li>
					<li>
						<figure>
							{{ HTML::image('images/market/brand-sec-8.png', 'Safina Bay') }}
						</figure>
					</li>
					<li>
						<figure>
							{{ HTML::image('images/market/brand-sec-9.png', 'Safina Bay') }}
						</figure>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="fea-sec">
			<div class="row">
				<div class="col-sm-12">
					<h2>Featured Products</h2>
				</div>
			</div>
			<div class="row">
				<div class="item">
					<div class="cont">
						<i class="halal-ico"></i>
						<div class="item-img">
							{{ HTML::image('images/market/fea-sec-1.png', 'Safina Bay') }}
						</div>
						<div class="item-text">
							<h6>Women Fashion</h6>
							<h4>Women Casual Soft Scarf</h4>
							<p class="price">$200.00</p>
							{{ HTML::image('images/market/star-rating-4.png', 'Safina Bay') }}
						</div>
					</div>
				</div>

				<div class="item">
					<div class="cont">
						<div class="item-img">
							{{ HTML::image('images/market/fea-sec-2.png', 'Safina Bay') }}
						</div>
						<div class="item-text">
							<h6>Electronic Devices</h6>
							<h4>Apple iPhone 7s</h4>
							<p class="price">$1000.00</p>
							{{ HTML::image('images/market/star-rating.png', 'Safina Bay') }}
						</div>
					</div>
				</div>

				<div class="item">
					<div class="cont">
						<div class="item-img">
							{{ HTML::image('images/market/fea-sec-3.png', 'Safina Bay') }}
						</div>
						<div class="item-text">
							<h6>accessories</h6>
							<h4>Woolen Cap</h4>
							<p class="price">$220.00</p>
							{{ HTML::image('images/market/5-star.png', 'Safina Bay') }}
						</div>
					</div>
				</div>

				<div class="item">
					<div class="cont">
						<div class="item-img">
							{{ HTML::image('images/market/fea-sec-4.png', 'Safina Bay') }}
						</div>
						<div class="item-text">
							<h6>men Fashion</h6>
							<h4>Cartoon Bear T Shirt</h4>
							<p class="price">$30.00</p>
							{{ HTML::image('images/market/5-star.png', 'Safina Bay') }}
						</div>
					</div>
				</div>

				<div class="item">
					<div class="cont">
						<div class="item-img">
							{{ HTML::image('images/market/fea-sec-5.png', 'Safina Bay') }}
						</div>
						<div class="item-text">
							<h6>accessories</h6>
							<h4>Cotton Square Scarf</h4>
							<p class="price">$30.00</p>
							{{ HTML::image('images/market/star-rating-4.png', 'Safina Bay') }}
						</div>
					</div>
				</div>

				<div class="item">
					<div class="cont">
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
						<div class="item-img">
							{{ HTML::image('images/market/fea-sec-8.png', 'Safina Bay') }}
						</div>
						<div class="item-text">
							<h6>accessories</h6>
							<h4>Jungle Toys For Kids</h4>
							<p class="price">$80.00</p>
							{{ HTML::image('images/market/star-rating-4.png', 'Safina Bay') }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>


@endsection




