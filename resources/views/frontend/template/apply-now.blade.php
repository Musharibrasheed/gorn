{{-- * Template Name : Apply Now * --}}
@extends('frontend.master') @section('page-title') {!!
($pageContent->meta_title) ? $pageContent->title : meta_title() !!} @stop
@section('meta-keywords') {!! ($pageContent->meta_keywords) ?
$pageContent->meta_keywords : meta_keywords() !!} @stop
@section('meta-description') {!! ($pageContent->meta_description) ?
$pageContent->meta_description : meta_description() !!} @stop
@section('body-class') inner-page @stop @section('content') @push('styles')
<link rel="stylesheet" href="assets/css/apply-form.css" />

@endpush

<div class="for-hero-section-bg">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="for-hero-main-section">
                        <div class="for-hero-inner-section">
                            <div class="for-hero-section-content">
                                <div class="for-hero-section-heading">
                                    <h3 class="for-hero-section-h3">
                                        {{ $pageContent->title ?? '' }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="apple-form">
    <div class="container apply-container">
        <div class="text-apply">
           {!! $pageContent->content ?? '' !!}
            <span>"*" indicates required fields</span>
        </div>
        <div class="main-form">

            @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <div class="error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    
                </div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
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
            
            <form action="{{ route('apply_now') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="name">
                    <p>{{$page_meta['ap_name'] ?? ''}}</p>
                    <div class="row-name">
                        <div class="first">
                            <input type="text" id="fname" name="first_name" />
                            <label for="fname">{{$page_meta['ap_first'] ?? ''}}</label>
                        </div>

                        <div class="last">
                            <input type="text" id="lname" name="last_name" />
                            <label for="lname">{{$page_meta['ap_last'] ?? ''}}</label>
                        </div>
                    </div>
                </div>

                <div class="email-1-1">
                    <label for="email">{{$page_meta['ap_email'] ?? ''}}</label>
                    <input type="email" id="email" name="email" />
                </div>

                <div class="email-1 number">
                    <label for="email">{{$page_meta['ap_mobile'] ?? ''}}</label>
                    <input type="number" id="email" name="mobile_number" />
                </div>

                <div class="email-1 adress">
                    <label for="email">{{$page_meta['address'] ?? ''}}</label>
                    <input type="text" id="email" name="address" />
                </div>

                <div class="email-1 name adress mt-top-city">
                    <label for="fname">{{$page_meta['ap_city'] ?? ''}}</label>
                    <div class="row-name">
                        <div class="first">
                            <input type="text" id="fname" name="city" />
                        </div>

                        <div class="last">
                            <select id="state" name="state">
                                <option value="australia">Alaska</option>
                                <option value="canada">New York</option>
                                <option value="usa">Alabma</option>
                            </select>
                            <label for="state">{{$page_meta['ap_state'] ?? ''}}</label>
                        </div>
                    </div>
                </div>

                <div class="name">
                    <p>{{$page_meta['ap_zip'] ?? ''}}</p>
                    <div class="row-name">
                        <div class="first">
                            <input type="text" id="fname" name="zip_code" />
                            <label for="fname"></label>
                        </div>
                    </div>
                </div>

                <div class="name">
                    <p>{{$page_meta['ap_country'] ?? ''}}</p>
                    <div class="row-name">
                        <div class="first">
                            <select id="state" name="country">
                                <option value="australia">Australia</option>
                                <option value="canada">Canada</option>
                                <option value="usa">USA</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="para-mix">
                    {{$page_meta['ap_text'] ?? ''}}
                </div>

                <div class="email-1 upload">
                    <h5>{{$page_meta['ap_upload'] ?? ''}}</h5>
                    <input type="file" id="myFile" name="filename" accept="doc,.docx,.pdf" />
                    <label for="myFile" class="uploadf">
                        Choose File
                    </label>
                    
                    <span>Max. file size:32 MB.</span>
                </div>

                <div class="email-1 info">
                    <label for="email">{{$page_meta['ap_experience'] ?? ''}}</label>
                    <input type="number" id="email" name="experience" />
                </div>

                <div class="checkbox-sec">
                    <p>{{$page_meta['ap_ert'] ?? ''}}</p>
                    <input
                        type="checkbox"
                        id="vehicle1"
                        name="ert"
                        value="Yes"
                    />
                    <label for="vehicle1"
                        >{{$page_meta['ap_ertop1'] ?? ''}}</label
                    ><br />
                    <input
                        type="checkbox"
                        id="vehicle1"
                        name="rt"
                        value="Yes"
                    />
                    <label for="vehicle1" class="chkbx"
                        >{{$page_meta['ap_ertop2'] ?? ''}}</label
                    ><br />
                </div>

                <div class="name fb-add">
                    <p>{{$page_meta['ap_abtus'] ?? ''}}</p>
                    <div class="row-name">
                        <div class="first">
                            <select id="state" name="about_go_rn">
                                <option value="Facebook">Facebook Ad</option>
                                <option value="Twitter">Twitter Ad</option>
                                <option value="Youtube">Youtube Ad</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="submit-btn">
                    <input type="submit" value="Submit" />
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
