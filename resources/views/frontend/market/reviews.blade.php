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
						<a href="{!! URL::to('/') !!}">Reviews</a>
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
						<h2>Reviews</h2>
					</div>
					<div class="data-tble">
						<table class="data-tble review-tb" style="width:100%">
					        <thead>
					            <tr>
					                <th>Author</th>
					                <th>Comment</th>
					                <th>Rating</th>
					            </tr>
					        </thead>
					        <tbody>
					            <tr>
					                <td>
					                	<figure>
					                		{{ HTML::image('images/chat-avator.png', 'Safina Bay') }}
					                	</figure>
					                	<h4>Haleem Asley <span><a href="javasccript:;">haleemasley@gmail.com</a></span></h4>

					                </td>
					                <td>
					                	<h6>But I must explain to you how all this mistaken idea of denouncing pleasure and praising.</h6>
					                	<p>Submitted on 01/05/2018 at 11:57 am</p>
					                	<a href="javascript:;">View Comment</a>
					                </td>
					                <td>{{ HTML::image('images/market/5-star.png', 'Safina Bay') }}</td>
					            </tr>

					            <tr>
					                <td>
					                	<figure>
					                		{{ HTML::image('images/ab.png', 'Safina Bay') }}
					                	</figure>
					                	<h4>Al Abbas <span><a href="javasccript:;">alabbas123@gmail.com</a></span></h4>

					                </td>
					                <td>
					                	<h6>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</h6>
					                	<p>Submitted on 01/05/2018 at 11:57 am</p>
					                	<a href="javascript:;">View Comment</a>
					                </td>
					                <td>{{ HTML::image('images/market/star-rating-3.png', 'Safina Bay') }}</td>
					            </tr>

					            <tr>
					                <td>
					                	<figure>
					                		{{ HTML::image('images/hijab.png', 'Safina Bay') }}
					                	</figure>
					                	<h4>Sandra Russel <span><a href="javasccript:;">Sandra432@gmail.com</a></span></h4>

					                </td>
					                <td>
					                	<h6>But I must explain to you how all this mistaken idea of denouncing pleasure and praising.</h6>
					                	<p>Submitted on 01/05/2018 at 11:57 am</p>
					                	<a href="javascript:;">View Comment</a>
					                </td>
					                <td>{{ HTML::image('images/market/star-rating-4.png', 'Safina Bay') }}</td>
					            </tr>

					            <tr>
					                <td>
					                	<figure>
					                		{{ HTML::image('images/haleem.png', 'Safina Bay') }}
					                	</figure>
					                	<h4>Robert Evans <span><a href="javasccript:;">robertevans@gmail.com</a></span></h4>

					                </td>
					                <td>
					                	<h6>But I must explain to you how all this mistaken idea of denouncing pleasure and praising.</h6>
					                	<p>Submitted on 01/05/2018 at 11:57 am</p>
					                	<a href="javascript:;">View Comment</a>
					                </td>
					                <td>{{ HTML::image('images/market/5-star.png', 'Safina Bay') }}</td>
					            </tr>

					            <tr>
					                <td>
					                	<figure>
					                		{{ HTML::image('images/evans.png', 'Safina Bay') }}
					                	</figure>
					                	<h4>Mark Manson <span><a href="javasccript:;">mmanson@gmail.com</a></span></h4>

					                </td>
					                <td>
					                	<h6>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</h6>
					                	<p>Submitted on 01/05/2018 at 11:57 am</p>
					                	<a href="javascript:;">View Comment</a>
					                </td>
					                <td>{{ HTML::image('images/market/star-rating-3.png', 'Safina Bay') }}</td>
					            </tr>

					        </tbody>
					    </table>
					</div>

					<div class="col-sm-12 mtpx-45 pbpx-45">
						<div class="paginate-all text-left">
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




