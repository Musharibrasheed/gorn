<!DOCTYPE HTML>

<html>
	<head>
		<title>@yield('page-title')</title>
		<meta charset="utf-8">
		<meta description="@yield('meta-description')">
		<meta keyword="@yield('meta-keywords')">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Theme CSS -->
		<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/app.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700|Roboto" rel="stylesheet">

		<!--[if lt IE 9]>
			<script src="js/html5/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="@yield('body-class') @if( isUserLoggedIn() ) logged-in @endif">
<?php //print_b($menu_header); exit;?>
	<div class="main-cont">

	    <header class="header">
	    	<div class="container-fluid">
	    		<div class="row">
		    		<div class="col-sm-2 text-left">
		    		@if( $site_setting )
		        		<a class="navbar-brand" href="{{ URL::to('/') }}">
		        			<figure>
		        				<img src="{{ asset( $site_setting->logo )  }}" />
		        			</figure>
		        		</a>
		        	@endif
		    		</div>
		    		<div class="col-sm-10 text-right head-right">


		    			@if( !empty( $menu_header ) && $menu_header->count() > 0 )
		    			<nav class="main-nav">
			    			<ul>
			    			@foreach( $menu_header as $key => $menu )
			    				@if( $menu->url && $menu->url !='#' )
								<li><a href="{{ $menu->url }}" @if( $menu->new_window == 1 ) target="_blank" @endif>{{ $menu->title }}</a></li>
								@else
								<li><a href="{{ route('page_view',['name'=>$menu->slug]) }}">{{ $menu->title }}</a></li>
								@endif
	    					@endforeach
			    			</ul>
		    			</nav>
		    			@endif
		    			<ul class="lang-select">
		    				<li>
		    					<figure>
		    						{{ HTML::image('images/flag-head.png', 'Safina Bay') }}
		    					</figure>
		    					<i class="fa fa-caret-down"></i>
		    				</li>
		    			</ul>
		    			<div class="cart">
		    				<span class="count">2</span>
		    				<i class="fa fa-shopping-cart" aria-hidden="true"></i>
		    				<div class="cart-dropdown">
		    					<h4>Items</h4>
		    					<ul>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/chat-1.jpg', 'Safina Bay') }}
		    							</figure>
		    							<div class="pd-info">
		    								<h5>Sample Product</h5>
		    								<div class="pd-meta">
		    									<p class="price">$20.00</p>
		    									<p class="quantity"><strong>Quantity: </strong>4</p>
		    								</div>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/chat-1.jpg', 'Safina Bay') }}
		    							</figure>
		    							<div class="pd-info">
		    								<h5>Sample Product</h5>
	    									<p class="price">$20.00</p>
	    									<p class="quantity"><strong>Quantity: </strong>4</p>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/chat-1.jpg', 'Safina Bay') }}
		    							</figure>
		    							<div class="pd-info">
		    								<h5>Sample Product</h5>
		    								<div class="pd-meta">
		    									<p class="price">$20.00</p>
		    									<p class="quantity"><strong>Quantity: </strong>4</p>
		    								</div>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/chat-1.jpg', 'Safina Bay') }}
		    							</figure>
		    							<div class="pd-info">
		    								<h5>Sample Product</h5>
		    								<div class="pd-meta">
		    									<p class="price">$20.00</p>
		    									<p class="quantity"><strong>Quantity: </strong>4</p>
		    								</div>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/chat-1.jpg', 'Safina Bay') }}
		    							</figure>
		    							<div class="pd-info">
		    								<h5>Sample Product</h5>
		    								<div class="pd-meta">
		    									<p class="price">$20.00</p>
		    									<p class="quantity"><strong>Quantity: </strong>4</p>
		    								</div>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/chat-1.jpg', 'Safina Bay') }}
		    							</figure>
		    							<div class="pd-info">
		    								<h5>Sample Product</h5>
		    								<div class="pd-meta">
		    									<p class="price">$20.00</p>
		    									<p class="quantity"><strong>Quantity: </strong>4</p>
		    								</div>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/chat-1.jpg', 'Safina Bay') }}
		    							</figure>
		    							<div class="pd-info">
		    								<h5>Sample Product</h5>
		    								<div class="pd-meta">
		    									<p class="price">$20.00</p>
		    									<p class="quantity"><strong>Quantity: </strong>4</p>
		    								</div>
		    							</div>
		    						</li>
		    					</ul>
		    					<a class="cart-link" href="javascript:;">View Cart</a>
		    				</div>
		    			</div>
		    			<div class="notification">
		    				<span class="count">2</span>
		    				<i class="fa fa-bell" aria-hidden="true"></i>
		    				<div id="notify-dp" class="notification-dropdown">
		    					<h4>Notifications</h4>
		    					<ul>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/c-1.png', 'Safina Bay') }}
		    							</figure>
		    							<div class="info">
		    								<p><strong class="name">Haleem Asley</strong> posted in <a class="nt-name" href="javascript:;">Muslim & Non Musilm</a> “The term Islamic Nizaam, means the Islamic... <span class="time-ago">3 min ago</span></p>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/c-1.png', 'Safina Bay') }}
		    							</figure>
		    							<div class="info">
		    								<p><strong class="name">Haleem Asley</strong> posted in <a class="nt-name" href="javascript:;">Muslim & Non Musilm</a> “The term Islamic Nizaam, means the Islamic... <span class="time-ago">3 min ago</span></p>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/c-1.png', 'Safina Bay') }}
		    							</figure>
		    							<div class="info">
		    								<p><strong class="name">Haleem Asley</strong> posted in <a class="nt-name" href="javascript:;">Muslim & Non Musilm</a> “The term Islamic Nizaam, means the Islamic... <span class="time-ago">3 min ago</span></p>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/c-1.png', 'Safina Bay') }}
		    							</figure>
		    							<div class="info">
		    								<p><strong class="name">Haleem Asley</strong> posted in <a class="nt-name" href="javascript:;">Muslim & Non Musilm</a> “The term Islamic Nizaam, means the Islamic... <span class="time-ago">3 min ago</span></p>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/c-1.png', 'Safina Bay') }}
		    							</figure>
		    							<div class="info">
		    								<p><strong class="name">Haleem Asley</strong> posted in <a class="nt-name" href="javascript:;">Muslim & Non Musilm</a> “The term Islamic Nizaam, means the Islamic... <span class="time-ago">3 min ago</span></p>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/c-1.png', 'Safina Bay') }}
		    							</figure>
		    							<div class="info">
		    								<p><strong class="name">Haleem Asley</strong> posted in <a class="nt-name" href="javascript:;">Muslim & Non Musilm</a> “The term Islamic Nizaam, means the Islamic... <span class="time-ago">3 min ago</span></p>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/c-1.png', 'Safina Bay') }}
		    							</figure>
		    							<div class="info">
		    								<p><strong class="name">Haleem Asley</strong> posted in <a class="nt-name" href="javascript:;">Muslim & Non Musilm</a> “The term Islamic Nizaam, means the Islamic... <span class="time-ago">3 min ago</span></p>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/c-1.png', 'Safina Bay') }}
		    							</figure>
		    							<div class="info">
		    								<p><strong class="name">Haleem Asley</strong> posted in <a class="nt-name" href="javascript:;">Muslim & Non Musilm</a> “The term Islamic Nizaam, means the Islamic... <span class="time-ago">3 min ago</span></p>
		    							</div>
		    						</li>
		    					</ul>
		    					<a class="view-all" href="javascript:;">View All</a>
		    				</div>
		    			</div>
		    			<div class="messages">
		    				<span class="count">2</span>
		    				<i class="fa fa-envelope" aria-hidden="true"></i>
		    				<div id="message-dp" class="notification-dropdown">
		    					<h4>Recent Messages</h4>
		    					<ul>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/c-1.png', 'Safina Bay') }}
		    							</figure>
		    							<div class="info">
		    								<div class="active-status"></div>
		    								<p><strong class="name">Haleem Asley</strong> Can any one list me some famous... <span class="time-ago">7:45 AM</span></p>
		    								<div class="vc-check"><i class="fa fa-check" aria-hidden="true"></i></div>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/sara.png', 'Safina Bay') }}
		    							</figure>
		    							<div class="info">
		    								<p><strong class="name">Sara Khan</strong> You sent a attachment.<span class="time-ago">Dec 4</span></p>
		    								<div class="vc-check"><i class="fa fa-paperclip" aria-hidden="true"></i></div>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/c-2.png', 'Safina Bay') }}
		    							</figure>
		    							<div class="info">
		    								<p><strong class="name">Mark Menson</strong> https://www.dummylink.xyz/ <span class="time-ago">2 day ago</span></p>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/sandra.png', 'Safina Bay') }}
		    							</figure>
		    							<div class="info">
		    								<div class="active-status"></div>
		    								<p><strong class="name">Sandra Evans</strong> Hello How are you...?<span class="time-ago">33 min ago</span></p>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/c-1.png', 'Safina Bay') }}
		    							</figure>
		    							<div class="info">
		    								<p><strong class="name">Haleem Asley</strong> posted in <a class="nt-name" href="javascript:;">Muslim & Non Musilm</a> “The term Islamic Nizaam, means the Islamic... <span class="time-ago">3 min ago</span></p>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/jhon.png', 'Safina Bay') }}
		    							</figure>
		    							<div class="info">
		    								<p><strong class="name">Jhony Peterson</strong> For More Urdu Articles On Islam... <span class="time-ago">2 day ago</span></p>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/c-1.png', 'Safina Bay') }}
		    							</figure>
		    							<div class="info">
		    								<p><strong class="name">Alexis Reed</strong> Alexis Reed sent a video. <span class="time-ago">Dec 4</span></p>
		    								<div class="vc-check"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
		    							</div>
		    						</li>
		    						<li>
		    							<figure>
		    								{{ HTML::image('images/c-1.png', 'Safina Bay') }}
		    							</figure>
		    							<div class="info">
		    								<p><strong class="name">Haleem Asley</strong> posted in <a class="nt-name" href="javascript:;">Muslim & Non Musilm</a> “The term Islamic Nizaam, means the Islamic... <span class="time-ago">3 min ago</span></p>
		    							</div>
		    						</li>
		    					</ul>
		    					<a class="view-all" href="javascript:;">See All Messages</a>
		    				</div>
		    			</div>
		    			<div class="register">
		    				<a href="{!! route('login') !!}" class="primary-btn">Login / Register</a>
		    			</div>
		    			<div class="after-logged-info">
		    				<figure class="avator">
		    					{{ HTML::image('images/avator.png', 'Safina Bay') }}
		    				</figure>
		    				<span>@if( isUserLoggedIn() ) {{ isUserLoggedIn()['full_name'] }} @endif</span>
		    				<i class="fa fa-caret-down"></i>
		    				<div class="account-dropdown">
		    					<ul>
		    						<li><a class="account-link" href="javascript:;">My Profile</a></li>
		    						<li><a class="account-link" href="javascript:;">Edit Profile</a></li>
		    						<li><a class="account-link" href="javascript:;">Log Out</a></li>
		    					</ul>
		    				</div>
		    			</div>
		    		</div>
	    		</div>
	    	</div>
	    </header>
