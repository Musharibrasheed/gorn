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
@section('body-class') inner-page market-inner-pg logged-in  @stop
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
						<a href="{!! URL::to('/') !!}">Brand</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Infocus</a>
					</span>


				</div>
			</div>
		</div>
	</div>

</section>

<section class="main-content ptpx-50 pbpx-50">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="sidebar">
					<div class="cat-sidebar addCheckbox">
						<h2>Categories</h2>
						<ul>
							<li><a href="javascript:;">All</a></li>
							<li><a href="javascript:;">Laptops</a></li>
							<li><a href="javascript:;">Mobiles</a></li>
							<li><a href="javascript:;">Accessories</a></li>
						</ul>
					</div>

					<div class="price-filter ptpx-70 pbpx-70">
						<h2>Price Filter</h2>
						{{ HTML::image('images/market/range-sidebar.png', 'Safina Bay') }}
					</div>

					<div class="cat-sidebar pbpx-70 addCheckbox">
						<h2>Brands</h2>
						<ul>
							<li><input type="checkbox" name="" checked><a href="javascript:;">Infocus</a></li>
						</ul>
					</div>

					<div class="advertise">
						<h2 class="mbpx-25">Location</h2>
						{{ HTML::image('images/market/map-brand.jpg', 'Safina Bay') }}
					</div>

				</div>
			</div>
			<div class="col-sm-9">
				<div class="products-list">
					<div class="row mbpx-50">
						<div class="col-sm-12">
							<div class="brand-bg" style="background-image: url('../images/market/brand-img-bg.jpg')">
								<div class="brand-dt">
									<figure>
										{{ HTML::image('images/market/brand-dark-logo.png', 'Safina Bay') }}
									</figure>

									<h3>Infocus</h3>
									<p><a href="mailto:markmenson@gmail.com">markmenson@gmail.com</a> <br> Shadowmar Drive Kenner, LA 70062</p>

									<a href="javascript:;" class="mrpx-5"><i class="fa fa-facebook"></i></a>
									<a href="javascript:;"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="row mbpx-40">
						<div class="col-sm-6">
							<h2>Infocus Store</h2>
							<h5>277 items found in Infocus</h5>
						</div>
						<div class="col-sm-6 text-right filter">
							<select>
								<option>Default sorting</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="item">
								<div class="item-img">
									{{ HTML::image('images/market/fea-sec-1c.png', 'Safina Bay') }}
								</div>
								<div class="item-text">
									<h6>infocus</h6>
									<h4>Denver Electronics</h4>
									<p class="price">$150.00</p>
									{{ HTML::image('images/market/4-star.png', 'Safina Bay') }}
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="item">
								<i class="halal-ico"></i>
								<div class="item-img">
									{{ HTML::image('images/market/fea-sec-1d.png', 'Safina Bay') }}
								</div>
								<div class="item-text">
									<h6>infocus</h6>
									<h4>Play Wirelessly on P</h4>
									<p class="price">$300.00</p>
									{{ HTML::image('images/market/5-star.png', 'Safina Bay') }}
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="item">
								<i class="halal-ico"></i>
								<div class="item-img">
									{{ HTML::image('images/market/fea-sec-1e.png', 'Safina Bay') }}
								</div>
								<div class="item-text">
									<h6>infocus</h6>
									<h4>Focusrite Scarlett Solo</h4>
									<p class="price">$220.00</p>
									{{ HTML::image('images/market/star-rating-4.png', 'Safina Bay') }}
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="item">
								<i class="halal-ico"></i>
								<div class="item-img">
									{{ HTML::image('images/market/fea-sec-1f.png', 'Safina Bay') }}
								</div>
								<div class="item-text">
									<h6>infocus</h6>
									<h4>AZATOM Multiplex</h4>
									<p class="price">$150.00</p>
									{{ HTML::image('images/market/4-star.png', 'Safina Bay') }}
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="item">
								<div class="item-img">
									{{ HTML::image('images/market/fea-sec-1g.png', 'Safina Bay') }}
								</div>
								<div class="item-text">
									<h6>infocus</h6>
									<h4>Electric Geyser 20 Gallon</h4>
									<p class="price">$300.00</p>
									{{ HTML::image('images/market/5-star.png', 'Safina Bay') }}
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="item">
								<i class="halal-ico"></i>
								<div class="item-img">
									{{ HTML::image('images/market/fea-sec-1h.png', 'Safina Bay') }}
								</div>
								<div class="item-text">
									<h6>infocus</h6>
									<h4>DealeXtreme</h4>
									<p class="price">$220.00</p>
									{{ HTML::image('images/market/star-rating-4.png', 'Safina Bay') }}
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="item">
								<i class="halal-ico"></i>
								<div class="item-img">
									{{ HTML::image('images/market/fea-sec-1a.png', 'Safina Bay') }}
								</div>
								<div class="item-text">
									<h6>infocus</h6>
									<h4>I-BOOK Dual Core i7</h4>
									<p class="price">$700.00</p>
									{{ HTML::image('images/market/5-star.png', 'Safina Bay') }}
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="item">
								<i class="halal-ico"></i>
								<div class="item-img">
									{{ HTML::image('images/market/fea-sec-2.png', 'Safina Bay') }}
								</div>
								<div class="item-text">
									<h6>infocus</h6>
									<h4>Apple iPhone 7s</h4>
									<p class="price">$1000.00</p>
									{{ HTML::image('images/market/star-rating-4.png', 'Safina Bay') }}
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="item">
								<div class="item-img">
									{{ HTML::image('images/market/fea-sec-1b.png', 'Safina Bay') }}
								</div>
								<div class="item-text">
									<h6>infocus</h6>
									<h4>Medical Devices 2d</h4>
									<p class="price">$450.00</p>
									{{ HTML::image('images/market/3-star.png', 'Safina Bay') }}
								</div>
							</div>
						</div>
					</div>
					<div class="row mtpx-45">
						<div class="paginate-all text-center">
							<ul>
								{{-- <li>
									<a href="javascript:;">Previous</a>
								</li> --}}
								<li>
									<a class="active" href="javascript:;">1</a>
								</li>
								<li>
									<a href="javascript:;">2</a>
								</li>
								<li>
									<a href="javascript:;">3</a>
								</li>
								<li>
									<a href="javascript:;">4</a>
								</li>
								<li>
									<a href="javascript:;">5</a>
								</li>
								<li>
									<a href="javascript:;">Next</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection




