{{-- * Template Name : About * --}}
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
						<a href="{!! URL::to('/') !!}">About</a>
					</span>
				</div>
			</div>
		</div>
	</div>


	<div class="container ptpx-75">

		<div class="row">
			<div class="col-sm-6 ptpx-32">
				<h2 class="main-heading">Our History</h2>
				<p class="mbpx-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu mauris augue. Nullam rutrum, purus eget pulvinar porttitor, libero orci rutrum ipsum, viverra laoreet nulla arcu eu leo. Aliquam erat volutpat. Donec molestie eget <br><br> Etiam blandit lacinia purus, a iaculis nisl mollis vel. In id placerat lectus, non ultrices lacus. Curabitur non lobortis nibh. Praesent nulla velit, accumsan id ornare vitae, facilisis sed est. Suspendisse maximus mollis nulla, sit amet sodales est sollicitudin ut. Aliquam maximus vitae orci at eleifend. Fusce at velit augue. Vivamus luctus nulla sit amet risus ultricies rutrum. <br><br> Vivamus luctus nulla sit amet risus ultricies rutrum. Cras bibendum scelerisque lacus ac sodales. Proin lacinia hendrerit ligula sed rhoncus. Pellentesque vel interdum purus.</p>
				<ul class="social-content">
					<li>
						<a href="{!! URL::to('/') !!}"><i class="fa fa-facebook"></i></a>
					</li>
					<li>
						<a href="{!! URL::to('/') !!}"><i class="fa fa-twitter"></i></a>
					</li>
					<li>
						<a href="{!! URL::to('/') !!}"><i class="fa fa-linkedin"></i></a>
					</li>
					<li>
						<a href="{!! URL::to('/') !!}"><i class="fa fa-youtube"></i></a>
					</li>
				</ul>
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




