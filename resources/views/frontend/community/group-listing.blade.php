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
@section('body-class') inner-page community-pg explore-pg logged-in  @stop
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
				</div>
			</div>
		</div>
	</div>
</section>

<section class="main-content">
	<div class="container">
		<div class="row mbpx-37 main-pg-head">
			<div class="col-sm-8 col-md-10">
				<div class="search-bar cat-srch">
					<input type="text" name="search" placeholder="Search...">
					<select>
						<option>Groups</option>
					</select>
					<button><i class="fa fa-search"></i></button>
				</div>
			</div>
			<div class="col-sm-4 col-md-2">
				<a href="javascript:;" class="primary-btn bx"><i class="fa fa-plus"></i>Create Group</a>
			</div>
		</div>

		<div class="row c-cont s-box mbpx-72">
			<div class="col-sm-12">
				<div class="shadow-bg">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="clearfix mbpx-0">Explore Groups</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="explore-groups">
								<div class="g-box">
									<figure>
										<img src="../images/group-listing-pg.jpg" alt="Community">
										<span class="rank">11</span>
									</figure>
									<h4>Oneness of God (Touheed)</h4>
									<p>665 Members</p>
									<div class="points">
										<i class="points-ico"></i>
										<h4>3828</h4>
									</div>
									<div class="actions">
										<a href="javascript:;" class="primary-btn"><i class="fa fa-plus"></i> Join</a>
									</div>
								</div>

								<div class="g-box">
									<figure>
										<img src="../images/group-listing-pg.jpg" alt="Community">
										<span class="rank">11</span>
									</figure>
									<h4>Oneness of God (Touheed)</h4>
									<p>665 Members</p>
									<div class="points">
										<i class="points-ico"></i>
										<h4>3828</h4>
									</div>
									<div class="actions">
										<a href="javascript:;" class="primary-btn"><i class="fa fa-plus"></i> Join</a>
									</div>
								</div>

								<div class="g-box">
									<figure>
										<img src="../images/group-listing-pg.jpg" alt="Community">
										<span class="rank">11</span>
									</figure>
									<h4>The Prophet &amp; Islamic Brotherhood</h4>
									<p>998 Members</p>
									<div class="points">
										<i class="points-ico"></i>
										<h4>3828</h4>
									</div>
									<div class="actions">
										<a href="javascript:;" class="primary-btn"><i class="fa fa-plus"></i> Join</a>
									</div>
								</div>

								<div class="g-box">
									<figure>
										<img src="../images/group-listing-pg.jpg" alt="Community">
										<span class="rank">11</span>
									</figure>
									<h4>The Prophet &amp; Islamic Brotherhood</h4>
									<p>998 Members</p>
									<div class="points">
										<i class="points-ico"></i>
										<h4>3828</h4>
									</div>
									<div class="actions">
										<a href="javascript:;" class="primary-btn"><i class="fa fa-plus"></i> Join</a>
									</div>
								</div>

								<div class="g-box">
									<figure>
										<img src="../images/group-listing-pg.jpg" alt="Community">
										<span class="rank">11</span>
									</figure>
									<h4>The Prophet &amp; Islamic Brotherhood</h4>
									<p>998 Members</p>
									<div class="points">
										<i class="points-ico"></i>
										<h4>3828</h4>
									</div>
									<div class="actions">
										<a href="javascript:;" class="primary-btn"><i class="fa fa-plus"></i> Join</a>
									</div>
								</div>

								<div class="g-box">
									<figure>
										<img src="../images/group-listing-pg.jpg" alt="Community">
										<span class="rank">11</span>
									</figure>
									<h4>The Prophet &amp; Islamic Brotherhood</h4>
									<p>998 Members</p>
									<div class="points">
										<i class="points-ico"></i>
										<h4>3828</h4>
									</div>
									<div class="actions">
										<a href="javascript:;" class="primary-btn"><i class="fa fa-plus"></i> Join</a>
									</div>
								</div>

								<div class="g-box">
									<figure>
										<img src="../images/group-listing-pg.jpg" alt="Community">
										<span class="rank">11</span>
									</figure>
									<h4>The Prophet &amp; Islamic Brotherhood</h4>
									<p>998 Members</p>
									<div class="points">
										<i class="points-ico"></i>
										<h4>3828</h4>
									</div>
									<div class="actions">
										<a href="javascript:;" class="primary-btn"><i class="fa fa-plus"></i> Join</a>
									</div>
								</div>

								<div class="g-box">
									<figure>
										<img src="../images/group-listing-pg.jpg" alt="Community">
										<span class="rank">11</span>
									</figure>
									<h4>The Prophet &amp; Islamic Brotherhood</h4>
									<p>998 Members</p>
									<div class="points">
										<i class="points-ico"></i>
										<h4>3828</h4>
									</div>
									<div class="actions">
										<a href="javascript:;" class="primary-btn"><i class="fa fa-plus"></i> Join</a>
									</div>
								</div>

								<div class="paginate-all text-center">
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




