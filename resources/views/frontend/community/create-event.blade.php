{{-- * Template Name : Community * --}}
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
@section('body-class') inner-page community-pg logged-in  @stop
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
						<a href="{!! URL::to('/') !!}">Community</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Your City Group</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Albany, NY Muslims</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Upcoming Events</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Create Event</a>
					</span>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="main-content">
	<div class="container">
		<div class="content-cont">
			<h3>Create Event For Albany, NY Muslims</h3>

			<div class="row">
				<div class="col-sm-9">
					<div class="field">
						<figure>
							<img src="../images/create-event-browse-img.jpg" alt="browse" class="img-fluid">
						</figure>
					</div>
					<div class="field">
						<h4>Event Name</h4>
						<input type="text" name="" class="fld">
					</div>
					<div class="field">
						<h4>Your Location</h4>
						<div class="row addSelect">
							<div class="col-sm-4">
								<select class="fld">
									<option>Country</option>
								</select>
							</div>
							<div class="col-sm-4">
								<select class="fld">
									<option>State</option>
								</select>
							</div>
							<div class="col-sm-4">
								<input type="text" name="" placeholder="City" class="fld">
							</div>
						</div>
					</div>
					<div class="field">
						<div class="row addSelect">
							<div class="col-sm-6">
								<h4>Start Date</h4>
								<div class="posRel ico-fld">
									<i class="fa fa-calendar-o" aria-hidden="true"></i>
									<input type="text" name="" class="fld">
								</div>
							</div>
							<div class="col-sm-6">
								<h4>End Date</h4>
								<div class="posRel ico-fld">
									<i class="fa fa-calendar-o" aria-hidden="true"></i>
									<input type="text" name="" class="fld">
								</div>
							</div>
						</div>
					</div>
					<div class="field mbpx-15">
						<div class="row addSelect">
							<div class="col-sm-6">
								<h4>Start Time</h4>
								<div class="posRel ico-fld">
									<i class="fa fa-clock-o" aria-hidden="true"></i>
									<input type="text" name="" class="fld">
								</div>
							</div>
							<div class="col-sm-6">
								<h4>End Time</h4>
								<div class="posRel ico-fld">
									<i class="fa fa-clock-o" aria-hidden="true"></i>
									<input type="text" name="" class="fld">
								</div>
							</div>
						</div>
					</div>
					<div class="field mbpx-50">
						<textarea placeholder="Write Description" class="fld" rows="2" cols="2" style="height:150px"></textarea>
					</div>
					<div class="field mbpx-0">
						<a href="javascript" class="primary-btn bx lg">Create Event</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



@endsection




