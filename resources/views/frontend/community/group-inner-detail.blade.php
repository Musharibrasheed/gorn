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
@section('body-class') inner-page community-pg-detail logged-in  @stop
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
						<li class="active"><a href="javascript:;">Posts</a></li>
						<li><a href="javascript:;">Events</a></li>
						<li><a href="javascript:;">Fundraisers</a></li>
						<li><a href="javascript:;">Polls</a></li>
					</ul>
				</div>
				<div class="tab-content" style="display: block;">
					<div class="scrl-cont mbpx-20">
						<div class="post-head">
							<figure>
								{{ HTML::image('images/ab.png', 'Safina Bay') }}
							</figure>
							<h3>Marian Zburlea</h3>
							<p>11 hrs</p>
							<div class="more-info">
								<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
							</div>
						</div>
						<div class="post-img">
							<figure>
								{{ HTML::image('images/post-img.jpg', 'Safina Bay') }}
							</figure>
						</div>
						<div class="post-info">
							<div class="row">
								<div class="col-sm-6">
									<span class="ico"><a href="javascript:;"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></span>
									<span>1k</span>
								</div>
								<div class="col-sm-6 ptpx-4 text-right">
									<a href="javascript:;">222 Comments</a>
								</div>
							</div>
						</div>
						<div class="posts-dt">
							<ul>
								<li class="empty">
									<figure class="usr">
										{{ HTML::image('images/ab.png', 'Safina Bay') }}
									</figure>
									<div class="text">
										<h3>Robert Evans</h3>
										<h4>4 hrs</h4>
										<p>Nam facilisis, mi eget ullamcorper mollis, nisl urna vulputate ex, eu pulvinar leo turpis quis sapien. Ut efficitur nisi ex, vitae rhoncus quam ultrices eu. Aenean at mollis turpis. Proin eget scelerisque quam, id lacinia velit. Pellentesque dapibus in purus et feugiat. Nunc dui enim, </p>
										<div class="links">
											<a href="javascript:;">Like</a>
											<a href="javascript:;">Reply</a>
											<a href="javascript:;">Edit</a>
										</div>
									</div>
								</li>
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

										<div class="reply">
											<figure class="usr">
												{{ HTML::image('images/ab.png', 'Safina Bay') }}
											</figure>
											<input type="text" placeholder="Write a reply..." name="">
											<i class="fa fa-paperclip" aria-hidden="true"></i>
											<i class="fa fa-smile-o" aria-hidden="true"></i>
										</div>

										<div class="reply-dt">
											<figure class="usr">
												{{ HTML::image('images/ab.png', 'Safina Bay') }}
											</figure>
											<h3>John Doe</h3>
											<h4>4 hrs</h4>
											<p>Vitae rhoncus quam ultrices eu. Aenean at mollis turpis. Proin eget scelerisque quam, id lacinia velit. Pellentesque dapibus in purus et feugiat. Nunc dui enim, </p>
										</div>
									</div>
								</li>
								<li class="empty">
									<figure class="usr">
										{{ HTML::image('images/ab.png', 'Safina Bay') }}
									</figure>
									<div class="text">
										<h3>Robert Evans</h3>
										<h4>4 hrs</h4>
										<p>Nam facilisis, mi eget ullamcorper mollis, nisl urna vulputate ex, eu pulvinar leo turpis quis sapien. Ut efficitur nisi ex, vitae rhoncus quam ultrices eu. Aenean at mollis turpis. Proin eget scelerisque quam, id lacinia velit. Pellentesque dapibus in purus et feugiat. Nunc dui enim, </p>
										<div class="links">
											<a href="javascript:;">Like</a>
											<a href="javascript:;">Reply</a>
											<a href="javascript:;">Edit</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="clearfix post-reply">
						<div class="clearfix post-tabs">
							<ul>
								<li><a href="javascript:;" class="active"><i class="fa fa-pencil" aria-hidden="true"></i> Write Post</a> </li>
								<li><a href="javascript:;"><i class="fa fa-camera" aria-hidden="true"></i> Add Photo/Video</a></li>
								<li><a href="javascript:;"><i class="fa fa-bar-chart" aria-hidden="true"></i> Create a Poll</a></li>
								<li><a href="javascript:;"><i class="fa fa-usd" aria-hidden="true"></i> Create a Fundraiser</a></li>
								<li><a href="javascript:;"><i class="fa fa-calendar-o" aria-hidden="true"></i> Create Event</a></li>
							</ul>
						</div>

						<div class="tab-contents write-post">
							<textarea class="editor"></textarea>
							<div class="clearfix mtpx-25 lst-sec">
								<div class="row">
									<div class="col-sm-6">
										<a href="javascript:;" class="primary-btn bx lg">Post</a>
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




