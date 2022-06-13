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
@section('body-class') inner-page dash dash-product-pg halal-certificate-pg logged-in  @stop
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
						<a href="{!! URL::to('/') !!}">Apply For Halal Certification</a>
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
						<h2>Already Have Halal Certifcate</h2>
					</div>
					<div class="clearfix addFile">
						<div class="addFileStyle">
						    <input type="file" />
						</div>
					</div>
					<hr class="mtpx-50 mbpx-50">

					<div class="inner-sub-head mbpx-30">
						<h2 class="mbpx-8">Needs Assessment Questionnaire </h2>
						<p>Fill in the questionnaire below for a certification quote</p>
					</div>

					<div class="row mbpx-15">
						<div class="col-sm-6">
							<input type="text" class="fld" placeholder="Infocus" name="">
						</div>
						<div class="col-sm-6">
							<input type="text" class="fld" placeholder="Contact Name" name="">
						</div>
					</div>

					<div class="row mbpx-40">
						<div class="col-sm-4">
							<input type="text" class="fld" placeholder="markmenson@gmail.com" name="">
						</div>
						<div class="col-sm-4">
							<input type="text" class="fld" placeholder="Contact Number" name="">
						</div>
						<div class="col-sm-4">
							<input type="text" class="fld" placeholder="Address for Inspection" name="">
						</div>
					</div>

					<div class="inner-sub-head mbpx-20">
						<h4 class="mbpx-8">Which Selection Best Describes Your Establishment?</h4>
					</div>

					<div class="row cRadio mbpx-20">
						<div class="col-sm-12">
							<label><input type="radio" name="best-select"> Restaurant</label>
							<label><input type="radio" name="best-select"> Grocery Store or Market place</label>
							<label><input type="radio" name="best-select"> Manufacturing Facility</label>
							<label><input type="radio" name="best-select"> Food Distribution Center</label>
							<label><input type="radio" name="best-select"> Consulting Firm</label>
							<label><input type="radio" name="best-select"> Pharmaceutical Company</label>
							<label><input type="radio" name="best-select"> Government Agency</label>
							<label><input type="radio" name="best-select"> Other</label>
						</div>
					</div>

					<div class="row mbpx-15">
						<div class="col-sm-6">
							<input type="text" class="fld" placeholder="Approximate Square Footage" name="">
						</div>
						<div class="col-sm-6">
							<input type="text" class="fld" placeholder="Number Of Products Sold As Halal Or To Be Certified" name="">
						</div>
					</div>

					<div class="row mbpx-40">
						<div class="col-sm-6">
							<input type="text" class="fld" placeholder="Number of Total Ingredients:" name="">
						</div>
						<div class="col-sm-6">
							<input type="text" class="fld" placeholder="Urgency? (Delivery Expectation)" name="">
						</div>
					</div>

					<div class="inner-sub-head mbpx-20">
						<h4 class="mbpx-8">Brand/Logo/Package Design Needed?</h4>
					</div>

					<div class="row addCheckbox mbpx-20">
						<div class="col-sm-12">
							<label><input type="checkbox" name="best-select"> Brand</label>
							<label><input type="checkbox" name="best-select"> Logo</label>
							<label><input type="checkbox" name="best-select">  Package Design</label>
							<label><input type="checkbox" name="best-select"> Graphic Design</label>
							<label><input type="checkbox" name="best-select">  None</label>
						</div>
					</div>

					<div class="inner-sub-head mbpx-20">
						<h4 class="mbpx-8">Dual Language (Arabic) Assistance Needed?</h4>
					</div>

					<div class="row cRadio mbpx-20">
						<div class="col-sm-12">
							<label><input type="radio" name="best-select"> Yes</label>
							<label><input type="radio" name="best-select"> No</label>
						</div>
					</div>

					<div class="row mbpx-30">
						<div class="col-sm-6 txtfld">
							<textarea cols="2" rows="2" class="fld" placeholder="Special Instructions"></textarea>
						</div>
					</div>

					<div class="row mbpx-30">
						<div class="col-sm-6">
							{{ HTML::image('images/market/captcha.jpg', 'Safina Bay') }}
						</div>
					</div>

					<div class="row sb-btn">
						<div class="col-sm-12">
							<a href="javascript:;" class="primary-btn">Submit</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>


@endsection




