<!-- Footer Here -->
<footer class="footer clearfix">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				@if( $site_setting )
		        	<a class="navbar-brand" href="{{ URL::to('/') }}">
		        		<figure>
		        			<img src="{{ asset( $site_setting->footer_logo )  }}" />
		        		</figure>
		        	</a>
		        @endif
		        @if( $site_setting->about_company ) 
					<p>{!! $site_setting->about_company !!}</p>
				@endif

				@if( $site_setting->socialmedia_status == 'Active' )
				<ul class="social">
					<li>
						<a href="{{ ($site_setting->facebook) ? $site_setting->facebook : 'javascript:;' }}"><i class="fa fa-facebook"></i></a>
					</li>
					<li>
						<a href="{{ ($site_setting->twitter) ? $site_setting->twitter : 'javascript:;' }}"><i class="fa fa-twitter"></i></a>
					</li>
					<li>
						<a href="{{ ($site_setting->linkedin) ? $site_setting->linkedin : 'javascript:;' }}"><i class="fa fa-linkedin"></i></a>
					</li>
					<li>
						<a href="{{ ($site_setting->youtube) ? $site_setting->youtube : 'javascript:;' }}"><i class="fa fa-youtube"></i></a>
					</li>
					
				</ul>
				@endif
			</div>
			<div class="col-sm-4">
				<h3>{!! $site_setting->quick_links_title ?? '' !!}</h3>
				@if( !empty( $menu_footer ) && $menu_footer->count() > 0 )
					<ul class="links">
						@foreach( $menu_footer as $key => $menu )
							@if( $menu->url && $menu->url !='#' )
							<li><a href="{{ $menu->url }}" @if( $menu->new_window == 1 ) target="_blank" @endif>{{ $menu->title }}</a></li>
							@else
							<li><a href="{{ route('page_view',['name'=>$menu->slug]) }}">{{ $menu->title }}</a></li>
							@endif
						@endforeach
		    		</ul>
		    			
		    	@endif
			</div>

	        <div class="col-sm-4">
				<h3>{!! $site_setting->get_in_touch_title ?? '' !!}</h3>
				<ul class="get-in-touch">
				@if( $site_setting->address ) 
					<li>
						<strong>Office Address</strong><br>
						{!! $site_setting->address  !!} 
					</li>
				@endif
				@if( $site_setting->site_phone ) 
					<li>
						<strong>Phone:</strong>
						<a href="tel:{{ $site_setting->site_phone }}">{!! $site_setting->site_phone  !!}</a> 
					</li>
				@endif
				@if( $site_setting->site_email ) 
					<li>
						<strong>Email:</strong>
						<a href="mailto:{!! $site_setting->site_email ?? 'javascript:;'  !!}">{!! $site_setting->site_email ?? '' !!}</a> 
					</li>
				@endif
				</ul>
			</div>
		    
	
		</div>
		<div class="row footer-copy">
			<div class="col-sm-12">
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<p>&copy; 2018 Copyright Safina Bay.</p>
					</div>
					<div class="col-sm-6 text-right">
						<p>Designed &amp; Developed by <a href="http://www.perfecent.com" target="_blank">Perfecent</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<input type="hidden" name="base_url" id="base_url" value="{{ URL::to('/') }}">
</footer>
<!-- End Footer -->
	</div>

	<script src="{{ URL::to('/') }}/js/app.js"></script>
    <script src="{{ URL::to('/') }}/js/mousewheel.js"></script>
    <script src="{{ URL::to('/') }}/js/mCustomScrollbar.js"></script>
	<script src="{{ URL::to('/') }}/js/custom.js"></script>

	<script src="{{ URL::to('https://cloud.tinymce.com/5/tinymce.min.js?apiKey=8wv091kqxkxmdsnxs94zv212drc8ko4ajf3w91demylcdorc') }}"></script>
	@yield('footer_script')
	
	</body>
</html>
