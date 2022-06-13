{{-- * Template Name : Community * --}}
@extends('frontend.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Safina Bay | #1 Islamic Network' !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Safina Bay | #1 Islamic Network' !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Safina Bay | #1 Islamic Network' !!}
@stop
@section('body-class') inner-page clndr-inner-pg-detail logged-in  @stop
@section('content')


<section>

	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<span>
						<a href="{!! URL::to('/') !!}">Home</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Community</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Groups</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Albany, NY Muslims</a>
					</span>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="main-content">
	<div class="container">
		<div class="row c-cont mbpx-62">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-12">
						<div class="cbox clearfix">
							<div class="more-info">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</div>
							<figure>
								<img src="../images/community-bx-img-dt.jpg" alt="Community">
								<span class="grade">1</span>
							</figure>
							<h4>Albany, NY Muslims</h4>
							<h6 class="mbpx-10">Islamic Community</h6>
							<p class="fa-15 mbpx-52">1452 Members - <span class="l-green">65 Online</span></p>
							<a href="javascript:;" class="primary-btn bx">Add Member</a>
							<div class="points">
								<i class="points-ico"></i>
								<h4>3828</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row c-cont mbpx-62">
			<div class="col-sm-4">
				<div class="srch-fld mbpx-20">
					<input type="text" name="search" placeholder="Search...">
					<button><i class="fa fa-search"></i></button>
				</div>
				@include('frontend.includes.group-live-chat')
				@include('frontend.includes.dt-sidebar')
				@include('frontend.includes.chat-sidebar-points')
			</div>

			<div class="col-sm-8">
				<div class="tab-head clearfix">
					<ul>
						<li><a href="javascript:;">Posts</a></li>
						<li class="active"><a href="javascript:;">Events</a></li>
						<li><a href="javascript:;">Fundraisers</a></li>
						<li><a href="javascript:;">Polls</a></li>
					</ul>
				</div>
				<div class="tab-content" style="display: block;">
					<div class="scrl-cont mbpx-20">

						<div class="clearfix">

							<div class="post-img">
								<figure>
									{{ HTML::image('images/events-img.jpg', 'Safina Bay') }}
								</figure>
							</div>
							<div class="post-detail">
								<h3>Rights &amp; Obligations of Citizens</h3>
								<ul>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i> Abc Lorem Street, Home ground 223</li>
									<li><i class="fa fa-calendar-o" aria-hidden="true"></i> January 8th, 2019</li>
									<li><i class="fa fa-clock-o" aria-hidden="true"></i> 5:00 PM – 8:00 PM</li>
								</ul>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages <br><br>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more <br><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
								</p>
								<div class="clearfix btns">
									<a href="javascript:;" class="primary-btn bx fa-16">Approve</a>
									<a href="javascript:;" class="primary-btn bx fa-16 grey-o outline mlpx-15">Disapprove</a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<img src="../images/map-community-pg.jpg" alt="Map" class="img-fluid">
			</div>
		</div>
	</div>
</section>



@endsection




