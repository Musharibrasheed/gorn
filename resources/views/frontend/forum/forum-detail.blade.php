{{-- * Template Name : Forum * --}}
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
@section('body-class') inner-page forum-pg logged-in  @stop
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
						<a href="{!! URL::to('/') !!}">Forum</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">How Prophets of Allah Succeed in thier Mission</a>
					</span>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="main-content">
	<div class="container">
		<div class="row mbpx-31">
			<div class="col-sm-12">
				<div class="row cat-thread-head">
					<div class="col-sm-3 col-md-2">
						<a href="javascript:;" class="primary-btn bx">Create New Thread</a>
					</div>
					<div class="col-sm-9 col-md-10">
						<div class="search-bar">
							<input type="text" name="search" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<div class="forum-dt-topics">
					<div class="topic-thread">
						<ul>
							<li class="thread-row">
								<div class="c-up">
									<div class="clearfix">
										<figure>
											{{ HTML::image('images/cat-thread-avator.png', 'Safina Bay') }}
										</figure>
										<p class="head-dt">
											How Prophets of Allah Succeed in thier Mission
											<span class="dt">
												<span>Started <strong class="dark-grey">Sep 13, 2018</strong></span>
												<span class="sep">|</span>
												<span><i class="fa fa-folder-o" aria-hidden="true"></i>
												<strong class="blue">Principals of Understanding Islam</strong>
												<span class="sep">|</span>
												<span>Topic <strong class="green">Quran</strong></span>
												</span>
											</span>
										</p>
									</div>
									<div class="clearfix text">
										<p>In his book, ‘‘Futuhat Makkiyya’‘, Sidi Muhiyidden Ibn Arabi, while commenting on this subject observed that:—-“For us, being ‘‘Unlettered’’ does not contradict memorizing the Qur’an or the Prophetic Hadith. In our view, the person is ‘‘unlettered’’ who does not employ his reflective consideration and his rational judgment or bring out the meaning and mysteries which the Qur’an embraces. He does not use rational proofs to attain to the knowledge of Divine things. And he does not employ the juridical proofs, analogies, and assigning of causes that occupy the legal authorities ( al-Mujtahidun ) in order to grasp the rulings of the Law.</p>
										<p>When the heart is safe from reflective c onsideration, then, according to both the Law and Reason, it is ‘‘Unlettered’’ and receptive toward the Divine opening in the most perfect manner and without delay. It is provided with God-given (Ladunni) knowledge in all things to an extent unknown except to a Prophet or one of His Friends whom He has given of it through tasting. Through this knowledge the degree and plane of faith are perfected. Through it the one who receives it becomes aware of the correctness and the mistakes of reflective powers, and in what respect soundness and disorder are attributed to them. All of this comes frm God’‘.</p>
										<p>For further reading, see Prof. William C. Chittick’s <br> ‘‘The Sufi Path Of Knowledge’‘.</p>
									</div>
								</div>
								<div class="c-bt">
									<div class="row">
										<div class="text-left lft col-sm-4">
											<span class="ico"><a href="javascript:;"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></span>
											<span>1k</span>
										</div>
										<div class="text-right rft col-sm-8">
											<span>
												<a href="javascript:;">Like</a>
											</span>
											<span class="mlpx-20">
												<a href="javascript:;">Reply</a>
											</span>
											<span class="icob">
												<a href="javascript:;"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></a>
											</span>
										</div>
									</div>
								</div>
							</li>

							<li class="thread-row">
								<div class="c-up">
									<div class="clearfix">
										<figure>
											{{ HTML::image('images/cat-thread-avator-2.png', 'Safina Bay') }}
										</figure>
										<p class="head-dt">
											Haleem Asley
											<span class="dt">

												<span><i class="fa fa-folder-o" aria-hidden="true"></i>
												<strong class="blue">Principals of Understanding Islam</strong>
												<span class="sep">|</span>
												<span>Topic <strong class="green">Quran</strong></span>
												</span>
											</span>
										</p>
									</div>
									<div class="clearfix text">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
									</div>
								</div>
								<div class="c-bt">
									<div class="row">
										<div class="text-left lft col-sm-4">
											<span class="ico"><a href="javascript:;"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></span>
											<span>22</span>
										</div>
										<div class="text-right rft col-sm-8">
											<span>
												<a href="javascript:;">Like</a>
											</span>
											<span class="mlpx-20">
												<a href="javascript:;">Reply</a>
											</span>
											<span class="icob">
												<a href="javascript:;"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></a>
											</span>
										</div>
									</div>
								</div>
							</li>

							<li class="thread-row">
								<div class="c-up">
									<div class="clearfix">
										<figure>
											{{ HTML::image('images/cat-thread-avator-1.png', 'Safina Bay') }}
										</figure>
										<p class="head-dt">
											Ruseel Robert
											<span class="dt">

												<span><i class="fa fa-folder-o" aria-hidden="true"></i>
												<strong class="blue">Principals of Understanding Islam</strong>
												<span class="sep">|</span>
												<span>Topic <strong class="green">Quran</strong></span>
												</span>
											</span>
										</p>
									</div>
									<div class="clearfix text">
										<h4>consectetur adipiscing elit,</h4>
										<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness... ??</p>
									</div>
								</div>
								<div class="c-bt">
									<div class="row">
										<div class="text-left lft col-sm-4">
											<span class="ico"><a href="javascript:;"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></span>
											<span>22</span>
										</div>
										<div class="text-right rft col-sm-8">
											<span>
												<a href="javascript:;">Like</a>
											</span>
											<span class="mlpx-20">
												<a href="javascript:;">Reply</a>
											</span>
											<span class="icob">
												<a href="javascript:;"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></a>
											</span>
										</div>
									</div>
								</div>
							</li>

							<li class="thread-row">
								<div class="clearfix">
									<textarea class="editor"></textarea>
								</div>
								<div class="post-reply">
									<a href="javascript:;" class="primary-btn lg bx">Post Reply</a>
									<a href="javascript:;" class="primary-btn lg bx outline"">Upload a FIle</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				@include('frontend.includes.chat-sidebar')
				@include('frontend.includes.trending-sidebar')
			</div>
		</div>
	</div>
</section>



@endsection




