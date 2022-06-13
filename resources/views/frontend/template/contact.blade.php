{{-- * Template Name : Contact * --}}
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
						<a href="{!! URL::to('/') !!}">Contact</a>
					</span>
				</div>
			</div>
		</div>
	</div>


	<div class="container ptpx-66 pbpx-66 contact-pg-sec">

		<div class="row">
			<div class="col-sm-4">
				<h3 class="main-heading">Get In Touch</h3>

				<h4>Office Address</h4>
				<p>10500 Northwest Freeway, Suite 206 Houston, Texas 77092</p>

				<h4>Phone</h4>
				<p>(888)123-4587</p>

				<h4>Email</h4>
				<p class="mbpx-24"><a href="mailto:info@admin.com">info@admin.com</a></p>

				<hr>

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
			<div class="col-sm-8">
				<h3 class="main-heading">Send Us a Message</h3>
				<div class="form">
					<div class="row">
						<div class="col-sm-6">
							<div class="field">
								<input type="text" name="" placeholder="Name">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="field">
								<input type="email" name="" placeholder="Email">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="field">
								<input type="text" name="" placeholder="Phone Number">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="field">
								<input type="text" name="" placeholder="Subject">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="field mbpx-17">
								<textarea rows="2" cols="2" placeholder="Message"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<input type="submit" name="" class="primary-btn blue lg">
						</div>
					</div>
				</div>
			</div>
		</div>



	</div>


</section>



@endsection




