<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App title -->
        <title>Sell Quicker | @yield('page-title')</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="{{url('backend/assets/plugins/morris/morris.css')}}">

        <!-- Switchery css -->
        <link href="{{url('backend/assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="{{url('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('editor/summernote.css')}}" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="{{url('backend/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
        @yield('backend-stylesheet')
        <!-- Modernizr js -->
        <script src="{{url('backend/assets/js/modernizr.min.js')}}"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            @include('backend.partials.header')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            @include('backend.partials.leftsidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->

                @yield('page-content')
                 <!-- content -->



            </div>
            <!-- End content-page -->


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            
            <!-- /Right-bar -->

            @include('backend.partials.footer')

        </div>
        <!-- END wrapper -->


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{url('backend/assets/js/jquery.min.js')}}"></script>
        <script src="{{url('backend/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('backend/assets/js/detect.js')}}"></script>
        <script src="{{url('editor/summernote.js')}}"></script>
        <script src="{{url('backend/assets/js/fastclick.js')}}"></script>
        <script src="{{url('backend/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{url('backend/assets/js/waves.js')}}"></script>
        <script src="{{url('backend/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{url('backend/assets/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{url('backend/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{url('backend/assets/plugins/switchery/switchery.min.js')}}"></script>

        <!--Morris Chart-->
		<script src="{{url('backend/assets/plugins/morris/morris.min.js')}}"></script>
		<script src="{{url('backend/assets/plugins/raphael/raphael-min.js')}}"></script>

        <!-- Counter Up  -->
        <script src="{{url('backend/assets/plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{url('backend/assets/plugins/counterup/jquery.counterup.min.js')}}"></script>

        <!-- Page specific js -->
        <script src="{{url('backend/assets/pages/jquery.dashboard.js')}}"></script>

        <!-- App js -->
        <script src="{{url('backend/assets/js/jquery.core.js')}}"></script>
        <script src="{{url('backend/assets/js/jquery.app.js')}}"></script>
        <script>
            $(document).ready(function() {
              $('.summernote').summernote();
            });
        </script>
        @yield('backend-scripts')
    </body>
</html>