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
@section('body-class') inner-page profile-pg-detail logged-in  @stop
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
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Rubbah Khan</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Profile</a>
					</span>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="main-content">
	<div class="container">
		<div class="row c-cont mbpx-62">
			<div class="col-sm-4">
				<div class="srch-fld mbpx-20">
					<input type="text" name="search" placeholder="Search...">
					<button><i class="fa fa-search"></i></button>
				</div>
				@include('frontend.includes.profile-sidebar')

				<aside class="content-box side-bar ptpx-0">
					<div class="dt-sidebar">
						<div class="cat-list">
							<ul>
								<li><i class="fa fa-user-o" aria-hidden="true"></i> Contact Requests <span class="count">2</span></li>
							</ul>
						</div>
					</div>
				</aside>
				@include('frontend.includes.chat-sidebar-points-contact')
			</div>

			<div class="col-sm-8">
				<div class="tab-head clearfix">
					<ul>
						<li class="active"><a href="javascript:;">Posts</a></li>
						<li><a href="javascript:;">Events</a></li>
						<li><a href="javascript:;">Fundraisers</a></li>
						<li><a href="javascript:;">Polls</a></li>
					</ul>
				</div>
				<div class="tab-content" style="display: block;">
					<div class="scrl-cont mbpx-20">

						<div class="clearfix">
							<div class="post-head">
								<figure>
									{{ HTML::image('images/profile-lg.png', 'Safina Bay') }}
								</figure>
								<h3>Rubbah Khan <span>Shared in</span> <span class="blue">Islamic Softwares</span></h3>
								<p>December 6 at 12:10 PM</p>
								<div class="more-info">
									<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</div>
							</div>
							<div class="post-img">
								<figure>
									{{ HTML::image('images/profile-main-img.jpg', 'Safina Bay') }}
								</figure>
							</div>
							<div class="post-dt">
								<h2>Promotion For Islam</h2>
								<h3>December 4 at 12:10 PM</h3>
								<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying.</p>
							</div>

							<div class="post-info">
								<div class="row">
									<div class="col-sm-6">
										<span class="ico"><a href="javascript:;"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></span>
										<span>1k</span>

										<a class="comment" href="javascript:;">222 Comments</a>
									</div>
									<div class="col-sm-6 text-right">
										<div class="links">
											<a href="javascript:;">Like</a>
											<a href="javascript:;">Reply</a>
											<a href="javascript:;">Share</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="clearfix">
							<div class="post-head">
								<figure>
									{{ HTML::image('images/profile-lg.png', 'Safina Bay') }}
								</figure>
								<h3>Rubbah Khan <span>Shared in</span> <span class="blue">Islamic Softwares</span></h3>
								<p>December 6 at 12:10 PM</p>
								<div class="more-info">
									<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</div>
							</div>
							<div class="post-img">
								<figure>
									{{ HTML::image('images/profile-main-img.jpg', 'Safina Bay') }}
								</figure>
							</div>
							<div class="post-dt">
								<h2>Promotion For Islam</h2>
								<h3>December 4 at 12:10 PM</h3>
								<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying.</p>
							</div>

							<div class="post-info">
								<div class="row">
									<div class="col-sm-6">
										<span class="ico"><a href="javascript:;"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></span>
										<span>1k</span>

										<a class="comment" href="javascript:;">222 Comments</a>
									</div>
									<div class="col-sm-6 text-right">
										<div class="links">
											<a href="javascript:;">Like</a>
											<a href="javascript:;">Reply</a>
											<a href="javascript:;">Share</a>
										</div>
									</div>
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




