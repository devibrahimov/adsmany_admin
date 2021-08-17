<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,maximum-scale=1.0, user-scalable=no,  initial-scale=1.0" />
    <title> Adsmany idarə etmə sitemi</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--Preloader-->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!--/Preloader-->
<div class="wrapper  pa-0">
    <!-- Main Content -->
    <div class="page-wrapper pa-0 ma-0 auth-page">
        <div class="container">
            <!-- Row -->
            <div class="table-struct full-width full-height">
                <div class="table-cell vertical-align-middle auth-form-wrap">
                    <div class="auth-form  ml-auto mr-auto no-float card-view pt-30 pb-30">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="mb-30">
                                    <h3 class="text-center txt-dark mb-10"> AdminPanel </h3>
                                    <h6 class="text-center nonecase-font txt-grey"> Adsmany idarə etmə sitemi </h6>
                                </div>
                                <div class="form-wrap">
                                    <form action="{{route('logincontroller')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_2"> Email </label>
                                            <input type="email" class="form-control" required="" id="exampleInputEmail_2" name="email" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Şifrə</label>
                                            <input type="password" class="form-control" required="" id="exampleInputpwd_2" name="password" placeholder="Enter pwd">
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-orange btn-rounded"> Giriş </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
<!-- Slimscroll JavaScript -->
<script src="dist/js/jquery.slimscroll.js"></script>
<!-- Init JavaScript -->
<script src="dist/js/init.js"></script>
</body>
</html>
