<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Savexapharmastars</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="asset/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <!-- ===== Animation CSS ===== -->
    <link href="asset/css/animate.css" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="asset/css/style.css" rel="stylesheet">

    <link href="asset/css/colors/red.css" id="theme" rel="stylesheet">

</head>

<style>
    .card-header {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>

<body class="mini-sidebar fix-header">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-register">
        <div class="login-box">
            <div class="white-box">
                <form class="form-horizontal form-material" id="loginform" method="post" action="./server/auth.php">


                    <div class="card-header">
                        <img src="asset/images/Savexa.png" alt="home" style="height: 50px;" />

                        <h4>Savexapharmastars</h4>

                        <h3 class="box-title ">Sign In</h3>
                    </div>


                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="true" placeholder="Email or Mobile No."
                                name="user">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="Password" required="true"
                                placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Remember me </label>
                            </div>
                            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right" hidden><i
                                    class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h5 class="m-t-30 m-b-10">Select </h5>
                            <select class="selectpicker" data-style="form-control" name="type" required="true">
                                <option value="1">Manager</option>
                                <option value="2" selected>Sales Executive</option>
                            </select>
                        </div>
                    </div>
                    <?php
                    if (isset($_GET['msg'])) {

                        echo '
                            <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> ' . $_GET['msg'] . ' </div>
                
                            ';

                    }
                    ?>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                name="SignIn" type="submit">Sign In</button>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                            <div class="social">
                                <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                                <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Don't have an account? <a href="register.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                        </div>
                    </div> -->
                </form>
                <form class="form-horizontal" id="recoverform" action="./server/auth.php" method="">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light"
                                type="submit">Reset</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>
    <!-- jQuery -->
    <script src="asset/plugins/components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="asset/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="asset/js/sidebarmenu.js"></script>
    <!--slimscroll JavaScript -->
    <script src="asset/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="asset/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="asset/js/custom.js"></script>
    <!--Style Switcher -->
    <script src="asset/plugins/components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>