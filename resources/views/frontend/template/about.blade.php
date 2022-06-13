{{-- * Template Name : About * --}}
@extends('frontend.master')

@section('page-title')
    {!! ($pageContent->meta_title) ? $pageContent->title : meta_title() !!}
@stop

@section('meta-keywords')
    {!! ($pageContent->meta_keywords) ? $pageContent->meta_keywords : meta_keywords() !!}
@stop

@section('meta-description')
    {!! ($pageContent->meta_description) ? $pageContent->meta_description : meta_description() !!}
@stop
@section('body-class') inner-page @stop
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
						<a href="{!! URL::to('/') !!}">{{ $pageContent->title ?? ''}}</a>
					</span>
				</div>
			</div>
		</div>
	</div>


	<div class="container ptpx-75">

		<div class="row">
			<div class="col-sm-6 ptpx-32">
				<h2 class="main-heading">{{ $pageContent->short_title ?? '' }}</h2>
				<p class="mbpx-20">{!! $pageContent->content ?? '' !!}</p>
				@if( $pageContent->social_links == 1 )
				<ul class="social-content">
					<li>
						<a href="{{ ($site_setting->facebook) ? $site_setting->facebook : 'javascript:;' }}"><i class="fa fa-facebook"></i></a>
					</li>
					<li>
						<a href="{{ ($site_setting->twitter) ? $site_setting->twitter : 'javascript:;' }}"><i class="fa fa-twitter"></i></a>
					</li>
					<li>
						<a href="{{ ($site_setting->linkedin) ? $site_setting->linkedin : 'javascript:;' }}"><i class="fa fa-linkedin"></i></a>
					</li>
					<li>
						<a href="{{ ($site_setting->youtube) ? $site_setting->youtube : 'javascript:;' }}"><i class="fa fa-youtube"></i></a>
					</li>
					
				</ul>
				@endif
			</div>
			<div class="col-sm-6">
				<figure>
					{{ HTML::image('images/about-img.png', 'Safina Bay') }}
				</figure>
			</div>
		</div>



	</div>

	<div class="testimonial-sec">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="main-heading">What People Are Saying</h2>
					<div class="testimonial-cont">
						<p>“Phasellus fringilla et magna non efficitur. Morbi nec aliquet odio. Etiam eget porta erat, non rutrum sapien. Maecenas vestibulum egestas luctus. Praesent molestie erat diam, eget facilisis tellus mattis non. Duis pulvinar tristique libero vitae fringilla. Fusce massa dolor, dignissim non congue a, facilisis non augue. Morbi sagittis pretium dui.”</p>
						<h3>Mark Manson</h3>
						<h4>Student</h4>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="newsletter-inner">
		@include('frontend.includes.newsletter')
	</div>


</section>



@endsection




