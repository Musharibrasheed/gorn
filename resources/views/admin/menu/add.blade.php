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
                            <h2>@lang('admin/menu.createmenu')</h2>
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

                            <form action="{{ route('admin_menu_add_post') }}" method="post">
                            @csrf
                            <div class="tab-content -13" >

                                <div class="row form-group">
                                    <div class="col-sm-12">
                                        <div class="field">
                                            <label>Type</label>
                                            <select name="type" class="type form-control form-control-lg" >
                                                <option value="">Select Type</option>
                                                <option value="Custom" @if( old('type') == 'Custom') selected="selected" @endif>Custom</option>
                                                <option value="Page" @if( old('type') == 'Page') selected="selected" @endif>Page</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row custom_url form-group" style="display: none">
                                    <div class="col-sm-12">
                                        <div class="field">
                                            <label>Page URL</label>
                                            <input type="text" value="{{ old('url') }}" name="url" placeholder="Page url here..." class="form-control form-control-lg url">
                                        </div>
                                    </div>
                                </div>

                                <div class="row custom_url form-group" style="display: none">
                                    <div class="col-sm-12">
                                        <div class="field">
                                            <input type="checkbox" value="1" @if( old('new_window') == 1) checked @endif name="new_window" class="form-control-lg">
                                            <label>Open in New Window</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row pages form-group" style="display: none">
                                    <div class="col-sm-12">
                                        <div class="field">
                                            <label>Select Page</label>
                                            <select name="page_id" class="form-control form-control-lg page_id">
                                                <option value="">Select Page</option>
                                                @if( !empty( $pages ) && $pages->count() > 0 )
                                                    @foreach( $pages as $key => $page )
                                                        <option value="{{ $page->id }}" @if( $page->id == old('page_id')) selected="selected" @endif>{{ $page->title ?? ''}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu_fields form-group" >                                    

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="field">
                                                <label>Title</label>
                                                <input type="text" value="{{ old('title') }}" name="title" placeholder="Menu title here... (Eg: Home)" class="form-control form-control-lg title" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <div class="field">
                                                <label>Section</label>
                                                <select name="menu_type" class="form-control form-control-lg" >
                                                    <option value="">Select Section</option>
                                                    <option value="1" @if( old('menu_type') == '1') selected="selected" @endif>Header</option>
                                                    <option value="2" @if( old('menu_type') == '2') selected="selected" @endif>Footer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <div class="field">
                                                <label>Status</label>
                                                <select name="status" class="form-control form-control-lg" >
                                                    <option value="">Select Status</option>
                                                    <option value="Active" @if( old('status') == 'Active') selected="selected" @endif>Active</option>
                                                    <option value="Inactive" @if( old('status') == 'Inactive') selected="selected" @endif>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row field form-group">
                                        <div class="col-sm-3">
                                            <a href="{{ route('admin_menus') }}" class="btn btn-block btn-primary">Cancel</a>
                                        </div>
                                        <div class="col-sm-3">

                                            <input type="submit" class="btn btn-block btn-primary" value="Add">
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
    <script type="text/javascript">

        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("input[name='_token']").val()
            }
        });

        $(".page_id").change(function(){
            var page_id = $(".page_id option:selected").val();

            if( page_id == '') {
                $('input.title').val('');
            } else {
                $.ajax({
                    type: "get",
                    url: "{{ route('admin_page_details') }}",
                    data: { page_id : page_id },
                    beforeSend:  function(){
                       //
                    },
                }).done(function(data){
                     $('input.title').val(data.title);     
                });    
            }
        });

        $('.type').change( function() {            
            var type = $('.type option:selected').val();
            if( type == 'Custom') {
                $('.custom_url').show();
                $('.pages').hide();
                // $('input.url').attr('required','required');
            } else if( type == 'Page') {
                $('.pages').show();
                $('.custom_url').hide();
                // $('input.url').removeAttr('required');
            }
            $('input.title').val('');
            $('input.url').val('');
            $('input[name="page_id"]').val('');
        });

        var type = $( '.type' ).val();
        if( type == 'Page' ) {
            $('.pages').show();
            $('.custom_url').hide();
        }
        if( type == 'Custom' ) {
            $('.custom_url').show();
            $('.pages').hide();
        }
    </script>
@endsection

