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
						<a href="{!! URL::to('/') !!}">My Threads</a>
					</span>
					<span>
						<i class="fa fa-angle-right"></i>
					</span>
					<span>
						<a href="{!! URL::to('/') !!}">All Categories</a>
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
				<div class="main-content-box padding-30px">
					<div class="all-members-head tabs">
						<ul>
							<li>
								<a href="javascript:;" class="active" data-tabc="all-mem-pg-all">All</a>
							</li>
							<li>
								<a href="javascript:;" data-tabc="all-mem-pg-banned">Banned</a>
							</li>
							<li>
								<a href="javascript:;" data-tabc="all-mem-pg-muted">Muted</a>
							</li>
						</ul>
						<div class="srch">
							<a href="javascript:;"><i class="fa fa-search srch"></i></a>
						</div>
					</div>
					<div>
						<div class="all-members-list tab-content all-mem-pg-all">
							<ul>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator.png', 'Safina Bay') }}
										</figure>
										<p>
											Russel Robert
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-1.png', 'Safina Bay') }}
										</figure>
										<p>
											Al Abbas
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-2.png', 'Safina Bay') }}
										</figure>
										<p>
											Catalin Vasile
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-3.png', 'Safina Bay') }}
										</figure>
										<p>
											Masudur Rahman
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-eye-slash stat" aria-hidden="true"></i>
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-4.png', 'Safina Bay') }}
										</figure>
										<p>
											Mark Menson
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-5.png', 'Safina Bay') }}
										</figure>
										<p>
											John Doe
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-6.png', 'Safina Bay') }}
										</figure>
										<p>
											Keil Thomas
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ban stat" aria-hidden="true"></i>
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-7.png', 'Safina Bay') }}
										</figure>
										<p>
											Steve Mockensturm
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-8.png', 'Safina Bay') }}
										</figure>
										<p>
											Russel Robert
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-9.png', 'Safina Bay') }}
										</figure>
										<p>
											Eathan Hunt
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-1a.png', 'Safina Bay') }}
										</figure>
										<p>
											Catalin Vasile
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ban stat" aria-hidden="true"></i>
										<i class="fa fa-eye-slash stat" aria-hidden="true"></i>
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-4.png', 'Safina Bay') }}
										</figure>
										<p>
											Mark Menson
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="paginate text-center">
										<ul>
											{{-- <li>
												<a href="javascript:;">Previous</a>
											</li> --}}
											<li>
												<a class="active" href="javascript:;">1</a>
											</li>
											<li>
												<a href="javascript:;">2</a>
											</li>
											<li>
												<a href="javascript:;">3</a>
											</li>
											<li>
												<a href="javascript:;">4</a>
											</li>
											<li>
												<a href="javascript:;">5</a>
											</li>
											<li>
												<a href="javascript:;">6</a>
											</li>
											<li>
												<a href="javascript:;">Next</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
						</div>

						<div class="all-members-list tab-content all-mem-pg-banned">
							<ul>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator.png', 'Safina Bay') }}
										</figure>
										<p>
											Russel Robert
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-1.png', 'Safina Bay') }}
										</figure>
										<p>
											Al Abbas
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-2.png', 'Safina Bay') }}
										</figure>
										<p>
											Catalin Vasile
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-3.png', 'Safina Bay') }}
										</figure>
										<p>
											Masudur Rahman
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-eye-slash stat" aria-hidden="true"></i>
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-4.png', 'Safina Bay') }}
										</figure>
										<p>
											Mark Menson
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-5.png', 'Safina Bay') }}
										</figure>
										<p>
											John Doe
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-6.png', 'Safina Bay') }}
										</figure>
										<p>
											Keil Thomas
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ban stat" aria-hidden="true"></i>
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-7.png', 'Safina Bay') }}
										</figure>
										<p>
											Steve Mockensturm
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-8.png', 'Safina Bay') }}
										</figure>
										<p>
											Russel Robert
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-9.png', 'Safina Bay') }}
										</figure>
										<p>
											Eathan Hunt
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-1a.png', 'Safina Bay') }}
										</figure>
										<p>
											Catalin Vasile
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ban stat" aria-hidden="true"></i>
										<i class="fa fa-eye-slash stat" aria-hidden="true"></i>
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-4.png', 'Safina Bay') }}
										</figure>
										<p>
											Mark Menson
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="paginate text-center">
										<ul>
											{{-- <li>
												<a href="javascript:;">Previous</a>
											</li> --}}
											<li>
												<a class="active" href="javascript:;">1</a>
											</li>
											<li>
												<a href="javascript:;">2</a>
											</li>
											<li>
												<a href="javascript:;">3</a>
											</li>
											<li>
												<a href="javascript:;">4</a>
											</li>
											<li>
												<a href="javascript:;">5</a>
											</li>
											<li>
												<a href="javascript:;">6</a>
											</li>
											<li>
												<a href="javascript:;">Next</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
						</div>

						<div class="all-members-list tab-content all-mem-pg-muted">
							<ul>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator.png', 'Safina Bay') }}
										</figure>
										<p>
											Russel Robert
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-1.png', 'Safina Bay') }}
										</figure>
										<p>
											Al Abbas
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-2.png', 'Safina Bay') }}
										</figure>
										<p>
											Catalin Vasile
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-3.png', 'Safina Bay') }}
										</figure>
										<p>
											Masudur Rahman
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-eye-slash stat" aria-hidden="true"></i>
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-4.png', 'Safina Bay') }}
										</figure>
										<p>
											Mark Menson
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-5.png', 'Safina Bay') }}
										</figure>
										<p>
											John Doe
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-6.png', 'Safina Bay') }}
										</figure>
										<p>
											Keil Thomas
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ban stat" aria-hidden="true"></i>
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-7.png', 'Safina Bay') }}
										</figure>
										<p>
											Steve Mockensturm
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-8.png', 'Safina Bay') }}
										</figure>
										<p>
											Russel Robert
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-9.png', 'Safina Bay') }}
										</figure>
										<p>
											Eathan Hunt
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-1a.png', 'Safina Bay') }}
										</figure>
										<p>
											Catalin Vasile
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ban stat" aria-hidden="true"></i>
										<i class="fa fa-eye-slash stat" aria-hidden="true"></i>
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="col-sm-9 lft">
										<figure>
											{{ HTML::image('images/members-avator-4.png', 'Safina Bay') }}
										</figure>
										<p>
											Mark Menson
											<span>Member Since: Dec 22, 2018</span>
										</p>
									</div>
									<div class="col-sm-3 rft text-right">
										<i class="fa fa-ellipsis-v options" aria-hidden="true"></i>
										<div class="extra-opt">
											<ul>
												<li>
													<a href="javascript:;">Unmute</a>
												</li>
												<li>
													<a href="javascript:;">Remove From Group</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="paginate text-center">
										<ul>
											{{-- <li>
												<a href="javascript:;">Previous</a>
											</li> --}}
											<li>
												<a class="active" href="javascript:;">1</a>
											</li>
											<li>
												<a href="javascript:;">2</a>
											</li>
											<li>
												<a href="javascript:;">3</a>
											</li>
											<li>
												<a href="javascript:;">4</a>
											</li>
											<li>
												<a href="javascript:;">5</a>
											</li>
											<li>
												<a href="javascript:;">6</a>
											</li>
											<li>
												<a href="javascript:;">Next</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



@endsection




