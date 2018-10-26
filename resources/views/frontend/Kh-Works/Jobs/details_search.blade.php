<!DOCTYPE html>
<!-- saved from url=(0052)https:http://localhost:8000/uiindex.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
    <meta name="description" content="">

    <title> 1 Jobs | Job Portal / Job Board HTML Template</title>

    {{--<style></style>--}}
    @include('frontend.Kh-Works.partials.ui-styles')
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
</head>
<body>
<!-- header -->
@include('frontend.Kh-Works.partials.nav-ui')

<div class="banner-job">
    <div class="banner-overlay"></div>
    <div class="container text-center">
        <h1 class="title">The Easiest Way to Get Your New Job</h1>
        <h3>We offer 12000 jobs vacation right now</h3>
        <div class="banner-form">
            <form method="GET" action="{{url('ui/search')}}">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input name="searchTerm" id="search" type="text" class="form-control" placeholder="Type your key word">
                <div class="dropdown category-dropdown">
                    <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Job Category</span> <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu category-change">
                        {{--@foreach($JobCategory as $JobCategorys)--}}
                            {{--<li><a href="#">{{$JobCategorys->name}}</a></li>--}}
                        {{--@endforeach--}}
                    </ul>
                </div><!-- category-change -->
                <button type="submit" class="btn btn-primary" value="Search">Search</button>
            </form>
        </div><!-- banner-form -->

        <ul class="banner-socail list-inline">
            <li><a href="https:http://localhost:8000/uiindex.html#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https:http://localhost:8000/uiindex.html#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https:http://localhost:8000/uiindex.html#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="https:http://localhost:8000/uiindex.html#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
        </ul><!-- banner-socail -->
    </div><!-- container -->
</div><!-- banner-section -->

