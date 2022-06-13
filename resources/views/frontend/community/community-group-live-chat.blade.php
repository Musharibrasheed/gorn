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
@section('body-class') inner-page live-chat-pg-detail logged-in  @stop
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
					<div class="scrl-cont">

						<div class="clearfix">
							<ul class="chat">
								<li class="left">
									<figure class="chat-avator">
										{{ HTML::image('images/ab.png', 'Safina Bay') }}
									</figure>
									<div class="chat-text"><p>What is Lorem Ipsum?</p></div>
									<p class="date"><strong>Robert Evans</strong> -  08/09/16, 11:22 pm</p>
								</li>

								<li class="left">
									<figure class="chat-avator">
										{{ HTML::image('images/ab.png', 'Safina Bay') }}
									</figure>
									<div class="chat-text"><p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour...</p></div>
									<p class="date"><strong>Robert Evans</strong> -  08/09/16, 11:22 pm</p>
								</li>

								<li class="right">
									<figure class="chat-avator">
										{{ HTML::image('images/ab.png', 'Safina Bay') }}
									</figure>
									<div class="chat-text"><p>The standard Lorem Ipsum passage, used since the 1500s</p></div>
									<p class="date"><strong>You</strong> -  08/09/16, 11:22 pm</p>
								</li>

								<li class="right">
									<figure class="chat-avator">
										{{ HTML::image('images/ab.png', 'Safina Bay') }}
									</figure>
									<div class="chat-text">
										<p>"On the other hand, we denounce with righteous”</p>
										<div class="clearfix post-img">
											<figure>
												{{ HTML::image('images/chat-1.jpg', 'Safina Bay') }}
											</figure>
											<figure>
												{{ HTML::image('images/chat-1.jpg', 'Safina Bay') }}
											</figure>
											<figure>
												{{ HTML::image('images/chat-1.jpg', 'Safina Bay') }}
											</figure>
										</div>
									</div>
									<p class="date"><strong>Robert Evans</strong> -  08/09/16, 11:22 pm</p>
								</li>

								<li class="left">
									<figure class="chat-avator">
										{{ HTML::image('images/ab.png', 'Safina Bay') }}
									</figure>
									<div class="chat-text"><p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself... ?</p></div>
									<p class="date"><strong>Al Abbas</strong> -  08/09/16, 11:22 pm</p>
								</li>

								<li class="right">
									<figure class="chat-avator">
										{{ HTML::image('images/ab.png', 'Safina Bay') }}
									</figure>
									<div class="chat-text">
										<p><i class="fa fa-smile-o" aria-hidden="true"></i> 1914 translation by H. Rackham ?</p>
									</div>
									<p class="date"><strong>Robert Evans</strong> -  08/09/16, 11:22 pm</p>
								</li>

								<li class="right">
									<figure class="chat-avator">
										{{ HTML::image('images/ab.png', 'Safina Bay') }}
									</figure>
									<div class="chat-text">
										<p>But I must explain to you how all this mistaken idea of denouncing asure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer.</p>
										<p class="link"> <i class="fa fa-link" aria-hidden="true"></i> <a href="javascript:;">https:/safinabay/groups/albanymuslims/726544</a></p>
									</div>
									<p class="date"><strong>Robert Evans</strong> -  08/09/16, 11:22 pm</p>
								</li>

								<li class="left">
									<figure class="chat-avator">
										{{ HTML::image('images/ab.png', 'Safina Bay') }}
									</figure>
									<div class="chat-text"><p>What is Lorem Ipsum?</p></div>
									<p class="date"><strong>Robert Evans</strong> -  08/09/16, 11:22 pm</p>
								</li>

								<li class="left">
									<figure class="chat-avator">
										{{ HTML::image('images/ab.png', 'Safina Bay') }}
									</figure>
									<div class="chat-text"><p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour...</p></div>
									<p class="date"><strong>Robert Evans</strong> -  08/09/16, 11:22 pm</p>
								</li>

								<li class="right">
									<figure class="chat-avator">
										{{ HTML::image('images/ab.png', 'Safina Bay') }}
									</figure>
									<div class="chat-text"><p>The standard Lorem Ipsum passage, used since the 1500s</p></div>
									<p class="date"><strong>You</strong> -  08/09/16, 11:22 pm</p>
								</li>

								<li class="right">
									<figure class="chat-avator">
										{{ HTML::image('images/ab.png', 'Safina Bay') }}
									</figure>
									<div class="chat-text">
										<p>"On the other hand, we denounce with righteous”</p>
										<div class="clearfix post-img">
											<figure>
												{{ HTML::image('images/chat-1.jpg', 'Safina Bay') }}
											</figure>
											<figure>
												{{ HTML::image('images/chat-1.jpg', 'Safina Bay') }}
											</figure>
											<figure>
												{{ HTML::image('images/chat-1.jpg', 'Safina Bay') }}
											</figure>
										</div>
									</div>
									<p class="date"><strong>Robert Evans</strong> -  08/09/16, 11:22 pm</p>
								</li>

								<li class="left">
									<figure class="chat-avator">
										{{ HTML::image('images/ab.png', 'Safina Bay') }}
									</figure>
									<div class="chat-text"><p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself... ?</p></div>
									<p class="date"><strong>Al Abbas</strong> -  08/09/16, 11:22 pm</p>
								</li>

								<li class="right">
									<figure class="chat-avator">
										{{ HTML::image('images/ab.png', 'Safina Bay') }}
									</figure>
									<div class="chat-text">
										<p><i class="fa fa-smile-o" aria-hidden="true"></i> 1914 translation by H. Rackham ?</p>
									</div>
									<p class="date"><strong>Robert Evans</strong> -  08/09/16, 11:22 pm</p>
								</li>

								<li class="right">
									<figure class="chat-avator">
										{{ HTML::image('images/ab.png', 'Safina Bay') }}
									</figure>
									<div class="chat-text">
										<p>But I must explain to you how all this mistaken idea of denouncing asure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer.</p>
										<p class="link"> <i class="fa fa-link" aria-hidden="true"></i> <a href="javascript:;">https:/safinabay/groups/albanymuslims/726544</a></p>
									</div>
									<p class="date"><strong>Robert Evans</strong> -  08/09/16, 11:22 pm</p>
								</li>
							</ul>
						</div>

					</div>

					<div class="post-reply">
						<div class="row">
							<div class="col-10 posRel">
								<input type="text" name="reply" class="fld" placeholder="Type a message, @name...">
								<i class="fa fa-paperclip" aria-hidden="true"></i>
								<i class="fa fa-smile-o" aria-hidden="true"></i>
							</div>
							<div class="col-2">
								<a href="javascript:;" class="primary-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
</section>



@endsection




