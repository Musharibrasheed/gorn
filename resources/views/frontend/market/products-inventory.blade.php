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
@section('body-class') inner-page dash inventry-pg logged-in  @stop
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
						<a href="{!! URL::to('/') !!}">Inventory</a>
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
							<div class="col-sm-10">
								<div class="row mbpx-30">
									<div class="col-sm-6">
										<label>SKU</label>
										<input type="text" class="fld" placeholder="SKU" name="">
									</div>
									<div class="col-sm-6">
										<label>Stock Qty</label>
										<input type="text" class="fld" placeholder="12" name="">
									</div>
								</div>

								<div class="row mbpx-30">
									<div class="col-sm-6">
										<label>Stock Status</label>
										<select class="fld">
											<option>In Stock</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label>Allow Backorders</label>
										<select class="fld">
											<option>Do not allow</option>
										</select>
									</div>
								</div>

								<div class="row mbpx-30 addCheckbox">
									<div class="col-sm-12">
										<label class="lb">Manage Stock?</label>
										<label class="txt"><input type="checkbox"> Enable stock management at product level</label>
									</div>
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




