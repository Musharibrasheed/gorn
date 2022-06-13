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
@section('body-class') inner-page dash add-product-pg logged-in  @stop
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
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Dashboard</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Products</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Edit</a>
					</span>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="main-content ptpx-50 pbpx-50">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 noprpx">
				@include('frontend.includes.market-left-nav')
			</div>
			<div class="col-sm-9 noplpx">
				<div class="cont">
					<div class="inner-sub-head">
						<ul>
							<li><a href="javascript:;">Edit</a></li>
							<li><a href="javascript:;" class="active">Inventory</a></li>
							<li><a href="javascript:;">Shipping</a></li>
							<li><a href="javascript:;">Attributes</a></li>
						</ul>
						<a href="javascript:;" class="primary-btn">Update Product</a>
					</div>
					<div class="form ptpx-20 pbpx-100">
						<div class="row">
							<div class="col-sm-5 addCheckbox">
								<div class="product-img mbpx-30">
									<figure>
										{{ HTML::image('images/market/product-img.png', 'Safina Bay') }}
									</figure>
								</div>
								<div class="clearfix rft-check mbpx-20">
									<label>Reviews: <input type="checkbox"></label>
								</div>
								<div class="clearfix  mbpx-15">
									<p>Product Status: <span>Online</span> - <a href="javascript:;">Edit</a></p>
								</div>
								<div class="clearfix  mbpx-35">
									<p>Product Type: <span>Simple Product</span> - <a href="javascript:;">Edit</a></p>
								</div>
								<div class="clearfix  mbpx-20">
									<a href="javascript:;" class="primary-btn green-bg">Add Product Images</a>
								</div>
							</div>
							<div class="col-sm-7">
								<div class="clearfix mbpx-10">
									<input type="text" value="" placeholder="I-BOOK Dual Core i7" class="fld" name="">
								</div>
								<div class="clearfix posRel ico-fld mbpx-10">
									<input type="text" value="" placeholder="700.00" class="fld" name="">
									<span><i class="fa fa-usd" aria-hidden="true"></i></span>
								</div>
								<div class="clearfix posRel ico-fld mbpx-10">
									<input type="text" value="" placeholder="Special Price" class="fld" name="">
									<span><i class="fa fa-usd" aria-hidden="true"></i></span>
								</div>
								<div class="row mbpx-10">
									<div class="col-sm-6 ico-fld">
										<input type="text" value="" placeholder="From" class="fld" name="">
										<span class="alt"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
									</div>
									<div class="col-sm-6 ico-fld">
										<input type="text" value="" placeholder="To" class="fld" name="">
										<span class="alt"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
									</div>
								</div>
								<div class="clearfix mbpx-10">
									<textarea cols="2" rows="2" placeholder="Write Reason..." class="fld"></textarea>
								</div>
								<div class="clearfix mbpx-10">
									<select class="fld">
										<option>Electronic</option>
									</select>
								</div>
								<div class="clearfix">
									<textarea cols="2" rows="2" placeholder="Details about your product...." class="fld alt"></textarea>
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




