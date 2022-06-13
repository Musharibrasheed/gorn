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
						<a href="{!! URL::to('/') !!}">Create Group</a>
					</span>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="main-content">
	<div class="container">
		<div class="content-cont">
			<h3>Create New Group</h3>

			<div class="row">
				<div class="col-sm-9">
					<div class="field">
						<h4>Name Your Group</h4>
						<input type="text" name="" class="fld">
					</div>
					<div class="field">
						<h4>Add Members</h4>
						<input type="text" name="" placeholder="Sara Khan" class="fld mbpx-10">
						<textarea class="fld sm" cols="2" rows="2" placeholder="Write a note to include in your invite..."></textarea>
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
						<div class="addCheckbox mtpx-30 sm-fa">
							<input type="checkbox" name="">
							All groups posts must be approved by an admin.
						</div>
					</div>

					<div class="field addSelect mbpx-0">
						<h4>Privacy Group</h4>
						<select class="fld">
							<option>Public Group</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



@endsection




