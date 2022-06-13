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
					<div class="cat-sidebar">
						<h2>Categories</h2>
						<div id="scr-content" class="addCheckbox">
							<ul>
								<li><a href="javascript:;">All</a></li>
								<li><a href="javascript:;">Mobiles</a>
									<ul class="sub-menu">
										<li><input type="checkbox" name=""><a href="javascript:;">Apple</a></li>
										<li><input type="checkbox" name=""><a href="javascript:;">Samsung</a></li>
										<li><input type="checkbox" name=""><a href="javascript:;">Huawei</a></li>
										<li><input type="checkbox" name=""><a href="javascript:;">Vivo</a></li>
									</ul>
								</li>
								<li><a href="javascript:;">Tablets</a></li>
								<li><a href="javascript:;">Axure</a></li>
								<li><a href="javascript:;">Laptops</a></li>
								<li><a href="javascript:;">Laptops</a></li>
								<li><a href="javascript:;">Gaming Consoles</a></li>
								<li><a href="javascript:;">Action/Video Cameras</a></li>
								<li><a href="javascript:;">Tablets</a></li>
								<li><a href="javascript:;">Axure</a></li>
								<li><a href="javascript:;">Laptops</a></li>
								<li><a href="javascript:;">Laptops</a></li>
								<li><a href="javascript:;">Gaming Consoles</a></li>
								<li><a href="javascript:;">Action/Video Cameras</a></li>
							</ul>
						</div>
					</div>

					<div class="price-filter ptpx-70 pbpx-70">
						<h2>Price Filter</h2>
						{{ HTML::image('images/market/range-sidebar.png', 'Safina Bay') }}
					</div>

					<div class="cat-sidebar pbpx-70">
						<h2>Brands</h2>
						<div id="scr-content" class="addCheckbox">
							<ul>
								<li><input type="checkbox" name=""><a href="javascript:;">Infocus</a></li>
								<li><input type="checkbox" name=""><a href="javascript:;">Quadra</a></li>
								<li><input type="checkbox" name=""><a href="javascript:;">Prgressive</a></li>
								<li><input type="checkbox" name=""><a href="javascript:;">Palact It</a></li>
								<li><input type="checkbox" name=""><a href="javascript:;">Axure</a></li>
								<li><input type="checkbox" name=""><a href="javascript:;">Wiley</a></li>
								<li><input type="checkbox" name=""><a href="javascript:;">Victoria</a></li>
								<li><input type="checkbox" name=""><a href="javascript:;">Secret</a></li>
								<li><input type="checkbox" name=""><a href="javascript:;">Beauty Baar</a></li>
								<li><input type="checkbox" name=""><a href="javascript:;">Samsung</a></li>
								<li><input type="checkbox" name=""><a href="javascript:;">Huawei</a></li>
								<li><input type="checkbox" name=""><a href="javascript:;">Vivo</a></li>
								<li><input type="checkbox" name=""><a href="javascript:;">Apple</a></li>
								<li><input type="checkbox" name=""><a href="javascript:;">Samsung</a></li>
								<li><input type="checkbox" name=""><a href="javascript:;">Huawei</a></li>
								<li><input type="checkbox" name=""><a href="javascript:;">Vivo</a></li>
							</ul>
						</div>
					</div>

					<div class="advertise">
						{{ HTML::image('images/market-banner-right.jpg', 'Safina Bay') }}
					</div>

				</div>
			</div>
			<div class="col-sm-9">
				<div class="products-list">
					<div class="row mbpx-40">
						<div class="col-sm-6">
							<h2>Electronic Devices</h2>
							<h5>277 items found in Mobiles</h5>
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
								<div class="item-img">
									{{ HTML::image('images/market/fea-sec-2.png', 'Safina Bay') }}
								</div>
								<div class="item-text">
									<h6>Apple</h6>
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
									<h6>mindray</h6>
									<h4>Medical Devices 2d</h4>
									<p class="price">$450.00</p>
									{{ HTML::image('images/market/3-star.png', 'Safina Bay') }}
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="item">
								<div class="item-img">
									{{ HTML::image('images/market/fea-sec-1c.png', 'Safina Bay') }}
								</div>
								<div class="item-text">
									<h6>bigfix</h6>
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
									<h6>axure</h6>
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
									<h6>progressive</h6>
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
									<h6>bigfix</h6>
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
									<h6>axure</h6>
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
									<h6>progressive</h6>
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
								<div class="item-img">
									{{ HTML::image('images/market/fea-sec-2.png', 'Safina Bay') }}
								</div>
								<div class="item-text">
									<h6>Apple</h6>
									<h4>Apple iPhone 7s</h4>
									<p class="price">$1000.00</p>
									{{ HTML::image('images/market/star-rating-4.png', 'Safina Bay') }}
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="item">
								<i class="halal-ico"></i>
								<div class="item-img">
									{{ HTML::image('images/market/fea-sec-1b.png', 'Safina Bay') }}
								</div>
								<div class="item-text">
									<h6>mindray</h6>
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




