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
            <form action="/action_page.php">
                <div class="name">
                    <p>Name</p>
                    <div class="row-name">
                        <div class="first">
                            <input type="text" id="fname" name="firstname" />
                            <label for="fname">First</label>
                        </div>

                        <div class="last">
                            <input type="text" id="lname" name="lastname" />
                            <label for="lname">Last</label>
                        </div>
                    </div>
                </div>

                <div class="email-1-1">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" />
                </div>

                <div class="email-1 number">
                    <label for="email">Mobile Number</label>
                    <input type="number" id="email" name="email" />
                </div>

                <div class="email-1 adress">
                    <label for="email">Address</label>
                    <input type="text" id="email" name="email" />
                </div>

                <div class="email-1 name adress mt-top-city">
                    <div class="row-name">
                        <div class="first">
                            <input type="text" id="fname" name="firstname" />
                            <label for="fname">City</label>
                        </div>

                        <div class="last">
                            <select id="state" name="country">
                                <option value="australia">Australia</option>
                                <option value="canada">Canada</option>
                                <option value="usa">USA</option>
                            </select>
                            <label for="state">State</label>
                        </div>
                    </div>
                </div>

                <div class="name">
                    <p>Zip Code</p>
                    <div class="row-name">
                        <div class="first">
                            <input type="text" id="fname" name="firstname" />
                            <label for="fname"></label>
                        </div>
                    </div>
                </div>

                <div class="name">
                    <p>Zip Code</p>
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
                    <p>
                        Emergency Department Patient Care Tech : ( EMT License 6
                        Months Previous PCT Experience Required)
                    </p>
                    <p>
                        Bridge Program : (Required completion of “Intro to Med
                        Surg” clinical rotation or equivalent in Nursing School)
                    </p>
                    <p>Safety Attendant : (BLS / CNA Certificate Required)</p>
                </div>

                <div class="email-1 upload">
                    <h5>Upload Resume (Optional)</h5>
                    <input type="file" id="myFile" name="filename" />
                    <label for="myFile" class="uploadf">
                        Choose File
                    </label>
                    <h5 class="nfchsn">
                        No File Choosen
                    </h5>
                    <span>Max. file size:32 MB.</span>
                </div>

                <div class="email-1 info">
                    <label for="email">How many years acute experience?</label>
                    <input type="number" id="email" name="email" />
                </div>

                <div class="checkbox-sec">
                    <p>Emergency Response Team (ERT)</p>
                    <input
                        type="checkbox"
                        id="vehicle1"
                        name="vehicle1"
                        value="Bike"
                    />
                    <label for="vehicle1"
                        >Add me to the Emergency Response Team</label
                    ><br />
                    <input
                        type="checkbox"
                        id="vehicle1"
                        name="vehicle1"
                        value="Bike"
                    />
                    <label for="vehicle1" class="chkbx"
                        >Add me for the Volunteer Position</label
                    ><br />
                </div>

                <div class="name fb-add">
                    <p>How Did You Hear About Go RN</p>
                    <div class="row-name">
                        <div class="first">
                            <select id="state" name="country">
                                <option value="australia">Facebook Ad</option>
                                <option value="canada">Twitter Ad</option>
                                <option value="usa">Youtube Ad</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div
                    class="g-recaptcha"
                    data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"
                ></div>

                <div class="submit-btn">
                    <input type="submit" value="Submit" />
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