<div class="page">
    <div class="container">
        <br/>
        <div class="section latest-jobs-ads">
            <div class="section-title tab-manu">
                <h4>Latest Jobs</h4>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"><a href="https:http://localhost:8000/uiindex.html#recent-jobs" data-toggle="tab">Recent Jobs</a></li>
                </ul>
            </div>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in" id="recent-jobs">

                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="https:http://localhost:8000/uijob-details.html"><img src="/img/2(1).png" alt="Image" class="img-responsive"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="http://localhost:8000/job" class="title">Graphics Designer</a> @ <a href="https:http://localhost:8000/uiindex.html#">AOK Security</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="https:http://localhost:8000/uiindex.html#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="https:http://localhost:8000/uiindex.html#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="https:http://localhost:8000/uiindex.html#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="https:http://localhost:8000/uiindex.html#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div><!-- ad-meta -->
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="https:http://localhost:8000/uiindex.html#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->

                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="https:http://localhost:8000/uijob-details.html"><img src="/img/1(1).png" alt="Image" class="img-responsive"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="http://localhost:8000/job" class="title">Project Manager</a> @ <a href="https:http://localhost:8000/uiindex.html#">Dominos Pizza</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="https:http://localhost:8000/uiindex.html#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="https:http://localhost:8000/uiindex.html#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="https:http://localhost:8000/uiindex.html#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="https:http://localhost:8000/uiindex.html#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div><!-- ad-meta -->
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="https:http://localhost:8000/uiindex.html#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->

                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="https:http://localhost:8000/uijob-details.html"><img src="/img/4(1).png" alt="Image" class="img-responsive"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="#" class="title">Human Resource Manager</a> @ <a href="https:http://localhost:8000/uiindex.html#">Dropbox Inc</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="https:http://localhost:8000/uiindex.html#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="https:http://localhost:8000/uiindex.html#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="https:http://localhost:8000/uiindex.html#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="https:http://localhost:8000/uiindex.html#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div><!-- ad-meta -->
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="https:http://localhost:8000/uiindex.html#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->
                </div><!-- tab-pane -->
                @php $i=1; @endphp
                @foreach($JobTitle as $JobTitles)
                    <div role="tabpanel" class="tab-pane fade in active" id="popular-jobs">
                        <div class="job-ad-item">
                            <div class="item-info">
                                <div class="item-image-box">
                                    <div class="item-image">
                                        <a href="https:http://localhost:8000/uijob-details.html"><img src="/img/1(1).png" alt="Image" class="img-responsive"></a>
                                    </div><!-- item-image -->
                                </div>

                                <div class="ad-info">
                                    <span><a target="_blank" href="{{url('ui/jobs/'.$JobTitles->id)}}" class="title">OK</a></span>
                                    {{--<div class="ad-meta">--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="https:http://localhost:8000/uiindex.html#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>--}}
                                            {{--<li><a href="https:http://localhost:8000/uiindex.html#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>--}}
                                            {{--<li><a href="https:http://localhost:8000/uiindex.html#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>--}}
                                            {{--<li><a href="https:http://localhost:8000/uiindex.html#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div><!-- ad-meta -->--}}
                                </div><!-- ad-info -->
                                <div class="apply_dev">
                                    <a id="btn{{$JobTitles->id}}"  href="{{Session::get('user_data_login')->id }}"  data-id="{{$JobTitles->id}}" class="btn btn-primary apply_id">Apply Now</a>
                                </div>
                            </div><!-- item-info -->
                        </div><!-- ad-item -->
                    </div><!-- tab-pane -->
                    @php $i++;@endphp
                @endforeach
                <div class="row">
                    <div class="pull-right">
                        <!-- Only for numbers -->
                        {{ $JobTitle->links() }}
                    </div>
                </div>
            </div><!-- tab-content -->
        </div><!-- trending ads -->

        <div class="ad-section text-center">
            <a href="https:http://localhost:8000/uiindex.html#"><img src="/img/3.jpg" alt="Image" class="img-responsive"></a>
        </div><!-- ad-section -->

        <div class="section workshop-traning">
            <div class="section-title">
                <h4>Workshop Traning</h4>
                <a href="https:http://localhost:8000/uiindex.html#" class="btn btn-primary">See all</a>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="workshop">
                        <img src="/img/5(1).png" alt="Image" class="img-responsive">
                        <h3><a href="https:http://localhost:8000/uiindex.html#">Business Process Management Training</a></h3>
                        <h4>Course Duration: 3 Month ( Sat, Mon, Fri)</h4>
                        <div class="workshop-price">
                            <h5>Course instructor: Kim Jon ley</h5>
                            <h5>Course Amount: $200</h5>
                        </div>
                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="https:http://localhost:8000/uiindex.html#">7 Jan 10:10 pm </a></span>
                            </div>
                            <div class="user-option pull-right">
                                <a href="https:http://localhost:8000/uiindex.html#"><i class="fa fa-map-marker"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="workshop">
                        <img src="/img/6(1).png" alt="Image" class="img-responsive">
                        <h3><a href="https:http://localhost:8000/uiindex.html#">Employee Motivation and Engagement</a></h3>
                        <h4>Course Duration: 3 Month ( Sat, Mon, Fri)</h4>
                        <div class="workshop-price">
                            <h5>Course instructor: Kim Jon ley</h5>
                            <h5>Course Amount: $200</h5>
                        </div>
                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="https:http://localhost:8000/uiindex.html#">7 Jan 10:10 pm </a></span>
                            </div>
                            <div class="user-option pull-right">
                                <a href="https:http://localhost:8000/uiindex.html#"><i class="fa fa-map-marker"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- workshop-traning -->

        <div class="section cta cta-two text-center">
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-cta">
                        <div class="cta-icon icon-jobs">
                            <img src="/img/31.png" alt="Icon" class="img-responsive">
                        </div><!-- cta-icon -->
                        <h3>3,412</h3>
                        <h4>Live Jobs</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div><!-- single-cta -->

                <div class="col-sm-4">
                    <div class="single-cta">
                        <!-- cta-icon -->
                        <div class="cta-icon icon-company">
                            <img src="/img/32.png" alt="Icon" class="img-responsive">
                        </div><!-- cta-icon -->
                        <h3>12,043</h3>
                        <h4>Total Company</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div><!-- single-cta -->

                <div class="col-sm-4">
                    <div class="single-cta">
                        <div class="cta-icon icon-candidate">
                            <img src="/img/33.png" alt="Icon" class="img-responsive">
                        </div><!-- cta-icon -->
                        <h3>5,798,298</h3>
                        <h4>Total Candidate</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div><!-- single-cta -->
            </div><!-- row -->
        </div><!-- cta -->

    </div><!-- conainer -->
</div><!-- page -->

<!-- download -->
<section id="download" class="clearfix parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Download on App Store</h2>
            </div>
        </div><!-- row -->

        <!-- row -->
        <div class="row">
            <!-- download-app -->
            <div class="col-sm-4">
                <a href="https:http://localhost:8000/uiindex.html#" class="download-app">
                    <img src="/img/16.png" alt="Image" class="img-responsive">
                    <span class="pull-left">
							<span>available on</span>
							<strong>Google Play</strong>
						</span>
                </a>
            </div><!-- download-app -->

            <!-- download-app -->
            <div class="col-sm-4">
                <a href="https:http://localhost:8000/uiindex.html#" class="download-app">
                    <img src="/img/17.png" alt="Image" class="img-responsive">
                    <span class="pull-left">
							<span>available on</span>
							<strong>App Store</strong>
						</span>
                </a>
            </div><!-- download-app -->

            <!-- download-app -->
            <div class="col-sm-4">
                <a href="https:http://localhost:8000/uiindex.html#" class="download-app">
                    <img src="/img/18.png" alt="Image" class="img-responsive">
                    <span class="pull-left">
							<span>available on</span>
							<strong>Windows Store</strong>
						</span>
                </a>
            </div><!-- download-app -->
        </div><!-- row -->
    </div><!-- contaioner -->
</section><!-- download -->

<!-- footer -->
@include('frontend.Kh-Works.partials.ui-footer')

<!--/Preset Style Chooser-->
<!--/End:Preset Style Chooser-->

<!-- JS -->
@include('frontend.Kh-Works.partials.ui-script')

</body></html>
<script>
    jQuery(document).ready(function(){
        jQuery('.apply_id').click(function(e){
            // alert('ok');
            let id = $(this).data("id");
            let user_id = $(this).attr('href');
            e.preventDefault();
            $.ajaxSetup(
                {
                    headers:
                        {
                            'X-CSRF-Token': $('input[name="_token"]').val()
                        }
                });
            $.ajax({
                type: "POST",
                url: '/ui/apply-job/'+id+'/user_id/'+user_id,
                // dataType: 'JSON',
                // data:{id:id,user_id : user_id},
                success: function(response) {
                    // alert(JSON.stringify(data));
                    $('#btn'+id).text('applied');
                    $('#btn'+id).attr('disabled', 'disabled');
                },
                error:function(){
                    alert('failure');
                }
            });
        });
    });

</script>