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
							<li><a href="javascript:;">Online</a></li>
							<li><a href="javascript:;">Pending Review</a></li>
						</ul>

						<a href="javascript:;" class="primary-btn blue">Add Prodcuts</a>
					</div>
					<div class="data-tble">
						<table class="data-tble" style="width:100%">
					        <thead>
					            <tr>
					                <th>Product Name</th>
					                <th>Status</th>
					                <th>SKU</th>
					                <th>Stock</th>
					                <th>Price</th>
					                <th>Views</th>
					                <th>Date</th>
					                <th>Certified</th>
					                <th>&nbsp;</th>
					            </tr>
					        </thead>
					        <tbody>
					            <tr>
					                <td>
						                <figure>
						                	{{ HTML::image('images/market/product-img.png', 'Safina Bay') }}
						                </figure>
						                <h4>I-Book Dual Core i7</h4>
					                </td>
					                <td><i class="status"></i></td>
					                <td>--</td>
					                <td><span>In Stock</span></td>
					                <td>$700.00</td>
					                <td>15</td>
					                <td class="date"><strong>2019/02/10</strong> <br>Published</td>
					                <td class="icon"><i class="fa fa-check"></i></td>
					                <td class="lst-icon"><i class="fa fa-ellipsis-v"></i></td>
					            </tr>
					            <tr>
					                <td>
						                <figure>
						                	{{ HTML::image('images/market/product-img-a.png', 'Safina Bay') }}
						                </figure>
						                <h4>Apple iPhone 7s</h4>
					                </td>
					                <td><i class="status"></i></td>
					                <td>--</td>
					                <td><span>In Stock</span></td>
					                <td>$1000.00</td>
					                <td>15</td>
					                <td class="date"><strong>2019/02/10</strong> <br>Published</td>
					                <td class="icon">--</td>
					                <td class="lst-icon"><i class="fa fa-ellipsis-v"></i></td>
					            </tr>
					            <tr>
					                <td>
						                <figure>
						                	{{ HTML::image('images/market/product-img-b.png', 'Safina Bay') }}
						                </figure>
						                <h4>Focusrite Scarlett Solo</h4>
					                </td>
					                <td><i class="status"></i></td>
					                <td>--</td>
					                <td><span>In Stock</span></td>
					                <td>$220.00</td>
					                <td>15</td>
					                <td class="date"><strong>2019/02/10</strong> <br>Published</td>
					                <td class="icon"><i class="fa fa-check"></i></td>
					                <td class="lst-icon"><i class="fa fa-ellipsis-v"></i></td>
					            </tr>
					            <tr>
					                <td>
						                <figure>
						                	{{ HTML::image('images/market/product-img-c.png', 'Safina Bay') }}
						                </figure>
						                <h4>Denver Electronics</h4>
					                </td>
					                <td><i class="status"></i></td>
					                <td>--</td>
					                <td><span>In Stock</span></td>
					                <td>$700.00</td>
					                <td>15</td>
					                <td class="date"><strong>2019/02/10</strong> <br>Published</td>
					                <td class="icon"><i class="fa fa-check"></i></td>
					                <td class="lst-icon"><i class="fa fa-ellipsis-v"></i></td>
					            </tr>
					            <tr>
					                <td>
						                <figure>
						                	{{ HTML::image('images/market/product-img-d.png', 'Safina Bay') }}
						                </figure>
						                <h4>Electronic Geyser 20 Gallon</h4>
					                </td>
					                <td><i class="status"></i></td>
					                <td>--</td>
					                <td><span>In Stock</span></td>
					                <td>$150.00</td>
					                <td>15</td>
					                <td class="date"><strong>2019/02/10</strong> <br>Published</td>
					                <td class="icon">--</td>
					                <td class="lst-icon"><i class="fa fa-ellipsis-v"></i></td>
					            </tr>
					           <tr>
					                <td>
						                <figure>
						                	{{ HTML::image('images/market/product-img-a.png', 'Safina Bay') }}
						                </figure>
						                <h4>Apple iPhone 7s</h4>
					                </td>
					                <td><i class="status"></i></td>
					                <td>--</td>
					                <td><span>In Stock</span></td>
					                <td>$750.00</td>
					                <td>15</td>
					                <td class="date"><strong>2019/02/10</strong> <br>Published</td>
					                <td class="icon">--</td>
					                <td class="lst-icon"><i class="fa fa-ellipsis-v"></i></td>
					            </tr>
					            <tr>
					                <td>
						                <figure>
						                	{{ HTML::image('images/market/product-img-b.png', 'Safina Bay') }}
						                </figure>
						                <h4>Focusrite Scarlett Solo</h4>
					                </td>
					                <td><i class="status"></i></td>
					                <td>--</td>
					                <td><span>In Stock</span></td>
					                <td>$556.00</td>
					                <td>15</td>
					                <td class="date"><strong>2019/02/10</strong> <br>Published</td>
					                <td class="icon"><i class="fa fa-check"></i></td>
					                <td class="lst-icon"><i class="fa fa-ellipsis-v"></i></td>
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




