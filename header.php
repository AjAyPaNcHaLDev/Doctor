<?php 
include "session.php";
include "server/conn.php";
if (!isset($_SESSION['session_status'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<body class="mini-sidebar fix-header">
    <link href="asset/plugins/components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
        type="text/css" />

  

<!-- ===== Top-Navigation ===== -->
<style>
    .logo-text {
        font-size: medium;
        position: absolute;
        top: 20;
        right: 10px;
        color: wheat;
        font-family: emoji;
    }
</style>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/images/Savexa.png">
    <title>Savexa pharma Stars</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="asset/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <!-- ===== Animation CSS ===== -->
    <link href="asset/css/animate.css" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="asset/css/style.css" rel="stylesheet">
    <!-- ===== Color CSS ===== -->
    <link href="asset/css/colors/red.css" id="theme" rel="stylesheet"> 
    <link href="asset/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="asset/plugins/components/morrisjs/morris.css" rel="stylesheet">
</head>
  <!-- Preloader -->

  <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse"
            data-target=".navbar-collapse">
            <i class="fa fa-bars"></i>
        </a>
        <div class="top-left-part">
            <a class="logo" href="Dashboard.php">
                <b>
                    <img src="asset/images/Savexa.png" alt="home" style="height: 50px;" />
                </b>

            </a>
        </div>
        <span class="logo-text"> Savexa pharma Stars</span>

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
                              
                                <li> <a href="addExecutive.php">Add Executive</a> </li>
                                <li> <a href="addDoctor.php">Add Doctor</a> </li>
                               
                                <li>
                                    <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><span class="hide-menu"> Links </span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li> <a href="Dashboard.php">Dashboard</a> </li>
            
                                    </ul>
                                </li>
                            </ul>
                        </li> -->

                <li><a class="waves-effect" href="Dashboard.php" aria-expanded="false"><i class="icon-layers fa-fw"></i>
                        <span class="hide-menu"> Dashboard</span></a> </li>
                <?php if ($_SESSION['type'] == "1")
                    echo '<li> <a class="waves-effect" aria-expanded="false" href="addAdmin.php"><i class="icon-layers fa-fw"></i> <span class="hide-menu"> Add Admin</span></a> </li>' ?>
                <?php if ($_SESSION['type'] == "1")
                    echo '<li> <a class="waves-effect" aria-expanded="false" href="addExecutive.php"><i class="icon-layers fa-fw"></i> <span class="hide-menu"> Add Executive</span></a> </li>' ?>
                <?php //if ($_SESSION['type'] == "1" || $_SESSION['type'] == "5")
                    echo '<li> <a class="waves-effect" aria-expanded="false" href="addDoctor.php"><i class="icon-layers fa-fw"></i> <span class="hide-menu"> Add Doctor</span></a> </li>' ?>
                <?php //if ($_SESSION['type'] == "1" || $_SESSION['type'] == "5")
                    echo '<li> <a class="waves-effect" aria-expanded="false" href="addChemist.php"><i class="icon-layers fa-fw"></i> <span class="hide-menu"> Add Chemist</span></a> </li>' ?>
                <?php if ($_SESSION['type'] != "5")
                    echo '<li> <a class="waves-effect" aria-expanded="false" href="executiveInfo.php"><i class="icon-layers fa-fw"></i> <span class="hide-menu"> Executive info</span></a> </li>' ?>
                    <!--<?php //if($_SESSION['type']=="5")echo'<li> <a class="waves-effect" aria-expanded="false" href="tourPlan.php"><i class="icon-layers fa-fw"></i> <span class="hide-menu"> Tour Plan</span></a> </li>'?>-->
                <?php // if ($_SESSION['type'] == "5")
                    echo '<li> <a class="waves-effect" aria-expanded="false" href="tours.php"><i class="icon-layers fa-fw"></i> <span class="hide-menu">Daily activity Report</span></a> </li>' ?>
                <?php //if ($_SESSION['type'] == "5")
                    echo '<li> <a class="waves-effect" aria-expanded="false" href="sales.php"><i class="icon-layers fa-fw"></i> <span class="hide-menu"> Sales</span></a> </li>' ?>
                    <li><a class="waves-effect" href="logout.php" aria-expanded="false"><i class="icon-layers fa-fw"></i>
                            <span class="hide-menu"> Logout</span></a> </li>

                </ul>
            </nav>
        </div>
    </aside>




    <!-- ===== Left-Sidebar-End ===== -->