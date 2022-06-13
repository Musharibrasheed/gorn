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
@section('body-class') inner-page event-listing-pg-detail logged-in  @stop
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
							<ul>
								<li>
									<div class="row">
										<div class="col-sm-12">
											<figure>
												{{ HTML::image('images/events-lst-1.jpg', 'Safina Bay') }}
											</figure>
											<h3>Rights &amp; Obligations of Citizens</h3>
											<h4>Jan 8th 2019  -  5:00 PM – 8:00 PM</h4>
											<p>Nam facilisis, mi eget ullamcorper mollis, nisl urna vulputate ex eu pulvinar leo turpis quis sapieneffitur nisi vitae rhoncus</p>
											<p><a href="javascript:;" class="green">Learn more</a></p>
											<div class="more-info">
												<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="row">
										<div class="col-sm-12">
											<figure>
												{{ HTML::image('images/events-lst-1.jpg', 'Safina Bay') }}
											</figure>
											<h3>Rights &amp; Obligations of Citizens</h3>
											<h4>Jan 8th 2019  -  5:00 PM – 8:00 PM</h4>
											<p>Nam facilisis, mi eget ullamcorper mollis, nisl urna vulputate ex eu pulvinar leo turpis quis sapieneffitur nisi vitae rhoncus</p>
											<p><a href="javascript:;" class="green">Learn more</a></p>
											<div class="more-info">
												<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="row">
										<div class="col-sm-12">
											<figure>
												{{ HTML::image('images/events-lst-1.jpg', 'Safina Bay') }}
											</figure>
											<h3>Rights &amp; Obligations of Citizens</h3>
											<h4>Jan 8th 2019  -  5:00 PM – 8:00 PM</h4>
											<p>Nam facilisis, mi eget ullamcorper mollis, nisl urna vulputate ex eu pulvinar leo turpis quis sapieneffitur nisi vitae rhoncus</p>
											<p><a href="javascript:;" class="green">Learn more</a></p>
											<div class="more-info">
												<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="row">
										<div class="col-sm-12">
											<figure>
												{{ HTML::image('images/events-lst-1.jpg', 'Safina Bay') }}
											</figure>
											<h3>Rights &amp; Obligations of Citizens</h3>
											<h4>Jan 8th 2019  -  5:00 PM – 8:00 PM</h4>
											<p>Nam facilisis, mi eget ullamcorper mollis, nisl urna vulputate ex eu pulvinar leo turpis quis sapieneffitur nisi vitae rhoncus</p>
											<p><a href="javascript:;" class="green">Learn more</a></p>
											<div class="more-info">
												<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="row">
										<div class="col-sm-12">
											<figure>
												{{ HTML::image('images/events-lst-1.jpg', 'Safina Bay') }}
											</figure>
											<h3>Rights &amp; Obligations of Citizens</h3>
											<h4>Jan 8th 2019  -  5:00 PM – 8:00 PM</h4>
											<p>Nam facilisis, mi eget ullamcorper mollis, nisl urna vulputate ex eu pulvinar leo turpis quis sapieneffitur nisi vitae rhoncus</p>
											<p><a href="javascript:;" class="green">Learn more</a></p>
											<div class="more-info">
												<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="row">
										<div class="col-sm-12">
											<figure>
												{{ HTML::image('images/events-lst-1.jpg', 'Safina Bay') }}
											</figure>
											<h3>Rights &amp; Obligations of Citizens</h3>
											<h4>Jan 8th 2019  -  5:00 PM – 8:00 PM</h4>
											<p>Nam facilisis, mi eget ullamcorper mollis, nisl urna vulputate ex eu pulvinar leo turpis quis sapieneffitur nisi vitae rhoncus</p>
											<p><a href="javascript:;" class="green">Learn more</a></p>
											<div class="more-info">
												<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="row">
										<div class="col-sm-12">
											<figure>
												{{ HTML::image('images/events-lst-1.jpg', 'Safina Bay') }}
											</figure>
											<h3>Rights &amp; Obligations of Citizens</h3>
											<h4>Jan 8th 2019  -  5:00 PM – 8:00 PM</h4>
											<p>Nam facilisis, mi eget ullamcorper mollis, nisl urna vulputate ex eu pulvinar leo turpis quis sapieneffitur nisi vitae rhoncus</p>
											<p><a href="javascript:;" class="green">Learn more</a></p>
											<div class="more-info">
												<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="row">
										<div class="col-sm-12">
											<figure>
												{{ HTML::image('images/events-lst-1.jpg', 'Safina Bay') }}
											</figure>
											<h3>Rights &amp; Obligations of Citizens</h3>
											<h4>Jan 8th 2019  -  5:00 PM – 8:00 PM</h4>
											<p>Nam facilisis, mi eget ullamcorper mollis, nisl urna vulputate ex eu pulvinar leo turpis quis sapieneffitur nisi vitae rhoncus</p>
											<p><a href="javascript:;" class="green">Learn more</a></p>
											<div class="more-info">
												<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="row">
										<div class="col-sm-12">
											<figure>
												{{ HTML::image('images/events-lst-1.jpg', 'Safina Bay') }}
											</figure>
											<h3>Rights &amp; Obligations of Citizens</h3>
											<h4>Jan 8th 2019  -  5:00 PM – 8:00 PM</h4>
											<p>Nam facilisis, mi eget ullamcorper mollis, nisl urna vulputate ex eu pulvinar leo turpis quis sapieneffitur nisi vitae rhoncus</p>
											<p><a href="javascript:;" class="green">Learn more</a></p>
											<div class="more-info">
												<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>

					</div>
				</div>

					<div class="clearfix post-reply">
						<div class="clearfix post-tabs">
							<ul>
								<li><a href="javascript:;" ><i class="fa fa-pencil" aria-hidden="true"></i> Write Post</a> </li>
								<li><a href="javascript:;"><i class="fa fa-camera" aria-hidden="true"></i> Add Photo/Video</a></li>
								<li><a href="javascript:;"><i class="fa fa-bar-chart" aria-hidden="true"></i> Create a Poll</a></li>
								<li><a href="javascript:;"><i class="fa fa-usd" aria-hidden="true"></i> Create a Fundraiser</a></li>
								<li><a href="javascript:;" class="active"><i class="fa fa-calendar-o" aria-hidden="true"></i> Create Event</a></li>
							</ul>
						</div>

						<div class="tab-contents create-event">
							<div class="clearfix lst-sec mtpx-20">
								<div class="row">
									<div class="col-sm-12 mbpx-20">
										<input type="text" name="Write Fundraiser Title..." placeholder="Event Name" class="txt">
									</div>
									<div class="col-4 mbpx-20">
										<select class="txt">
											<option>Country</option>
										</select>
									</div>
									<div class="col-4 mbpx-20">
										<select class="txt">
											<option>State</option>
										</select>
									</div>
									<div class="col-4 mbpx-20">
										<input type="text" name="Write Fundraiser Title..." placeholder="City" class="txt">
									</div>

									<div class="col-6 mbpx-20 ico-fld">
										<input type="text" name="Write Fundraiser Title..." placeholder="Start Date" class="txt">
										<i class="fa fa-calendar-o" aria-hidden="true"></i>
									</div>

									<div class="col-6 mbpx-20 ico-fld">
										<input type="text" name="Write Fundraiser Title..." placeholder="End Date" class="txt">
										<i class="fa fa-calendar-o" aria-hidden="true"></i>
									</div>

									<div class="col-6 mbpx-20 ico-fld">
										<input type="text" name="Write Fundraiser Title..." placeholder="Start Time" class="txt">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
									</div>

									<div class="col-6 mbpx-20 ico-fld">
										<input type="text" name="Write Fundraiser Title..." placeholder="End Time" class="txt">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
									</div>

									<div class="col-12 mbpx-20">
										<textarea cols="2" rows="2" placeholder="Write About Your Event..." class="txt"></textarea>
									</div>

									<div class="col-sm-6">
										<a href="javascript:;" class="primary-btn bx">Create</a>
									</div>

									<div class="col-sm-6 text-right">
										<i class="fa fa-paperclip" aria-hidden="true"></i>
										<i class="fa fa-smile-o" aria-hidden="true"></i>
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




