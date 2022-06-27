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

@section('header_styles')

@endsection

@section('content')
    
    <section class="content-area">
        <div class="container-fluid full-ht">
            <div class="ptpx-30 pbpx-30">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="styled-head">
                            <h2>List</h2>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- basic table  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="first_name">First Name:</label>
                                        {{ $data->first_name ?? '' }}
                                    </div>
                                    <div class="col-12">
                                        <label for="last_name">Last Name:</label>
                                        {{ $data->first_name ?? '' }}
                                    </div>
                                    <div class="col-12">
                                        <label for="last_name">Email:</label>
                                        {{ $data->email ?? '' }}
                                    </div>
                                    <div class="col-12">
                                        <label for="last_name">Mobile:</label>
                                        {{ $data->mobile_number ?? '' }}
                                    </div>
                                    <div class="col-12">
                                        <label for="last_name">Address:</label>
                                        {{ $data->address ?? '' }}
                                    </div>
                                    <div class="col-12">
                                        <label for="last_name">City:</label>
                                        {{ $data->city ?? '' }}
                                    </div>
                                    <div class="col-12">
                                        <label for="last_name">State:</label>
                                        {{ $data->state ?? '' }}
                                    </div>
                                    <div class="col-12">
                                        <label for="last_name">Zip:</label>
                                        {{ $data->zip_code ?? '' }}
                                    </div>
                                    <div class="col-12">
                                        <label for="last_name">Country:</label>
                                        {{ $data->country ?? '' }}
                                    </div>
                                    <div class="col-12">
                                        <label for="last_name">File:</label>
                                        @if( !empty($data->filename ))
                                            <a target="_blank" href="{{ asset($data->filename) }}">File</a>
                                        @endif
                                    </div>
                                    <div class="col-12">
                                        <label for="last_name">Experience:</label>
                                        {{ $data->experience ?? '' }}
                                    </div>
                                    <div class="col-12">
                                        <label for="last_name">Add me for the Volunteer Position:</label>
                                        {{ $data->vp ?? '' }}
                                    </div>
                                    <div class="col-12">
                                        <label for="last_name">Add me to the Emergency Response Team:</label>
                                        {{ $data->ert ?? '' }}
                                    </div>
                                    <div class="col-12">
                                        <label for="last_name">How Did You Hear About Go RN:</label>
                                        {{ $data->about_go_rn ?? '' }}
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end basic table  -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@section('footer_script')

  
@endsection