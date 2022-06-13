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
@section('body-class') inner-page approval-pg-detail logged-in  @stop
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
						<li><a href="javascript:;">Events</a></li>
						<li><a href="javascript:;">Fundraisers</a></li>
						<li><a href="javascript:;">Polls</a></li>
					</ul>
				</div>
				<div class="tab-content" style="display: block;">
					<div class="scrl-cont mbpx-20">
						<div class="post-head">
							<figure>
								{{ HTML::image('images/user-avator.png', 'Safina Bay') }}
							</figure>
							<h3><strong>Sandra Evans</strong> Shared a post to the group: Albany, <span class="blue">NY Muslims</span></h3>
							<p>December 6 at 12:10 PM</p>
							<div class="more-info">
								<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
							</div>
						</div>
						<div class="post-main-title clearfix">
							<h2>Lorem Ipsum Dolor Sit Amet Consectetur Adipiscing Elit?</h2>
						</div>
						<div class="post-img">
							<figure>
								{{ HTML::image('images/approval-pg-img.jpg', 'Safina Bay') }}
							</figure>
						</div>
						<div class="post-dt">
							<h3>Promotion For Islam</h3>
							<h5>December 4 at 12:10 PM</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.<br><br>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying.</p>

							<a href="javascript:;" class="primary-btn bx mrpx-10"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
							<a href="javascript:;" class="primary-btn bx red"><i class="fa fa-times" aria-hidden="true"></i> Disapprove</a>
						</div>

						<div class="clearfix">
							<hr>
						</div>

						<div class="post-head">
							<figure>
								{{ HTML::image('images/user-avator.png', 'Safina Bay') }}
							</figure>
							<h3><strong>Sandra Evans</strong> Shared a post to the group: Albany, <span class="blue">NY Muslims</span></h3>
							<p>December 6 at 12:10 PM</p>
							<div class="more-info">
								<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
							</div>
						</div>
						<div class="post-main-title clearfix">
							<h2>Lorem Ipsum Dolor Sit Amet Consectetur Adipiscing Elit?</h2>
						</div>
						<div class="post-img">
							<figure>
								{{ HTML::image('images/approval-pg-img.jpg', 'Safina Bay') }}
							</figure>
						</div>
						<div class="post-dt">
							<h3>Promotion For Islam</h3>
							<h5>December 4 at 12:10 PM</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.<br><br>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying.</p>

							<a href="javascript:;" class="primary-btn bx mrpx-10"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
							<a href="javascript:;" class="primary-btn bx red"><i class="fa fa-times" aria-hidden="true"></i> Disapprove</a>
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




