@extends('backend.layouts.cms-layouts')
@section('content')
    <section id="widget-grid" class="">

        <!-- row -->
        <div class="row">

            <!-- NEW WIDGET START -->
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">

                    <header>
                        <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                        <h2>Add New Employee</h2>

                    </header>

                    <!-- widget div-->
                    <div>

                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->

                        </div>
                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body no-padding">

                            <form id="validate_vacancy" method="POST" enctype="multipart/form-data" action="{{url('administration/employee ')}}" class="smart-form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <fieldset>
                                    <div class="row">
                                        <section class="col col-4">
                                            <label class="label">First Name</label>
                                            <label class="input">
                                                <input type="text" name="last_name" id="first_name">
                                            </label>
                                        </section>
                                        <section class="col col-4">
                                            <label class="label">Middle Name</label>
                                            <label class="input">
                                                <input type="text" name="middle_name" id="middle_name" maxlength="10">
                                            </label>
                                        </section>
                                        <section class="col col-4">
                                            <label class="label">Last Name</label>
                                            <label class="input">
                                                <input type="text" name="last_name" id="last_name" maxlength="10">
                                            </label>
                                        </section>
                                    </div>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label"> Employee Id</label>
                                            <label class="input">
                                                <input type="text" name="last_name" id="last_name" maxlength="10">
                                            </label>
                                            <div class="note">
                                                <strong>Note:</strong> height of the textarea depends on the rows attribute.
                                            </div>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">Location </label>
                                            <label class="input">
                                                <input type="text" list="list" id="hiring_manager" name="hiring_manager">
                                                <datalist id="list">
                                                    <option value="Alexandra">Alexandra1</option>
                                                    <option value="Alice">Alice</option>
                                                    <option value="Anastasia">Anastasia</option>
                                                </datalist> </label>
                                        </section>
                                    </div>
                                    <section>
                                        <label class="label"> Employee Photo</label>
                                        <label class="input">
                                            <input type="file" name="last_name" id="last_name">
                                        </label>
                                        <div class="note">
                                            <strong>Note:</strong> height of the textarea depends on the rows attribute.
                                        </div>
                                    </section>
                                    <section>
                                        <label class="checkbox">
                                            <input type="checkbox" value="checkbox-login" id="checkbox-login">
                                            <i></i><strong> Create Login Details</strong>
                                        </label>
                                    </section>
                                    <div id="div_login">
                                        <div  class="row">
                                            <section  class="col col-6">
                                                <label class="label"> Username *</label>
                                                <label class="input">
                                                    <input type="text" name="user_name" id="user_name" maxlength="10">
                                                </label>
                                            </section>
                                            <section class="col col-6">
                                                <label class="label"> status </label>
                                                <label class="input">
                                                    <input type="text" list="list" id="emp_status" name="emp_status">
                                                    <datalist id="list">
                                                        <option value="Alexandra">Enable</option>
                                                        <option value="Alice">Disabled</option>
                                                    </datalist>
                                                </label>
                                            </section>
                                        </div>
                                        <div id="" class="row">
                                            <section  class="col col-6">
                                                <label class="label"> Password *</label>
                                                <label class="input">
                                                    <input type="text" name="password" id="password" maxlength="10">
                                                </label>
                                                <div class="note">
                                                    <strong>Note:</strong> For a strong password, please use a hard to guess combination of text with upper and lower
                                                    case characters, symbols and numbers
                                                </div>
                                            </section>
                                            <section class="col col-6">
                                                <label class="label"> Confirm Password ** </label>
                                                <label class="input">
                                                    <input type="text" id="emp_confimpassword" name="emp_confimpassword">
                                                </label>
                                            </section>
                                        </div>
                                    </div>
                                    <section>
                                        <label class="label">Active</label>
                                        <div class="inline-group">
                                            <label class="checkbox">
                                                <input  type="checkbox"  name="checkbox-inline" checked>
                                                <i></i>
                                            </label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="checkbox-inline" checked>
                                                <i></i>Publish in RSS feed(1) and web page(2)
                                            </label>
                                        </div>
                                    </section>
                                </fieldset>
                                <footer>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-default" onclick="window.history.back();">
                                        Back
                                    </button>
                                </footer>
                            </form>

                        </div>
                        <!-- end widget content -->

                    </div>
                </div>
            </article>
        </div>
    </section>
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
    <script>
        $( document ).ready(function() {
            $("#div_login").hide();
            $('#checkbox-login').change(function () {
                if (this.checked)
                    $('#div_login').fadeIn('slow');
                else
                    $('#div_login').fadeOut('slow');

            });
        });
    </script>

    <script type="text/javascript">

        // DO NOT REMOVE : GLOBAL FUNCTIONS!

        $(document).ready(function() {

            pageSetUp();
            $('#startdate').datepicker({
                // format: 'DD - dd MM yyyy'
            });
            var $loginForm = $("#validate_vacancy").validate({
                // Rules for form validation
                rules : {
                    name : {
                        required : true
                    },
                    description : {
                        required : true,
                    }
                },

                // Messages for form validation
                messages : {
                    name : {
                        required : 'Please enter first name'
                    },
                    description : {
                        required: 'Please enter your last name'
                    }
                },
                // Do not change code below
                errorPlacement : function(error, element) {
                    error.insertAfter(element.parent());
                }
            });
        });

    </script>
@endsection