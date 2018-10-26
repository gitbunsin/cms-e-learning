<!DOCTYPE html>
<!-- saved from url=(0058)https://demo.themeregion.com/jobs-updated/job-details.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
    <meta name="description" content="">

    <title>Jobs | Job Portal / Job Board HTML Template</title>

    <!-- CSS -->
    <!-- icons -->
@include('frontend.Kh-Works.partials.ui-styles')
<!-- Template Developed By ThemeRegion -->
</head>
<body>
<!-- header -->
@include('frontend.Kh-Works.partials.nav-ui')

<section class="job-bg page job-details-page">
    <div class="container">
        <div class="breadcrumb-section">
            <ol class="breadcrumb">
                <li><a href="https://demo.themeregion.com/jobs-updated/index.html">Home</a></li>
                <li><a href="https://demo.themeregion.com/jobs-updated/job-list.html">Engineer/Architects</a></li>
                <li>UI &amp; UX Designer</li>
            </ol><!-- breadcrumb -->
            <h2 class="title">Creative &amp; Design</h2>
        </div><!-- breadcrumb -->

        <div class="job-details">
            <div class="section job-ad-item">
                <div class="item-info">
                    <div class="item-image-box">
                        <div class="item-image">
                            <img src="/img/4.png" alt="Image" class="img-responsive">
                        </div><!-- item-image -->
                    </div>

                    <div class="ad-info">
                        <span><span><a href="#" class="title">{{$JobDetail->job_title}}</a></span> @ <a href="https://demo.themeregion.com/jobs-updated/job-details.html#"> Dropbox Inc</a></span>
                        <div class="ad-meta">
                            <ul>
                                <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US</a></li>
                                <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                <li><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</li>
                                <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                <li><i class="fa fa-hourglass-start" aria-hidden="true"></i>Application Deadline : Jan 10, 2017</li>
                            </ul>
                        </div><!-- ad-meta -->
                    </div><!-- ad-info -->
                </div><!-- item-info -->
                <div class="social-media">
                    <div class="button">
                        <a href="https://demo.themeregion.com/jobs-updated/job-details.html#" class="btn btn-primary"><i class="fa fa-briefcase" aria-hidden="true"></i>Apply For This Job</a>
                        <a href="https://demo.themeregion.com/jobs-updated/job-details.html#" class="btn btn-primary bookmark"><i class="fa fa-bookmark-o" aria-hidden="true"></i>Bookmark</a>
                    </div>
                    <ul class="share-social">
                        <li>Share this ad</li>
                        <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                        <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#"><i class="fa fa-tumblr-square" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div><!-- job-ad-item -->

            <div class="job-details-info">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="section job-description">
                            <div class="description-info">
                                <h1>Job Description</h1>
                                <p>{{$JobDetail->jobdesc}}</p>
                            </div>
                            <div class="responsibilities">
                                <h1>Key Responsibilities:</h1>
                                <p>{{$JobDetail->JobResponsible}} </p>
                            </div>
                            <div class="requirements">
                                <h1>Job Requirements</h1>
                                <ul>
                                    <li>{{$JobDetail->jobreqired}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="section job-short-info">
                            <h1>Short Info</h1>
                            <ul>
                                <li><span class="icon"><i class="fa fa-bolt" aria-hidden="true"></i></span>Posting Date: {{$JobDetail->postingDate}}</li>
                                <li><span class="icon"><i class="fa fa-bolt" aria-hidden="true"></i></span>Posting Date: {{$JobDetail->ClosingDate}}</li>
                                <li><span class="icon"><i class="fa fa-user-plus" aria-hidden="true"></i></span> Job poster: <a href="#">Lance Ladaga</a></li>
                                <li><span class="icon"><i class="fa fa-industry" aria-hidden="true"></i></span>Industry: <a href="#">Marketing and Advertising</a></li>
                                <li><span class="icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>Experience: <a href="#">Entry level</a></li>
                                <li><span class="icon"><i class="fa fa-key" aria-hidden="true"></i></span>Job function: Advertising,Design, Art/Creative</li>
                            </ul>
                        </div>
                        <div class="section company-info">
                            <h1>Company Info</h1>
                            <ul>
                                <li>Compnay Name: <a href=""><strong>{{$JobDetail->CompanyName}}</strong></a></li>
                                <li>Address: London, United Kingdom</li>
                                <li>Compnay SIze:  2k Employee</li>
                                <li>Industry: <a href="#">Technology</a></li>
                                <li>Phone: {{$JobDetail->phone}}</li>
                                <li>Email: <a href="#">{{$JobDetail->email}}</a></li>
                                <li>Website: <a href="#">www.Reamea.com</a></li>
                            </ul>
                            <ul class="share-social">
                                <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- job-details-info -->
        </div><!-- job-details -->
    </div><!-- container -->
</section><!-- job-details-page -->

<section id="something-sell" class="clearfix parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="title">Add your resume and let your next job find you.</h2>
                <h4>Post your Resume for free on <a href="https://demo.themeregion.com/jobs-updated/job-details.html#">Jobs.com</a></h4>
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
                            <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#">About Us</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#">Contact Us</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#">Careers</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#">All Cities</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#">Help &amp; Support</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#">Advertise With Us</a></li>
                        </ul>
                    </div>
                </div><!-- footer-widget -->

                <!-- footer-widget -->
                <div class="col-sm-3">
                    <div class="footer-widget">
                        <h3>How to sell fast</h3>
                        <ul>
                            <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#">How to sell fast</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#">Membership</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#">Banner Advertising</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#">Promote your ad</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#">Jobs Delivers</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#">FAQ</a></li>
                        </ul>
                    </div>
                </div><!-- footer-widget -->

                <!-- footer-widget -->
                <div class="col-sm-3">
                    <div class="footer-widget social-widget">
                        <h3>Follow us on</h3>
                        <ul>
                            <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#"><i class="fa fa-google-plus-square"></i>Google+</a></li>
                            <li><a href="https://demo.themeregion.com/jobs-updated/job-details.html#"><i class="fa fa-youtube-play"></i>youtube</a></li>
                        </ul>
                    </div>
                </div><!-- footer-widget -->

                <!-- footer-widget -->
                <div class="col-sm-3">
                    <div class="footer-widget news-letter">
                        <h3>Newsletter</h3>
                        <p>Jobs is Worldest leading Portal platform that brings!</p>
                        <!-- form -->
                        <form action="https://demo.themeregion.com/jobs-updated/job-details.html#">
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
            <p>Copyright © <a href="https://demo.themeregion.com/jobs-updated/job-details.html#">Jobs</a> 2017. Developed by <a href="http://themeregion.com/">ThemeRegion</a></p>
        </div>
    </div><!-- footer-bottom -->
</footer><!-- footer -->

<!--/Preset Style Chooser-->
<div class="style-chooser">
    <div class="style-chooser-inner">
        <a href="https://demo.themeregion.com/jobs-updated/job-details.html#" class="toggler"><i class="fa fa-cog fa-spin"></i></a>
        <h4>Presets</h4>
        <ul class="preset-list clearfix">
            <li class="preset1 active" data-preset="1"><a href="https://demo.themeregion.com/jobs-updated/job-details.html#" data-color="preset1"></a></li>
            <li class="preset2" data-preset="2"><a href="https://demo.themeregion.com/jobs-updated/job-details.html#" data-color="preset2"></a></li>
            <li class="preset3" data-preset="3"><a href="https://demo.themeregion.com/jobs-updated/job-details.html#" data-color="preset3"></a></li>
            <li class="preset4" data-preset="4"><a href="https://demo.themeregion.com/jobs-updated/job-details.html#" data-color="preset4"></a></li>
        </ul>
    </div>
</div>
<!--/End:Preset Style Chooser-->

<!-- JS -->
@include('frontend.Kh-Works.partials.ui-script')

</body></html>