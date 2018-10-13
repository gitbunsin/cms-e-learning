@extends('backend.layouts.cms-layouts')
@section('content')
    <section id="widget-grid" class="">

        {{--{{$jobs->id}}--}}
        <!-- row -->
        <div class="row">

            <!-- NEW WIDGET START -->
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">

                    <header>
                        <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                        <h2>Edit Job Title</h2>
                    </header>
                    <!-- widget div-->
                    <div>

                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->
                        </div>
                        <!-- widget content -->
                        <div class="widget-body no-padding">
                            <form action="{{url('administration/job',$id)}}" class="smart-form" id="validate_job" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="PATCH">
                                <fieldset>
                                    <section>
                                        <label class="label">Job Title</label>
                                        <label class="input">
                                            <input value="{{$jobs->job_title}}" type="text" name="job_title" id="job_title" list="list">
                                            <datalist id="list">
                                                <option value="{{$jobs->job_title}}">{{$jobs->job_title}}</option>
                                            </datalist> </label>
                                    </section>
                                    <section>
                                        <label class="label"> Job description</label>
                                        <label class="textarea">
                                            <textarea rows="3" id="job_description" name="job_description" class="custom-scroll">{{$jobs->job_description}}</textarea>
                                        </label>
                                        <div class="note">
                                            <strong>Note:</strong> height of the textarea depends on the rows attribute.
                                        </div>
                                    </section>
                                    <section>
                                        <label class="label"> Noted</label>
                                        <label class="textarea">
                                            <textarea rows="3" id="note" name="note" class="custom-scroll">{{$jobs->note}}</textarea>
                                        </label>
                                        <div class="note">
                                            <strong>Note:</strong> height of the textarea depends on the rows attribute.
                                        </div>
                                    </section>
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

    <script type="text/javascript">

        // DO NOT REMOVE : GLOBAL FUNCTIONS!

        $(document).ready(function() {

            pageSetUp();
            $('#startdate').datepicker({
                // format: 'DD - dd MM yyyy'
            });
            var $loginForm = $("#validate_job").validate({
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
@endsection