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
@section('body-class') inner-page polls-pg-detail logged-in  @stop
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
				<aside class="content-box side-bar ptpx-0">
					<div class="dt-sidebar">
						<div class="cat-list">
							<ul>
								<li><i class="fa fa-comments" aria-hidden="true"></i> Group Live Chat <span class="count">+1</span></li>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> Upcoming Events <span class="count">222</span></li>
								<li><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Post Approval <span class="count">8</span></li>
								<li><i class="fa fa-user-o" aria-hidden="true"></i> Member Requests <span class="count">22</span></li>
							</ul>
						</div>
					</div>
				</aside>
				@include('frontend.includes.chat-sidebar-points')
			</div>

			<div class="col-sm-8">
				<div class="tab-head clearfix">
					<ul>
						<li><a href="javascript:;">Posts</a></li>
						<li><a href="javascript:;">Events</a></li>
						<li><a href="javascript:;">Fundraisers</a></li>
						<li class="active"><a href="javascript:;">Polls</a></li>
					</ul>
				</div>
				<div class="tab-content" style="display: block;">
					<div class="scrl-cont mbpx-20">

						<div class="clearfix">
							<div class="post-head">
								<figure>
									{{ HTML::image('images/ab.png', 'Safina Bay') }}
								</figure>
								<h3>Haleem Asley <span>created a poll.</span></h3>
								<p>Dec 21, 2019</p>
								<div class="more-info">
									<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</div>
							</div>
							<div class="polls-post-dt">
								<h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</h2>
								<i class="fa fa-clock-o" aria-hidden="true"></i>
							</div>

							<div class="polls">

								<ul>
									<li>
										<div class="btn">
											<i></i>
										</div>
										<span style="width: 40%;"><p>Turkey</p></span>

										<div class="more-info">
											<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
										</div>
									</li>
									<li>
										<div class="btn">
											<i></i>
										</div>
										<span style="width: 70%;"><p>Saudi Arabia</p></span>
										<div class="more-info">
											<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
										</div>
									</li>
									<li>
										<div class="btn">
											<i></i>
										</div>
										<span style="width: 40%;"><p>Pakistan</p></span>
										<div class="more-info">
											<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
										</div>
									</li>
								</ul>
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
									{{ HTML::image('images/ab.png', 'Safina Bay') }}
								</figure>
								<h3>Shawn Walker <span>created a poll.</span></h3>
								<p>June 21, 2014</p>
								<div class="more-info">
									<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</div>
							</div>
							<div class="polls-post-dt">
								<h2>Which place is coldest?</h2>
								<i class="fa fa-clock-o" aria-hidden="true"></i>
							</div>

							<div class="poll-img clearfix">
								<div class="poll-dt">
									<figure>
										{{ HTML::image('images/poll-lft.jpg', 'Safina Bay') }}

										<figcaption>Finland</figcaption>
									</figure>
									<span class="check">
										<i class="fa fa-check" aria-hidden="true"></i>
									</span>
									<span class="user">
										<i class="fa fa-user-o" aria-hidden="true"></i>
									</span>
									<span class="txt">40%</span>
								</div>
								<div class="poll-dt active">
									<figure>
										{{ HTML::image('images/poll-lft.jpg', 'Safina Bay') }}

										<figcaption>Greenland</figcaption>
									</figure>
									<span class="check">
										<i class="fa fa-check" aria-hidden="true"></i>
									</span>
									<span class="user">
										<i class="fa fa-user-o" aria-hidden="true"></i>
									</span>
									<span class="txt">60%</span>
								</div>
							</div>

							<hr class="mtpx-30 mbpx-0">

							<div class="posts-dt">
								<ul>
									<li>
										<figure class="usr">
											{{ HTML::image('images/ab.png', 'Safina Bay') }}
										</figure>
										<div class="text">
											<h3>Sara Khan</h3>
											<h4>2 hrs</h4>
											<p>Vitae rhoncus quam ultrices eu. Aenean at mollis turpis. Proin eget scelerisque quam, id lacinia velit. Pellentesque dapibus in purus et feugiat. Nunc dui enim, </p>
											<div class="links">
												<a href="javascript:;">Like</a>
												<a href="javascript:;">Reply</a>
												<a href="javascript:;">Edit</a>
											</div>
										</div>
									</li>
								</ul>
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
									{{ HTML::image('images/ab.png', 'Safina Bay') }}
								</figure>
								<h3>Haleem Asley <span>created a poll.</span></h3>
								<p>Dec 21, 2019</p>
								<div class="more-info">
									<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</div>
							</div>
							<div class="polls-post-dt">
								<h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</h2>
								<i class="fa fa-clock-o" aria-hidden="true"></i>
							</div>

							<div class="polls">

								<ul>
									<li>
										<div class="btn">
											<i></i>
										</div>
										<span style="width: 40%;"><p>Turkey</p></span>

										<div class="more-info">
											<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
										</div>
									</li>
									<li>
										<div class="btn">
											<i></i>
										</div>
										<span style="width: 70%;"><p>Saudi Arabia</p></span>
										<div class="more-info">
											<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
										</div>
									</li>
									<li>
										<div class="btn">
											<i></i>
										</div>
										<span style="width: 40%;"><p>Pakistan</p></span>
										<div class="more-info">
											<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
										</div>
									</li>
								</ul>
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
									{{ HTML::image('images/ab.png', 'Safina Bay') }}
								</figure>
								<h3>Shawn Walker <span>created a poll.</span></h3>
								<p>June 21, 2014</p>
								<div class="more-info">
									<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</div>
							</div>
							<div class="polls-post-dt">
								<h2>Which place is coldest?</h2>
								<i class="fa fa-clock-o" aria-hidden="true"></i>
							</div>

							<div class="poll-img clearfix">
								<div class="poll-dt">
									<figure>
										{{ HTML::image('images/poll-lft.jpg', 'Safina Bay') }}

										<figcaption>Finland</figcaption>
									</figure>
									<span class="check">
										<i class="fa fa-check" aria-hidden="true"></i>
									</span>
									<span class="user">
										<i class="fa fa-user-o" aria-hidden="true"></i>
									</span>
									<span class="txt">40%</span>
								</div>
								<div class="poll-dt active">
									<figure>
										{{ HTML::image('images/poll-lft.jpg', 'Safina Bay') }}

										<figcaption>Greenland</figcaption>
									</figure>
									<span class="check">
										<i class="fa fa-check" aria-hidden="true"></i>
									</span>
									<span class="user">
										<i class="fa fa-user-o" aria-hidden="true"></i>
									</span>
									<span class="txt">60%</span>
								</div>
							</div>

							<hr class="mtpx-30 mbpx-0">

							<div class="posts-dt">
								<ul>
									<li>
										<figure class="usr">
											{{ HTML::image('images/ab.png', 'Safina Bay') }}
										</figure>
										<div class="text">
											<h3>Sara Khan</h3>
											<h4>2 hrs</h4>
											<p>Vitae rhoncus quam ultrices eu. Aenean at mollis turpis. Proin eget scelerisque quam, id lacinia velit. Pellentesque dapibus in purus et feugiat. Nunc dui enim, </p>
											<div class="links">
												<a href="javascript:;">Like</a>
												<a href="javascript:;">Reply</a>
												<a href="javascript:;">Edit</a>
											</div>
										</div>
									</li>
								</ul>
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
					<div class="clearfix post-reply">
						<div class="clearfix post-tabs">
							<ul>
								<li><a href="javascript:;" ><i class="fa fa-pencil" aria-hidden="true"></i> Write Post</a> </li>
								<li><a href="javascript:;"><i class="fa fa-camera" aria-hidden="true"></i> Add Photo/Video</a></li>
								<li><a href="javascript:;" class="active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Create a Poll</a></li>
								<li><a href="javascript:;"><i class="fa fa-usd" aria-hidden="true"></i> Create a Fundraiser</a></li>
								<li><a href="javascript:;"><i class="fa fa-calendar-o" aria-hidden="true"></i> Create Event</a></li>
							</ul>
						</div>

						<div class="tab-contents create-poll">
							<div class="clearfix lst-sec">
								<div class="row">
									<div class="col-sm-12 frst">
										<input type="text" name="Write Fundraiser Title..." placeholder="Write someting..." class="txt">
									</div>
									<div class="col-10 prpx-0 mbpx-10">
										<input type="text" name="Option 1" placeholder="Option 1" class="txt">
									</div>
									<div class="col-2 mbpx-10 pic-ico">
										<span>
											<i class="fa fa-picture-o" aria-hidden="true"></i>
										</span>
									</div>

									<div class="col-10 prpx-0 mbpx-15">
										<input type="text" name="Option 2" placeholder="Option 2" class="txt">
									</div>
									<div class="col-2 pic-ico mbpx-15">
										<span>
											<i class="fa fa-picture-o" aria-hidden="true"></i>
										</span>
									</div>

									<div class="col-12 mbpx-40">
										<a href="javascript:;" class="add-more">Add More</a>
									</div>

									<div class="col-sm-6">
										<a href="javascript:;" class="primary-btn bx fa-16">Post</a>
										<select class="txt wd-20">
											<option>2 Days</option>
										</select>
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
		</div>

		<div class="row">
			<div class="col-sm-12">
				<img src="../images/map-community-pg.jpg" alt="Map" class="img-fluid">
			</div>
		</div>
	</div>
</section>



@endsection




