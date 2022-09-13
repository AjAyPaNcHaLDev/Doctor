<?php
include "session.php";
if(!isset($_SESSION['session_status'])){
    header("location:login.php");
    }
?>


<!-- ===== Top-Navigation ===== -->



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Cubic Admin Template</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <!-- ===== Animation CSS ===== -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="css/style.css" rel="stylesheet">
    <!-- ===== Color CSS ===== -->
    <link href="css/colors/red.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="top-left-part">
                    <a class="logo" href="index.html">
                        <b>
                            <img src="../plugins/images/logo.png" alt="home" />
                        </b>
                        <span>
                            site name
                        </span>
                    </a>
                </div>
               
                
            </div>
        </nav>
        
        <!-- ===== Top-Navigation-End ===== -->
  <!-- ===== Left-Sidebar ===== -->
        <aside class="sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="side-menu">
                        <!-- <li>
                            <a class="waves-effect" href="Dashboard.php" aria-expanded="false"><i class="icon-screen-desktop fa-fw"></i> <span class="hide-menu"> Dashboard </span></a>
                            <ul aria-expanded="false" class="collapse">
                            <li> <a href="Dashboard.php">Dashboard</a> </li>
                              <?php //if($_SESSION['type']=="Admin")echo'  <li> <a href="addAdmin.php">Add Admin</a> </li>'?>
                                <li> <a href="addExecutive.php">Add Executive</a> </li>
                                <li> <a href="addDoctor.php">Add Doctor</a> </li>
                                <?php// if($_SESSION['type']=="SALE-EXECUTIVE")echo'  <li> <a href="tourPlan.php">Tour Plan</a> </li>'?>
                                <li>
                                    <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><span class="hide-menu"> Links </span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li> <a href="Dashboard.php">Dashboard</a> </li>
            
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                       
    <li><a class="waves-effect" href="Dashboard.php" aria-expanded="false"><i class="icon-layers fa-fw"></i> <span class="hide-menu"> Dashboard</span></a> </li>
    <?php if($_SESSION['type']=="Admin")echo'<li> <a class="waves-effect" aria-expanded="false" href="addAdmin.php"><i class="icon-layers fa-fw"></i> <span class="hide-menu"> Add Admin</span></a> </li>'?>
    <?php if($_SESSION['type']=="Admin")echo'<li> <a class="waves-effect" aria-expanded="false" href="addExecutive.php"><i class="icon-layers fa-fw"></i> <span class="hide-menu"> Add Executive</span></a> </li>'?>
    <?php if($_SESSION['type']=="Admin"||$_SESSION['type']=="SALE-EXECUTIVE")echo'<li> <a class="waves-effect" aria-expanded="false" href="addDoctor.php"><i class="icon-layers fa-fw"></i> <span class="hide-menu"> Add Doctor</span></a> </li>'?>
   <?php if($_SESSION['type']=="SALE-EXECUTIVE")echo'<li> <a class="waves-effect" aria-expanded="false" href="tourPlan.php"><i class="icon-layers fa-fw"></i> <span class="hide-menu"> Tour Plan</span></a> </li>'?>
   
    <li><a class="waves-effect" href="logout.php" aria-expanded="false"><i class="icon-layers fa-fw"></i> <span class="hide-menu"> Logout</span></a> </li>
    
                    </ul>
                </nav>
            </div>
        </aside>

         <!-- ===== Left-Sidebar-End ===== -->

  