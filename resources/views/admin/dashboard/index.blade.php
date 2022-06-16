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
@section('body-class') acc-dt @stop
@section('content')
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Dashboard</h2>
            
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}" class="breadcrumb-link">Dashboard</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end pageheader  -->

<div class="ecommerce-widget" style="height:900px">

    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
         
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            
        </div>
    </div>
    <div class="row">
        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- recent orders  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
            
        </div>
        <!-- ============================================================== -->
        <!-- end recent orders  -->
    </div>
</div>

@endsection
