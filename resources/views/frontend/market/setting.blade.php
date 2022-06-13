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
@section('body-class') inner-page dash setting-inner-pg logged-in  @stop
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
						<a href="{!! URL::to('/') !!}">Setting</a>
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
					<div class="row">
						<div class="col-sm-10">
							<div class="row mbpx-40">
								<div class="col-sm-12">
									<figure>
										{{ HTML::image('images/market/infocus-banner.jpg', 'Safina Bay') }}
									</figure>
								</div>
							</div>
							<div class="row  mbpx-20">
								<div class="col-sm-12">
									<h3>Store Info</h3>
								</div>
							</div>
							<div class="row mbpx-40">
								<div class="col-sm-3">
									<figure>
										{{ HTML::image('images/market/infocus.jpg', 'Safina Bay') }}
									</figure>
								</div>

								<div class="col-sm-9">
									<div class="row mbpx-12">
										<div class="col-sm-12">
											<input type="text" placeholder="Infocus" class="fld" name="">
										</div>
									</div>
									<div class="row mbpx-12">
										<div class="col-sm-6">
											<input type="text" placeholder="markmenson@gmail.com" class="fld" name="">
										</div>
										<div class="col-sm-6">
											<input type="text" placeholder="Phone Number" class="fld" name="">
										</div>
									</div>
								</div>
							</div>

							<div class="row mbpx-20">
								<div class="col-sm-12">
									<h3>Social Profile</h3>
								</div>
							</div>
							<div class="row mbpx-12">
								<div class="col-sm-6 ico-fld">
									<input type="text" class="fld"  placeholder="https://facebook.com/infocus" name="">
									<span><i class="fa fa-facebook"></i></span>
								</div>
								<div class="col-sm-6 ico-fld">
									<input type="text" class="fld" name="">
									<span><i class="fa fa-youtube"></i></span>
								</div>
							</div>
							<div class="row mbpx-40">
								<div class="col-sm-6 ico-fld">
									<input type="text" class="fld" name="">
									<span><i class="fa fa-linkedin"></i></span>
								</div>
								<div class="col-sm-6 ico-fld">
									<input type="text" class="fld" placeholder="https://twitter.com/infocus" name="">
									<span><i class="fa fa-twitter"></i></span>
								</div>
							</div>

							<div class="row mbpx-20">
								<div class="col-sm-12">
									<h3>Halal Certification</h3>
								</div>
							</div>
							<div class="row addFile mbpx-40">
								<div class="col-sm-12">
									<div class="addFileStyle">
									    <input type="file" />
									</div>
								</div>
							</div>

							<div class="row mbpx-20">
								<div class="col-sm-12">
									<h3>Payment Method</h3>
								</div>
							</div>

							<div class="row mbpx-20 addCheckbox">
								<div class="col-sm-12">
									<label>
										<input type="checkbox" name="">
										Paypal
									</label>
									<label>
										<input type="checkbox" name="">
										Bank Transfer
									</label>
								</div>
							</div>

							<div class="row mbpx-40 addCheckbox">
								<div class="col-sm-6">
									<input type="text" placeholder="markmenson@gmail.com" name="" class="fld">
								</div>
							</div>

							<div class="row mbpx-20">
								<div class="col-sm-12">
									<h3>Location</h3>
								</div>
							</div>

							<div class="row mbpx-40 txtfld">
								<div class="col-sm-8">
									<textarea rows="2" cols="3" placeholder="Shadowmar Drive Kenner, LA 70062" class="fld"></textarea>
								</div>
								<div class="col-sm-4">
									{{ HTML::image('images/market/infocus-map.jpg', 'Safina Bay') }}
								</div>
							</div>

							<div class="row mbpx-40">
								<div class="col-sm-12">
									<a href="javascript:;" class="primary-btn green-bg">Update Setting</a>
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




