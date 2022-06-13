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
@section('body-class') inner-page forum-pg cat-thread-pg logged-in  @stop
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
				<div class="cat-topics">
					<div class="topic-thread">
						<ul>
							<li class="thread-row">
								<div class="row va-cntr">
									<div class="col-sm-9">
										<div class="c-lft">
											<figure>
												{{ HTML::image('images/cat-thread-avator.png', 'Safina Bay') }}
											</figure>
											<p>
												How Prophets of Allah Succeed in thier Mission
												<span class="dt">
													<span>Posted <strong class="dark-grey">Sep 13, 2018</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													<span class="sep">|</span>
													<span>Topic <strong class="green">Quran</strong></span>
													</span>
												</span>
											</p>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-commenting" aria-hidden="true"></i>
												<span>2</span>
											</li>
											<li>
												<i class="fa fa-eye" aria-hidden="true"></i>
												<span>50</span>
											</li>
											<li>
												<i class="fa fa-clock-o" aria-hidden="true"></i>
												<span>5 min</span>
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
												{{ HTML::image('images/cat-thread-avator-1.png', 'Safina Bay') }}
											</figure>
											<p>
												How would a revolution take place?
												<span class="dt">
													<span>Posted <strong class="dark-grey">Sep 13, 2018</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													<span class="sep">|</span>
													<span>Topic <strong class="green">Quran</strong></span>
													</span>
												</span>
											</p>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-commenting" aria-hidden="true"></i>
												<span>555</span>
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
												{{ HTML::image('images/cat-thread-avator-2.png', 'Safina Bay') }}
											</figure>
											<p>
												Rights &amp Obligations of Citizens
												<span class="dt">
													<span>Posted <strong class="dark-grey">Sep 13, 2018</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													<span class="sep">|</span>
													<span>Topic <strong class="green">Quran</strong></span>
													</span>
												</span>
											</p>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-commenting" aria-hidden="true"></i>
												<span>65</span>
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
												{{ HTML::image('images/cat-thread-avator-3.png', 'Safina Bay') }}
											</figure>
											<p>
												Gender Segregation &amp Interaction
												<span class="dt">
													<span>Posted <strong class="dark-grey">Sep 13, 2018</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													<span class="sep">|</span>
													<span>Topic <strong class="green">Quran</strong></span>
													</span>
												</span>
											</p>
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
												{{ HTML::image('images/cat-thread-avator-4.png', 'Safina Bay') }}
											</figure>
											<p>
												How would a revolution take place?
												<span class="dt">
													<span>Posted <strong class="dark-grey">Sep 13, 2018</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													<span class="sep">|</span>
													<span>Topic <strong class="green">Quran</strong></span>
													</span>
												</span>
											</p>
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
												{{ HTML::image('images/cat-thread-avator-5.png', 'Safina Bay') }}
											</figure>
											<p>
												Rights &amp Obligations of Citizens
												<span class="dt">
													<span>Posted <strong class="dark-grey">Sep 13, 2018</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													<span class="sep">|</span>
													<span>Topic <strong class="green">Quran</strong></span>
													</span>
												</span>
											</p>
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
												{{ HTML::image('images/cat-thread-avator-1.png', 'Safina Bay') }}
											</figure>
											<p>
												Gender Segregation &amp Interaction
												<span class="dt">
													<span>Posted <strong class="dark-grey">Sep 13, 2018</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													<span class="sep">|</span>
													<span>Topic <strong class="green">Quran</strong></span>
													</span>
												</span>
											</p>
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
												{{ HTML::image('images/cat-thread-avator-7.png', 'Safina Bay') }}
											</figure>
											<p>
												How Prophets of Allah Succeed in thier Mission
												<span class="dt">
													<span>Posted <strong class="dark-grey">Sep 13, 2018</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													<span class="sep">|</span>
													<span>Topic <strong class="green">Quran</strong></span>
													</span>
												</span>
											</p>
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
												{{ HTML::image('images/cat-thread-avator-2.png', 'Safina Bay') }}
											</figure>
											<p>
												How would a revolution take place?
												<span class="dt">
													<span>Posted <strong class="dark-grey">Sep 13, 2018</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													<span class="sep">|</span>
													<span>Topic <strong class="green">Quran</strong></span>
													</span>
												</span>
											</p>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-commenting" aria-hidden="true"></i>
												<span>555</span>
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
												{{ HTML::image('images/cat-thread-avator.png', 'Safina Bay') }}
											</figure>
											<p>
												Rights &amp Obligations of Citizens
												<span class="dt">
													<span>Posted <strong class="dark-grey">Sep 13, 2018</strong></span>
													<span class="sep">|</span>
													<span><i class="fa fa-folder-o" aria-hidden="true"></i>
													<strong class="blue">Principals of Understanding Islam</strong>
													<span class="sep">|</span>
													<span>Topic <strong class="green">Quran</strong></span>
													</span>
												</span>
											</p>
										</div>
									</div>
									<div class="col-sm-3 c-rft">
										<ul>
											<li>
												<i class="fa fa-commenting" aria-hidden="true"></i>
												<span>65</span>
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
                @include('frontend.includes.chat-sidebar')
                @include('frontend.includes.trending-sidebar')
			</div>
		</div>
	</div>
</section>



@endsection




