{{-- * Template Name : Contact * --}}
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
@section('body-class') inner-page @stop
@section('content')


<section>

	<!-- <div class="breadcrumbs">
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
						<a href="{!! URL::to('/') !!}">Login/Register</a>
					</span>
				</div>
			</div>
		</div>
	</div> -->


	<div class="container ptpx-66 pbpx-66 contact-pg-sec login-func">

		<div class="row">
			<div class="col-sm-5">

                <div class="row">
                    <div class="col-12">
                        @if(session('message'))
                            <div>   <div class="alert alert-success" >{!!session('message')!!}</div> </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>

				<div class="hide-login">

					<h3 class="main-heading">Login</h3>

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
                                <div class="col-sm-6 text-right">
                                    <a href="javascript:;" class="fgt-pass">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                    </form>
				</div>

				<div class="show-fg">
					<h3 class="main-heading">Forgot Password</h3>
					<div class="form">
						<div class="row">
							<div class="col-sm-12">
								<div class="field">
									<input type="email" name="" placeholder="Email">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<input type="submit" value="Send Email" name="" class="primary-btn blue lg">
							</div>
							<div class="col-sm-6 text-right">
								<a href="javascript:;" class="fgt-pass-login">Back to Login</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-6 offset-sm-1">
				<h3 class="main-heading">Register</h3>
				<div class="form">
					<div class="row">
						<div class="col-sm-6">
							<div class="field">
								<input type="text" name="" placeholder="First Name">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="field">
								<input type="text" name="" placeholder="Last Name">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="field">
								<input type="email" name="" placeholder="Email">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="field">
								<input type="text" name="" placeholder="Phone Number">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<div class="field">
								<input type="text" name="" placeholder="Location">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="field">
								<select name="">
									<option>Account type</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="field">
								<input type="password" name="" placeholder="Password">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="field">
								<input type="password" name="" placeholder="Confirm Password">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<input type="submit" value="Register" name="" class="primary-btn blue lg">
						</div>
					</div>
				</div>
			</div>
		</div>



	</div>


</section>



@endsection




