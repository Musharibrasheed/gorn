@extends('admin.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : meta_title() !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : meta_title() !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : meta_title() !!}
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
                            <h2>Update Page</h2>
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


                            <form action="{{ route('admin_page_update_post',['id'=>$page->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-sm-8"><!-- col-xl-8 -->

                                <div class="row form-group">
                                    <div class="col-sm-12">
                                        <div class="field">
                                            <label>Page Title</label>
                                            <input type="text" value="{{ old('title',$pageDescription->title ?? '') }}" name="title" placeholder="Page title here... (Eg: Home Page)" class="form-control form-control-lg">
                                        </div>
                                    </div>
                                </div>

                                <div class="row custom_url form-group" >
                                    <div class="col-sm-12">
                                        <div class="field">
                                            <label>Short Title</label>
                                            <input type="text" value="{{ old('title',$pageDescription->short_title ?? '') }}" name="short_title" placeholder="Page short title here... (Eg: Home)" class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row pages form-group" >
                                    <div class="col-sm-12">
                                        <div class="field">
                                            <label>Page Content 1</label>
                                            <textarea rows="10" name="content" class="form-control form-control-lg my-editor">{{ old('title',$pageDescription->content ?? '') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                 
                                
                                <!-- <div class="row">
                                    <div class="col-sm-12">                               
                                        <div class="field form-group">
                                            <label>Page Video (Youtube Embeded URL like: https://www.youtube.com/embed/3h-1h168Blo)</label>
                                            <input type="text" value="{{ old('title',$pageDescription->page_video ?? '') }}" name="page_video" placeholder="https://www.youtube.com/embed/3h-1h168Blo" class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                </div> -->

                                <div class="row hometemplate template_attributes">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <h3>Section 1</h3>
                                            <div class="field">
                                                <label>About GORN</label>
                                                <input type="text" value="{{ old('about_gorn_heading',$page_meta['about_gorn_heading'] ?? '') }}" name="about_gorn_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="field">
                                                <label>Text</label>
                                                <textarea rows="10" name="about_gorn_text" class="form-control form-control-lg my-editor">{{ old('title',$page_meta['about_gorn_text'] ?? '') }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 form-group">
                                        <h3>Section 2</h3>                        
                                        <div class="field">
                                            <label>Heading</label>
                                            <input type="text" value="{{ old('section2_heading',$page_meta['section2_heading'] ?? '') }}" name="section2_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                              
                                        <div class="field">
                                            <label>Box 1</label>
                                            <input type="text" value="{{ old('section2_bx1_heading',$page_meta['section2_bx1_heading'] ?? '') }}" name="section2_bx1_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="10" name="section2_bx1_text" class="form-control form-control-lg my-editor">{{ old('title',$page_meta['section2_bx1_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12 form-group">
                              
                                        <div class="field">
                                            <label>Box 2</label>
                                            <input type="text" value="{{ old('section2_bx2_heading',$page_meta['section2_bx2_heading'] ?? '') }}" name="section2_bx2_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="section2_bx2_text" class="form-control form-control-lg my-editor">{{ old('title',$page_meta['section2_bx2_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12 form-group">
                              
                                        <div class="field">
                                            <label>Box 3</label>
                                            <input type="text" value="{{ old('section2_bx3_heading',$page_meta['section2_bx3_heading'] ?? '') }}" name="section2_bx3_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="section2_bx3_text" class="form-control form-control-lg my-editor">{{ old('title',$page_meta['section2_bx3_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12 form-group">
                                        <h3>Section 3</h3> 
                                        <div class="field">
                                            <input type="text" value="{{ old('section3_heading',$page_meta['section3_heading'] ?? '') }}" name="section3_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="10" name="section3_text" class="form-control form-control-lg my-editor">{{ old('title',$page_meta['section3_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>
                                    
                                </div>

                                <!-- healthcare professionals -->
                                <div class="row healthcare-professionalstemplate template_attributes">
                                    <div class="col-sm-12 form-group">
                                        <h3>Section 1</h3>
                                        <div class="field form-group">
                                            <input type="text" value="{{ old('hc_sec1_heading',$page_meta['hc_sec1_heading'] ?? '') }}" name="hc_sec1_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <div class="field form-group">
                                            <label>Text</label>
                                            <textarea rows="10" name="hc_sec1_text" class="form-control form-control-lg my-editor">{{ old('title',$page_meta['hc_sec1_text'] ?? '') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 form-group">
                                        <h3>Section 2</h3>                        
                                        <div class="field form-group">
                                            <label>Tag Line</label>
                                            <input type="text" value="{{ old('hc_sec2_tagline',$page_meta['hc_sec2_tagline'] ?? '') }}" name="hc_sec2_tagline" placeholder="Heading..." class="form-control form-control-lg" />
                                        </div>                              
                                        <div class="field form-group">
                                            <label>Heading</label>
                                            <input type="text" value="{{ old('hc_sec2_heading',$page_meta['hc_sec2_heading'] ?? '') }}" name="hc_sec2_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="10" name="hc_sec2_text" class="form-control form-control-lg my-editor">{{ old('title',$page_meta['hc_sec2_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12 form-group">
                                        <h3>Section 3</h3> 
                                        <div class="field form-group">
                                            <input type="text" value="{{ old('hc_sec3_heading',$page_meta['hc_sec3_heading'] ?? '') }}" name="hc_sec3_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="10" name="hc_sec3_text" class="form-control form-control-lg my-editor">{{ old('title',$page_meta['hc_sec3_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <!-- ss -->
                                    <div class="col-sm-12 form-group">
                                        <h3>Section 4</h3>  
                                        <div class="field form-group">
                                            <label>Tag Line</label>
                                            <input type="text" value="{{ old('hc_sec4_tagline',$page_meta['hc_sec4_tagline'] ?? '') }}" name="hc_sec4_tagline" placeholder="Tag Line" class="form-control form-control-lg" />
                                        </div>

                                        <div class="field form-group">
                                            <label>Heading</label>
                                            <input type="text" value="{{ old('hc_sec4_heading',$page_meta['hc_sec4_heading'] ?? '') }}" name="hc_sec4_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                              
                                        <div class="field">
                                            <label>Box 1</label>
                                            <input type="text" value="{{ old('hc_sec4_bx1_heading',$page_meta['hc_sec4_bx1_heading'] ?? '') }}" name="hc_sec4_bx1_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="10" name="hc_sec4_bx1_text" class="form-control form-control-lg my-editor">{{ old('title',$page_meta['hc_sec4_bx1_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12 form-group">
                              
                                        <div class="field">
                                            <label>Box 2</label>
                                            <input type="text" value="{{ old('hc_sec4_bx2_heading',$page_meta['hc_sec4_bx2_heading'] ?? '') }}" name="hc_sec4_bx2_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="hc_sec4_bx2_text" class="form-control form-control-lg my-editor">{{ old('title',$page_meta['hc_sec4_bx2_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12 form-group">

                                        <div class="field">
                                            <label>Box 3</label>
                                            <input type="text" value="{{ old('hc_sec4_bx3_heading',$page_meta['hc_sec4_bx3_heading'] ?? '') }}" name="hc_sec4_bx3_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="hc_sec4_bx3_text" class="form-control form-control-lg my-editor">{{ old('title',$page_meta['hc_sec4_bx3_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>
                                    
                                </div>
                                <!-- healthcare professionals end-->



                                <!-- facilities -->
                                <div class="row facilitiestemplate template_attributes">
                                    <div class="col-sm-12">
                                        <h3>Section 1</h3>  
                                        <div class="field form-group">
                                            <label>Tag Line</label>
                                            <input type="text" value="{{ old('fac_sec1_tagline',$page_meta['fac_sec1_tagline'] ?? '') }}" name="fac_sec1_tagline" placeholder="Tag Line" class="form-control form-control-lg" />
                                        </div>

                                        <div class="field form-group">
                                            <label>Heading</label>
                                            <input type="text" value="{{ old('fac_sec1_heading',$page_meta['fac_sec1_heading'] ?? '') }}" name="fac_sec1_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                              
                                        <div class="field form-group">
                                            <label>Box 1</label>
                                            <input type="text" value="{{ old('fac_sec1_bx1_heading',$page_meta['fac_sec1_bx1_heading'] ?? '') }}" name="fac_sec1_bx1_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="10" name="fac_sec1_bx1_text" class="form-control form-control-lg my-editor">{{ old('fac_sec1_bx1_text',$page_meta['fac_sec1_bx1_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12">
                              
                                        <div class="field form-group">
                                            <label>Box 2</label>
                                            <input type="text" value="{{ old('fac_sec1_bx2_heading',$page_meta['fac_sec1_bx2_heading'] ?? '') }}" name="fac_sec1_bx2_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="fac_sec1_bx2_text" class="form-control form-control-lg my-editor">{{ old('fac_sec1_bx2_text',$page_meta['fac_sec1_bx2_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12">
                              
                                        <div class="field form-group">
                                            <label>Box 3</label>
                                            <input type="text" value="{{ old('fac_sec1_bx3_heading',$page_meta['fac_sec1_bx3_heading'] ?? '') }}" name="fac_sec1_bx3_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="fac_sec1_bx3_text" class="form-control form-control-lg my-editor">{{ old('fac_sec1_bx3_text',$page_meta['fac_sec1_bx3_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>
                                    <div class="col-sm-12">
                              
                                        <div class="field form-group">
                                            <label>Box 4</label>
                                            <input type="text" value="{{ old('fac_sec1_bx4_heading',$page_meta['fac_sec1_bx4_heading'] ?? '') }}" name="fac_sec1_bx4_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="fac_sec1_bx4_text" class="form-control form-control-lg my-editor">{{ old('fac_sec1_bx4_text',$page_meta['fac_sec1_bx4_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>
                                    <div class="col-sm-12">
                              
                                        <div class="field form-group">
                                            <label>Box 5</label>
                                            <input type="text" value="{{ old('fac_sec1_bx5_heading',$page_meta['fac_sec1_bx5_heading'] ?? '') }}" name="fac_sec1_bx5_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="fac_sec1_bx5_text" class="form-control form-control-lg my-editor">{{ old('fac_sec1_bx5_text',$page_meta['fac_sec1_bx5_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>
                                    <div class="col-sm-12">
                              
                                        <div class="field form-group">
                                            <label>Box 6</label>
                                            <input type="text" value="{{ old('fac_sec1_bx6_heading',$page_meta['fac_sec1_bx6_heading'] ?? '') }}" name="fac_sec1_bx6_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="fac_sec1_bx6_text" class="form-control form-control-lg my-editor">{{ old('fac_sec1_bx6_text',$page_meta['fac_sec1_bx6_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>
                                    <!-- section 2 -->
                                    <div class="col-sm-12"> 
                              
                                        <div class="field form-group">
                                            <label>Section 2</label>
                                            <input type="text" value="{{ old('fac_sec2_heading',$page_meta['fac_sec2_heading'] ?? '') }}" name="fac_sec2_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="fac_sec2_text" class="form-control form-control-lg my-editor">{{ old('fac_sec2_text',$page_meta['fac_sec2_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <!-- section 3 -->
                                    <div class="col-sm-12"> 
                              
                                        <div class="field form-group">
                                            <label>Section 3</label>
                                            <textarea rows="5" name="fac_sec3_text" class="form-control form-control-lg my-editor">{{ old('fac_sec3_text',$page_meta['fac_sec3_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <!-- section 4 -->
                                    <div class="col-sm-12"> 
                                       
                                        <div class="field form-group">
                                            <label>Section 4</label>
                                            <input type="text" value="{{ old('fac_sec4_heading',$page_meta['fac_sec4_heading'] ?? '') }}" name="fac_sec4_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="fac_sec4_text" class="form-control form-control-lg my-editor">{{ old('fac_sec4_text',$page_meta['fac_sec4_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <!-- section 5 -->
                                    <div class="col-sm-12"> 
                                       
                                        <div class="field form-group">
                                        <label>Section 5</label>
                                        <input type="text" value="{{ old('fac_sec5_heading',$page_meta['fac_sec5_heading'] ?? '') }}" name="fac_sec5_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                
                                        </div>
                                    </div>
                                    
                                </div>

                                <!-- facilities end -->

                                <!-- staffing -->
                                <div class="row staffingtemplate template_attributes">
                                    <div class="col-sm-12">
                                        <h3>Section 1</h3>  
                                        

                                        <div class="field form-group">
                                            <label>Heading</label>
                                            <input type="text" value="{{ old('staff_sec1_heading',$page_meta['staff_sec1_heading'] ?? '') }}" name="staff_sec1_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                              
                                        <div class="field form-group">
                                            <label>Box 1</label>
                                            <input type="text" value="{{ old('staff_sec1_bx1_heading',$page_meta['staff_sec1_bx1_heading'] ?? '') }}" name="staff_sec1_bx1_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="10" name="staff_sec1_bx1_text" class="form-control form-control-lg my-editor">{{ old('staff_sec1_bx1_text',$page_meta['staff_sec1_bx1_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12">
                              
                                        <div class="field form-group">
                                            <label>Box 2</label>
                                            <input type="text" value="{{ old('staff_sec1_bx2_heading',$page_meta['staff_sec1_bx2_heading'] ?? '') }}" name="staff_sec1_bx2_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="staff_sec1_bx2_text" class="form-control form-control-lg my-editor">{{ old('staff_sec1_bx2_text',$page_meta['staff_sec1_bx2_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12">
                              
                                        <div class="field form-group">
                                            <label>Box 3</label>
                                            <input type="text" value="{{ old('staff_sec1_bx3_heading',$page_meta['staff_sec1_bx3_heading'] ?? '') }}" name="staff_sec1_bx3_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="staff_sec1_bx3_text" class="form-control form-control-lg my-editor">{{ old('staff_sec1_bx3_text',$page_meta['staff_sec1_bx3_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12"> 
                                       
                                        <h3>Section 2</h3>  
                                        <div class="field form-group">
                                            <label>Box 1</label>
                                            <input type="text" value="{{ old('staff_sec2_bx1_heading',$page_meta['staff_sec2_bx1_heading'] ?? '') }}" name="staff_sec2_bx1_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="staff_sec2_bx1_text" class="form-control form-control-lg my-editor">{{ old('staff_sec2_bx1_text',$page_meta['staff_sec2_bx1_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12">
                              
                                        <div class="field form-group">
                                            <label>Box 2</label>
                                            <input type="text" value="{{ old('staff_sec2_bx2_heading',$page_meta['staff_sec2_bx2_heading'] ?? '') }}" name="staff_sec2_bx2_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="staff_sec2_bx2_text" class="form-control form-control-lg my-editor">{{ old('staff_sec2_bx2_text',$page_meta['staff_sec2_bx2_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12"> 
                                       
                                        <h3>Section 3</h3>  
                                        <div class="field form-group">                                            
                                            <textarea rows="5" name="staff_sec3_text" class="form-control form-control-lg my-editor">{{ old('staff_sec3_text',$page_meta['staff_sec3_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12"> 
                                       
                                        <h3>Section 4</h3>  
                                        <div class="field form-group">                                            
                                            <textarea rows="5" name="staff_sec4_text" class="form-control form-control-lg my-editor">{{ old('staff_sec4_text',$page_meta['staff_sec4_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                </div>
                                <!-- staffing end -->


                                <!-- Request Demo -->
                                <div class="row request-demotemplate template_attributes">
                                    <div class="col-sm-12">
                                        <h3>Section 1</h3>                        
                                        <div class="field form-group">
                                            <label>Tag Line</label>
                                            <input type="text" value="{{ old('rd_sec1_tagline',$page_meta['rd_sec1_tagline'] ?? '') }}" name="rd_sec1_tagline" placeholder="Heading..." class="form-control form-control-lg" />
                                        </div>                              
                                        <div class="field form-group">
                                            <label>Heading</label>
                                            <input type="text" value="{{ old('rd_sec1_heading',$page_meta['rd_sec1_heading'] ?? '') }}" name="rd_sec1_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="10" name="rd_sec1_text" class="form-control form-control-lg my-editor">{{ old('title',$page_meta['rd_sec1_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>
                               

                                <div class="col-sm-12 form-group"> 
                                <div class="field form-group">  
                                    <h3>Section 2</h3>  
                                    <input type="text" value="{{ old('rd_sec2_heading',$page_meta['rd_sec2_heading'] ?? '') }}" name="rd_sec2_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                </div>
                                    <div class="field form-group">
                                            <label>Box 1</label>
                                            <input type="text" value="{{ old('rd_sec2_bx1_heading',$page_meta['rd_sec2_bx1_heading'] ?? '') }}" name="rd_sec2_bx1_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="rd_sec2_bx1_text" class="form-control form-control-lg my-editor">{{ old('rd_sec2_bx1_text',$page_meta['rd_sec2_bx1_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12">
                              
                                        <div class="field form-group">
                                            <label>Box 2</label>
                                            <input type="text" value="{{ old('rd_sec2_bx2_heading',$page_meta['rd_sec2_bx2_heading'] ?? '') }}" name="rd_sec2_bx2_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="rd_sec2_bx2_text" class="form-control form-control-lg my-editor">{{ old('rd_sec2_bx2_text',$page_meta['rd_sec2_bx2_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12">
                              
                                        <div class="field form-group">
                                            <label>Box 3</label>
                                            <input type="text" value="{{ old('rd_sec2_bx3_heading',$page_meta['rd_sec2_bx3_heading'] ?? '') }}" name="rd_sec2_bx3_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="rd_sec2_bx3_text" class="form-control form-control-lg my-editor">{{ old('rd_sec2_bx3_text',$page_meta['rd_sec2_bx3_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12">
                              
                                        <div class="field form-group">
                                            <label>Box 4</label>
                                            <input type="text" value="{{ old('rd_sec2_bx4_heading',$page_meta['rd_sec2_bx4_heading'] ?? '') }}" name="rd_sec2_bx4_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="rd_sec2_bx4_text" class="form-control form-control-lg my-editor">{{ old('rd_sec2_bx4_text',$page_meta['rd_sec2_bx4_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12">
                              
                                        <div class="field form-group">
                                            <label>Box 5</label>
                                            <input type="text" value="{{ old('rd_sec2_bx5_heading',$page_meta['rd_sec2_bx5_heading'] ?? '') }}" name="rd_sec2_bx5_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="rd_sec2_bx5_text" class="form-control form-control-lg my-editor">{{ old('rd_sec2_bx5_text',$page_meta['rd_sec2_bx5_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12">
                              
                                        <div class="field form-group">
                                            <label>Box 6</label>
                                            <input type="text" value="{{ old('rd_sec2_bx6_heading',$page_meta['rd_sec2_bx6_heading'] ?? '') }}" name="rd_sec2_bx6_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                            <textarea rows="5" name="rd_sec2_bx6_text" class="form-control form-control-lg my-editor">{{ old('rd_sec2_bx6_text',$page_meta['rd_sec2_bx6_text'] ?? '') }}</textarea>
                                        </div>
                                
                                    </div>

                                    <div class="col-sm-12">
                                        <h3>Section 3</h3>                        
                                                                   
                                        <div class="field form-group">
                                            <label>Heading</label>
                                            <input type="text" value="{{ old('rd_sec3_heading',$page_meta['rd_sec3_heading'] ?? '') }}" name="rd_sec3_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                        </div>
                                        <div class="field form-group">
                                            <label>Sub Heading</label>
                                            <input type="text" value="{{ old('rd_sec3_subheading',$page_meta['rd_sec3_subheading'] ?? '') }}" name="rd_sec3_subheading" placeholder="Sub Heading..." class="form-control form-control-lg" />

                                            <textarea rows="10" name="rd_sec3_text" class="form-control form-control-lg my-editor">{{ old('title',$page_meta['rd_sec3_text'] ?? '') }}</textarea>
                                        </div>
                                       
                                
                                    </div>

                                    <div class="col-sm-12">
                                        <h3>Section 4</h3>                        
                                        <div class="field form-group">
                                            <label>Tag Line</label>
                                            <input type="text" value="{{ old('rd_sec4_tagline',$page_meta['rd_sec4_tagline'] ?? '') }}" name="rd_sec4_tagline" placeholder="Heading..." class="form-control form-control-lg" />
                                        </div>                              
                                        <div class="field form-group">
                                            <label>Heading</label>
                                            <input type="text" value="{{ old('rd_sec4_heading',$page_meta['rd_sec4_heading'] ?? '') }}" name="rd_sec4_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                        </div>
                                
                                    </div>

                                </div>
                                    
                                <!-- Request Demo end -->

                                <!-- about -->
                                
                                <div class="row abouttemplate template_attributes">
                                    <div class="col-sm-12 form-group">
                                        <h3>Section 1</h3>  
                                        <div class="field">
                                            <input type="text" value="{{ old('abt_sec1_heading',$page_meta['abt_sec1_heading'] ?? '') }}" name="abt_sec1_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                        </div>
                                        <div class="field">                                            
                                            <textarea rows="10" name="abt_sec1_text" class="form-control form-control-lg my-editor">{{ old('title',$page_meta['abt_sec1_text'] ?? '') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 form-group">
                                        <h3>Section 2</h3>  
                                        <div class="field">
                                            <input type="text" value="{{ old('abt_sec2_heading',$page_meta['abt_sec2_heading'] ?? '') }}" name="abt_sec2_heading" placeholder="Heading..." class="form-control form-control-lg" />
                                        </div>
                                        <div class="field">                                            
                                            <textarea rows="10" name="abt_sec2_text" class="form-control form-control-lg my-editor">{{ old('title',$page_meta['abt_sec2_text'] ?? '') }}</textarea>
                                        </div>
                                    </div>

                                </div>

                                <!-- about end -->

                                <!-- contact -->

                                <div class="row contacttemplate template_attributes">
                                    <div class="col-sm-12">
                                          
                                        <div class="form-group">
                                            <input type="text" value="{{ old('contact_heading',$page_meta['contact_heading'] ?? '') }}" name="contact_heading" placeholder="Heading" class="form-control form-control-lg" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="{{ old('contact_ci',$page_meta['contact_ci'] ?? '') }}" name="contact_ci" placeholder="Contact Information" class="form-control form-control-lg" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="{{ old('contact_add',$page_meta['contact_add'] ?? '') }}" name="contact_add" placeholder="Address" class="form-control form-control-lg" />
                                        </div>                                        
                                        <div class="form-group">
                                            <input type="text" value="{{ old('contact_email',$page_meta['contact_email'] ?? '') }}" name="contact_email" placeholder="Email" class="form-control form-control-lg" />
                                        </div>                                        
                                        <div class="form-group">
                                            <input type="text" value="{{ old('contact_phn',$page_meta['contact_phn'] ?? '') }}" name="contact_phn" placeholder="Phone" class="form-control form-control-lg" />
                                        </div>                                        
                                        <div class="form-group">
                                            <input type="text" value="{{ old('contact_line',$page_meta['contact_line'] ?? '') }}" name="contact_line" placeholder="Contact Line" class="form-control form-control-lg" />
                                        </div>                   
                                        
                                        
                                        <div class="form-group">
                                            <input type="text" value="{{ old('contact_bx1_head',$page_meta['contact_bx1_head'] ?? '') }}" name="contact_bx1_head" placeholder="Heading" class="form-control form-control-lg" />
                                        </div>                                        
                                        <div class="form-group">
                                            <input type="text" value="{{ old('contact_bx2_head',$page_meta['contact_bx2_head'] ?? '') }}" name="contact_bx2_head" placeholder="Heading" class="form-control form-control-lg" />
                                        </div>                                        
                                        <div class="form-group">
                                            <input type="text" value="{{ old('contact_bx3_head',$page_meta['contact_bx3_head'] ?? '') }}" name="contact_bx3_head" placeholder="Heading" class="form-control form-control-lg" />
                                        </div>                                        
                                    </div>

                                </div>

                                <!-- contact end -->

                                <!-- faqs -->

                                <div class="row faqstemplate template_attributes">
                                    <div class="col-sm-12">              
                                        <div class="form-group">
                                            <label>Question 1:</label>
                                            <input type="text" value="{{ old('faqs_q1',$page_meta['faqs_q1'] ?? '') }}" name="faqs_q1" placeholder="Question" class="form-control form-control-lg" />
                                        </div>                              
                                        <div class="form-group">
                                            <label>Answer:</label>
                                            <textarea rows="10" name="faqs_ans1" class="form-control form-control-lg my-editor">{{ old('faqs_ans1',$page_meta['faqs_ans1'] ?? '') }}</textarea>
                                        </div>                                
                                    </div>

                                    <div class="col-sm-12">              
                                        <div class="form-group">
                                            <label>Question 2:</label>
                                            <input type="text" value="{{ old('faqs_q2',$page_meta['faqs_q2'] ?? '') }}" name="faqs_q2" placeholder="Question" class="form-control form-control-lg" />
                                        </div>                              
                                        <div class="form-group">
                                            <label>Answer:</label>
                                            <textarea rows="10" name="faqs_ans2" class="form-control form-control-lg my-editor">{{ old('faqs_ans2',$page_meta['faqs_ans2'] ?? '') }}</textarea>
                                        </div>                                
                                    </div>

                                    <div class="col-sm-12">              
                                        <div class="form-group">
                                            <label>Question 3:</label>
                                            <input type="text" value="{{ old('faqs_q3',$page_meta['faqs_q3'] ?? '') }}" name="faqs_q3" placeholder="Question" class="form-control form-control-lg" />
                                        </div>                              
                                        <div class="form-group">
                                            <label>Answer:</label>
                                            <textarea rows="10" name="faqs_ans3" class="form-control form-control-lg my-editor">{{ old('faqs_ans3',$page_meta['faqs_ans3'] ?? '') }}</textarea>
                                        </div>                                
                                    </div>

                                    <div class="col-sm-12">              
                                        <div class="form-group">
                                            <label>Question 4:</label>
                                            <input type="text" value="{{ old('faqs_q4',$page_meta['faqs_q4'] ?? '') }}" name="faqs_q4" placeholder="Question" class="form-control form-control-lg" />
                                        </div>                              
                                        <div class="form-group">
                                            <label>Answer:</label>
                                            <textarea rows="10" name="faqs_ans4" class="form-control form-control-lg my-editor">{{ old('faqs_ans4',$page_meta['faqs_ans4'] ?? '') }}</textarea>
                                        </div>                                
                                    </div>
                                </div>
                                <!-- faqs end -->
                                
                                
                                <div class="row field form-group">
                                    <div class="col-sm-3">
                                        <a href="{{ route('admin_pages') }}" class="btn btn-block btn-primary">Cancel</a>
                                    </div>
                                    <div class="col-sm-3">
                                       <input type="submit" class="btn btn-block btn-primary" value="Update">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="row">
                                    
                                    <!-- <div class="col-sm-12">
                                        <div class="upload-bx">
                                            <div class="field file_manager_field">
                                                <h4>Image</h4>
                                                <label>Page Image</label>
                                                <input type="text" id="thumbnail" name="page_image" value="{{ old('page_image',(isset($page->image) ? asset($page->image) : '') )  }}" class="form-control form-control-lg" />
                                                <i class="fa fa-image" aria-hidden="true" id="lfm" data-input="thumbnail" data-preview="holder"></i>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="field">
                                            <h4>Page Attribute</h4>
                                            <label>Template</label></br></br>                                                
                                                <select name="template" class="template_trigger file_manager_field form-control form-control-lg">
                                                    <option value="">Select Template</option>
                                                    @if(!empty(getTemplates()))
                                                        @foreach(getTemplates() as $name => $template)
                                                            <option value="{{ $name }}" @if( old('template',$pageDescription->template ?? '') == $name ) selected="" @endif>{{ $template }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                        <label>Status</label>
                                            <div class="field mbpx-35">
                                                <select name="status" class="form-control form-control-lg">
                                                    <option value="">Select Status</option>
                                                    <option value="Active" @if( old('status',$page->status ?? '') == 'Active' ) selected="" @endif>Active</option>
                                                    <option value="Inactive" @if( old('status',$page->status ?? '') == 'Inactive' ) selected="" @endif>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <h4>SEO (Optional)</h4>
                                            <div class="field">
                                            <label>Meta Title</label>
                                            <input type="text" name="meta_title" value="{{ old('meta_title',$pageDescription->meta_title ?? '') }}" class="form-control form-control-lg">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="field">
                                                <label>Meta Keywords</label>
                                                <input type="text" name="meta_keywords" value="{{ old('meta_keywords',$pageDescription->meta_keywords ?? '') }}" class="form-control form-control-lg">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="field">
                                                <label>Meta Description</label>
                                                <input type="text" name="meta_description" value="{{ old('meta_description',$pageDescription->meta_description ?? '') }}" class="form-control form-control-lg">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="col-sm-12">
                                        <div class="field">
                                            <h4>Social Setting</h4>
                                            <input type="checkbox" name="social_links"  @if( $page->social_links == 1 ) checked @endif value="1" class="form-control-lg" />
                                             <span>Social Links </span>
                                             <input type="checkbox" name="newsletter" @if( $page->newsletter == 1 ) checked @endif value="1" class="form-control-lg" />
                                             <span>Newsletter </span>
                                        </div>
                                    </div> -->

                                </div><!-- show-amm mbpx-20 -->
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
        $('#lfm').filemanager('image', {prefix: route_prefix});

        $(document).ready(function(){
            $('.template_attributes').hide();
            var check_template = $('.template_trigger').val();
            
            if(check_template)
            {
                var template_class          = '.'+check_template + 'template';
                console.log(template_class);
                var template_attributes     = $( template_class ).length;
                if(template_attributes)
                {
                    $(template_class).show();
                }
            }

            $('.template_trigger').on('change',function(){

                var template                = $(this).val();
                var template_class          = '.'+template + 'template';
                var template_attributes     = $( template_class ).length;

                $('.template_attributes').hide();

                if(template_attributes)
                {
                    $(template_class).show();
                }

            })
        })
    </script>
@endsection

