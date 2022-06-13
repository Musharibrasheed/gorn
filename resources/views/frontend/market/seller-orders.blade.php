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
						<a href="{!! URL::to('/') !!}">Orders</a>
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
							<li><a href="javascript:;" class="active">All</a></li>
							<li><a href="javascript:;">Completed</a></li>
							<li><a href="javascript:;">Processing</a></li>
							<li><a href="javascript:;">On-Hold</a></li>
							<li><a href="javascript:;">Pending</a></li>
							<li><a href="javascript:;">Cancelled</a></li>
							<li><a href="javascript:;">Refunded</a></li>
						</ul>
					</div>
					<div class="data-tble">
						<table class="data-tble ordr" style="width:100%">
					        <thead>
					            <tr>
					                <th>Order</th>
					                <th>Order Total</th>
					                <th>Status</th>
					                <th>Customer</th>
					                <th>Date</th>
					                <th>Action</th>
					            </tr>
					        </thead>
					        <tbody>
					            <tr>
					                <td>
						                <h4>#1210</h4>
					                </td>
					                <td>$20.00</td>
					                <td><i class="status"></i></td>
					                <td>Haleem Asley</td>
					                <td class="date"><strong>2019/02/10</strong></td>
					                <td class="action">
					                	<a href="javascript:;"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
					                	<a href="javascript:;"><i class="fa fa-check" aria-hidden="true"></i></a>
					                	<a href="javascript:;"><i class="fa fa-eye" aria-hidden="true"></i></a>
					                </td>
					            </tr>
					            <tr>
					                <td>
						                <h4>#1211</h4>
					                </td>
					                <td>$250.00</td>
					                <td><i class="status away"></i></td>
					                <td>Sara Khan</td>
					                <td class="date"><strong>2019/02/10</strong></td>
					                <td class="action">
					                	<a href="javascript:;"><i class="fa fa-eye" aria-hidden="true"></i></a>
					                </td>
					            </tr>
					            <tr>
					                <td>
						                <h4>#1213</h4>
					                </td>
					                <td>$500.00</td>
					                <td><i class="status away"></i></td>
					                <td>Mark Menson</td>
					                <td class="date"><strong>2019/02/10</strong></td>
					                <td class="action">
					                	<a href="javascript:;"><i class="fa fa-check" aria-hidden="true"></i></a>
					                	<a href="javascript:;"><i class="fa fa-eye" aria-hidden="true"></i></a>
					                </td>
					            </tr>
					            <tr>
					                <td>
						                <h4>#1216</h4>
					                </td>
					                <td>$75.00</td>
					                <td><i class="status"></i></td>
					                <td>John Doe</td>
					                <td class="date"><strong>2019/02/10</strong></td>
					                <td class="action">
					                	<a href="javascript:;"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
					                	<a href="javascript:;"><i class="fa fa-check" aria-hidden="true"></i></a>
					                	<a href="javascript:;"><i class="fa fa-eye" aria-hidden="true"></i></a>
					                </td>
					            </tr>
					            <tr>
					                <td>
						                <h4>#1235</h4>
					                </td>
					                <td>$15.00</td>
					                <td><i class="status"></i></td>
					                <td>Shawn Smith</td>
					                <td class="date"><strong>2019/02/10</strong></td>
					                <td class="action">
					                	<a href="javascript:;"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
					                	<a href="javascript:;"><i class="fa fa-check" aria-hidden="true"></i></a>
					                	<a href="javascript:;"><i class="fa fa-eye" aria-hidden="true"></i></a>
					                </td>
					            </tr>

					        </tbody>
					    </table>
					</div>


					<div class="row mtpx-45 pbpx-45">
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




