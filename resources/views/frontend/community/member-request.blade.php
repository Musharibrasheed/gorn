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
@section('body-class') inner-page mem-req-pg-detail logged-in  @stop
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

						<div class="clearfix">
							<ul>
								<li>
									<div class="row">
										<div class="col-sm-8">
											<figure>
												{{ HTML::image('images/members-avator-2.png', 'Safina Bay') }}
											</figure>
											<h3>Haleem Asley</h3>
											<h4>Assistant Manager</h4>
											<p>Alabama, USA</p>
										</div>
										<div class="col-sm-4 text-right va-cntr">
											<a href="javascript:;" class="primary-btn bx blue">Accept</a>
											<a href="javascript:;" class="primary-btn bx outline grey-o">Reject</a>
										</div>
									</div>
								</li>

								<li>
									<div class="row">
										<div class="col-sm-8">
											<figure>
												{{ HTML::image('images/members-avator-2.png', 'Safina Bay') }}
											</figure>
											<h3>Haleem Asley</h3>
											<h4>Assistant Manager</h4>
											<p>Alabama, USA</p>
										</div>
										<div class="col-sm-4 text-right va-cntr">
											<a href="javascript:;" class="primary-btn bx blue">Accept</a>
											<a href="javascript:;" class="primary-btn bx outline grey-o">Reject</a>
										</div>
									</div>
								</li>

								<li>
									<div class="row">
										<div class="col-sm-8">
											<figure>
												{{ HTML::image('images/members-avator-2.png', 'Safina Bay') }}
											</figure>
											<h3>Haleem Asley</h3>
											<h4>Assistant Manager</h4>
											<p>Alabama, USA</p>
										</div>
										<div class="col-sm-4 text-right va-cntr">
											<a href="javascript:;" class="primary-btn bx blue">Accept</a>
											<a href="javascript:;" class="primary-btn bx outline grey-o">Reject</a>
										</div>
									</div>
								</li>

								<li>
									<div class="row">
										<div class="col-sm-8">
											<figure>
												{{ HTML::image('images/members-avator-2.png', 'Safina Bay') }}
											</figure>
											<h3>Haleem Asley</h3>
											<h4>Assistant Manager</h4>
											<p>Alabama, USA</p>
										</div>
										<div class="col-sm-4 text-right va-cntr">
											<a href="javascript:;" class="primary-btn bx blue">Accept</a>
											<a href="javascript:;" class="primary-btn bx outline grey-o">Reject</a>
										</div>
									</div>
								</li>

								<li>
									<div class="row">
										<div class="col-sm-8">
											<figure>
												{{ HTML::image('images/members-avator-2.png', 'Safina Bay') }}
											</figure>
											<h3>Haleem Asley</h3>
											<h4>Assistant Manager</h4>
											<p>Alabama, USA</p>
										</div>
										<div class="col-sm-4 text-right va-cntr">
											<a href="javascript:;" class="primary-btn bx blue">Accept</a>
											<a href="javascript:;" class="primary-btn bx outline grey-o">Reject</a>
										</div>
									</div>
								</li>

								<li>
									<div class="row">
										<div class="col-sm-8">
											<figure>
												{{ HTML::image('images/members-avator-2.png', 'Safina Bay') }}
											</figure>
											<h3>Haleem Asley</h3>
											<h4>Assistant Manager</h4>
											<p>Alabama, USA</p>
										</div>
										<div class="col-sm-4 text-right va-cntr">
											<a href="javascript:;" class="primary-btn bx blue">Accept</a>
											<a href="javascript:;" class="primary-btn bx outline grey-o">Reject</a>
										</div>
									</div>
								</li>

								<li>
									<div class="row">
										<div class="col-sm-8">
											<figure>
												{{ HTML::image('images/members-avator-2.png', 'Safina Bay') }}
											</figure>
											<h3>Haleem Asley</h3>
											<h4>Assistant Manager</h4>
											<p>Alabama, USA</p>
										</div>
										<div class="col-sm-4 text-right va-cntr">
											<a href="javascript:;" class="primary-btn bx blue">Accept</a>
											<a href="javascript:;" class="primary-btn bx outline grey-o">Reject</a>
										</div>
									</div>
								</li>

								<li>
									<div class="row">
										<div class="col-sm-8">
											<figure>
												{{ HTML::image('images/members-avator-2.png', 'Safina Bay') }}
											</figure>
											<h3>Haleem Asley</h3>
											<h4>Assistant Manager</h4>
											<p>Alabama, USA</p>
										</div>
										<div class="col-sm-4 text-right va-cntr">
											<a href="javascript:;" class="primary-btn bx blue">Accept</a>
											<a href="javascript:;" class="primary-btn bx outline grey-o">Reject</a>
										</div>
									</div>
								</li>

								<li>
									<div class="row">
										<div class="col-sm-8">
											<figure>
												{{ HTML::image('images/members-avator-2.png', 'Safina Bay') }}
											</figure>
											<h3>Haleem Asley</h3>
											<h4>Assistant Manager</h4>
											<p>Alabama, USA</p>
										</div>
										<div class="col-sm-4 text-right va-cntr">
											<a href="javascript:;" class="primary-btn bx blue">Accept</a>
											<a href="javascript:;" class="primary-btn bx outline grey-o">Reject</a>
										</div>
									</div>
								</li>

								<li>
									<div class="row">
										<div class="col-sm-8">
											<figure>
												{{ HTML::image('images/members-avator-2.png', 'Safina Bay') }}
											</figure>
											<h3>Haleem Asley</h3>
											<h4>Assistant Manager</h4>
											<p>Alabama, USA</p>
										</div>
										<div class="col-sm-4 text-right va-cntr">
											<a href="javascript:;" class="primary-btn bx blue">Accept</a>
											<a href="javascript:;" class="primary-btn bx outline grey-o">Reject</a>
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-sm-8">
											<figure>
												{{ HTML::image('images/members-avator-2.png', 'Safina Bay') }}
											</figure>
											<h3>Haleem Asley</h3>
											<h4>Assistant Manager</h4>
											<p>Alabama, USA</p>
										</div>
										<div class="col-sm-4 text-right va-cntr">
											<a href="javascript:;" class="primary-btn bx blue">Accept</a>
											<a href="javascript:;" class="primary-btn bx outline grey-o">Reject</a>
										</div>
									</div>
								</li>
							</ul>
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




