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
						<a href="{!! URL::to('/') !!}">Coupons</a>
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
						<h2>Coupons</h2>

						<a href="javascript:;" class="primary-btn">Add New Coupon</a>
					</div>
					<div class="data-tble">
						<table class="data-tble coupons" style="width:100%">
					        <thead>
					            <tr>
					                <th>Code</th>
					                <th>Coupon Type</th>
					                <th>Coupon Amount</th>
					                <th>Products IDs</th>
					                <th>Usage / Limit</th>
					                <th>Expiry Date</th>
					            </tr>
					        </thead>
					        <tbody>
					            <tr>
					                <td>
					                	<div class="clearfix">
						                	<a href="javascript:;" class="primary-btn dotted bx">Black Friday</a>
						                </div>

						                <div class="clearfix links">
						                	<a href="javascript:;">Edit</a> | <a href="javascript:;" class="delete-txt">Delete</a>
						                </div>
					                </td>
					                <td>Fixed Amount</td>
					                <td>5</td>
					                <td>1215</td>
					                <td>3 / 5</td>
					                <td class="date"><strong>2019/02/10</strong></td>
					            </tr>
					            <tr>
					                <td>
					                	<div class="clearfix">
						                	<a href="javascript:;" class="primary-btn dotted bx">Black Friday</a>
						                </div>
					                </td>
					                <td>Fixed Amount</td>
					                <td>5</td>
					                <td>1215</td>
					                <td>3 / 5</td>
					                <td class="date"><strong>2019/02/10</strong></td>
					            </tr>
					            <tr>
					                <td>
					                	<div class="clearfix">
						                	<a href="javascript:;" class="primary-btn dotted bx">Black Friday</a>
						                </div>
					                </td>
					                <td>Fixed Amount</td>
					                <td>5</td>
					                <td>1215</td>
					                <td>3 / 5</td>
					                <td class="date"><strong>2019/02/10</strong></td>
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




