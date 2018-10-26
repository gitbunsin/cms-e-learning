<!DOCTYPE html>
<!-- saved from url=(0053)https://demo.themeregion.com/jobs-updated/signin.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Jobs | Job Portal / Job Board HTML Template</title>

	@include('frontend.Kh-Works.partials.ui-styles')
  </head>
  <body>
	<!-- header -->
	@include('frontend.Kh-Works.partials.nav-ui')

	<!-- signin-page -->
	<section class="clearfix job-bg user-page">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->			
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="user-account">
						<h2>User Login</h2>
						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
					    @endif
						<!-- form -->
						<form enctype="multipart/form-data"  method="POST" action="/ui/singin">
							{{ csrf_field() }}
							<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
								<input type="text" class="form-control" placeholder="email" id="email" name="email">
								<span class="text-danger">{{ $errors->first('email') }}</span>
							</div>
							<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
								<input type="password" class="form-control" placeholder="Password" id="password" name="password">
								<span class="text-danger">{{ $errors->first('password') }}</span>
							</div>
							<button style="cursor: pointer" type="submit" href="#" class="btn">Login</button>
						</form><!-- form -->
					
						<!-- forgot-password -->
						<div class="user-option">
							<div class="checkbox pull-left">
								<label for="logged"><input type="checkbox" name="logged" id="logged"> Keep me logged in </label>
							</div>
							<div class="pull-right forgot-password">
								<a href="https://demo.themeregion.com/jobs-updated/signin.html#">Forgot password</a>
							</div>
						</div><!-- forgot-password -->
					</div>
					<a href="https://demo.themeregion.com/jobs-updated/signin.html#" class="btn-primary">Create a New Account</a>
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section><!-- signin-page -->

	@include('frontend.Kh-Works.partials.ui-footer')
	
	<!--/Preset Style Chooser--> 
	<div class="style-chooser">
		<div class="style-chooser-inner">
			<a href="https://demo.themeregion.com/jobs-updated/signin.html#" class="toggler"><i class="fa fa-cog fa-spin"></i></a>
			<h4>Presets</h4>
			<ul class="preset-list clearfix">
				<li class="preset1 active" data-preset="1"><a href="https://demo.themeregion.com/jobs-updated/signin.html#" data-color="preset1"></a></li>
				<li class="preset2" data-preset="2"><a href="https://demo.themeregion.com/jobs-updated/signin.html#" data-color="preset2"></a></li>
				<li class="preset3" data-preset="3"><a href="https://demo.themeregion.com/jobs-updated/signin.html#" data-color="preset3"></a></li>
				<li class="preset4" data-preset="4"><a href="https://demo.themeregion.com/jobs-updated/signin.html#" data-color="preset4"></a></li>
			</ul>
		</div>
	</div>
	<!--/End:Preset Style Chooser-->
    <!-- JS -->
	@include('frontend.Kh-Works.partials.ui-script')
  
</body></html>