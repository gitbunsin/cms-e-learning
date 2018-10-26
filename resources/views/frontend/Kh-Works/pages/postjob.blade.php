<!DOCTYPE html>
<!-- saved from url=(0051)https://demo.themeregion.com/jobs-updated/post.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
    <meta name="description" content="">

    <title>Jobs | Job Portal / Job Board HTML Template</title>

    <!-- CSS -->
   @include('frontend.Kh-Works.partials.ui-styles')
</head>
<body>
<!-- header -->
@include('frontend.Kh-Works.partials.nav-ui')

<section class=" job-bg ad-details-page">
    <div class="container">
        <div class="breadcrumb-section">
            <!-- breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="https://demo.themeregion.com/jobs-updated/index.html">Home</a></li>
                <li>Job Post </li>
            </ol><!-- breadcrumb -->
            <h2 class="title">Post Your Job</h2>
        </div><!-- banner -->

        <div class="job-postdetails">
            <div class="row">
                <div class="col-md-8">
                    <form action="https://demo.themeregion.com/jobs-updated/post.html#">
                        <fieldset>
                            <div class="section postdetails">
                                <h4>Post Your Job<span class="pull-right">* Mandatory Fields</span></h4>
                                <div class="row form-group add-title">
                                    <label class="col-sm-3 label-title">Job Category</label>
                                    <div class="col-sm-9">
                                        <div class="dropdown category-dropdown">
                                            <a data-toggle="dropdown" href="https://demo.themeregion.com/jobs-updated/post.html#" aria-expanded="false"><span class="change-text">Select a category</span> <i class="fa fa-angle-down pull-right"></i></a>
                                            <ul class="dropdown-menu category-change">
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Select a category</a></li>
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Software Engineer</a></li>
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Program Development</a></li>
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Project Manager</a></li>
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Graphics Designer</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3">Job Type<span class="required">*</span></label>
                                    <div class="col-sm-9 user-type">
                                        <input type="radio" name="sellType" value="full-time" id="full-time"> <label for="full-time">Full Time</label>
                                        <input type="radio" name="sellType" value="part-time" id="part-time"> <label for="part-time">Part Time</label>
                                        <input type="radio" name="sellType" value="freelance" id="freelance"> <label for="freelance">Freelance</label>
                                        <input type="radio" name="sellType" value="contract" id="contract"> <label for="contract">Contract</label>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Title for your jonb<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="ex, Human Resource Manager">
                                    </div>
                                </div>
                                <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title">Description<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="textarea" placeholder="Write few lines about your jobs" rows="8"></textarea>
                                    </div>
                                </div>
                                <div class="row characters">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <p>5000 characters left</p>
                                    </div>
                                </div>
                                <div class="row form-group add-title location">
                                    <label class="col-sm-3 label-title">Location<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <div class="dropdown category-dropdown pull-left">
                                            <a data-toggle="dropdown" href="https://demo.themeregion.com/jobs-updated/post.html#" aria-expanded="false"><span class="change-text">Country</span> <i class="fa fa-angle-down pull-right"></i></a>
                                            <ul class="dropdown-menu category-change">
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Argentina</a></li>
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Australia</a></li>
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Belgium</a></li>
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Brazil</a></li>
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Cambodia</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown category-dropdown pull-right">
                                            <a data-toggle="dropdown" href="https://demo.themeregion.com/jobs-updated/post.html#" aria-expanded="false"><span class="change-text">State</span> <i class="fa fa-angle-down pull-right"></i></a>
                                            <ul class="dropdown-menu category-change">
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">State 1</a></li>
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">State 2</a></li>
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">State 3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group select-price">
                                    <label class="col-sm-3 label-title">Salary<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <label>$USD</label>
                                        <input type="text" class="form-control" placeholder="Min">
                                        <span>-</span>
                                        <input type="text" class="form-control" placeholder="Max">
                                        <input type="radio" name="price" value="negotiable" id="negotiable">
                                        <label for="negotiable">Negotiable </label>
                                    </div>
                                </div>
                                <div class="row form-group add-title">
                                    <label class="col-sm-3 label-title">Salary Type<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <div class="dropdown category-dropdown">
                                            <a data-toggle="dropdown" href="https://demo.themeregion.com/jobs-updated/post.html#" aria-expanded="false"><span class="change-text">Per Hour</span> <i class="fa fa-angle-down pull-right"></i></a>
                                            <ul class="dropdown-menu category-change">
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Per Hour</a></li>
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Daily</a></li>
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Monthly</a></li>
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Yearly</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group add-title">
                                    <label class="col-sm-3 label-title">Exprience<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <div class="dropdown category-dropdown">
                                            <a data-toggle="dropdown" href="https://demo.themeregion.com/jobs-updated/post.html#" aria-expanded="false"><span class="change-text">Mid Level</span> <i class="fa fa-angle-down pull-right"></i></a>
                                            <ul class="dropdown-menu category-change">
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Entry Level</a></li>
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Mid Level</a></li>
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Mid-Senior Level</a></li>
                                                <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Top Level</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group brand-name">
                                    <label class="col-sm-3 label-title">Job Function<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="human, reosurce, job, hrm">
                                    </div>
                                </div>
                            </div><!-- postdetails -->

                            <div class="section company-information">
                                <h4>Company Information</h4>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Industry<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control" placeholder="Marketing and Advertising">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Company Name<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control" placeholder="ex, Jhon Doe">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Email ID</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control" placeholder="ex, jhondoe@mail.com">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Mobile Number<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mobileNumber" class="form-control" placeholder="ex, +912457895">
                                    </div>
                                </div>
                                <div class="row form-group address">
                                    <label class="col-sm-3 label-title">Address<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="address" class="form-control" placeholder="ex, alekdera House, coprotec, usa">
                                    </div>
                                </div>
                            </div><!-- section -->

                            <div class="section">
                                <h4>Make Your Post Premium</h4>
                                <p>More replies means more interested buyers. With lots of interested buyers, you have a better chance of selling for the price that you want.<a href="https://demo.themeregion.com/jobs-updated/post.html#">Learn more</a></p>
                                <ul class="premium-options">
                                    <li class="premium">
                                        <input type="radio" name="premiumOption" value="day-one" id="day-one">
                                        <label for="day-one">Regular Post</label>
                                        <span>$20.00</span>
                                    </li>
                                    <li class="premium">
                                        <input type="radio" name="premiumOption" value="day-two" id="day-two">
                                        <label for="day-two">Regular Post</label>
                                        <span>$30.00</span>
                                    </li>
                                    <li class="premium">
                                        <input type="radio" name="premiumOption" value="day-three" id="day-three">
                                        <label for="day-three">Top Post for 7 days</label>
                                        <span>$50.00</span>
                                    </li>
                                    <li class="premium">
                                        <input type="radio" name="premiumOption" value="day-four" id="day-four">
                                        <label for="day-four">Daily Bump Up for 7 days</label>
                                        <span>$100.00</span>
                                    </li>
                                </ul>
                            </div><!-- section -->

                            <div class="checkbox section agreement">
                                <label for="send">
                                    <input type="checkbox" name="send" id="send">
                                    You agree to our <a href="https://demo.themeregion.com/jobs-updated/post.html#">Terms of Use</a> and <a href="https://demo.themeregion.com/jobs-updated/post.html#">Privacy Policy</a> and acknowledge that you are the rightful owner of this item and using Jobs to find a genuine buyer.
                                </label>
                                <button type="submit" class="btn btn-primary">Post Your Job</button>
                            </div><!-- section -->

                        </fieldset>
                    </form><!-- form -->
                </div>


                <!-- quick-rules -->
                <div class="col-md-4">
                    <div class="section quick-rules">
                        <h4>Quick rules</h4>
                        <p class="lead">Posting an ad on <a href="https://demo.themeregion.com/jobs-updated/post.html#">jobs.com</a> is free! However, all ads must follow our rules:</p>

                        <ul>
                            <li>Make sure you post in the correct category.</li>
                            <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                            <li>Do not upload pictures with watermarks.</li>
                            <li>Do not post ads containing multiple items unless it's a package deal.</li>
                            <li>Do not put your email or phone numbers in the title or description.</li>
                            <li>Make sure you post in the correct category.</li>
                            <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                            <li>Do not upload pictures with watermarks.</li>
                            <li>Do not post ads containing multiple items unless it's a package deal.</li>
                        </ul>
                    </div>
                </div><!-- quick-rules -->
            </div><!-- photos-ad -->
        </div>
    </div><!-- container -->
