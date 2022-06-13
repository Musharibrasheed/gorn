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
@section('body-class') inner-page community-pg logged-in  @stop
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
		<div class="row c-cont mbpx-62">
			<div class="col-sm-12">
				<h3>Groups You Manage</h3>
			</div>
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-6">
						<div class="cbox clearfix">
							<div class="more-info">
								<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
							</div>
							<figure>
								<img src="images/community-bx-img.jpg" alt="Community">
								<span class="grade">1</span>
							</figure>
							<h4>Albany, NY Muslims</h4>
							<p>1452 Members - <span>65 Online</span></p>
							<h6>Islamic Community</h6>
							<div class="comments-users">
								<span>
									<i class="fa fa-user-o" aria-hidden="true"></i>
									<span class="count">2</span>
								</span>
								<span>
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
									<span class="count green-bg">4</span>
								</span>
							</div>
							<div class="points">
								<i class="points-ico"></i>
								<h4>3828</h4>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="cbox clearfix">
							<div class="more-info">
								<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
							</div>
							<figure>
								<img src="images/community-bx-img-1.jpg" alt="Community">
								<span class="grade">4</span>
							</figure>
							<h4>Islamic Foundation</h4>
							<p>1246 Members - <span>49 Online</span></p>
							<h6>Al-Dawah Community</h6>
							<div class="comments-users">
								<span>
									<i class="fa fa-user-o" aria-hidden="true"></i>
									<span class="count">3</span>
								</span>
								<span>
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
									<span class="count green-bg">1</span>
								</span>
							</div>
							<div class="points">
								<i class="points-ico"></i>
								<h4>3828</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row c-cont mbpx-50">
			<div class="col-sm-12">
				<h3 class="green-bg">Your Groups</h3>
			</div>
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-4">
						<div class="cbox sm clearfix">
							<div class="more-info">
								<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
							</div>
							<figure>
								<img src="images/community-bx-img-sm.jpg" alt="Community">
								<span class="grade">2</span>
							</figure>
							<h4>Promotion For Islam</h4>
							<p>Admin: <span>Ishaq Brahim</span></p>
							<h6>Islamic Community</h6>
							<div class="points">
								<i class="points-ico"></i>
								<h4>3828</h4>
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="cbox sm clearfix">
							<div class="more-info">
								<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
							</div>
							<figure>
								<img src="images/community-bx-img-sm.jpg" alt="Community">
								<span class="grade">2</span>
							</figure>
							<h4>Promotion For Islam</h4>
							<p>Admin: <span>Ishaq Brahim</span></p>
							<h6>Islamic Community</h6>
							<div class="points">
								<i class="points-ico"></i>
								<h4>3828</h4>
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="cbox sm clearfix">
							<div class="more-info">
								<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
							</div>
							<figure>
								<img src="images/community-bx-img-sm.jpg" alt="Community">
								<span class="grade">2</span>
							</figure>
							<h4>Promotion For Islam</h4>
							<p>Admin: <span>Ishaq Brahim</span></p>
							<h6>Islamic Community</h6>
							<div class="points">
								<i class="points-ico"></i>
								<h4>3828</h4>
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="cbox sm clearfix">
							<div class="more-info">
								<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
							</div>
							<figure>
								<img src="images/community-bx-img-sm.jpg" alt="Community">
								<span class="grade">2</span>
							</figure>
							<h4>Promotion For Islam</h4>
							<p>Admin: <span>Ishaq Brahim</span></p>
							<h6>Islamic Community</h6>
							<div class="points">
								<i class="points-ico"></i>
								<h4>3828</h4>
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="cbox sm clearfix">
							<div class="more-info">
								<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
							</div>
							<figure>
								<img src="images/community-bx-img-sm.jpg" alt="Community">
								<span class="grade">2</span>
							</figure>
							<h4>Promotion For Islam</h4>
							<p>Admin: <span>Ishaq Brahim</span></p>
							<h6>Islamic Community</h6>
							<div class="points">
								<i class="points-ico"></i>
								<h4>3828</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row c-cont s-box mbpx-95">
			<div class="col-sm-12">
				<h3 class="grey-bg clearfix">Top 5 groups <a href="javascript:;">See all</a></h3>
			</div>
			<div class="col-sm-12">
				<div class="bg-white">
					<div class="row">
						<div class="col-sm-12 top-groups">
							<div class="top-box">
								<figure>
									<img src="images/top-groups-community-pg-img.jpg" alt="Community">
									<span class="rank">1</span>
								</figure>
								<h4>Albany, NY Muslims</h4>
								<p>Islamic Community</p>
								<div class="points">
									<i class="points-ico"></i>
									<h4>3828</h4>
								</div>
							</div>

							<div class="top-box">
								<figure>
									<img src="images/top-groups-community-pg-img.jpg" alt="Community">
									<span class="rank">1</span>
								</figure>
								<h4>Albany, NY Muslims</h4>
								<p>Islamic Community</p>
								<div class="points">
									<i class="points-ico"></i>
									<h4>3828</h4>
								</div>
							</div>

							<div class="top-box">
								<figure>
									<img src="images/top-groups-community-pg-img.jpg" alt="Community">
									<span class="rank">1</span>
								</figure>
								<h4>Albany, NY Muslims</h4>
								<p>Islamic Community</p>
								<div class="points">
									<i class="points-ico"></i>
									<h4>3828</h4>
								</div>
							</div>

							<div class="top-box">
								<figure>
									<img src="images/top-groups-community-pg-img.jpg" alt="Community">
									<span class="rank">1</span>
								</figure>
								<h4>Albany, NY Muslims</h4>
								<p>Islamic Community</p>
								<div class="points">
									<i class="points-ico"></i>
									<h4>3828</h4>
								</div>
							</div>

							<div class="top-box">
								<figure>
									<img src="images/top-groups-community-pg-img.jpg" alt="Community">
									<span class="rank">1</span>
								</figure>
								<h4>Albany, NY Muslims</h4>
								<p>Islamic Community</p>
								<div class="points">
									<i class="points-ico"></i>
									<h4>3828</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row c-cont s-box mbpx-72">
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="grey-bg clearfix mbpx-0">Explore Groups</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="explore-groups">
							<div class="g-box">
								<figure>
									<img src="images/community-wxplore-bx-img.jpg" alt="Community">
									<span class="rank">10</span>
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
									<img src="images/community-wxplore-bx-img.jpg" alt="Community">
									<span class="rank">10</span>
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
									<img src="images/community-wxplore-bx-img.jpg" alt="Community">
									<span class="rank">10</span>
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
									<img src="images/community-wxplore-bx-img.jpg" alt="Community">
									<span class="rank">10</span>
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
									<img src="images/community-wxplore-bx-img.jpg" alt="Community">
									<span class="rank">10</span>
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
									<img src="images/community-wxplore-bx-img.jpg" alt="Community">
									<span class="rank">10</span>
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
							<div class="g-more">
								<a href="javascript:;">Browse More...</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="grey-bg clearfix mbpx-0">Explore Community</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="explore-community">
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
							</ul>
							<div class="g-more">
								<a href="javascript:;">Browse More...</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<img src="images/map-community-pg.jpg" alt="Map" class="img-fluid">
			</div>
		</div>
	</div>
</section>



@endsection




