<?php include "./header.php"; ?>
<!DOCTYPE html>
<html lang="en">

<body class="mini-sidebar fix-header">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">

        <!-- Page Content -->
        <div class="page-wrapper">

            <div class="row">
                <div class="col-md-12 col-lg- col-xs-12">
                    <div class="white-box">
                        <div class="user-bg"> <img width="100%" alt="user" src="asset/plugins/images/large/img1.jpg">
                            <div class="overlay-box">
                                <div class="user-content">
                                    <a href="javascript:void(0)"><img
                                            src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png"
                                            class="thumb-lg img-circle" alt="img"></a>
                                    <h4 class="text-white">
                                        <?php echo $_SESSION['name'] ?>
                                    </h4>
                                    <h5 class="text-white">Profile:
                                        <?php
                                        switch ($_SESSION['type']) {
                                            case "1":
                                                echo "General Manager";
                                                break;
                                            case "2":
                                                echo "Third Line Manager";
                                                break;
                                            case "3":
                                                echo "Second Line Manager";
                                                break;
                                            case "4":
                                                echo "First Line Manager";
                                                break;
                                            case "5":
                                                echo "Sales Executive";
                                        }
                                        ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="user-btm-box">

                            <div class="col-md-4 col-sm-4 text-center">
                                <p class="text-danger">ID</p>
                                <h1>
                                    <?php

                                    if ($_SESSION['type'] != 5)
                                        echo $_SESSION['id'];
                                    else
                                        echo $_SESSION['eid']; ?>
                                </h1>
                            </div>
                            <div class="col-md-4 col-sm-4 text-center">
                                <p class="text-purple">Mobile No </p>
                                <h1>
                                    <?php echo $_SESSION['phone'] ?>
                                </h1>
                            </div>
                            <div class="col-md-4 col-sm-4 text-center">
                                <p class="text-blue">Email</p>
                                <h1>
                                    <?php echo $_SESSION['email'] ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">




                <div class="col-md-2  info-box m-10">
                    <a href="addDoctor.php">
                        <div class="media">
                            <div class="media-left">
                                <span class="icoleaf bg-primary text-white"><i
                                        class="mdi mdi-checkbox-marked-circle-outline"></i></span>
                            </div>
                            <div class="media-body">
                                <h3 class="info-count text-blue">
                                    <?php


                                    if ($_SESSION['type'] == "5") {
                                        $eid = $_SESSION['eid'];
                                        echo mysqli_num_rows(mysqli_query($conn, "SELECT id from doctors WHERE type='doctor' AND eid='$eid'"));
                                    } else {
                                        echo mysqli_num_rows(mysqli_query($conn, "SELECT id from doctors WHERE type='doctor'"));
                                    }


                                    ?>
                                </h3>
                                <p class="info-text font-12">Doctors</p>
                                <span class="hr-line"></span>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2  info-box m-10">
                    <a href="addChemist.php">
                        <div class="media">
                            <div class="media-left">
                                <span class="icoleaf bg-primary text-white"><i
                                        class="mdi mdi-checkbox-marked-circle-outline"></i></span>
                            </div>
                            <div class="media-body">
                                <h3 class="info-count text-blue">
                                    <?php


                                    if ($_SESSION['type'] == "5") {
                                        $eid = $_SESSION['eid'];
                                        echo mysqli_num_rows(mysqli_query($conn, "SELECT id from doctors WHERE type='Chemist' AND eid='$eid'"));
                                    } else {
                                        echo mysqli_num_rows(mysqli_query($conn, "SELECT id from doctors WHERE type='Chemist'"));
                                    }


                                    ?>
                                </h3>
                                <p class="info-text font-12">Chemist's</p>
                                <span class="hr-line"></span>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2  info-box m-10" <?php if ($_SESSION['type'] == "5") {
                    echo "style='display:none'";
                } ?>>
                    <a href="addExecutive.php">
                        <div class="media">
                            <div class="media-left">
                                <span class="icoleaf bg-primary text-white"><i
                                        class="mdi mdi-comment-text-outline"></i></span>
                            </div>
                            <div class="media-body">
                                <h3 class="info-count text-blue">
                                    <?php
                                    echo mysqli_num_rows(mysqli_query($conn, "SELECT eid from sale_executive"))

                                        ?>
                                </h3>
                                <p class="info-text font-12">Executive</p>
                                <span class="hr-line"></span>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2  info-box m-10">
                    <a href="tours.php">
                        <div class="media">
                            <div class="media-left">
                                <span class="icoleaf bg-primary text-white"><i class="mdi mdi-coin"></i></span>
                            </div>
                            <div class="media-body">
                                <h3 class="info-count text-blue">
                                    <?php
                                    if ($_SESSION['type'] == "5") {
                                        $eid = $_SESSION['eid'];
                                        echo mysqli_num_rows(mysqli_query($conn, "SELECT id from tour_plan WHERE eid='$eid' AND attendance=1"));
                                    } else {
                                        echo mysqli_num_rows(mysqli_query($conn, "SELECT id from tour_plan WHERE attendance=1"));
                                    }
                                    ?>
                                </h3>
                                <p class="info-text font-12">Tour Plan</p>
                                <span class="hr-line"></span>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3  info-box m-10">
                    <a href="sales.php">
                        <div class="media">
                            <div class="media-left">
                                <span class="icoleaf bg-primary text-white"><i class="mdi mdi-coin"></i></span>
                            </div>
                            <style>
                                .aj-h3 {
                                    font-size: 16px;
                                    margin-top: 5px;
                                    margin-bottom: 5px;
                                }
                            </style>
                            <div class="media-body">
                                <?php
                                if ($_SESSION['type'] == "5") {
                                    $eid = $_SESSION['eid'];
                                    $data = mysqli_query($conn, "SELECT  internal_sales,external_sales ,id  from sales WHERE eid='$eid'");
                                    $internal_sales = 0;
                                    $external_sales = 0;
                                    if (mysqli_num_rows($data) > 0) {
                                        while ($row = mysqli_fetch_assoc($data)) {
                                            $internal_sales += (int) $row['internal_sales'];
                                            $external_sales += (int) $row['external_sales'];
                                        }
                                    }
                                    echo "  <h3 class='  text-blue aj-h3'>Internal Sales :$internal_sales</h6>";
                                    echo "  <h3 class='  text-blue aj-h3'>External Sales :$external_sales</h4>";
                                } else {
                                    $data = mysqli_query($conn, "SELECT internal_sales,external_sales ,id  from sales");
                                    $internal_sales = 0;
                                    $external_sales = 0;
                                    if (mysqli_num_rows($data) > 0) {
                                        while ($row = mysqli_fetch_assoc($data)) {
                                            $internal_sales += (int) $row['internal_sales'];
                                            $external_sales += (int) $row['external_sales'];
                                        }
                                    }

                                    echo "  <h3 class='  text-blue aj-h3'>Internal Sales :$internal_sales</h4>";
                                    echo "  <h3 class=' t text-blue aj-h3'>External Sales :$external_sales</h4>";
                                }
                                ?>
                                </h3>
                                <p class="info-text font-12">Sales</p>
                                <span class="hr-line"></span>

                            </div>
                        </div>
                    </a>
                </div>

            </div>







            <!-- ^^^^^^^^^^^   main ^^^^^^^^^^^^^^^ -->

            <div class="row">

                <div class="col-md-8 col-lg-8 col-xs-12">
                    <div class="white-box">


                        <h3 class="box-title">Sales By Months</h3>
                        <div class="form-group">
                            <label class="control-label">Choose Month</label>
                            <input type="month" id="month_sales_chart" name="start" min="YYYY-MM"
                                value="<?php echo date('Y-m'); ?>">
                        </div>
                        <?php

                        if ($_SESSION['type'] == "5") {
                            $eid = $_SESSION['eid'];
                            echo "<input value='$eid' id='eid' hidden disabled/>";
                        } else {
                            echo '   <div class="form-group">
                            <label class="control-label">Enter Executive Id</label>
                            <input value="" class="form-control" id="eid" placeholder="enter executive id " />
                            <span class="help-block">To see executive  info fill id </span> </div>
                               ';
                        }

                        ?>
                        <button class="btn btn-success waves-effect waves-light m-r-10"
                            onclick=morrisBarSalesMonths();morrisSalesChart()>Show</button>
                    </div>



                </div>
                <div class="col-md-12 col-lg-4 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Sales Chart by Months </h3>
                        <div id="morris-sales-chart"></div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="white-box">
                        <div id="morris-bar-sales-months"></div>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-md-8 col-lg-8 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Sales By Year</h3>
                        <div class="form-group">
                            <label for="city">Sales By Year </label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                <select class="form-control" name="year_sales_chart" id="year_sales_chart">
                                    <?php
                                    for ($year = 2010; $year <= date('Y'); $year++) {
                                        if ($year == date('Y')) {

                                            echo '<option value="' . $year . '"  selected>' . $year . '</option>';
                                        } else {

                                            echo '<option value="' . $year . '"  >' . $year . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <?php

                        if ($_SESSION['type'] == "5") {
                            $eid = $_SESSION['eid'];
                            echo "<input value='$eid' id='eid2' hidden disabled/>";
                        } else {
                            echo '   <div class="form-group">
                            <label class="control-label">Enter Executive Id</label>
                            <input value="" class="form-control" id="eid2" placeholder="enter executive id " />
                            <span class="help-block">To see executive  info fill id </span> </div>
                     ';
                        }

                        ?>

                        <button class="btn btn-success waves-effect waves-light m-r-10"
                            onclick="morrisBarSalesYear();morrisSalesChartYear();">Show</button>
                    </div>



                </div>
                <div class="col-md-12 col-lg-4 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Sales Chart By Year</h3>
                        <div id="morris-sales-chart-year"></div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="white-box">
                        <div id="morris-bar-sales-year"></div>
                    </div>
                </div>

            </div>
            <!-- ===== Right-Sidebar-End ===== -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer t-a-c"> © 2023 Savexa pharma
        </footer>
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php include "footer.php" ?>

    <script>
        // Morris donut chart
        morrisBarSalesMonths();
        morrisSalesChart();
        morrisSalesChartYear();
        morrisBarSalesYear();
        function morrisBarSalesMonths() {
            var month = document.getElementById("month_sales_chart").value;
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'server/apiChart.php');
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            eid = document.getElementById('eid').value.trim();
            req = "apiChart=" + JSON.stringify({ "type": "morris-bar-sales-months", "mode": "private", eid, month });
            xhr.send(req);
            xhr.onreadystatechange = function () {
                var data = JSON.parse(xhr.response);
                $("#morris-bar-sales-months").empty();
                if (data[0].error == true) {

                    return
                }

                Morris.Bar({
                    element: 'morris-bar-sales-months',
                    data: data,
                    xkey: 'y',
                    ykeys: ['internal_sales', 'external_sales', 'total'],
                    labels: ['Internal Sales', 'External Sales', 'Total'],
                    barColors: ['#2ecc71', '#0283cc', '#e74a25'],
                    hideHover: 'auto',
                    gridLineColor: '#e0e0e0',
                    resize: true
                });
            }

            xhr.onerror = function () {
                alert("Request failed");
            };

        }
       
        function morrisSalesChart() {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'server/apiChart.php');
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            eid = document.getElementById('eid').value;
            month = document.getElementById('month_sales_chart').value;
            req = "apiChart=" + JSON.stringify({ "type": "sales", "mode": "private", eid, month });
            xhr.send(req);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {

                    var data = JSON.parse(xhr.response);
                    $("#morris-sales-chart").empty();
                    Morris.Donut({
                        element: 'morris-sales-chart',
                        data: [{
                            label: "Total Sales",
                            value: data.total
                        }, {
                            label: "Internal Sales",
                            value: data.internal_sales,

                        }, {
                            label: "External Sales",
                            value: data.external_sales
                        }],
                        resize: true,
                        colors: ['#2ecc71', '#00bbd9', '#4a23ad']
                    });
                }
            };

            xhr.onerror = function () {
                alert("Request failed");
            };
        }
        function morrisSalesChartYear() {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'server/apiChart.php');
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            eid = document.getElementById('eid').value;
           
            year = document.getElementById('year_sales_chart').value;

            req = "apiChart=" + JSON.stringify({ "type": "sales-year", "mode": "private", eid, year });
            xhr.send(req);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {

                    $("#morris-sales-chart-year").empty();
                    var data = JSON.parse(xhr.response);
                    Morris.Donut({
                        element: 'morris-sales-chart-year',
                        data: [{
                            label: "Total Sales",
                            value: data.total
                        }, {
                            label: "Internal Sales",
                            value: data.internal_sales,

                        }, {
                            label: "External Sales",
                            value: data.external_sales
                        }],
                        resize: true,
                        colors: ['#2ecc71', '#00bbd9', '#4a23ad']
                    });
                }
            };

            xhr.onerror = function () {
                alert("Request failed");
            };
        }
        function morrisBarSalesYear() { 
            var year = document.getElementById("year_sales_chart").value;
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'server/apiChart.php');
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            eid = document.getElementById('eid').value.trim();
            req = "apiChart=" + JSON.stringify({ "type": "morris-bar-sales-year", "mode": "private", eid, year });
            xhr.send(req);
            xhr.onreadystatechange = function () {
                var data = JSON.parse(xhr.response);
                $("#morris-bar-sales-year").empty();
                if (data[0].error == true) {

                    return
                }

                Morris.Bar({
                    element: 'morris-bar-sales-year',
                    data: data,
                    xkey: 'y',
                    ykeys: ['internal_sales', 'external_sales', 'total'],
                    labels: ['Internal Sales', 'External Sales', 'Total'],
                    barColors: ['#2ecc71', '#0283cc', '#e74a25'],
                    // ykeys: ['internal_sales', 'external_sales', 'total'],
                    // labels: ['Internal Sales', 'External Sales', 'Total'],
                    // barColors: ['#2ecc71', '#0283cc', '#e74a25'],
                    hideHover: 'auto',
                    gridLineColor: '#e0e0e0',
                    resize: true
                });
            }

            xhr.onerror = function () {
                alert("Request failed");
            };

        }

    </script>



  
</body>

</html>