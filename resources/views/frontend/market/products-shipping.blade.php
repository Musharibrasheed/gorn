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
						<a href="{!! URL::to('/') !!}">Shipping</a>
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
							<li><a href="javascript:;">Inventory</a></li>
							<li><a href="javascript:;" class="active">Shipping</a></li>
							<li><a href="javascript:;">Attributes</a></li>
						</ul>
						<a href="javascript:;" class="primary-btn">Update Product</a>
					</div>
					<div class="form ptpx-20 pbpx-100">
						<div class="row">
							<div class="col-sm-12">
								<div class="row mbpx-30">
									<div class="col-sm-6">
										<label>Weight (kg)</label>
										<input type="text" class="fld" placeholder="SKU" name="">
									</div>
									<div class="col-sm-6">
										<label>Dimensions (cm)</label>
										<div class="row">
											<div class="col-sm-4">
												<select class="fld">
													<option>Length</option>
												</select>
											</div>
											<div class="col-sm-4">
												<select class="fld">
													<option>Width</option>
												</select>
											</div>
											<div class="col-sm-4">
												<select class="fld">
													<option>Height</option>
												</select>
											</div>
										</div>
									</div>
								</div>

								<div class="row mbpx-20">
									<div class="col-sm-6">
										<label>Shipping Class</label>
										<select class="fld">
											<option>No Ship</option>
										</select>
									</div>
								</div>

								<div class="row mbpx-30">
									<div class="col-sm-6">
										<label class="txt">Shipping classes are used by certain shipping methods to group similar products.</label>
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




