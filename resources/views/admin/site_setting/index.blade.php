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
@section('body-class') dashboard admin-pg @stop
@section('content')
    <?php
    $site_title         = isset($site_setting->site_title) ? unserialize($site_setting->site_title) : "";
    $site_email         = isset($site_setting->site_email) ? $site_setting->site_email : "";
    $site_phone         = isset($site_setting->site_phone) ? $site_setting->site_phone : "";
    $logo               = isset($site_setting->logo) ? $site_setting->logo : "";
    $socialmedia_status = isset($site_setting->socialmedia_status) ? $site_setting->socialmedia_status : "";
    $facebook           = isset($site_setting->facebook) ? $site_setting->facebook : "";
    $twitter            = isset($site_setting->twitter) ? $site_setting->twitter : "";
    $linkedin           = isset($site_setting->linkedin) ? $site_setting->linkedin : "";
    $youtube            = isset($site_setting->youtube) ? $site_setting->youtube : "";
    $instagram          = isset($site_setting->instagram) ? $site_setting->instagram : "";
    $googleplus         = isset($site_setting->googleplus) ? $site_setting->googleplus : "";
    $pinterest          = isset($site_setting->pinterest) ? $site_setting->pinterest : "";
    $address            = isset($site_setting->address) ? $site_setting->address : "";
    $about_company      = isset($site_setting->about_company) ? $site_setting->about_company : "";
    $google_analytics   = isset($site_setting->google_analytics) ? $site_setting->google_analytics : "";
    $footer_logo        = isset($site_setting->footer_logo) ? $site_setting->footer_logo : "";
    $copyright          = isset($site_setting->copyright) ? $site_setting->copyright : "";
    $contact_to_email   = isset($site_setting->contact_to_email) ? $site_setting->contact_to_email : "";
    $contact_from_email = isset($site_setting->contact_from_email) ? $site_setting->contact_from_email : "";
    //popup
    $popup_logo         = isset($site_setting->popup_logo) ? $site_setting->popup_logo : "";
    $popup_text         = isset($site_setting->popup_text) ? $site_setting->popup_text : "";
    $popup_status       = isset($site_setting->popup_status) ? $site_setting->popup_status : "";
    //popup button one
    $popup_button_status= isset($site_setting->popup_button_status) ? $site_setting->popup_button_status : "";
    $popup_button_text  = isset($site_setting->popup_button_text) ? $site_setting->popup_button_text : "";
    $popup_button_link  = isset($site_setting->popup_button_link) ? $site_setting->popup_button_link : "";
    //popup button two
    $popup_button2_status= isset($site_setting->popup_button2_status) ? $site_setting->popup_button2_status : "";
    $popup_button2_text  = isset($site_setting->popup_button2_text) ? $site_setting->popup_button2_text : "";
    $popup_button2_link  = isset($site_setting->popup_button2_link) ? $site_setting->popup_button2_link : "";
    //popup button three
    $popup_button3_status= isset($site_setting->popup_button3_status) ? $site_setting->popup_button3_status : "";
    $popup_button3_text  = isset($site_setting->popup_button3_text) ? $site_setting->popup_button3_text : "";
    $popup_button3_link  = isset($site_setting->popup_button3_link) ? $site_setting->popup_button3_link : "";
    //popup button four
    $popup_button4_status= isset($site_setting->popup_button4_status) ? $site_setting->popup_button4_status : "";
    $popup_button4_text  = isset($site_setting->popup_button4_text) ? $site_setting->popup_button4_text : "";
    $popup_button4_link  = isset($site_setting->popup_button4_link) ? $site_setting->popup_button4_link : "";
    //newsletter
    $newsletter_status= isset($site_setting->newsletter_status) ? $site_setting->newsletter_status : "";
    $newsletter_heading  = isset($site_setting->newsletter_heading) ? $site_setting->newsletter_heading : "";
    $newsletter_text  = isset($site_setting->newsletter_text) ? $site_setting->newsletter_text : "";
    $newsletter_button_text  = isset($site_setting->newsletter_button_text) ? $site_setting->newsletter_button_text : "";
    $newsletter_placeholder_name  = isset($site_setting->newsletter_placeholder_name) ? $site_setting->newsletter_placeholder_name : "";
    $newsletter_placeholder_email  = isset($site_setting->newsletter_placeholder_email) ? $site_setting->newsletter_placeholder_email : "";
    //quick links
    $quick_links_title= isset($site_setting->quick_links_title) ? $site_setting->quick_links_title : "";
    //get in touce
    $get_in_touch_title= isset($site_setting->get_in_touch_title) ? $site_setting->get_in_touch_title : "";
    //testimonial
    $testimonial_image= isset($site_setting->testimonial_image) ? $site_setting->testimonial_image : "";

    $quick_links_title= isset($site_setting->quick_links_title) ? $site_setting->quick_links_title : "";
    $get_in_touch_title= isset($site_setting->get_in_touch_title) ? $site_setting->get_in_touch_title : "";

    ?>

    <section class="content-area">
        <div class="container-fluid full-ht">
            <div class="ptpx-30 pbpx-30">
                <div class="row">
                    <div class="col-sm-13">
                        <div class="styled-head">
                            <h2>@lang('admin/site_settings.title')</h2>
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


                            @if (session('update'))
                                <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong> {{ session('update') }} </strong>
                                </div>
                            @endif

                            {!! Form::open(array('route' => 'site_settings_update', 'method' => 'post', 'class' => 'form-horizontal', 'files'=> true)) !!}
                                <div class="cont-area my-acc">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <div class="row field form-group form-group">
                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.site_title')*</label>
                                                    <input type="text" name="site_title" value="{{ old('site_title',$site_title['site_title'] ?? '')  }}" class="form-control form-control-lg" />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('site_title', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">
                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.site_email')*</label>
                                                    <input type="text" name="site_email" value="{{ old('site_email',$site_email)  }}" class="form-control form-control-lg" />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('site_email', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">
                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.contact_to_email')</label>
                                                    <input type="text" name="contact_to_email" value="{{ old('contact_to_email',$contact_to_email)  }}" class="form-control form-control-lg" />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('contact_to_email', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">
                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.contact_from_email')</label>
                                                    <input type="text" name="contact_from_email" value="{{ old('contact_from_email',$contact_from_email)  }}" class="form-control form-control-lg" />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('contact_from_email', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">
                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.site_phone')</label>
                                                    <input type="text" name="site_phone" value="{{ old('site_phone',$site_phone)  }}" class="form-control form-control-lg"  />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('site_phone', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">

                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.logo_image')</label>
                                                    <div class="image_uploadinput">
                                                        <input type="text" id="thumbnail" name="logo"  class="form-control form-control-lg" value="{{ old('logo', (($logo != "") ? asset($logo) : "") )  }}" />
                                                        <i class="fa fa-image" aria-hidden="true" id="lfm" data-input="thumbnail" data-preview="holder"></i>
                                                    </div>

                                                    <div class="logoplaceholder">
                                                        @if($logo != "" )
                                                            <img src="{{ asset($logo) }}" />
                                                        @else
                                                            <img src="{{ asset('images/logo.png') }}" />
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('logo', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">

                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.footer_logo')</label>
                                                    <div class="image_uploadinput">
                                                        <input type="text" class="form-control form-control-lg" id="thumbnail_2" name="footer_logo" value="{{ old('footer_logo', (($footer_logo != "") ? asset($footer_logo) : "") )  }}" />
                                                        <i class="fa fa-image" aria-hidden="true" id="lfm_2" data-input="thumbnail_2" data-preview="holder"></i>
                                                    </div>

                                                    <div class="logoplaceholder">
                                                        @if($logo != "" )
                                                            <img src="{{ asset($footer_logo) }}" />
                                                        @else
                                                            <img src="{{ asset('images/logo.png') }}" />
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('logo', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">
                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.social_media_status')</label>
                                                    <select name="socialmedia_status" class="form-control form-control-lg" >
                                                        <option value="Active" @if( old('socialmedia_status',$socialmedia_status) == 'Active' ) selected="" @endif>@lang('admin/site_settings.social_media_status_active')</option>
                                                        <option value="Inactive" @if( old('socialmedia_status',$socialmedia_status) == 'Inactive' ) selected="" @endif>@lang('admin/site_settings.social_media_status_inactive')</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('socialmedia_status', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">
                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.facebook')</label>
                                                    <input type="text" name="facebook" value="{{ old('facebook',$facebook)  }}" class="form-control form-control-lg"  />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('facebook', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">
                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.twitter')</label>
                                                    <input type="text" name="twitter" value="{{ old('twitter',$twitter)  }}" class="form-control form-control-lg"  />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('twitter', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">
                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.linkedin')</label>
                                                    <input type="text" name="linkedin" value="{{ old('linkedin',$linkedin)  }}" class="form-control form-control-lg"  />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('linkedin', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">
                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.youtube')</label>
                                                    <input type="text" name="youtube" value="{{ old('youtube',$youtube)  }}" class="form-control form-control-lg"  />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('youtube', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">
                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.instagram')</label>
                                                    <input type="text" name="instagram" value="{{ old('instagram',$instagram)  }}" class="form-control form-control-lg" />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('instagram', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">
                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.google_plus')</label>
                                                    <input type="text" name="googleplus" value="{{ old('googleplus',$googleplus)  }}" class="form-control form-control-lg" />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('googleplus', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">
                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.pinterest')</label>
                                                    <input type="text" name="pinterest" value="{{ old('pinterest',$pinterest)  }}" class="form-control form-control-lg" />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('pinterest', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">
                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.address')</label>
                                                    <textarea name="address" class="form-control form-control-lg" 0>{{ old('address',$address) }}</textarea>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('address', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">
                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.about_company')</label>
                                                    <textarea class="form-control form-control-lg"  name="about_company">{{ old('about_company',$about_company) }}</textarea>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('about_company', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">
                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.google_analytics')</label>
                                                    <textarea class="form-control form-control-lg"  name="google_analytics">{{ old('google_analytics',$google_analytics) }}</textarea>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('google_analytics', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">
                                                <div class="col-sm-6">
                                                    <label>@lang('admin/site_settings.copyright')</label>
                                                    <textarea class="form-control form-control-lg"  name="copyright">{{ old('copyright',$copyright) }}</textarea>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>&nbsp;</label>
                                                    {!! $errors->first('google_analytics', '<span class="help-block">:message</span> ') !!}
                                                </div>
                                            </div>

                                            <div class="row field form-group">
                                                <div class="col-sm-3">
                                                    <a class="btn btn-block btn-primary" href="{!! route('admin_dashboard') !!}" class="primary-btn btn-brown-sm-bdr">@lang('admin/site_settings.cancel')</a>

                                                </div>
                                                <div class="col-sm-3">

                                                    <input type="submit" class="btn btn-block btn-primary" value="@lang('admin/site_settings.update_information')">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            {!! Form::close() !!}
                        </div>{{-- Col --}}
                        </div>{{-- Row --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer_script')
    <script src="{{  asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script>
        var route_prefix = "{{ url('laravel-filemanager') }}";
        $('#lfm').filemanager('image', {prefix: route_prefix});
        $('#lfm_2').filemanager('image', {prefix: route_prefix});
        $('#lfmpopup_logo').filemanager('image', {prefix: route_prefix});
        $('#lfmtestimonial_image').filemanager('image', {prefix: route_prefix});
    </script>
@endsection
