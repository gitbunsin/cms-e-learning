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
                <a class="navbar-brand" href="{{url('/kh-works')}}"><img class="img-responsive" src="/img/logo-job.png" alt="Logo"></a>
            </div>
            <!-- /navbar-header -->

            <div class="navbar-left">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{url('/kh-works')}}">Home</a></li>
                        <li><a href="http://localhost:8000/ui/lists">Job list</a></li>
                        <li><a href="#">Resume</a></li>
                        <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Pages<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Profile</a></li>
                                <li><a href="">Submit Resume</a></li>
                                <li><a href="">Job Post</a></li>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Contact Us</a></li>
                                <li><a href="{{url('kh-works/policy')}}">Privacy Policy</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- navbar-left -->

            <!-- nav-right -->
            <div class="nav-right">
                <ul class="sign-in">
                    <li><i class="fa fa-user"></i></li>
                    {{--@if(Session::get('user_data_login'))--}}
                        {{--<li>--}}
                            {{--<a href="#">{{ Session::get('user_data_login')->full_name }}</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="{{url('kh-works/logout')}}"> Logout</a>--}}
                        {{--</li>--}}
                    {{--@else--}}
                        <li>
                            <a href="{{url('kh-works/login/create')}}">Sign In</a>
                        </li>
                        <li>
                            <a href="{{ url('kh-works/registers/create') }}">Register</a>
                        </li>
                    {{--@endif--}}
                </ul><!-- sign-in -->
                {{--<a href="http://localhost:8000/posts" class="btn">Post Your Job</a>--}}
            </div>
            <!-- nav-right -->
        </div><!-- container -->
    </nav><!-- navbar -->
</header><!-- header -->