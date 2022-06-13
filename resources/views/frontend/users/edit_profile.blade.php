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

					<form action="{{ route('update_profile') }}" class="edit-form" method="post">

						<div class="row">

							<div class="avatar-upload">
						        <div class="avatar-edit">
						            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
						            <label for="imageUpload"></label>
						        </div>
						        <div class="avatar-preview">
						            <div id="imagePreview" style="background-image: url({{asset('/images/user-avatar.png')}}">
						            </div>
						        </div>
						    </div>

							<div class="form-field col-sm-12">
								<label>First Name</label>
								<span class="field">
									<input type="text" name="first_name" placeholder="First Name" value="{{ $user->first_name ?? '' }}">
								</span>
							</div>

							<div class="form-field col-sm-12">
								<label>Last Name</label>
								<span class="field">
									<input type="text" name="last_name" placeholder="Last Name" value="{{ $user->last_name ?? '' }}">
								</span>
							</div>

							<div class="form-field col-sm-6">
								<label>Email</label>
								<span class="field">
									<input type="email" name="email" placeholder="Email" value="{{ $user->email ?? '' }}">
								</span>
							</div>

							<div class="form-field col-sm-6">
								<label>Phone</label>
								<span class="field">
									<input type="tel" name="phone" placeholder="Phone" value="{{ $user->phone_number ?? '' }}">
								</span>
							</div>
							<div class="form-field col-sm-12">							
								<label>Your Location</label>
							</div>
							<div class="form-field col-sm-6">
								<span class="field">
									@if( !empty( $countries) && $countries->count() > 0 )
									<select name="country" id="mcountry">
										<option value="">Select Country</option>
										@foreach( $countries as $country )
											<option value="{{ $country->id }}" @if( $country->id == $user->country ) selected="selected" @endif> {{ $country->name }}</option>
										@endforeach  
									</select>
									@endif
								</span>
							</div>

							<div class="form-field col-sm-6">
								<span class="field">
									@if( !empty( $states) && $states->count() > 0 )
									<select name="state" id="mstates">
										<option value="">Select State</option>
										@foreach( $states as $state )
											<option value="{{ $state->id }}" @if( $state->id == $user->state ) selected="selected" @endif> {{ $state->name }}</option>
										@endforeach 
									</select>
									@endif
								</span>
							</div>

							<div class="form-field col-sm-6">
								<span class="field">
									<input type="text" name="city" value="{{ old('city') }}" placeholder="City">
								</span>
							</div>
							<div class="form-field col-sm-6">
								<span class="field">
									<input type="text" name="zip_code" value="{{ old('zip_code') }}" placeholder="Zip Code">
								</span>
							</div>	

							<div class="col-sm-12">
								<div class="field">
									<input type="text" name="address" value="{{ old('address') }}" placeholder="Location" id="locationTextField">
								</div>
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
										<input type="checkbox" name="notifications['respond']" value="Yes">
									Notify me when Someone responds to my comments.</label>
								</span>
								<span class="field check-field">									
									<label>
										<input type="checkbox" name="notifications['commented']" value="Yes">
									Notify me when Someone on a discussion l’ve commented in.</label>
								</span>
								<span class="field check-field">									
									<label>
										<input type="checkbox" name="notifications['']" value="Yes">
									I agree to receive instructional and promotional emails from how to have fun!</label>
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

@section('footer_script')
<script type="text/javascript">


	$("#mcountry").change(function(){
        var selectedCountry = $("#mcountry option:selected").val();
        $('#mstates').html("");
        $('#mcities').html("");
        var option=$('<option />');option.attr('value','').text('Select City');$('#mcities').append(option);
        var option=$('<option />');option.attr('value','').text('Please Wait');$('#mstates').append(option);
	    $.ajax({
	        type: "GET",
	         contentType: "application/json",
	        url: $('#base_url').val()+"/get-states/"+selectedCountry,
	    }).done(function(data){
	        $('#mstates').find("option:eq(0)").html("Select State");
	        $.each(data,function(key,val){
	            var option=$('<option />');option.attr('value',val.id).text(val.name);$('#mstates').append(option);
	        });
	        
	    });    
	});

	$("#mstates").change(function(){
	        var selectedState = $("#mstates option:selected").val();
	        $('#mcities').html("");
	        var option=$('<option />');option.attr('value','').text('Please Wait');$('#mcities').append(option);
		    $.ajax({
		        type: "GET",
		        crossDomain: true,
		        url: $('#base_url').val()+"/get-cities/"+selectedState,
		    }).done(function(data){	        
	        $('#mcities').find("option:eq(0)").html("Select City");
	        $.each(data,function(key,val){
	            var option=$('<option />');option.attr('value',key).text(val);$('#mcities').append(option);
	        });	        
	    });	    
	});

	function init() {
    	var input = document.getElementById('locationTextField');
    	if(input)
        	var autocomplete = new google.maps.places.Autocomplete(input);
	}

	google.maps.event.addDomListener(window, 'load', init);

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTP-IepVY7ysKJHH-os3kUp71bWdd509k&libraries=places&callback=init"></script>
@stop



