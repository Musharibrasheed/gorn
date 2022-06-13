{{-- * Template Name : Login * --}}
@extends('frontend.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : meta_title() !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : meta_keywords() !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : meta_description() !!}
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
						<a href="{!! URL::to('/') !!}">Login/Register</a>
					</span>
				</div>
			</div>
		</div>
	</div>


	<div class="container ptpx-66 pbpx-66 contact-pg-sec login-func">

		<div class="row">
			<div class="col-sm-5">

				<div class="hide-login">

					<h3 class="main-heading">Login</h3>

                    <form method="POST" action="{{ route('login_post') }}">
                        @csrf
                        <div class="form">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="field">
                                        <input type="email" name="email" placeholder="Email" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="field">
                                        <input type="password" name="password" placeholder="Password" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="field">
                                        <label>
                                            <input type="checkbox" name="remember_me" value="1" />
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="submit" value="Login" name="" class="primary-btn blue lg">
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="javascript:;" class="fgt-pass">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                    </form>
				</div>

				<div class="show-fg">
					<h3 class="main-heading">Forgot Password</h3>
					<div class="form">
						<div class="row">
							<div class="col-sm-12">
								<div class="field">
									<input type="email" name="" placeholder="Email">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<input type="submit" value="Send Email" name="" class="primary-btn blue lg">
							</div>
							<div class="col-sm-6 text-right">
								<a href="javascript:;" class="fgt-pass-login">Back to Login</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-6 offset-sm-1">
				
				<div class="row">
                    <div class="col-12">
                        @if(session('message'))
                            <div>   <div class="alert alert-success" >{!!session('message')!!}</div> </div>
                        @endif

                        @if($errors->has('first_name'))
							<div class="field alert alert-danger">
								{!! $errors->first('first_name', '<span class="help-block">:message</span> ') !!}
							</div>
						@endif

						@if($errors->has('email'))
							<div class="field alert alert-danger">
								{!! $errors->first('email', '<span class="help-block">:message</span> ') !!}
							</div>
						@endif

						@if($errors->has('account_type'))
							<div class="field alert alert-danger">
								{!! $errors->first('account_type', '<span class="help-block">:message</span> ') !!}
							</div>
						@endif

						@if($errors->has('password'))
							<div class="field alert alert-danger">
								{!! $errors->first('password', '<span class="help-block">:message</span> ') !!}
							</div>
						@endif

						@if($errors->has('confirm_password'))
							<div class="field alert alert-danger">
								{!! $errors->first('confirm_password', '<span class="help-block">:message</span> ') !!}
							</div>
						@endif

                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                    </div>
                </div>

				<h3 class="main-heading">Register</h3>
				<form method="POST" action="{{ route('add_user') }}" enctype="multipart/form-data">
				@csrf
				<div class="form">
					<div class="row">
						<div class="col-sm-6">
							<div class="field">
								<input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First Name">
							</div>
							@if($errors->has('first_name'))
								<div class="field alert alert-danger">
									{!! $errors->first('first_name', '<span class="help-block">:message</span> ') !!}
								</div>
							@endif							
						</div>
						<div class="col-sm-6">
							<div class="field">
								<input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name">
							</div>
							@if($errors->has('last_name'))
								<div class="field alert alert-danger">
									{!! $errors->first('last_name', '<span class="help-block">:message</span> ') !!}
								</div>
							@endif
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<div class="field">
								<input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
							</div>	
							@if($errors->has('email'))
								<div class="field alert alert-danger">
									{!! $errors->first('email', '<span class="help-block">:message</span> ') !!}
								</div>
							@endif						
						</div>
						<div class="col-sm-6">
							<div class="field">
								<select name="user_level">
									<option value="">Select Type</option>
								@if( !empty( $roles ))
									@foreach( $roles as $key => $role )
										@if( $role->name != 'Admin' )
											<option value="{{ $key }}">{{ $role->name }}</option>
										@endif
									@endforeach
								@endif
								</select>
							</div>							
						</div>
					</div>				

					<div class="row">
						<div class="col-sm-6">
							<div class="field">
								<input type="password" name="password" placeholder="Password">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="field">
								<input type="password" name="confirm_password" placeholder="Confirm Password">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<input type="submit" value="Register" name="" class="primary-btn blue lg">
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>



	</div>


</section>

@endsection

@section('footer_script')
<script type="text/javascript">

	var inputLocalFiles = document.getElementById("thumbnail");
    inputLocalFiles.addEventListener("change", previewImages, false);
    function previewImages() {
        $('.image-preview').empty();
        var fileList = this.files;
        var anyWindow = window.URL || window.webkitURL;
        for (var i = 0; i < fileList.length; i++) {
            var j = i + 1;
            var objectUrl = anyWindow.createObjectURL(fileList[i]);
            $('.image-preview').html('<div class="image-preview-' + j + '"><img src="' + objectUrl + '" width="80%"></div>');
            //$('.image-preview-' + j).css({ 'background-image' : 'url(' + objectUrl + ')', 'background-size' : 'cover', 'background-repeat' : 'no-repeat', 'background-position' : 'center center' });
            window.URL.revokeObjectURL(fileList[i]);
        }
    }

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




