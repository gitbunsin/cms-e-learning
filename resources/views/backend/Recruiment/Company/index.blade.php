
@extends('backend.layouts.cms-layouts')
@section('content')
    <section id="widget-grid" class="">
        <!-- row -->
        <div class="row">
            <!-- NEW WIDGET START -->
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                    <div class="row">

                        <div class="col-sm-12">


                            <div class="well well-sm">

                                <div class="row">

                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="well well-light well-sm no-margin no-padding">
                                            <div class="row">

                                                <div class="col-sm-12">
                                                    <div class="padding-10">
                                                        <section>
                                                            <label class="label">description</label>
                                                            <label class="textarea">
                                                                <textarea rows="3" id="description" name="description" class="custom-scroll"></textarea>
                                                            </label>
                                                            <div class="note">
                                                                <strong>Note:</strong> height of the textarea depends on the rows attribute.
                                                            </div>
                                                        </section>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- end row -->

                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6">

                                        <form method="post" class="well padding-bottom-10" onsubmit="return false;">
                                            <textarea rows="2" class="form-control" placeholder="What are you thinking?"></textarea>
                                            <div class="margin-top-10">
                                                <button type="submit" class="btn btn-sm btn-primary pull-right">
                                                    Post
                                                </button>
                                                <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="Add Location"><i class="fa fa-location-arrow"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="Add Voice"><i class="fa fa-microphone"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="Add Photo"><i class="fa fa-camera"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="Add File"><i class="fa fa-file"></i></a>
                                            </div>
                                        </form>

                                        <div class="timeline-seperator text-center"> <span>10:30PM January 1st, 2013</span>
                                            <div class="btn-group pull-right">
                                                <a href="javascript:void(0);" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle"><span class="caret single"></span></a>
                                                <ul class="dropdown-menu text-left">
                                                    <li>
                                                        <a href="javascript:void(0);">Hide this post</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Hide future posts from this user</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Mark as spam</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-body no-padding profile-message">
                                            <ul>
                                                <li class="message">
                                                    <img src="http://localhost:8000/img/avatars/sunny.png" class="online" alt="sunny">
                                                    <span class="message-text"> <a href="javascript:void(0);" class="username">John Doe <small class="text-muted pull-right ultra-light"> 2 Minutes ago </small></a> Can't divide were divide fish forth fish to. Was can't form the, living life grass darkness very
														image let unto fowl isn't in blessed fill life yielding above all moved </span>
                                                    <ul class="list-inline font-xs">
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-info"><i class="fa fa-reply"></i> Reply</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-muted">Show All Comments (14)</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-primary">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="message message-reply">
                                                    <img src="img/avatars/3.png" class="online" alt="user">
                                                    <span class="message-text"> <a href="javascript:void(0);" class="username">Serman Syla</a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>

                                                    <ul class="list-inline font-xs">
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-muted">1 minute ago </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
                                                        </li>
                                                    </ul>

                                                </li>
                                                <li class="message message-reply">
                                                    <img src="http://localhost:8000/img/avatars/sunny.png" class="online" alt="user">
                                                    <span class="message-text"> <a href="javascript:void(0);" class="username">Sadi Orlaf </a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>

                                                    <ul class="list-inline font-xs">
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-muted">a moment ago </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
                                                        </li>
                                                    </ul>
                                                    <input class="form-control input-xs" placeholder="Type and enter" type="text">
                                                </li>
                                            </ul>

                                        </div>

                                        <div class="timeline-seperator text-center"> <span>11:30PM November 27th, 2013</span>
                                            <div class="btn-group pull-right">
                                                <a href="javascript:void(0);" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle"><span class="caret single"></span></a>
                                                <ul class="dropdown-menu text-left">
                                                    <li>
                                                        <a href="javascript:void(0);">Hide this post</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Hide future posts from this user</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Mark as spam</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-body no-padding profile-message">
                                            <ul>
                                                <li class="message">
                                                    <img src="http://localhost:8000/img/avatars/sunny.png" class="online" alt="user">
                                                    <span class="message-text"> <a href="javascript:void(0);" class="username">John Doe <small class="text-muted pull-right ultra-light"> 2 Minutes ago </small></a> Can't divide were divide fish forth fish to. Was can't form the, living life grass darkness very image let unto fowl isn't in blessed fill life yielding above all moved </span>
                                                    <ul class="list-inline font-xs">
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-info"><i class="fa fa-reply"></i> Reply</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-muted">Show All Comments (14)</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-primary">Hide</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="message message-reply">
                                                    <img src="http://localhost:8000/img/avatars/sunny.png" class="online" alt="user">
                                                    <span class="message-text"> <a href="javascript:void(0);" class="username">Serman Syla</a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>

                                                    <ul class="list-inline font-xs">
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-muted">1 minute ago </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
                                                        </li>
                                                    </ul>

                                                </li>
                                                <li class="message message-reply">
                                                    <img src="http://localhost:8000/img/avatars/sunny.png" class="online" alt="user">
                                                    <span class="message-text"> <a href="javascript:void(0);" class="username">Sadi Orlaf </a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>

                                                    <ul class="list-inline font-xs">
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-muted">a moment ago </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
                                                        </li>
                                                    </ul>

                                                </li>
                                                <li class="message message-reply">
                                                    <img src="http://localhost:8000/img/avatars/sunny.png" class="online" alt="user">
                                                    <span class="message-text"> <a href="javascript:void(0);" class="username">Sadi Orlaf </a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>

                                                    <ul class="list-inline font-xs">
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-muted">a moment ago </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
                                                        </li>
                                                    </ul>

                                                </li>
                                                <li>
                                                    <div class="input-group wall-comment-reply">
                                                        <input id="btn-input" type="text" class="form-control" placeholder="Type your message here...">
                                                        <span class="input-group-btn">
															<button class="btn btn-primary" id="btn-chat">
																<i class="fa fa-reply"></i> Reply
															</button> </span>
                                                    </div>
                                                </li>
                                            </ul>

                                        </div>


                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
@endsection