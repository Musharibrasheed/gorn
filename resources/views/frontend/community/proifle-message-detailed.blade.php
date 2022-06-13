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
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">Sara Khan</a>
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
				<aside class="content-box side-bar ptpx-0">
					<div class="profile-sidebar">
						<figure>
							{{ HTML::image('images/profile-lg.png', 'Safina Bay') }}
						</figure>
						<h3>Rubbah Khan</h3>
						<div class="points">
							<i class="points-ico"></i>
							<h4>3828</h4>
						</div>

						<ul>
							<li><i class="fa fa-clock-o" aria-hidden="true"></i> January 24, 2018</li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i> Australi, Sydney</li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i> rubbahkhan@gmail.com</li>
							<li><i class="fa fa-phone" aria-hidden="true"></i> 506 650 456</li>
						</ul>

						<div class="view-all text-center">
							<a href="javascript:;" class="primary-btn grey">See Contact</a>
						</div>
					</div>
				</aside>
			</div>

			<div class="col-sm-8">
				<div class="tab-content" style="display: block;">
					<div class="scrl-cont" style="height:432px">

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




