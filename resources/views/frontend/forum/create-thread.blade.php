{{-- * Template Name : Forum * --}}
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
@section('body-class') inner-page forum-pg logged-in  @stop
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
						<a href="{!! URL::to('/') !!}">Forum</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">How Prophets of Allah Succeed in thier Mission</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Create New Thread</a>
					</span>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="main-content-box padding-30px create-thread">
					<h3>Create New Thread</h3>

					<form>
						<div class="field">
							<input type="text" placeholder="Enter Topic Title" name="title" class="fld">
						</div>
						<div class="field">
							<h4>Add Tags</h4>
							<input type="text" placeholder="Islamic Sofware" name="title" class="fld mbpx-15">
							<select class="fld mbpx-15">
								<option>Select Category</option>
							</select>
							<input type="text" placeholder="Enter Topic" name="title" class="fld">
						</div>
						<div class="field">
							<textarea class="editor"></textarea>
						</div>
						<div class="field mbpx-0">
							<input type="button" value="Create Thread" class="primary-btn lg bx" name="">
							<input type="button" value="Upload a File" class="primary-btn lg bx outline" name="">
							<input type="button" value="Preview" class="primary-btn lg bx outline" name="">
						</div>
					</form>
				</div>
			</div>
			<div class="col-sm-4">
                @include('frontend.includes.chat-sidebar')
                @include('frontend.includes.trending-sidebar')
			</div>
		</div>
	</div>
</section>



@endsection




