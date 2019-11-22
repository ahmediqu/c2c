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
        <title>Sell Quicker - Login</title>

        <!-- Bootstrap CSS -->
        <link href="{{url('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="{{url('backend/css/style.css')}}" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
        <script src="{{url('backend/js/modernizr.min.js')}}"></script>

    </head>


    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">

        	@yield('auth-page-content')
            <!-- end card-box-->

           

        </div>
        <!-- end wrapper page -->


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{url('backend/js/jquery.min.js')}}"></script>
        <script src="{{url('backend/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('backend/js/detect.js')}}"></script>
        <script src="{{url('backend/js/fastclick.js')}}"></script>
        <script src="{{url('backend/js/jquery.blockUI.js')}}"></script>
        <script src="{{url('backend/js/waves.js')}}"></script>
        <script src="{{url('backend/js/jquery.nicescroll.js')}}"></script>
        <script src="{{url('backend/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{url('backend/js/jquery.slimscroll.js')}}"></script>
        <script src="../plugins/switchery/switchery.min.js')}}"></script>

        <!-- App js -->
        <script src="{{url('backend/js/jquery.core.js')}}"></script>
        <script src="{{url('backend/js/jquery.app.js')}}"></script>

    </body>
</html>