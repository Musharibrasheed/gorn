{{-- * Template Name : Edit Profile * --}}
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


<section class="sec-edit_profile">

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
						<a href="{!! URL::to('/') !!}">Groups</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Albany, NY MuslimsHome</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Rubbah Khan</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Profile</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Eidt My Profile</a>
					</span>
				</div>
			</div>
		</div>
	</div>


	<div class="container ptpx-75 pbpx-75">

		<div class="row">
			<div class="col-sm-8">
				<div class="user-info">
					<h3 class="pg-title">Edit Profile</h3>

					<form action="#" class="edit-form" method="post">

						<div class="row">

							<div class="avatar-upload">
						        <div class="avatar-edit">
						            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
						            <label for="imageUpload"></label>
						        </div>
						        <div class="avatar-preview">
						            <div id="imagePreview" style="background-image: url(images/user-avatar.png);">
						            </div>
						        </div>
						    </div>

							<div class="form-field col-sm-12">
								<label>Name</label>
								<span class="field">
									<input type="text" name="name" placeholder="Name" value="Rubbah Khan">
								</span>
							</div>

							<div class="form-field col-sm-6">
								<label>Email</label>
								<span class="field">
									<input type="email" name="email" placeholder="Email" value="rubbahkhan@gmail.com">
								</span>
							</div>

							<div class="form-field col-sm-6">
								<label>Phone</label>
								<span class="field">
									<input type="tel" name="phone" placeholder="Phone" value="506-650-456">
								</span>
							</div>
							<div class="form-field col-sm-12">							
								<label>Your Location</label>
							</div>
							<div class="form-field col-sm-6">
								<span class="field">
									<select class="country" name="country">
										<option selected="selected">Select Country</option>
										<option>Australia</option>
										<option>Canada</option>
										<option>China</option>
										<option>United Kingdom</option>
										<option>United States</option>
									</select>
								</span>
							</div>

							<div class="form-field col-sm-6">
								<span class="field">
									<select class="city" name="city">
										<option selected="selected">Select City</option>
										<option>Sydney</option>
										<option>New York</option>
										<option>New Jersey</option>
										<option>Maxico</option>
										<option>Ontario</option>
									</select>
								</span>
							</div>

							<div class="form-field col-sm-12">
								<span class="field">
									<input type="text" name="address" placeholder="Address" value="Barangaroo">
								</span>
							</div>

							<div class="form-field col-sm-6">
								<label>Password</label>
								<span class="field">
									<input type="password" name="password1" placeholder="Password">
								</span>
							</div>

							<div class="form-field col-sm-6">
								<label>Confirm Password</label>
								<span class="field">
									<input type="password" name="password2" placeholder="Confirm Password">
								</span>
							</div>

							<div class="form-field col-sm-12">
								<h3>Notification Preferences</h3>
								<span class="field check-field">									
									<label>
										<input type="checkbox" name="checkbox1">
									Notify me when Someone responds to my comments.</label>
								</span>
								<span class="field check-field">									
									<label>
										<input type="checkbox" name="checkbox2">
									Notify me when Someone on a discussion l’ve commented in.</label>
								</span>
								<span class="field check-field">									
									<label>
										<input type="checkbox" name="checkbox3">
									I agree to receive instrutional and promotional emails from how to have fun!</label>
								</span>
								<span class="field check-field">									
									<label>
										<input type="checkbox" name="checkbox4">
									User has the option in account profile to hide their points also.</label>
								</span>

								<div class="i-submit">
									<input type="submit" name="submit" value="Update Profile">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="num-id">
					<figure class="col-right">
						{{ HTML::image('images/boat.png', 'Safina Bay') }}
					</figure>
					<h2>3828</h2>
				</div>
			</div>
		</div>
	</div>

</section>



@endsection




