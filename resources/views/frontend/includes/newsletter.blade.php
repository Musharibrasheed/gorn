@if( $pageContent->newsletter == 1 )
<section class="newsletter">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				@if( $site_setting->newsletter_heading )<h2>{{ $site_setting->newsletter_heading ?? '' }}</h2> @endif
				@if( $site_setting->newsletter_text )<p>{{ $site_setting->newsletter_text ?? '' }} </p> @endif
				<div class="row">
					@if( $site_setting->newsletter_placeholder_name )
					<div class="col-sm-6">
						<input type="text" name="your-name" placeholder="{{ $siteSetting->newsletter_placeholder_name ?? '' }}">
					</div>
					@endif
					@if( $site_setting->newsletter_placeholder_email )
					<div class="col-sm-6">
						<input type="email" name="your-email" placeholder="{{ $siteSetting->newsletter_placeholder_email ?? '' }}">
					</div>
					@endif
					@if( $site_setting->newsletter_button_text )
					<div class="col-sm-12">
						<input type="submit" class="primary-btn" name="subscribe" value="{{ $siteSetting->newsletter_button_text ?? '' }}">
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</section>
@endif