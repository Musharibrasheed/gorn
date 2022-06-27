{{-- * Template Name : Contact Us * --}}
@extends('frontend.master') @section('page-title') {!!
($pageContent->meta_title) ? $pageContent->title : meta_title() !!} @stop
@section('meta-keywords') {!! ($pageContent->meta_keywords) ?
$pageContent->meta_keywords : meta_keywords() !!} @stop
@section('meta-description') {!! ($pageContent->meta_description) ?
$pageContent->meta_description : meta_description() !!} @stop
@section('body-class') inner-page @stop @section('content') 
@push('styles')
<link rel="stylesheet" href="assets/css/contact-us.css" />
<style>
.bg-white img {
  width: auto;
}
</style>
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

<div class="container-fluid">
  <div class="container">
	<div class="row">
		<div class="col-md-5 purple">
			<div class="contact-info">
				<h2>{{ $page_meta['contact_heading'] ?? '' }}</h2>
				<p class="contact-text">{{ $page_meta['contact_ci'] ?? '' }}</p>
				<p class="santa"><i class="fa-solid fa-location-dot" style="    padding-right: 6px;"></i>       {{ $page_meta['contact_add'] ?? '' }}</p>
				<p class="santa2"><i class="fa fa-envelope" style="font-size:17px;padding-right: 6px;"></i>        {{ $page_meta['contact_email'] ?? '' }}</p>
				<p class="santa3"><i class="fa fa-phone" style="font-size:17px;padding-right: 6px;"></i>       {{ $page_meta['contact_phn'] ?? '' }}</p>
			</div>
		</div>
		<div class="col-md-7">
			
			<form class="my-form">
  <div class="container">
    <h1>{{ $page_meta['contact_line'] ?? '' }}</h1>
    <ul>
     
 
      </li>
      <li>
        <div class="grid grid-2">
          <input type="text" placeholder="Enter Your Name" required>  
          <input type="text" placeholder="Subject" required>
        </div>
      </li>
      <li>
        <div class="grid grid-2">
          <input type="email" placeholder="Enter Your Email Address" required>  
          <input type="tel" placeholder="Enter Your Phone Number">
        </div>
      </li> 
      <li>
        <div class="grid grid-2">
          <input type="email" placeholder="Contact Time" required>  
          <input type="tel" placeholder="Organization Name (optional)">
        </div>
      </li> 
      <li>
        <div class="grid grid-2">
          <input type="email" placeholder="Title/Role" required>  
        </div>
      </li>  
      <li>
        <textarea placeholder="Message"></textarea>
      </li>   
      
      <a href="#" class='btn'>Submit</a>

		</div>
	</div>
</div>
</ul>
</div>
</form>
</div>
</div>
</div>
</div>


<section class="bg-building">
	<div class="container" style="max-width:1320px">
	<div class="container bg-white" style="max-width:1320px">
		<div class="row">
			<div class="col-md-4">
				<div class="join">
					<h1>{{ $page_meta['contact_bx1_head'] ?? '' }}</h1>
					<div class="icon1">
						<center><img class="icon1" src="assets/images/join-us-icon.png"></center>
					</div>
					<center><a class="careers" href="careers">CAREERS</a></center>
				</div>
			</div>
			<div class="col-md-4">
                <div class="join">
                    <h1>{{ $page_meta['contact_bx2_head'] ?? '' }}</h1>
                    <div class="icon1">
                        <center><img class="icon1" src="assets/images/read-news-icon.png"></center>
                    </div>
                    <center><a class="careers" href="careers">CAREERS</a></center>
                </div>
            </div>
			<div class="col-md-4">
				<div class="have">
					<h1>{{ $page_meta['contact_bx3_head'] ?? '' }}</h1>
					<center><img class="icon1 for-question-icon" src="assets/images/question-icon.png"></center>
					<center><a class="news" href="careers">CONTACT US</a></center>
				</div>
			</div>
		</div>
	</div>
</div>
</section>



@endsection




