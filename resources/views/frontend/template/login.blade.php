{{-- * Template Name : Login * --}}
@extends('frontend.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : meta_title() !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : meta_keywords() !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : meta_description() !!}
@stop
@section('body-class') inner-page @stop
@section('content')

<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/app.css">
<section>
	
<div class="container ptpx-66 pbpx-66 contact-pg-sec login-func">

		<div class="row">
			<div class="col-sm-5">

				<div class="hide-login">
					
					<h3 class="main-heading">Login</h3>

						@if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    <form method="POST" action="{{ route('login_post') }}">
                        @csrf
                        <div class="form">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="field">
                                        <input type="email" name="email" placeholder="Email" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="field">
                                        <input type="password" name="password" placeholder="Password" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="field">
                                        <label>
                                            <input type="checkbox" name="remember_me" value="1" />
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="submit" value="Login" name="" class="primary-btn blue lg">
                                </div>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>



	</div>


</section>

@endsection

@section('footer_script')
@stop




