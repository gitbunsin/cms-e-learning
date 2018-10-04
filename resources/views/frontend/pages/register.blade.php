<!DOCTYPE html>
<!-- saved from url=(0053)https://demo.themeregion.com/jobs-updated/signup.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
    <meta name="description" content="">

    <title>Jobs | Job Portal / Job Board HTML Template</title>

    <!-- CSS -->
    @include('frontend.partials.ui-styles')
</head>
<body>
<!-- header -->
@include('frontend.partials.nav-ui')

<section class="job-bg user-page">
    <div class="container">
        <div class="row text-center">
            <!-- user-login -->
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="user-account job-user-account">
                    <h2>Create An Account</h2>
                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li role="presentation" ><a href="#find-job" aria-controls="find-job" role="tab" data-toggle="tab">Find A Job</a></li>
                        <li role="presentation" class="active"><a href="#post-job" aria-controls="post-job" role="tab" data-toggle="tab">Post A Job</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane" id="find-job">
                            <form action="">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Id">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Mobile Number">
                                </div>
                                <!-- select -->
                                {{--<select class="form-control">--}}
                                {{--<option value="#">Select City</option>--}}
                                {{--<option value="#">London UK</option>--}}
                                {{--<option value="#">Newyork, USA</option>--}}
                                {{--<option value="#">Seoul, Korea</option>--}}
                                {{--<option value="#">Beijing, China</option>--}}
                                {{--</select><!-- select -->--}}

                                <div class="checkbox">
                                    <label class="pull-left checked" for="signing"><input type="checkbox" name="signing" id="signing"> By signing up for an account you agree to our Terms and Conditions </label>
                                </div><!-- checkbox -->
                                <button type="submit" class="btn">Registration</button>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane active" id="post-job">
                            <form method="POST" action="{{url('registers')}}">
                                {{ csrf_field() }}
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <input type="text" class="form-control" placeholder="Company Name" id="name" name="name" >
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <input type="email" class="form-control" placeholder="Email Id" id="email" name="email">
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                    <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                </div>
                                <div class="form-group {{ $errors->has('confirm_password') ? 'has-error' : '' }}">
                                    <input type="password" class="form-control" placeholder="Confirm Password" id="confirm_password"
                                           name="confirm_password">
                                    <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                </div>
                                {{--<div class="form-group">--}}
                                {{--<input type="text" class="form-control" placeholder="Contact Number">--}}
                                {{--</div>--}}
                                <div class="checkbox">
                                    <label class="pull-left" for="signing-2"><input type="checkbox" name="signing-2" id="signing-2">By signing up for an account you agree to our Terms and Conditions</label>
                                </div><!-- checkbox -->
                                <button style="cursor: pointer" type="submit" class="btn">Registration</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- user-login -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- signup-page -->

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
                            <li><a href="https://demo.themeregion.com/jobs-updated/signup.html#">About Us</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/signup.html#">Contact Us</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/signup.html#">Careers</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/signup.html#">All Cities</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/signup.html#">Help &amp; Support</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/signup.html#">Advertise With Us</a></li>
                        </ul>
                    </div>
                </div><!-- footer-widget -->

                <!-- footer-widget -->
                <div class="col-sm-3">
                    <div class="footer-widget">
                        <h3>How to sell fast</h3>
                        <ul>
                            <li><a href="https://demo.themeregion.com/jobs-updated/signup.html#">How to sell fast</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/signup.html#">Membership</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/signup.html#">Banner Advertising</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/signup.html#">Promote your ad</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/signup.html#">Jobs Delivers</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/signup.html#">FAQ</a></li>
                        </ul>
                    </div>
                </div><!-- footer-widget -->

                <!-- footer-widget -->
                <div class="col-sm-3">
                    <div class="footer-widget social-widget">
                        <h3>Follow us on</h3>
                        <ul>
                            <li><a href="https://demo.themeregion.com/jobs-updated/signup.html#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/signup.html#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/signup.html#"><i class="fa fa-google-plus-square"></i>Google+</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/signup.html#"><i class="fa fa-youtube-play"></i>youtube</a></li>
                        </ul>
                    </div>
                </div><!-- footer-widget -->

                <!-- footer-widget -->
                <div class="col-sm-3">
                    <div class="footer-widget news-letter">
                        <h3>Newsletter</h3>
                        <p>Jobs is Worldest leading Portal platform that brings!</p>
                        <!-- form -->
                        <form action="https://demo.themeregion.com/jobs-updated/signup.html#">
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
            <p>Copyright © <a href="https://demo.themeregion.com/jobs-updated/signup.html#">Jobs</a> 2017. Developed by <a href="http://themeregion.com/">ThemeRegion</a></p>
        </div>
    </div><!-- footer-bottom -->
</footer><!-- footer -->

<!--/Preset Style Chooser-->
<div class="style-chooser">
    <div class="style-chooser-inner">
        <a href="https://demo.themeregion.com/jobs-updated/signup.html#" class="toggler"><i class="fa fa-cog fa-spin"></i></a>
        <h4>Presets</h4>
        <ul class="preset-list clearfix">
            <li class="preset1 active" data-preset="1"><a href="https://demo.themeregion.com/jobs-updated/signup.html#" data-color="preset1"></a></li>
            <li class="preset2" data-preset="2"><a href="https://demo.themeregion.com/jobs-updated/signup.html#" data-color="preset2"></a></li>
            <li class="preset3" data-preset="3"><a href="https://demo.themeregion.com/jobs-updated/signup.html#" data-color="preset3"></a></li>
            <li class="preset4" data-preset="4"><a href="https://demo.themeregion.com/jobs-updated/signup.html#" data-color="preset4"></a></li>
        </ul>
    </div>
</div>
<!--/End:Preset Style Chooser-->

<!-- JS -->
@include('frontend.partials.ui-script')

</body></html>