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
				</div>
			</div>
		</div>
	</div>

</section>

<section class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-5">
						<ul class="forum-thread-head tabs">
							<li>
								<a href="javascript:;" class="active" data-tabc="forum-pg-topics-all">All</a>
							</li>
							<li>
								<a href="javascript:;" data-tabc="forum-pg-topics-recent-threads">Recent Threads</a>
							</li>
							<li>
								<a href="javascript:;" data-tabc="forum-pg-topics-my-threads">My Threads</a>
							</li>
						</ul>
					</div>
					<div class="col-sm-7">
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
				<div class="cat-topics tab-content forum-pg-topics-all">
					<div class="topic-cat-head">
						<h3>Principals of Understanding Islam</h3>
					</div>
					<div class="topic-thread">
						<ul>
							<li class="thread-row">
								<div class="row va-cntr">
									<div class="col-sm-9">
										<div class="c-lft">
											<figure>
												{{ HTML::image('images/thread-avator.png', 'Safina Bay') }}
											</figure>
											<p>
												Quran
												<span class="dt">
													<span>Author <strong class="green">Abu Fauzi</strong></span>
													<span class="sep">|</span>
													<span>Posted <strong class="dark-grey">Sep 13, 2018</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													</span>
												</span>
											</p>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-file-text" aria-hidden="true"></i>
												<span>10</span>
											</li>
											<li>
												<i class="fa fa-eye" aria-hidden="true"></i>
												<span>1,565</span>
											</li>
										</ul>
									</div>
								</div>
							</li>

							<li class="thread-row">
								<div class="row va-cntr">
									<div class="col-sm-9">
										<div class="c-lft">
											<figure>
												{{ HTML::image('images/sunnah.png', 'Safina Bay') }}
											</figure>
											<p>
												Sunnah
												<span class="dt">
													<span>Author <strong class="green">Sarah Khan</strong></span>
													<span class="sep">|</span>
													<span>Posted <strong class="dark-grey">Dec 02, 2018</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													</span>
												</span>
											</p>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-file-text" aria-hidden="true"></i>
												<span>25</span>
											</li>
											<li>
												<i class="fa fa-eye" aria-hidden="true"></i>
												<span>2,665</span>
											</li>
										</ul>
									</div>
								</div>
							</li>

							<li class="thread-row">
								<div class="row va-cntr">
									<div class="col-sm-9">
										<div class="c-lft">
											<figure>
												{{ HTML::image('images/q-1.png', 'Safina Bay') }}
											</figure>
											<p>
												Quran
												<span class="dt">
													<span>Author <strong class="green">Asley H</strong></span>
													<span class="sep">|</span>
													<span>Posted <strong class="dark-grey">Jan 10, 2019</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													</span>
												</span>
											</p>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-file-text" aria-hidden="true"></i>
												<span>10</span>
											</li>
											<li>
												<i class="fa fa-eye" aria-hidden="true"></i>
												<span>6,665</span>
											</li>
										</ul>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="cat-topics tab-content forum-pg-topics-recent-threads">
					<div class="topic-cat-head">
						<h3>Principals of Understanding Islam</h3>
					</div>
					<div class="topic-thread">
						<ul>
							<li class="thread-row">
								<div class="row va-cntr">
									<div class="col-sm-9">
										<div class="c-lft">
											<figure>
												{{ HTML::image('images/thread-avator.png', 'Safina Bay') }}
											</figure>
											<p>
												Quran
												<span class="dt">
													<span>Author <strong class="green">Abu Fauzi</strong></span>
													<span class="sep">|</span>
													<span>Posted <strong class="dark-grey">Sep 13, 2018</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													</span>
												</span>
											</p>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-file-text" aria-hidden="true"></i>
												<span>10</span>
											</li>
											<li>
												<i class="fa fa-eye" aria-hidden="true"></i>
												<span>1,565</span>
											</li>
										</ul>
									</div>
								</div>
							</li>

							<li class="thread-row">
								<div class="row va-cntr">
									<div class="col-sm-9">
										<div class="c-lft">
											<figure>
												{{ HTML::image('images/sunnah.png', 'Safina Bay') }}
											</figure>
											<p>
												Sunnah
												<span class="dt">
													<span>Author <strong class="green">Sarah Khan</strong></span>
													<span class="sep">|</span>
													<span>Posted <strong class="dark-grey">Dec 02, 2018</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													</span>
												</span>
											</p>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-file-text" aria-hidden="true"></i>
												<span>25</span>
											</li>
											<li>
												<i class="fa fa-eye" aria-hidden="true"></i>
												<span>2,665</span>
											</li>
										</ul>
									</div>
								</div>
							</li>

							<li class="thread-row">
								<div class="row va-cntr">
									<div class="col-sm-9">
										<div class="c-lft">
											<figure>
												{{ HTML::image('images/q-1.png', 'Safina Bay') }}
											</figure>
											<p>
												Quran
												<span class="dt">
													<span>Author <strong class="green">Asley H</strong></span>
													<span class="sep">|</span>
													<span>Posted <strong class="dark-grey">Jan 10, 2019</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													</span>
												</span>
											</p>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-file-text" aria-hidden="true"></i>
												<span>10</span>
											</li>
											<li>
												<i class="fa fa-eye" aria-hidden="true"></i>
												<span>6,665</span>
											</li>
										</ul>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="cat-topics tab-content forum-pg-topics-my-threads">
					<div class="topic-cat-head">
						<h3>Principals of Understanding Islam</h3>
					</div>
					<div class="topic-thread">
						<ul>
							<li class="thread-row">
								<div class="row va-cntr">
									<div class="col-sm-9">
										<div class="c-lft">
											<figure>
												{{ HTML::image('images/thread-avator.png', 'Safina Bay') }}
											</figure>
											<p>
												Quran
												<span class="dt">
													<span>Author <strong class="green">Abu Fauzi</strong></span>
													<span class="sep">|</span>
													<span>Posted <strong class="dark-grey">Sep 13, 2018</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													</span>
												</span>
											</p>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-file-text" aria-hidden="true"></i>
												<span>10</span>
											</li>
											<li>
												<i class="fa fa-eye" aria-hidden="true"></i>
												<span>1,565</span>
											</li>
										</ul>
									</div>
								</div>
							</li>

							<li class="thread-row">
								<div class="row va-cntr">
									<div class="col-sm-9">
										<div class="c-lft">
											<figure>
												{{ HTML::image('images/sunnah.png', 'Safina Bay') }}
											</figure>
											<p>
												Sunnah
												<span class="dt">
													<span>Author <strong class="green">Sarah Khan</strong></span>
													<span class="sep">|</span>
													<span>Posted <strong class="dark-grey">Dec 02, 2018</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													</span>
												</span>
											</p>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-file-text" aria-hidden="true"></i>
												<span>25</span>
											</li>
											<li>
												<i class="fa fa-eye" aria-hidden="true"></i>
												<span>2,665</span>
											</li>
										</ul>
									</div>
								</div>
							</li>

							<li class="thread-row">
								<div class="row va-cntr">
									<div class="col-sm-9">
										<div class="c-lft">
											<figure>
												{{ HTML::image('images/q-1.png', 'Safina Bay') }}
											</figure>
											<p>
												Quran
												<span class="dt">
													<span>Author <strong class="green">Asley H</strong></span>
													<span class="sep">|</span>
													<span>Posted <strong class="dark-grey">Jan 10, 2019</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													</span>
												</span>
											</p>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-file-text" aria-hidden="true"></i>
												<span>10</span>
											</li>
											<li>
												<i class="fa fa-eye" aria-hidden="true"></i>
												<span>6,665</span>
											</li>
										</ul>
									</div>
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




