<header id="header" class="clearfix">
    <!-- navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost:8000/ui"><img class="img-responsive" src="/img/logo-job.png" alt="Logo"></a>
            </div>
            <!-- /navbar-header -->

            <div class="navbar-left">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="http://localhost:8000/ui">Home</a></li>
                        <li><a href="http://localhost:8000/ui/lists">Job list</a></li>
                        <li><a href="http://localhost:8000/uiresume.html">Resume</a></li>
                        <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Pages<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://localhost:8000/uiprofile.html">Profile</a></li>
                                <li><a href="http://localhost:8000/uipost-resume.html">Submit Resume</a></li>
                                <li><a href="http://localhost:8000/uipost.html">Job Post</a></li>
                                <li><a href="http://localhost:8000/uiedit-resume.html">About Us</a></li>
                                <li><a href="http://localhost:8000/uiprofile-details.html">Contact Us</a></li>
                                <li><a href="http://localhost:8000/policy">Privacy Policy</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- navbar-left -->

            <!-- nav-right -->
            <div class="nav-right">
                <ul class="sign-in">
                    <li><i class="fa fa-user"></i></li>
                    <li><a href="http://localhost:8000/ui/singin">Sign In</a></li>
                    <li><a href="{{ url('ui/registers/create') }}">Register</a></li>
                </ul><!-- sign-in -->

                <a href="http://localhost:8000/posts" class="btn">Post Your Job</a>
            </div>
            <!-- nav-right -->
        </div><!-- container -->
    </nav><!-- navbar -->
</header><!-- header -->