
@include('backend.partials.cms-styles')
<body class="">

<!-- HEADER -->
@include('backend.partials.cms-header')
<!-- END HEADER -->

<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
@include('backend.partials.cms-aside')
<!-- END NAVIGATION -->

<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
@include('backend.partials.cms-ribbon')
<!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                    Table
                    <span>
                Data Tables
            </span>
                </h1>
            </div>
        </div>
        <!-- widget grid -->
        <section id="widget-grid" class="">

            <!-- row -->
            <div class="row">
                <article class="col-sm-12">
                    <!-- new widget -->
                    <div class="jarviswidget" id="wid-id-0" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">

                        <!-- END MAIN CONTENT -->
                        @yield('content')
                    </div>
                </article>
            </div>
        </section>
    </div>
    <!-- END MAIN PANEL -->
    @include('backend.partials.cms-script')
</div>
</body>