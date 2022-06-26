@extends('admin.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Link Meeting' !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Link Meeting' !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Link Meeting' !!}
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
                            <h2>@lang('admin/testimonial.add') @lang('admin/testimonial.title')</h2>
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


                            <form action="{{ route('admin_add_testimonial_post') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-sm-8"><!-- col-xl-8 -->
                                
                                <div class="row form-group">
                                    <div class="col-sm-12">
                                        <div class="field">
                                            <label>Title</label>
                                            <input type="text" value="{{ old('title') }}" name="title" placeholder="Title" class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-sm-12">
                                        <div class="field">
                                            <label>@lang('admin/testimonial.name')</label>
                                            <input type="text" value="{{ old('client_name') }}" name="client_name" placeholder="Name here... (Eg: Mark Manson)" class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row custom_url form-group" >
                                    <div class="col-sm-12">
                                        <div class="field">
                                            <label>@lang('admin/testimonial.profession')</label>
                                            <input type="text" value="{{ old('client_profession') }}" name="client_profession" placeholder="Profession here... (Eg: Student)" class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row pages form-group" >
                                    <div class="col-sm-12">
                                        <div class="field">
                                            <label>@lang('admin/testimonial.comments')</label>
                                            <textarea rows="10" name="client_comments" class="form-control form-control-lg my-editor">{{ old('client_comments') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row pages form-group" >
                                    <div class="col-sm-12">
                                        <div class="field">
                                            <label>Image</label>
                                            <input type="text"  id="image" name="image" value="{{ old('image')  }}" class="form-control form-control-lg" />
                                                <i class="fa fa-image" aria-hidden="true" id="lfm-image" data-input="image" data-preview="holder"></i>
                                        </div>
                                    </div>
                                </div>
                                 

                                <!-- <div class="row">
                                    <div class="col-sm-12">
                                        <div class="field">
                                            <label>@lang('admin/testimonial.comments')</label>
                                            <select name="status" class="form-control form-control-lg">
                                                <option value="Active">@lang('admin/testimonial.active')</option>
                                                <option value="Inactive">@lang('admin/testimonial.inactive')</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="row field form-group">
                                    <div class="col-sm-3">
                                        <a href="{{ route('admin_testimonials') }}" class="btn btn-block btn-primary">@lang('admin/testimonial.cancel')</a>
                                    </div>
                                    <div class="col-sm-3">
                                       <input type="submit" class="btn btn-block btn-primary" value="@lang('admin/testimonial.add')">
                                    </div>
                                </div>
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
    <script src="{{ asset('/tinymce/tinymce_new.min.js') }}"></script>
    <script>
        var editor_config = {
            path_absolute : "{{ url('/') }}/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            templates: [{
                title: 'Test template 1',
                content: 'Test 1'
            }, {
                title: 'Test template 2',
                content: 'Test 2'
            }],
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            },
        };

        tinymce.init(editor_config);
    </script>

    <script src="{{  asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script>
        var route_prefix = "{{ url('laravel-filemanager') }}";
        
        $('#lfm-image').filemanager('image', {prefix: route_prefix});

    </script>
@endsection

