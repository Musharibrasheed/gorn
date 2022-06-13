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
@section('body-class') inner-page forum-pg my-topics-pg logged-in  @stop
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
						<a href="{!! URL::to('/') !!}">My Topics</a>
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
				<div class="row my-topics-head">
					<div class="col-sm-6 col-md-5">
						<a href="javascript:;" class="primary-btn bx grey mrpx-7">Recent Threads</a>
						<a href="javascript:;" class="primary-btn bx blue mrpx-7">My Threads</a>
						<a href="javascript:;" class="primary-btn bx">Create New Thread</a>
					</div>
					<div class="col-sm-6 col-md-7">
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
				<div class="cat-topics">
					<div class="topic-thread">
						<ul>
							<li class="thread-row">
								<div class="row va-cntr">
									<div class="col-sm-9">
										<div class="c-lft">
											<span class="more-info">2</span>
											<figure>
												{{ HTML::image('images/my-topics-avator.png', 'Safina Bay') }}
											</figure>
											<p>
												What are Mutashabihat Ayas, Resembling?
												<span class="dt">
													<span>Started <strong class="dark-grey">Sep 13, 2019</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													<span class="sep">|</span>
													<span>Topic <strong class="green">Quran</strong></span>
													</span>
												</span>
											</p>
											<i class="fa fa-ellipsis-v more-actions" aria-hidden="true"></i>
											<div class="extra-opt">
												<ul>
													<li>
														<a href="javascript:;"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Thread</a>
													</li>
													<li>
														<a href="javascript:;"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete Thread</a>
													</li>
													<li>
														<a href="javascript:;"><i class="fa fa-window-close-o" aria-hidden="true"></i> Turn off commenting</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-commenting" aria-hidden="true"></i>
												<span>89</span>
											</li>
											<li>
												<i class="fa fa-eye" aria-hidden="true"></i>
												<span>1,568</span>
											</li>
											<li>
												<i class="fa fa-clock-o" aria-hidden="true"></i>
												<span>24 min</span>
											</li>
										</ul>
									</div>
								</div>
							</li>

							<li class="thread-row">
								<div class="row va-cntr">
									<div class="col-sm-9">
										<div class="c-lft">
											<span class="more-info">20</span>
											<figure>
												{{ HTML::image('images/my-topics-avator.png', 'Safina Bay') }}
											</figure>
											<p>
												The Station Of Unlettered ( al-Ilm al-Ummi ).
												<span class="dt">
													<span>Started <strong class="dark-grey">Sep 13, 2019</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													<span class="sep">|</span>
													<span>Topic <strong class="green">Faith</strong></span>
													</span>
												</span>
											</p>
											<i class="fa fa-ellipsis-v more-actions" aria-hidden="true"></i>
											<div class="extra-opt">
												<ul>
													<li>
														<a href="javascript:;"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Thread</a>
													</li>
													<li>
														<a href="javascript:;"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete Thread</a>
													</li>
													<li>
														<a href="javascript:;"><i class="fa fa-window-close-o" aria-hidden="true"></i> Turn off commenting</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-commenting" aria-hidden="true"></i>
												<span>89</span>
											</li>
											<li>
												<i class="fa fa-eye" aria-hidden="true"></i>
												<span>1,568</span>
											</li>
											<li>
												<i class="fa fa-clock-o" aria-hidden="true"></i>
												<span>24 min</span>
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
												{{ HTML::image('images/my-topics-avator.png', 'Safina Bay') }}
											</figure>
											<p>
												Rights &amp Obligations of Citizens
												<span class="dt">
													<span>Started <strong class="dark-grey">Sep 13, 2019</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													<span class="sep">|</span>
													<span>Topic <strong class="green">Quran</strong></span>
													</span>
												</span>
											</p>
											<i class="fa fa-ellipsis-v more-actions" aria-hidden="true"></i>
											<div class="extra-opt">
												<ul>
													<li>
														<a href="javascript:;"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Thread</a>
													</li>
													<li>
														<a href="javascript:;"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete Thread</a>
													</li>
													<li>
														<a href="javascript:;"><i class="fa fa-window-close-o" aria-hidden="true"></i> Turn off commenting</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-commenting" aria-hidden="true"></i>
												<span>89</span>
											</li>
											<li>
												<i class="fa fa-eye" aria-hidden="true"></i>
												<span>1,568</span>
											</li>
											<li>
												<i class="fa fa-clock-o" aria-hidden="true"></i>
												<span>24 min</span>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="thread-row">
								<div class="row va-cntr">
									<div class="col-sm-9">
										<div class="c-lft">
											<span class="more-info">2</span>
											<figure>
												{{ HTML::image('images/my-topics-avator.png', 'Safina Bay') }}
											</figure>
											<p>
												How would a revolution take place?
												<span class="dt">
													<span>Started <strong class="dark-grey">Sep 13, 2019</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													<span class="sep">|</span>
													<span>Topic <strong class="green">Quran</strong></span>
													</span>
												</span>
											</p>
											<i class="fa fa-ellipsis-v more-actions" aria-hidden="true"></i>
											<div class="extra-opt">
												<ul>
													<li>
														<a href="javascript:;"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Thread</a>
													</li>
													<li>
														<a href="javascript:;"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete Thread</a>
													</li>
													<li>
														<a href="javascript:;"><i class="fa fa-window-close-o" aria-hidden="true"></i> Turn off commenting</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-commenting" aria-hidden="true"></i>
												<span>89</span>
											</li>
											<li>
												<i class="fa fa-eye" aria-hidden="true"></i>
												<span>1,568</span>
											</li>
											<li>
												<i class="fa fa-clock-o" aria-hidden="true"></i>
												<span>24 min</span>
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
												{{ HTML::image('images/my-topics-avator.png', 'Safina Bay') }}
											</figure>
											<p>
												The Station Of Unlettered ( al-Ilm al-Ummi ).
												<span class="dt">
													<span>Started <strong class="dark-grey">Sep 13, 2019</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													<span class="sep">|</span>
													<span>Topic <strong class="green">Quran</strong></span>
													</span>
												</span>
											</p>
											<i class="fa fa-ellipsis-v more-actions" aria-hidden="true"></i>
											<div class="extra-opt">
												<ul>
													<li>
														<a href="javascript:;"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Thread</a>
													</li>
													<li>
														<a href="javascript:;"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete Thread</a>
													</li>
													<li>
														<a href="javascript:;"><i class="fa fa-window-close-o" aria-hidden="true"></i> Turn off commenting</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-commenting" aria-hidden="true"></i>
												<span>89</span>
											</li>
											<li>
												<i class="fa fa-eye" aria-hidden="true"></i>
												<span>1,568</span>
											</li>
											<li>
												<i class="fa fa-clock-o" aria-hidden="true"></i>
												<span>24 min</span>
											</li>
										</ul>
									</div>
								</div>
							</li>

							<li class="thread-row">
								<div class="row va-cntr">
									<div class="col-sm-9">
										<div class="c-lft">
											<span class="more-info">8</span>
											<figure>
												{{ HTML::image('images/my-topics-avator.png', 'Safina Bay') }}
											</figure>
											<p>
												What are Mutashabihat Ayas, Resembling?
												<span class="dt">
													<span>Started <strong class="dark-grey">Sep 13, 2019</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													<span class="sep">|</span>
													<span>Topic <strong class="green">Quran</strong></span>
													</span>
												</span>
											</p>
											<i class="fa fa-ellipsis-v more-actions" aria-hidden="true"></i>
											<div class="extra-opt">
												<ul>
													<li>
														<a href="javascript:;"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Thread</a>
													</li>
													<li>
														<a href="javascript:;"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete Thread</a>
													</li>
													<li>
														<a href="javascript:;"><i class="fa fa-window-close-o" aria-hidden="true"></i> Turn off commenting</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-commenting" aria-hidden="true"></i>
												<span>89</span>
											</li>
											<li>
												<i class="fa fa-eye" aria-hidden="true"></i>
												<span>1,568</span>
											</li>
											<li>
												<i class="fa fa-clock-o" aria-hidden="true"></i>
												<span>24 min</span>
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
				<aside class="content-box side-bar">
					<div class="cat-sidebar">
						<div class="head">
							<h3>Categories</h3>
						</div>
						<div class="cat-list">
							<ul>
								<li>Hadith <span class="count">2</span></li>
								<li>Life of the Prophet (Seerah) <span class="count">8</span></li>
								<li>Islamic State <span class="count">22</span></li>
								<li>Relations with Non Muslims <span class="count">2</span></li>
								<li>Women Issues <span class="count">10</span></li>
								<li>Social Issues <span class="count">150</span></li>
							</ul>
						</div>
						<div class="view-all text-center">
							<a href="javascript:;" class="primary-btn blue">See all</a>
						</div>
					</div>
				</aside>

                @include('frontend.includes.chat-sidebar')
                @include('frontend.includes.trending-sidebar')
			</div>
		</div>
	</div>
</section>



@endsection




