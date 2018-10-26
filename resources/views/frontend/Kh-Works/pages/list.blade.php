<!DOCTYPE html>
<!-- saved from url=(0055)https://demo.themeregion.com/jobs-updated/job-list.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Jobs | Job Portal / Job Board HTML Template</title>

   <!-- CSS -->
@include('frontend.Kh-Works.partials.ui-styles')
    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
  </head>
  <body>
	<!-- header -->
	@include('frontend.Kh-Works.partials.nav-ui')

	<section class="job-bg page job-list-page">
		<div class="container">
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="https://demo.themeregion.com/jobs-updated/index.html">Home</a></li>
					<li>Engineer/Architects</li>
				</ol><!-- breadcrumb -->						
				<h2 class="title">Software Engineer</h2>
			</div>

			<div class="banner-form banner-form-full job-list-form">
				<form action="https://demo.themeregion.com/jobs-updated/job-list.html#">
					<!-- category-change -->
					<div class="dropdown category-dropdown">
						<a data-toggle="dropdown" href="https://demo.themeregion.com/jobs-updated/job-list.html#"><span class="change-text">Job Category</span> <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu category-change">
							<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#">Customer Service</a></li>
							<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#">Software Engineer</a></li>
							<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#">Program Development</a></li>
							<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#">Project Manager</a></li>
							<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#">Graphics Designer</a></li>
						</ul>
					</div><!-- category-change -->

					<input type="text" class="form-control" placeholder="Type your key word">
					<button type="submit" class="btn btn-primary" value="Search">Search</button>
				</form>
			</div><!-- banner-form -->

			<div class="category-info">	
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="accordion">
							<!-- panel-group -->
							<div class="panel-group" id="accordion">
							 	
								<!-- panel -->
								<div class="panel panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<div class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="https://demo.themeregion.com/jobs-updated/job-list.html#accordion-one" aria-expanded="false" class="collapsed">
												<h4>Create CV<span class="pull-right"><i class="fa fa-minus"></i></span></h4>
											</a>
										</div>
									</div><!-- panel-heading -->

									<div id="accordion-one" class="panel-collapse collapse in" aria-expanded="true" style="">
										<!-- panel-body -->
										<div class="panel-body">
											<label for="today"><input type="checkbox" name="today" id="today"><a href="">CV</a></label>
											<label for="7-days"><input type="checkbox" name="7-days" id="7-days"><a href="">Job Wanted Status</a></label>
											<label for="30-days"><input type="checkbox" name="30-days" id="30-days"><a href="" >Recommended Jobs</a></label>
										</div><!-- panel-body -->
									</div>
								</div><!-- panel -->

								<!-- panel -->
								<div class="panel panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<div class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="https://demo.themeregion.com/jobs-updated/job-list.html#accordion-two" class="collapsed" aria-expanded="false">
												<h4>Application Histroy <span class="pull-right"><i class="fa fa-plus"></i></span></h4>
											</a>
										</div>
									</div><!-- panel-heading -->

									<div id="accordion-two" class="panel-collapse collapse" aria-expanded="false">
										<!-- panel-body -->
										<div class="panel-body">
											<label for="today"><input type="checkbox" name="today" id="today"><a href="" > Interview Request</a></label>
											<label for="7-days"><input type="checkbox" name="7-days" id="7-days"><a href="">Favorite Jobs</a></label>
											<label for="30-days"><input type="checkbox" name="30-days" id="30-days"><a href="">Favorite Employee</a></label>
											<label for="30-days"><input type="checkbox" name="30-days" id="30-days"><a href="">Cover latters</a></label>
										</div><!-- panel-body -->
									</div>
								</div><!-- panel -->
								<!-- panel -->
								<div class="panel panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<div class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="https://demo.themeregion.com/jobs-updated/job-list.html#accordion-four" class="collapsed" aria-expanded="false">
												<h4>Account Setting<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
											</a>
										</div>
									</div><!-- panel-heading -->

									<div id="accordion-four" class="panel-collapse collapse" aria-expanded="false">
										<!-- panel-body -->
										<div class="panel-body">
											<label for="full-time"><input type="checkbox" name="full-time" id="full-time"><a href="">profiles</a></label>
											<label for="part-time"><input type="checkbox" name="part-time" id="part-time"><a href="">change Email</a></label>
											<label for="contractor"><input type="checkbox" name="contractor" id="contractor"><a href="">Change Language</a></label>
											<label for="intern"><input type="checkbox" name="intern" id="intern"><a href="">Change Password</a></label>
										</div><!-- panel-body -->
									</div>
								</div>

							 </div><!-- panel-group -->
						</div>
					</div><!-- accordion-->

					<!-- recommended-ads -->
					<div class="col-sm-10 col-md-9">
						<div class="section job-list-item">
							<div class="featured-top">
								<h4> CVs ads</h4>
								<div class="dropdown pull-right">
								</div>							
							</div><!-- featured-top -->
							<div class="job-ad-item">
								<div class="item-info">
										<form method="POST" enctype="multipart/form-data" id="register" action="{{url('ui/user_cv')}}">
											{{ csrf_field() }}
											<input type="hidden" value="{{Session::get('user_data_login')->id }}" name="user_id" />
											<div class="form-group  {{ $errors->has('cv_name') ? 'has-error' : '' }}" >
												<input id="cv_name" name="cv_name" type="text" class="form-control" placeholder="CVs Title">
												<span class="text-danger">{{ $errors->first('cv_name') }}</span>
											</div>
											<div {{ $errors->has('cv_files') ? 'has-error' : '' }} class="form-group">
												<input type="file" class="form-control" placeholder="logo" id="cv_files" name="cv_files">
												<span class="text-danger">{{ $errors->first('cv_files') }}</span>
											</div>
											<div class="form-group {{ $errors->has('cv_description') ? 'has-error' : '' }}">
												<textarea rows="4" class="form-control  " placeholder="Description **" name="cv_description"></textarea>
												<span class="text-danger">{{ $errors->first('cv_description') }}</span>
											</div>
											<button style="cursor: pointer" type="submit" class="btn">Registration</button>
										</form>
								</div><!-- item-info -->
							</div><!-- job-ad-item -->
						</div>
					</div><!-- recommended-ads -->
				</div>	
			</div>
		</div><!-- container -->
	</section><!-- main -->
	
	
	<section id="something-sell" class="clearfix parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2 class="title">Add your resume and let your next job find you.</h2>
					<h4>Post your Resume for free on <a href="https://demo.themeregion.com/jobs-updated/job-list.html#">Jobs.com</a></h4>
					<a href="https://demo.themeregion.com/jobs-updated/post-resume.html" class="btn btn-primary">Add Your Resume</a>
				</div>
			</div><!-- row -->
		</div><!-- contaioner -->
	</section><!-- something-sell -->
	
	<!-- footer -->
	<footer id="footer" class="clearfix">
		<!-- footer-top -->
		<section class="footer-top clearfix">
			<div class="container">
				<div class="row">
					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget">
							<h3>Quik Links</h3>
							<ul>
								<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#">About Us</a></li>
								<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#">Contact Us</a></li>
								<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#">Careers</a></li>
								<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#">All Cities</a></li>
								<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#">Help &amp; Support</a></li>
								<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#">Advertise With Us</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget">
							<h3>How to sell fast</h3>
							<ul>
								<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#">How to sell fast</a></li>
								<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#">Membership</a></li>
								<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#">Banner Advertising</a></li>
								<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#">Promote your ad</a></li>
								<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#">Jobs Delivers</a></li>
								<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#">FAQ</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget social-widget">
							<h3>Follow us on</h3>
							<ul>
								<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
								<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
								<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#"><i class="fa fa-google-plus-square"></i>Google+</a></li>
								<li><a href="https://demo.themeregion.com/jobs-updated/job-list.html#"><i class="fa fa-youtube-play"></i>youtube</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget news-letter">
							<h3>Newsletter</h3>
							<p>Jobs is Worldest leading Portal platform that brings!</p>
							<!-- form -->
							<form action="https://demo.themeregion.com/jobs-updated/job-list.html#">
								<input type="email" class="form-control" placeholder="Your email id">
								<button type="submit" class="btn btn-primary">Sign Up</button>
							</form><!-- form -->			
						</div>
					</div><!-- footer-widget -->
				</div><!-- row -->
			</div><!-- container -->
		</section><!-- footer-top -->

		<div class="footer-bottom clearfix text-center">
			<div class="container">
				<p>Copyright © <a href="https://demo.themeregion.com/jobs-updated/job-list.html#">Jobs</a> 2017. Developed by <a href="http://themeregion.com/">ThemeRegion</a></p>
			</div>
		</div><!-- footer-bottom -->
	</footer><!-- footer -->
	
	<!--/Preset Style Chooser--> 
	<div class="style-chooser">
		<div class="style-chooser-inner">
			<a href="https://demo.themeregion.com/jobs-updated/job-list.html#" class="toggler"><i class="fa fa-cog fa-spin"></i></a>
			<h4>Presets</h4>
			<ul class="preset-list clearfix">
				<li class="preset1 active" data-preset="1"><a href="https://demo.themeregion.com/jobs-updated/job-list.html#" data-color="preset1"></a></li>
				<li class="preset2" data-preset="2"><a href="https://demo.themeregion.com/jobs-updated/job-list.html#" data-color="preset2"></a></li>
				<li class="preset3" data-preset="3"><a href="https://demo.themeregion.com/jobs-updated/job-list.html#" data-color="preset3"></a></li>
				<li class="preset4" data-preset="4"><a href="https://demo.themeregion.com/jobs-updated/job-list.html#" data-color="preset4"></a></li>
			</ul>
		</div>
	</div>
	<!--/End:Preset Style Chooser-->
	
    <!-- JS -->
   @include('frontend.Kh-Works.partials.ui-script')
  
</body></html>