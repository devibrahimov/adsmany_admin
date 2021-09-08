<?php
/**
 * @Company: LUMUSOFT
 * @CompanyURI: https://lumusoft.com
 * @Description: Developed by LUMUSOFT Software team.
 * @Version: 1.0.0
 * @Date :    17.08.2021
 */
?>
    <!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Adsmany-Adminpanel</title>
    <meta name="description" content="Admintres is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Admintres Admin, Admintresadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Jasny-bootstrap CSS -->
    <link href="/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <!-- Data table CSS -->
    <link href="/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

    <!-- Toast CSS -->
    <link href="/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

        @yield('css')
<!-- Custom CSS -->
    <link href="/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!-- /Preloader -->
<div class="wrapper theme-2-active navbar-top-light horizontal-nav">

   @include('layouts.topmenu')
   @include('layouts.leftsidebarmenu')
   @include('layouts.rightsidebarmenu')

    <!-- Main Content -->
    <div class="page-wrapper">

        <div class="container pt-30">
            <!-- Row -->
        @yield('content')
     <!-- /Row -->
        </div>
  <!-- Footer -->
        <footer class="footer pl-30 pr-30">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>2018 &copy; Admintres. Pampered by Hencework</p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p>Follow Us</p>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /Footer -->

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="/vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>

<!-- Data table JavaScript -->
<script src="/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

<!-- Slimscroll JavaScript -->
<script src="/dist/js/jquery.slimscroll.js"></script>

<!-- Fancy Dropdown JS -->
<script src="dist/js/dropdown-bootstrap-extended.js"></script>

<!-- Sparkline JavaScript -->
<script src="/vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

<!-- Owl JavaScript -->
<script src="/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- Switchery JavaScript -->
<script src="/vendors/bower_components/switchery/dist/switchery.min.js"></script>

<!-- Toast JavaScript -->
<script src="/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>


@section('js')
<!-- Init JavaScript -->
<script src="/dist/js/init.js"></script>


    <script src="/general/sweetalert.min.js"></script>
    @if(session()->has('feedback'))
        @php $feedback =  session()->get('feedback') ;
        @endphp
        <script>

            swal({
                title: "{{ $feedback['title']}}",
                text: "{{ $feedback['text']}}",
                icon: "{{ $feedback['icon']}}",
                button: "{{ $feedback['button']}}",

            });
        </script>
    @endif
</body>

</html>
