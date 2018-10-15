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
                            <form method="POST" enctype="multipart/form-data" id="register" action="{{url('RegisterEmployee')}}">
                                {{ csrf_field() }}
                                <div class="form-group  {{ $errors->has('employee_name') ? 'has-error' : '' }}" >
                                    <input id="employee_name" name="employee_name" type="text" class="form-control" placeholder="employee name">
                                    <span class="text-danger">{{ $errors->first('employee_name') }}</span>
                                </div>
                                <div class="form-group  {{ $errors->has('email_emp') ? 'has-error' : '' }}">
                                    <input id="email_emp" name="email_emp" type="email" class="form-control" placeholder="Email Id">
                                    <span class="text-danger">{{ $errors->first('email_emp') }}</span>
                                </div>

                                <select class="form-control">
                                    <option value="#">Gender*</option>
                                    <option value="#">London UK</option>
                                    <option value="#">Newyork, USA</option>
                                    <option value="#">Seoul, Korea</option>
                                    <option value="#">Beijing, China</option>
                                </select>
                                <div class="form-group  {{ $errors->has('mobile_number') ? 'has-error' : '' }}">
                                    <input id="mobile_number" name="mobile_number" type="text" class="form-control" placeholder="Url">
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>

                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <textarea rows="4" class="form-control  " placeholder="Postal Address**" name="Company Profile*"></textarea>
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                                <select class="form-control">
                                    <option value="#">Current Resident City*</option>
                                    <option value="#">London UK</option>
                                    <option value="#">Newyork, USA</option>
                                    <option value="#">Seoul, Korea</option>
                                    <option value="#">Beijing, China</option>
                                </select>

                                <div class="form-group {{ $errors->has('confirm_password') ? 'has-error' : '' }}">
                                    <input type="password" class="form-control" placeholder="phone" id="confirm_password"
                                           name="confirm_password">
                                    <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                </div>
                                <div class="form-group {{ $errors->has('confirm_password') ? 'has-error' : '' }}">
                                    <input type="password" class="form-control" placeholder="Residance Phone*" id="confirm_password"
                                           name="confirm_password">
                                    <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                </div>
                                <div class="form-group {{ $errors->has('confirm_password') ? 'has-error' : '' }}">
                                    <input type="password" class="form-control" placeholder="Mobile*" id="confirm_password"
                                           name="confirm_password">
                                    <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                </div>
                                <div class="form-group  {{ $errors->has('password_emp') ? 'has-error' : '' }}">
                                    <input id="password_emp" name="password_emp" type="password" class="form-control" placeholder="Password">
                                    <span class="text-danger">{{ $errors->first('password_emp') }}</span>
                                </div>
                                <div class="form-group  {{ $errors->has('confirm_password_emp') ? 'has-error' : '' }}">
                                    <input id="confirm_password_emp" name="confirm_password_emp" type="password" class="form-control" placeholder="Confirm Password">
                                    <span class="text-danger">{{ $errors->first('confirm_password_emp') }}</span>
                                </div>

                                <div class="checkbox">
                                    <label class="pull-left checked" for="signing"><input type="checkbox" name="signing" id="signing"> By signing up for an account you agree to our Terms and Conditions </label>
                                </div><!-- checkbox -->
                                <button type="submit" class="btn">Registration</button>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane active" id="post-job">
                            <form enctype="multipart/form-data" id="validate_register" method="POST" action="{{url('registers')}}">
                                {{ csrf_field() }}
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <input type="text" class="form-control" placeholder="Company Name" id="name" name="name" >
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <input type="email" class="form-control" placeholder="Email Id" id="email" name="email">
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <input type="email" class="form-control" placeholder="Alternate Email" id="email" name="email">
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                                <div class="form-group {{ $errors->has('Postal_Address') ? 'has-error' : '' }}">
                                    <textarea rows="4" class="form-control  " placeholder="Postal Address*" name="Postal_Address*"></textarea>
                                    <span class="text-danger">{{ $errors->first('Postal_Address') }}</span>
                                </div>


                                <select name="city" class="form-control">
                                    <option value="#">Select City</option>
                                    <option value="#">London UK</option>
                                    <option value="#">Newyork, USA</option>
                                    <option value="#">Seoul, Korea</option>
                                    <option value="#">Beijing, China</option>
                                </select>
                                <div class="form-group  {{ $errors->has('Url') ? 'has-error' : '' }}">
                                    <input id="mobile_number" name="mobile_number" type="text" class="form-control" placeholder="Url">
                                    <span class="text-danger">{{ $errors->first('Url') }}</span>
                                </div>
                                <select name="main_business" class="form-control">
                                    <option value="#">Main Business Area*</option>
                                    <option value="#">London UK</option>
                                    <option value="#">Newyork, USA</option>
                                    <option value="#">Seoul, Korea</option>
                                    <option value="#">Beijing, China</option>
                                </select>

                                <div class="form-group {{ $errors->has('Company_Profile') ? 'has-error' : '' }}">
                                    <textarea  rows="4" class="form-control" placeholder="Company Profile*" name="Company_Profile"></textarea>
                                    <span class="text-danger">{{ $errors->first('Company_Profile') }}</span>
                                </div>
                                <div class="form-group {{ $errors->has('confirm_password') ? 'has-error' : '' }}">
                                    <input type="password" class="form-control" placeholder="phone" id="confirm_password"
                                           name="confirm_password">
                                    <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                </div>
                                <div class="form-group {{ $errors->has('fax') ? 'has-error' : '' }}">
                                    <input type="password" class="form-control" placeholder="fax" id="confirm_password"
                                           name="confirm_password">
                                    <span class="text-danger">{{ $errors->first('fax') }}</span>
                                </div>
                                <div class="form-group {{ $errors->has('confirm_password') ? 'has-error' : '' }}">
                                    <input type="password" class="form-control" placeholder="Mobile" id="confirm_password"
                                           name="confirm_password">
                                    <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                </div>
                                <div class="form-group {{ $errors->has('logo') ? 'has-error' : '' }}">
                                    <input type="file" class="form-control" placeholder="logo" id="file" name="file">
                                    <span class="text-danger">{{ $errors->first('logo') }}</span>
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
@include('frontend.partials.ui-footer')

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

</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
    if (!window.jQuery.ui) {
        document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
    }
</script>

<script type="text/javascript">

    // DO NOT REMOVE : GLOBAL FUNCTIONS!

    $(document).ready(function() {

        pageSetUp();
        $('#startdate').datepicker({
            // format: 'DD - dd MM yyyy'
        });
        var $loginForm = $("#validate_register").validate({
            // Rules for form validation
            rules : {
                job_title : {
                    required : true
                },
                job_description : {
                    required : true,
                },
                note:{
                    required:true
                }
            },

            // Messages for form validation
            messages : {
                job_title : {
                    required : 'Please enter Job_title'
                },
                job_description : {
                    required: 'Please enter your job desciption'
                },
                note:{
                    required:'please enter noted of job description'
                }
            },
            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });
    });

</script>
</html>