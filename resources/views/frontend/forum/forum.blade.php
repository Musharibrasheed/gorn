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
								<a href="javascript:;" class="active" data-tabc="forum-pg-all" >All</a>
							</li>
							<li>
								<a href="javascript:;" data-tabc="forum-pg-recent">Recent Threads</a>
							</li>
							<li>
								<a href="javascript:;" data-tabc="forum-pg-my-thread">My Threads</a>
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
				<div class="main-content-box tab-content forum-pg-all">
					<ul class="forum-cat">
						<li>
							<h4>Principals of Understanding Islam</h4>
							<span class="count">3</span>
						</li>
						<li>
							<h4>Faith</h4>
							<span class="count">10</span>
						</li>
						<li>
							<h4>Life of the Prophet (Seerah)</h4>
							<span class="count">5</span>
						</li>
						<li>
							<h4>Hijabis Rock</h4>
							<span class="count">2</span>
						</li>
						<li>
							<h4>Principals of Understanding Islam</h4>
							<span class="count">1</span>
						</li>
						<li>
							<h4>Islamic State</h4>
							<span class="count">35</span>
						</li>
						<li>
							<h4>Life of the Prophet (Seerah)</h4>
							<span class="count">33</span>
						</li>
						<li>
							<h4>Hijabis Rock</h4>
							<span class="count">9</span>
						</li>
						<li>
							<h4>Principals of Understanding Islam</h4>
							<span class="count">4</span>
						</li>
						<li>
							<div class="paginate">
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

				<div class="main-content-box tab-content forum-pg-recent">
					<ul class="forum-cat">
						<li>
							<h4>Principals of Understanding Islam</h4>
							<span class="count">3</span>
						</li>
						<li>
							<h4>Faith</h4>
							<span class="count">10</span>
						</li>
						<li>
							<h4>Life of the Prophet (Seerah)</h4>
							<span class="count">5</span>
						</li>
						<li>
							<h4>Hijabis Rock</h4>
							<span class="count">2</span>
						</li>
					</ul>
				</div>

				<div class="main-content-box tab-content forum-pg-my-thread">
					<ul class="forum-cat">
						<li>
							<h4>Principals of Understanding Islam</h4>
							<span class="count">3</span>
						</li>
						<li>
							<h4>Faith</h4>
							<span class="count">10</span>
						</li>
						<li>
							<h4>Life of the Prophet (Seerah)</h4>
							<span class="count">5</span>
						</li>
						<li>
							<h4>Hijabis Rock</h4>
							<span class="count">2</span>
						</li>
						<li>
							<h4>Principals of Understanding Islam</h4>
							<span class="count">1</span>
						</li>
						<li>
							<h4>Islamic State</h4>
							<span class="count">35</span>
						</li>
						<li>
							<h4>Life of the Prophet (Seerah)</h4>
							<span class="count">33</span>
						</li>
						<li>
							<h4>Hijabis Rock</h4>
							<span class="count">9</span>
						</li>
						<li>
							<h4>Principals of Understanding Islam</h4>
							<span class="count">4</span>
						</li>
						<li>
							<div class="paginate">
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
									{{-- <li>
										<a href="javascript:;">Next</a>
									</li> --}}
								</ul>
							</div>
						</li>
					</ul>
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




