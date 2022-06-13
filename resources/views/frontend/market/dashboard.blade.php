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
@section('body-class') inner-page dash dashboard logged-in  @stop
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
				</div>
			</div>
		</div>
	</div>

</section>

<section class="main-content ptpx-50 pbpx-50">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				@include('frontend.includes.market-left-nav')
			</div>
			<div class="col-sm-9">
				<div class="dash-info-head">
					<div class="row">
						<div class="col-sm-3">
							<h3>$369.52</h3>
							<p>Available Balance</p>
						</div>
						<div class="col-sm-3">
							<h3>569</h3>
							<p>page views</p>
						</div>
						<div class="col-sm-3">
							<h3>169</h3>
							<p>total orders</p>
						</div>
						<div class="col-sm-3">
							<h3>$234.41</h3>
							<p>sales</p>
						</div>
					</div>
				</div>
				<div class="dash-info-dt">
					<div class="row">
						<div class="col-sm-9">
							<div class="order-chart">
								<div class="head">
									<h3>Sales &amp; Orders</h3>

									<span><i></i> numbers of items sold</span>
									<span><i></i> numbers of orders</span>
								</div>
								<div class="cont">
									{{ HTML::image('images/market/dashboard-chart.jpg', 'Safina Bay') }}
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="order-info">
								<div class="head">
									<h3>Orders</h3>
								</div>
								<ul>
									<li>total <span>169</span></li>
									<li>Completed <span>44</span></li>
									<li>cancelled <span>15</span></li>
									<li>processing <span>22</span></li>
									<li>pending <span>60</span></li>
									<li>on hold <span>6</span></li>
									<li>refund <span>13</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="dash-more-info">
					<div class="row">
						<div class="col-sm-3">
							<div class="bx-sm">
								<div class="head">
									<h3>Products</h3>
								</div>
								<ul>
									<li>total <span>(150)</span></li>
									<li>Live <span>(125)</span></li>
									<li>Offline <span>(15)</span></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="bx-sm green-bg">
								<div class="head">
									<h3>Reviews</h3>
								</div>
								<ul>
									<li>All <span>(29)</span></li>
									<li>Spam <span>(3)</span></li>
									<li>Trash <span>(0)</span></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6 ">
							<div class="bx-lg">
								<div class="row">
									<div class="col-sm-7 va-cntr-alt">
										<ul>
											<li><i></i> completed <span>50%</span></li>
											<li><i class="red"></i> cancelled <span>30%</span></li>
											<li><i class="mustard"></i> on hold <span>10%</span></li>
											<li><i class="magenta"></i> refund <span>20%</span></li>
										</ul>
									</div>
									<div class="col-sm-5 text-center">
										{{ HTML::image('images/market/pie-chart.png', 'Safina Bay') }}
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