</section><!-- main -->

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
                            <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">About Us</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Contact Us</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Careers</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">All Cities</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Help &amp; Support</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Advertise With Us</a></li>
                        </ul>
                    </div>
                </div><!-- footer-widget -->

                <!-- footer-widget -->
                <div class="col-sm-3">
                    <div class="footer-widget">
                        <h3>How to sell fast</h3>
                        <ul>
                            <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">How to sell fast</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Membership</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Banner Advertising</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Promote your ad</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">Jobs Delivers</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/post.html#">FAQ</a></li>
                        </ul>
                    </div>
                </div><!-- footer-widget -->

                <!-- footer-widget -->
                <div class="col-sm-3">
                    <div class="footer-widget social-widget">
                        <h3>Follow us on</h3>
                        <ul>
                            <li><a href="https://demo.themeregion.com/jobs-updated/post.html#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/post.html#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/post.html#"><i class="fa fa-google-plus-square"></i>Google+</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/post.html#"><i class="fa fa-youtube-play"></i>youtube</a></li>
                        </ul>
                    </div>
                </div><!-- footer-widget -->

                <!-- footer-widget -->
                <div class="col-sm-3">
                    <div class="footer-widget news-letter">
                        <h3>Newsletter</h3>
                        <p>Jobs is Worldest leading Portal platform that brings!</p>
                        <!-- form -->
                        <form action="https://demo.themeregion.com/jobs-updated/post.html#">
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
            <p>Copyright © <a href="https://demo.themeregion.com/jobs-updated/post.html#">Jobs</a> 2017. Developed by <a href="http://themeregion.com/">ThemeRegion</a></p>
        </div>
    </div><!-- footer-bottom -->
</footer><!-- footer -->

<!--/Preset Style Chooser-->
<div class="style-chooser">
    <div class="style-chooser-inner">
        <a href="https://demo.themeregion.com/jobs-updated/post.html#" class="toggler"><i class="fa fa-cog fa-spin"></i></a>
        <h4>Presets</h4>
        <ul class="preset-list clearfix">
            <li class="preset1 active" data-preset="1"><a href="https://demo.themeregion.com/jobs-updated/post.html#" data-color="preset1"></a></li>
            <li class="preset2" data-preset="2"><a href="https://demo.themeregion.com/jobs-updated/post.html#" data-color="preset2"></a></li>
            <li class="preset3" data-preset="3"><a href="https://demo.themeregion.com/jobs-updated/post.html#" data-color="preset3"></a></li>
            <li class="preset4" data-preset="4"><a href="https://demo.themeregion.com/jobs-updated/post.html#" data-color="preset4"></a></li>
        </ul>
    </div>
</div>
<!--/End:Preset Style Chooser-->

<!-- JS -->
@include('frontend.Kh-Works.partials.ui-script')

</body></html>