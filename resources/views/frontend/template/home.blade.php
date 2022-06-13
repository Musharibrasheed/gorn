{{-- * Template Name : Home * --}}
@extends('frontend.master')

@section('page-title')
    {!! ($pageContent->meta_title) ? $pageContent->meta_title : meta_title() !!}
@stop

@section('meta-keywords')
    {!! ($pageContent->meta_keywords) ? $pageContent->meta_keywords : meta_keywords() !!}
@stop

@section('meta-description')
    {!! ($pageContent->meta_description) ? $pageContent->meta_description : meta_description() !!}
@stop
@section('body-class') home-page @stop
@section('content')


<section>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 plpx-0">
				{{ HTML::image('images/map-home.jpg', 'Safina Bay', array( 'class' => 'img-fluid' )) }}
			</div>
			<div class="col-sm-6">
				<div class="search">
					<div class="srch-fld">
						<input type="text" name="search" placeholder="Dallas, TX">
						<button>
							<i class="fa fa-search"></i>
						</button>
					</div>
					<div class="srch-filters addCheckbox">
						<ul>
							<li><input type="checkbox" name="filter"> Area</li>
							<li><input type="checkbox" name="filter"> People</li>
							<li><input type="checkbox" name="filter"> Community</li>
							<li><input type="checkbox" name="filter"> Market</li>
							<li><input type="checkbox" name="filter"> Mosque</li>
							<li><input type="checkbox" name="filter"> Halal Shops</li>
							<li><input type="checkbox" name="filter"> Events</li>
							<li><input type="checkbox" name="filter"> Halal Entertainment </li>
						</ul>
					</div>
					<div class="results-info">
						<div class="row">
							<div class="col-sm-6">
								<p>76 Results Found (Showing 1-25)</p>
							</div>
							<div class="col-sm-6 text-right addSelect">
								<select>
									<option>Sort by</option>
								</select>
							</div>
						</div>
					</div>
					<div class="results-listing">
						<div class="row">
							<div class="col-sm-4">
								<div class="bx featured">
									<figure>
										{{ HTML::image('images/results-listing-featured.jpg', 'Safina Bay') }}
									</figure>
									<figcaption>
										<h6>Featured</h6>
										<h3>Phasellus fringilla et <span>New York, USA</span></h3>
									</figcaption>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="bx featured">
									<figure>
										{{ HTML::image('images/results-listing-featured.jpg', 'Safina Bay') }}
									</figure>
									<figcaption>
										<h6>Featured</h6>
										<h3>Phasellus fringilla et <span>New York, USA</span></h3>
									</figcaption>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="bx featured">
									<figure>
										{{ HTML::image('images/results-listing-featured.jpg', 'Safina Bay') }}
									</figure>
									<figcaption>
										<h6>Featured</h6>
										<h3>Phasellus fringilla et <span>New York, USA</span></h3>
									</figcaption>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="bx">
									<figure>
										{{ HTML::image('images/results-img.jpg', 'Safina Bay') }}
									</figure>
									<figcaption>
										<h3>Lorem phasellus</h3>
										<h5>Market <span>464 Harvest Grv Desoto, TX</span></h5>
									</figcaption>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="bx">
									<figure>
										{{ HTML::image('images/results-img-1.jpg', 'Safina Bay') }}
									</figure>
									<figcaption>
										<h3>Donec tempor tortor</h3>
										<h5>Halal Shops <span>464 Harvest Grv Desoto, TX</span></h5>
									</figcaption>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="bx">
									<figure>
										{{ HTML::image('images/results-img-2.jpg', 'Safina Bay') }}
									</figure>
									<figcaption>
										<h3>Maecenas bibendum</h3>
										<h5>Community <span>464 Harvest Grv Desoto, TX</span></h5>
									</figcaption>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="bx">
									<figure>
										{{ HTML::image('images/results-img-3.jpg', 'Safina Bay') }}
									</figure>
									<figcaption>
										<h3>Suspendisse</h3>
										<h5>People <span>464 Harvest Grv Desoto, TX</span></h5>
									</figcaption>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="bx">
									<figure>
										{{ HTML::image('images/results-img-4.jpg', 'Safina Bay') }}
									</figure>
									<figcaption>
										<h3>Maecenas pulvinar</h3>
										<h5>Halal Entertainment <span>464 Harvest Grv Desoto, TX</span></h5>
									</figcaption>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="bx">
									<figure>
										{{ HTML::image('images/results-img-5.jpg', 'Safina Bay') }}
									</figure>
									<figcaption>
										<h3>Curabitur a nunc</h3>
										<h5>Mosque <span>464 Harvest Grv Desoto, TX</span></h5>
									</figcaption>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="paginate">
									<ul>
										<li class="prev"><a href="javascript:;"><i class="fa fa-angle-left"></i></a></li>
										<li class="active"><a href="javascript:;">1</a></li>
										<li><a href="javascript:;">2</a></li>
										<li><a href="javascript:;">3</a></li>
										<li><a href="javascript:;">4</a></li>
										<li><a href="javascript:;">5</a></li>
										<li><a href="javascript:;">6</a></li>
										<li class="next"><a href="javascript:;"><i class="fa fa-angle-right"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@if( $siteSetting->newsletter_status == "Active" )
		@include('frontend.includes.newsletter').
	@endif

</section>

@if( $site_setting->popup_status == "Active" )
<div class="overlay"></div>
<div class="text-center popup home-pop">
	<div class="pop-cont">
		<div class="close-pop">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					@if( $site_setting->popup_logo )
					<figure><img src="{{ asset($site_setting->popup_logo) }}" /></figure>
					@else
					<figure><img src="{{ asset('images/logo.png') }}" /></figure>
					@endif
					<p>{{ $site_setting->popup_text ?? ''  }}</p>
					<div class="btns">
						<div class="row">
							@if( $site_setting->popup_button_status == 'Active' && $site_setting->popup_button_text)
							<div class="col-sm-3">
								<a href="{{ $site_setting->popup_button_link ?? 'javascript:;' }}" class="primary-btn">{{ $site_setting->popup_button_text ?? '' }}</a>
							</div>
							@endif

							@if( $site_setting->popup_button2_status == 'Active' && $site_setting->popup_button2_text )
							<div class="col-sm-3">
								<a href="{{ $site_setting->popup_button2_link ?? 'javascript:;' }}" class="primary-btn">{{ $site_setting->popup_button2_text ?? '' }}</a>
							</div>
							@endif

							@if( $site_setting->popup_button3_status == 'Active' && $site_setting->popup_button3_text )
							<div class="col-sm-3">
								<a href="{{ $site_setting->popup_button3_link ?? 'javascript:;' }}" class="primary-btn">{{ $site_setting->popup_button3_text ?? '' }}</a>
							</div>
							@endif

							@if( $site_setting->popup_button4_status == 'Active' && $site_setting->popup_button4_text )
							<div class="col-sm-3">
								<a href="{{ $site_setting->popup_button4_link ?? 'javascript:;' }}" class="primary-btn">{{ $site_setting->popup_button4_text ?? '' }}</a>
							</div>
							@endif
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endif
@endsection




