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
@section('body-class') inner-page dash dash-product-pg logged-in  @stop
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
						<a href="{!! URL::to('/') !!}">Withdraw</a>
					</span>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="main-content ptpx-80 pbpx-80">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 noprpx">
				@include('frontend.includes.market-left-nav')
			</div>
			<div class="col-sm-9 noplpx">
				<div class="cont">
					<div class="inner-sub-head">
						<ul>
							<li><a href="javascript:;" class="active">Withdraw Request</a></li>
							<li><a href="javascript:;">Approved Request</a></li>
						</ul>
					</div>
					<div class="widthdraw-sec">
						<h2>Current Balance: <strong>$1000</strong></h2>
						<div class="row">
							<div class="col-sm-10">
								<div class="row">
									<div class="col-sm-6">
										<label>Withdraw Amount</label>
										<div class="ico-fld posRel">
											<input type="text" value="" placeholder="$250" class="fld" name="">
											<span><i class="fa fa-usd" aria-hidden="true"></i></span>
										</div>
									</div>
									<div class="col-sm-6">
										<label>Payment Method</label>
										<select class="fld">
											<option>Paypal</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix">
							<a href="javascript:;" class="primary-btn green-bg">Submit Request</a>
						</div>
					</div>
					<div class="data-tble pbpx-100">
						<table class="data-tble widthdraw-tb" style="width:100%">
					        <thead>
					            <tr>
					                <th>Amount</th>
					                <th>Method</th>
					                <th>Date</th>
					                <th>Cancel Request</th>
					                <th>Status</th>
					            </tr>
					        </thead>
					        <tbody>
					            <tr>
					                <td>$250</td>
					                <td>Paypal</td>
					                <td>Feb 08, 2019 - 2:00 PM</td>
					                <td class="cancel"><a href="javascript:;">Cancel</a></td>
					                <td class="pending">Pending</td>
					            </tr>
					        </tbody>
					    </table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection




