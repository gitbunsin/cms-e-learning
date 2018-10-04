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
                        <h2>Add new Candidate</h2>

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

                            <form id="validate" method="POST" action="{{ url('administration/cadidate') }}" class="smart-form" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <fieldset>
                                    <section>
                                        <label class="label">First Name</label>
                                        <label class="input">
                                            <input type="text" maxlength="20" name="first_name" id="first_name">
                                        </label>
                                    </section >
                                    <section>
                                        <label class="label">Middle Name</label>
                                        <label class="input">
                                            <input type="text" maxlength="20" name="middle_name" id="middle_name">
                                        </label>
                                    </section>
                                    <section>
                                        <label class="label">last Name</label>
                                        <label class="input">
                                            <input type="text" maxlength="20" id="last_name" name="last_name">
                                        </label>
                                    </section>
                                    <section>
                                        <label class="label">Email</label>
                                        <label class="input">
                                            <input type="text" id="email" name="email">
                                        </label>
                                    </section>
                                    <section>
                                        <label class="label">Job Vacancy</label>
                                        <label class="input">
                                            <input type="text" list="list">
                                            <datalist id="list">
                                                <option value="Alexandra">Alexandra</option>
                                                <option value="Alice">Alice</option>
                                                <option value="Anastasia">Anastasia</option>
                                                <option value="Avelina">Avelina</option>
                                                <option value="Basilia">Basilia</option>
                                                <option value="Beatrice">Beatrice</option>
                                                <option value="Cassandra">Cassandra</option>
                                                <option value="Cecil">Cecil</option>
                                                <option value="Clemencia">Clemencia</option>
                                                <option value="Desiderata">Desiderata</option>
                                                <option value="Dionisia">Dionisia</option>
                                                <option value="Edith">Edith</option>
                                                <option value="Eleanora">Eleanora</option>
                                                <option value="Elizabeth">Elizabeth</option>
                                                <option value="Emma">Emma</option>
                                                <option value="Felicia">Felicia</option>
                                                <option value="Florence">Florence</option>
                                                <option value="Galiana">Galiana</option>
                                                <option value="Grecia">Grecia</option>
                                                <option value="Helen">Helen</option>
                                                <option value="Helewisa">Helewisa</option>
                                                <option value="Idonea">Idonea</option>
                                                <option value="Isabel">Isabel</option>
                                                <option value="Joan">Joan</option>
                                                <option value="Juliana">Juliana</option>
                                                <option value="Karla">Karla</option>
                                                <option value="Karyn">Karyn</option>
                                                <option value="Kate">Kate</option>
                                                <option value="Lakisha">Lakisha</option>
                                                <option value="Lana">Lana</option>
                                                <option value="Laura">Laura</option>
                                                <option value="Leona">Leona</option>
                                                <option value="Mandy">Mandy</option>
                                                <option value="Margaret">Margaret</option>
                                                <option value="Maria">Maria</option>
                                                <option value="Nanacy">Nanacy</option>
                                                <option value="Nicole">Nicole</option>
                                                <option value="Olga">Olga</option>
                                                <option value="Pamela">Pamela</option>
                                                <option value="Patricia">Patricia</option>
                                                <option value="Qiana">Qiana</option>
                                                <option value="Rachel">Rachel</option>
                                                <option value="Ramona">Ramona</option>
                                                <option value="Samantha">Samantha</option>
                                                <option value="Sandra">Sandra</option>
                                                <option value="Tanya">Tanya</option>
                                                <option value="Teresa">Teresa</option>
                                                <option value="Ursula">Ursula</option>
                                                <option value="Valerie">Valerie</option>
                                                <option value="Veronica">Veronica</option>
                                                <option value="Wilma">Wilma</option>
                                                <option value="Yasmin">Yasmin</option>
                                                <option value="Zelma">Zelma</option>
                                            </datalist> </label>
                                    </section>
                                    <section>
                                        <label class="label">Resume</label>
                                            <div class="input input-file">
                                                <span class="button"><input id="file2" type="file" name="cv_file_id" onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text"  placeholder="Include some files" readonly="">
                                            </div>
                                        <div class="note">
                                            <strong>Note:</strong> Accepts .docx, .doc, .odt, .pdf, .rtf, .txt up to 1MB
                                        </div>
                                    </section>
                                    <section>
                                        <label class="label">KeyWord</label>
                                        <label class="input">
                                            <input placeholder="Enter comma separated words..." type="text" maxlength="10">
                                        </label>
                                    </section>
                                    <section>
                                        <label class="label">Comment</label>
                                        <label class="textarea">
                                            <textarea rows="3" class="custom-scroll"></textarea>
                                        </label>
                                        <div class="note">
                                            <strong>Note:</strong> height of the textarea depends on the rows attribute.
                                        </div>
                                    </section>
                                    <section class="col-lg-12">
                                        <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                            <input type="text" name="date-of-application" placeholder="Request activation on" class="datepicker">
                                        </label>
                                    </section>
                                </fieldset>
                                <footer>
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
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

    <!--================================================== -->

    <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
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
            var $loginForm = $("#validate").validate({
                // Rules for form validation
                rules : {
                    first_name : {
                        required : true
                    },
                    last_name : {
                        required : true,
                        maxlength : 20
                    },
                    middle_name : {
                      required:true
                    },
                    email:{
                        required : true,
                        email : true
                    }
                },

                // Messages for form validation
                messages : {
                    first_name : {
                        required : 'Please enter first name'
                    },
                    last_name : {
                        required: 'Please enter your last name'
                    },
                    middle_name : {
                      required:'Pleae inter middle name'
                    },
                    email :{
                        required:'please enter correct email'
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