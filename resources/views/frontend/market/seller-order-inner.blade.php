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
@section('body-class') inner-page dash order-inner-pg logged-in  @stop
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
						<a href="{!! URL::to('/') !!}">Orders</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">#1210</a>
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
						<div class="col-sm-12">
							<h2>Order Number #1210</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-8">
							<table class="table mbpx-40">
								<thead>
									<tr>
										<th>Item</th>
										<th>Customer</th>
										<th>Qty</th>
										<th>Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<figure>
												{{ HTML::image('images/market/limit.png', 'Safina Bay') }}
											</figure>
										</td>
										<td>Haleem Asley</td>
										<td>1</td>
										<td>$700</td>
									</tr>
									<tr>
										<td colspan="2">
											Cart Subtotal:
										</td>
										<td colspan="2">$700</td>
									</tr>
									<tr>
										<td colspan="2">
											Shipping:
										</td>
										<td colspan="2">Free Shipping</td>
									</tr>
									<tr>
										<td colspan="2">
											Cart Subtotal:
										</td>
										<td colspan="2">$700</td>
									</tr>
								</tbody>
							</table>

							<table class="table altr">
								<thead>
									<tr>
										<th colspan="2" style="text-align: left;">General Details</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											Order Status:
										</td>
										<td>Completed - <a href="javacript:;">Edit</a> </td>
									</tr>
									<tr>
										<td>
											Order Date:
										</td>
										<td>2019/02/10 - 06:25:02</td>
									</tr>
									<tr>
										<td>
											Customer:
										</td>
										<td>Haleem Asley </td>
									</tr>
									<tr>
										<td>
											Email:
										</td>
										<td>haleemasley@gmail.com </td>
									</tr>
									<tr>
										<td>
											Phone:
										</td>
										<td>1234-559-8855 </td>
									</tr>
									<tr>
										<td>
											Customer IP:
										</td>
										<td>014 </td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-sm-4">
							<table class="table altr mbpx-40">
								<thead>
									<tr>
										<th class="text-left">Billing Address</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-left">
											9 Fairground Street Woodbridge, VA 22191
										</td>
									</tr>
								</tbody>
							</table>

							<table class="table altr">
								<thead>
									<tr>
										<th class="text-left">Shipping Address</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-left">
											9 Fairground Street Woodbridge, VA 22191
										</td>
									</tr>
								</tbody>
							</table>

							<table class="table altr">
								<thead>
									<tr>
										<th class="text-left">Order Notes</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-left">
											<textarea rows="2" cols="2" placeholder="Add Note" class="fld"></textarea>
										</td>
									</tr>
									<tr>
										<td class="text-left">
											<select class="fld">
												<option>Customer note</option>
											</select>
										</td>
									</tr>
									<tr>
										<td class="text-center">
											<a href="javacript:;" class="primary-btn green-bg">Add Note</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection




