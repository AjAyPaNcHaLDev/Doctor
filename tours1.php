<?php include "./header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../powerful-calendar/style.css" />
2
<link rel="stylesheet" href="../powerful-calendar/theme.css" />

<body class="mini-sidebar fix-header">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- ===== Top-Navigation- Left-Sidebar  ===== -->
        <?php //include "./header.php";?>
        <!-- ===== Top-Navigation- Left-Sidebar end
    ===== -->
        <!-- Page Content -->
        <div class="page-wrapper">
            <div class="row">
                <div class="col-md-7">
                    <div class="white-box">

                        <div class="calendar-container"></div>



                    </div>
                </div>



                <!-- ---------------->



                <div class="col-md-7">
                    <div class="white-box">
                        <div class="task-widget2">
                            <div class="task-image" id="header">
                                <img src="../plugins/images/task.jpg" alt="task" class="img-responsive">
                                <div class="task-image-overlay"></div>
                                <div class="task-detail">

                                    <h4 class="font-normal text-white m-t-5">Your tasks for </h4>
                                    <h2><span class="font-light text-white m-b-0" id="selectedDate"> </span>
                                        <a id="attendanceDate" class="btn btn-info waves-effect waves-light"
                                            href="tourPlan.php"></a>
                                    </h2>


                                </div>
                                <div class="task-add-btn" style="display:none">
                                    <a href="javascript:void(0);" class="btn btn-success">+</a>
                                </div>
                            </div>


                            <div class="task-list">
                                <ul class="list-group" id="doctorList">


                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
        echo "<input type='text' style='display:none'id='eID' value='" . $_SESSION['eid'] . "'/>";
        ?>


        <!-- ===== Right-Sidebar ===== -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="icon-close right-side-toggler"></i></span>
                </div>
                <div class="r-panel-body">

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
    <!-- ==============================
        Required JS Files
    =============================== -->
    <!-- ===== jQuery ===== -->
    <script src="../plugins/components/jquery/dist/jquery.min.js"></script>
    <!-- ===== Bootstrap JavaScript ===== -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ===== Slimscroll JavaScript ===== -->
    <script src="js/jquery.slimscroll.js"></script>

    <!--<script src="../powerful-calendar/jquery.slim.min.js"></script>-->

    <script src="../powerful-calendar/calendar.min.js"></script>

    <!-- ===== Wave Effects JavaScript ===== -->
    <script src="js/waves.js"></script>
    <!-- ===== Menu Plugin JavaScript ===== -->
    <script src="js/sidebarmenu.js"></script>
    <!-- ===== Custom JavaScript ===== -->
    <script src="asset/js/custom.js"></script>
    <!-- ===== Plugin JS ===== -->
    <!-- ===== Style Switcher JS ===== -->
    <script src="asset/plugins/components/styleswitcher/jQuery.style.switcher.js "></script>

    <style>
        .path {
            margin: 5px 10px 5px 8px;
            text-align: right;
            padding: 5px 10px 5px 8px;
            position: relative;
            font-weight: 800;
            border-radius: 5px;
            text-transform: capitalize;
            border: 1px solid;
            display: inline-block;
        }
    </style>


    <script>
        $(function () {

            $('.calendar-container').calendar();

        });

        $('.calendar-container').calendar({

            date: new Date()// today 
        });
        // 6. Set the length of names of days of the week. Default: 1.


        $('.calendar-container').calendar({

            weekDayLength: 2

        });
        // 7. Disable dates using the disable function.


        $('.calendar-container').calendar({

            date: new Date(),

            disable: function (date) {

                return date < new Date();

            }

        });
        // 8. Trigger a function when a date is selected.


        $('.calendar-container').calendar({

            onClickDate: function (date) {

                getTourPlan(date)

            }

        });



        function getTourPlan(date) {
            var exID = $('#eID').val();
            var selectedDatelbl = $('#selectedDate');
            const d = new Date(date);
            m = d.getMonth() + 1;
            if (m.toString().length == 1) {
                m = "0" + m;
            }

            day = d.getDate();
            if (day.toString().length == 1) {
                day = "0" + day;

            }
            date = d.getFullYear() + "-" + m + "-" + day;
            $('#selectedDate').text(date);

            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'server/api.php', true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            req = "callApi=" + JSON.stringify({ "table": "getTourPlan", eid: exID, date });
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var data = JSON.parse(xhr.response);
                    console.log(data);

                    if (data.length >= 1) {
                        //  $('#selectedDate').empty();
                        $('#attendanceDate').empty();
                        $('#selectedDate').empty();
                        $('#selectedDate').text(data[0].date_of_visit);
                        if (data[0].attendance == 1) {
                            $('#attendanceDate').text("Not applied");
                        } else {
                            $('#attendanceDate').text("Applied");
                        }

                        $('#doctorList').empty();

                        let xhr2 = new XMLHttpRequest();
                        xhr2.open('POST', 'server/api.php', true);
                        xhr2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        req2 = "callApi=" + JSON.stringify({ "table": "id_doctor", "id": data[0].id_doctor });
                        xhr2.onreadystatechange = function () {
                            if (xhr2.readyState == 4 && xhr2.status == 200) {
                                var data2 = JSON.parse(xhr2.response);
                                console.log(data2)


                                for (const key in data2) {
                                    if (data2.hasOwnProperty.call(data2, key)) {

                                        $("#doctorList").append(
                                            `
               <li class="list-group-item bl-info"> 
               <div class="  checkbox-success"> 
                    <h4 >${data2[key].name} 
                    <span style="
                    margin: 10px;
                    display: block;
                    text-align:right;
                    text-transform: capitalize;
                    font-family: monospace;"> ${data2[key].type}
                    
                    </span>
                     <span style="
                    margin: 10px;
                    display: block;
                    text-align:right;
                    text-transform: capitalize;
                    font-family: monospace;>${data2[key].specialization}</span></h4>
                    <h4 >${data2[key].address}
                    
                    </h4>
                    </li>
                 <li id="doctors"></li>
                 `
                                        )

                                    }
                                }
                            }
                        }
                        xhr2.send(req2);
                        $('#doctorList').append(`
   <div class="loc"><div class="path">
   
     ${data[0].place_from}  to   ${data[0].place_to}</div></div>
     
     <li id="doctors"></li>
     `);
                    } else {
                        $('#selectedDate').text(date);
                        $('#attendanceDate').text("Not applied");
                        $('#doctorList').empty();

                    }
                }

            }

            xhr.send(req);

        }
        getTourPlan(new Date());
    </script>
</body>

</html>