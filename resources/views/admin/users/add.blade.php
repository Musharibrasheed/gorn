@extends('admin.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : meta_title() !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : meta_keywords() !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : meta_description() !!}
@stop
@section('header-scripts')
    <link href="{{ asset('tinymce/skins/lightgray/skin.min.css') }}" type="text/css" rel="stylesheet" />
@endsection
@section('body-class') acc-dt @stop
@section('content')


<section class="content-area">
        <div class="container-fluid full-ht">
            <div class="ptpx-30 pbpx-30">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="styled-head">
                            <h2>Add User</h2>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <div class="error">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            @if(session()->has('success'))
                                <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    @if(is_array(session()->get('success')))
                                        <ul>
                                            @foreach (session()->get('success') as $message)
                                                <li>{{ $message }}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        {{ session()->get('success') }}
                                    @endif
                                </div>
                            @endif


                            <form action="{{ route('admin_add_user_get') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-sm-8"><!-- col-xl-8 -->

                                <div class="row form-group">
                                    <div class="col-sm-6">
                                        <div class="field">
                                            <label>First Name</label>
                                            <input type="text" value="{{ old('first_name',$user->first_name ?? '') }}" name="first_name" placeholder="First Name here... (Eg: Mark)" class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="field">
                                            <label>Last Name</label>
                                            <input type="text" value="{{ old('last_name',$user->last_name ?? '') }}" name="last_name" placeholder="Last Name here... (Eg: Manson)" class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-sm-6">
                                        <div class="field">
                                            <label>Email</label>
                                            <input type="email" value="{{ old('email',$user->email ?? '') }}" name="email" placeholder="Email here... (Eg: abc@example.com)" class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="field">
                                            <label>Phone Number</label>
                                            <input type="text" value="{{ old('phone_number',$user->phone_number ?? '') }}" name="phone_number" placeholder="Phone Number" class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-sm-6">
                                        <div class="field">
                                            <label>Profession</label>
                                            <input type="profession" value="{{ old('profession',$user->profession ?? '') }}" name="profession" placeholder="Profession" class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="field">
                                            <label>Company</label>
                                            <input type="text" value="{{ old('company',$user->company ?? '') }}" name="company" placeholder="Company" class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-sm-12">
                                        <div class="field">
                                            <label>Address</label>
                                            <input type="profession" value="{{ old('address',$user->address ?? '') }}" name="address" placeholder="Address" id="locationTextField" class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-sm-6">
                                        <div class="field">
                                            <label>Country</label>
                                            @if( !empty($countries) ) 
                                                <select name="country" class="form-control form-control-lg" id="mcountry">
                                                    @foreach( $countries as $country)
                                                        <option value="{{ $country->id }}" @if( $country->id == old('country') ) selected="selected" @endif >{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                            @endif                                        
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="field">
                                            <label>State</label>
                                            <select name="state" class="form-control form-control-lg" id="mstates">
                                                <option value="" >Select state</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-sm-6">
                                        <div class="field">
                                            <label>City</label>
                                            <select name="city" class="form-control form-control-lg" id="mcities">
                                                <option value="">Select City</option>
                                            </select>                                              
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="field">
                                            <label>Zip Code</label>
                                            <input type="text" value="{{ old('zip_code',$user->zip_code ?? '') }}" name="zip_code" placeholder="Zip Code (e.g 10007)" class="form-control form-control-lg" />
                                        </div>
                                    </div>                                    
                                </div>

                                <div class="row form-group">
                                    <div class="col-sm-6">
                                        <div class="field">
                                            <label>Image</label>
                                            <input type="file" name="image" accept="image/*" class="form-control form-control-lg" id="thumbnail" />
                                            <input type="hidden" name="uploaded_image" value="{{ $user->image ?? '' }}">
    
                                            <div class="image-preview">
                                                <div class="col-sm-12">
                                                    <div class="field">
                                                       <img src="" width="80%" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="field">
                                            <label>Password</label>
                                            <input type="password" name="password" placeholder="****" class="form-control form-control-lg" />
                                        </div>
                                    </div>   

                                    <div class="col-sm-6">
                                        <div class="field">
                                            <label>Password</label>
                                            <input type="password" name="confirm_password" placeholder="****" class="form-control form-control-lg" />
                                        </div>
                                    </div>                                    
                                </div>
                                
                                <!-- <div class="row field form-group">
                                    <div class="col-sm-3">
                                        <a href="{{ route('admin_testimonials') }}" class="btn btn-block btn-primary">@lang('admin/testimonial.cancel')</a>
                                    </div>
                                    <div class="col-sm-3">
                                       <input type="submit" class="btn btn-block btn-primary" value="@lang('admin/testimonial.update')">
                                    </div>
                                </div> -->
                            </div>

                            
                        </div>
                    </div><!-- col-xl-4 rht-sd -->
                </div>

                            </form>

                        </div>{{-- Col --}}
                        </div>{{-- Row --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



@section('footer_script')
    <style>
        .template_attributes
        {
            display:none;
        }
    </style>

    <script>
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
            console.log(selectedState);
            $('#mcities').html("");
            var option=$('<option />');
            option.attr('value','').text('Please Wait');
            $('#mcities').append(option);
            $.ajax({
                type: "GET",
                crossDomain: true,
                url: $('#base_url').val()+"/get-cities/"+selectedState,
            }).done(function(data){         
            $('#mcities').find("option:eq(0)").html("Select City");
            $.each(data,function(key,val){
                var option=$('<option />');option.attr('value',val.id).text(val.name);$('#mcities').append(option);
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
@endsection

