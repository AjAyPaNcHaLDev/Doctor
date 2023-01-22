<?php include "./header.php"; ?>
<!DOCTYPE html>
<html lang="en">

<body class="mini-sidebar fix-header">
    <link href="asset/plugins/components/datatables/jquery.dataTables.min.css " rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Preloader -->

    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">

        <!-- ===== Top-Navigation- Left-Sidebar  ===== -->

        <!--<?php include "./header.php"; ?>-->
        <!-- ===== Top-Navigation- Left-Sidebar end
===== -->
        <!-- Page Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">


                    <div class="row">
                        <div class="col-md-4">
                            <div class="white-box">
                                <h3 class="box-title m-b-0">Add Executive</h3>
                                <p class="text-muted m-b-30 font-13"> please fill all the information</p>
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <form onsubmit="registerUser()" id="registerUser" action="server/userCRUD.php"
                                            method="post">

                                            <div class="form-group">
                                                <label for="exampleInputuname">Name</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="ti-user"></i></div>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email address</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        placeholder="Enter email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone number</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                    <input type="number" class="form-control" id="phone" name="phone"
                                                        placeholder="Enter phone">
                                                </div>
                                            </div>
                                            <!--<div class="form-group">-->
                                            <!--    <label for="rsm">Under RRM</label>-->
                                            <!--    <div class="input-group">   -->
                                            <!--        <div class="input-group-addon"><i class="icon-user"></i></div>-->
                                            <!--        <input type="number" class="form-control" id="rsm" name="rsm" placeholder="enter id of RRM"> </div>-->
                                            <!--</div>-->

                                            <div class="form-group">
                                                <label for="userType">Choose Regional Manager</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                    <select style="margin-left:12px;" class="form-control" id="rsm"
                                                        data-style="form-control" name="type" required="true">
                                                        <option value="select">select</option>
                                                        <?php
                                                        $sql = "SELECT * FROM `admin` WHERE type = '2' ";
                                                        $res = mysqli_query($conn, $sql) or die("<srcipt> alert()</srcipt>");

                                                        if (mysqli_num_rows($res) > 0) {
                                                            while ($row = mysqli_fetch_assoc($res)) {
                                                                $name = $row['name'];
                                                                $id = $row['id'];
                                                                $email = $row['email'];
                                                                echo "<option value=" . $id . ">" . $name . "&nbsp&nbsp&nbsp(" . $email . ")</option>";
                                                            }
                                                        } else {
                                                            echo `<option value="select">error</option> `;
                                                        }

                                                        ?>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="userType">Choose RASM</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                    <select style="margin-left:12px;" class="form-control" id="rasm"
                                                        data-style="form-control" name="type" required="true">
                                                        <option value="select">select</option>
                                                        <?php
                                                        $sql = "SELECT * FROM `admin` WHERE type = '3' ";
                                                        $res = mysqli_query($conn, $sql) or die("<srcipt> alert()</srcipt>");

                                                        if (mysqli_num_rows($res) > 0) {
                                                            while ($row = mysqli_fetch_assoc($res)) {
                                                                $name = $row['name'];
                                                                $id = $row['id'];
                                                                $email = $row['email'];
                                                                echo "<option value=" . $id . ">" . $name . "&nbsp&nbsp&nbsp(" . $email . ")</option>";
                                                            }
                                                        } else {
                                                            echo `<option value="select">error</option> `;
                                                        }

                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <!--<div class="form-group">-->
                                            <!--    <label for="rasm">Under RASM</label>-->
                                            <!--    <div class="input-group">   -->
                                            <!--        <div class="input-group-addon"><i class="icon-user"></i></div>-->
                                            <!--        <input type="number" class="form-control" id="rasm" name="rasm" placeholder="enter id RASM"> </div>-->
                                            <!--</div>-->
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                    <select style="margin-left:12px;" class="form-control" id="state"
                                                        data-style="form-control" name="type" onchange="fetchCity(this)"
                                                        required="true">
                                                        <option value="select" selected disabled>select</option>
                                                        <?php
                                                        $sql = "SELECT DISTINCT  state FROM `locations`  ";
                                                        $res = mysqli_query($conn, $sql) or die("<srcipt> alert()</srcipt>");

                                                        if (mysqli_num_rows($res) > 0) {
                                                            while ($row = mysqli_fetch_assoc($res)) {
                                                                $state = $row['state'];
                                                                echo "<option value=" . $state . ">" . $state . "</option>";
                                                            }
                                                        } else {
                                                            echo `<option value="select">error</option> `;
                                                        }

                                                        ?>
                                                    </select>
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label for="city">City </label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                    <select class="form-control" name="city" id="city">
                                                        <option>select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="ti-lock"></i></div>
                                                    <input type="password" class="form-control" id="password"
                                                        name="password" placeholder="password">
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <ul class="icheck-list">
                                                    <li>
                                                        <input type="radio" class="check" id="status0" name="status"
                                                            value="0" data-radio="iradio_flat-red">
                                                        <label for="status0">active</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" class="check" id="status1" name="status"
                                                            value="1" checked data-radio="iradio_flat-red">
                                                        <label for="status1">inactive</label>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" style="float:right;" name="addUser"
                                                    class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- vvvvvvvvvvv -->
                        <div class="col-sm-12">
                            <div class="white-box">
                                <h3 class="box-title m-b-0">Executive</h3>
                                <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>

                                <!--    <div class="form-group">-->
                                <!--           <label for="userType">Choose Month</label>-->
                                <!--<div class="input-group">   -->
                                <!--               <div class="input-group-addon"><i class="icon-date"></i></div>-->
                                <!--       <select   class="form-control" id="rasm"  data-style="form-control" name="type" required="true">-->
                                <!--       <option value="01">JAN</option>          -->
                                <!--         <option value="02">Feb</option>             -->
                                <!--                   </select> -->
                                <!--   </div>-->
                                <!--   </div>-->
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>ASM</th>
                                                <th>RSM</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>ASM</th>
                                                <th>RSM</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>

            </div>

            <!-- model  content start-->

            <style>
                .status {
                    float: right;
                }
            </style>

            <!-- sample modal content -->
            <!-- /.modal -->
            <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true" style="display: none;">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Executive Details <span class="status">status:&nbsp;&nbsp; <span>
                                        inactive</span></span></h4>
                            <h4>Rohit</h4>
                        </div>
                        <div class="modal-body">
                            <div>
                                <div class="form-group">
                                    <label for="email">Date</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-date"></i></div>
                                        <input type="date" class="form-control" onchange="fetchExecutive" id="date"
                                            name="date">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect"
                                data-dismiss="modal">Close</button>
                            <!--<button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>-->
                        </div>
                    </div>
                </div>

                <!-- Button trigger modal -->
            </div>

            <!-- model content ended-->


            <!-- ===== Right-Sidebar ===== -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Add Executive Panel <span><i
                                class="icon-close right-side-toggler"></i></span> </div>
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
    <!-- ===== Wave Effects JavaScript ===== -->
    <script src="js/waves.js"></script>
    <!-- ===== Menu Plugin JavaScript ===== -->
    <script src="js/sidebarmenu.js"></script>
    <!-- ===== Custom JavaScript ===== -->
    <script src="asset/js/custom.js"></script>
    <!-- ===== Plugin JS ===== -->
    <!-- ===== Style Switcher JS ===== -->
    <script src="asset/plugins/components/styleswitcher/jQuery.style.switcher.js "></script>
    <script src="../plugins/components/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>


    <script src="asset/plugins/components/styleswitcher/jQuery.style.switcher.js "></script>
</body>

</html>


<script>

    function registerUser() {
        event.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var password = $('#password').val();
        var rsm = $('#rsm').val();
        var rasm = $('#rasm').val();
        var state = $('#state').val();
        var city = $('#city').val();
        var status = 1;
        if ($("#status0").is(":checked")) {
            status = "active";
        } else {
            status = "inactive";

        }

        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'server/userCRUD.php');
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        data = "insertExecutive=" + JSON.stringify({ name, email, phone, password, status, rsm, rasm, state, city });
        xhr.send(data);

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log(xhr.responseText);
                fatchExecutive();
            }
        };
        xhr.onprogress = function (event) {
            // alert("on progress");
        };
        xhr.onerror = function () {
            alert("Request failed");
        };

    }




    function fatchExecutive() {

        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'server/api.php', true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req = "callApi=" + JSON.stringify({ "table": "getExecutiveTable" });
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.response);
                i = 0;
                $('#example23').DataTable({
                    dom: 'Bfrtip',
                    "columnDefs": [{
                        "visible": true,
                        "targets": 2
                    }],

                    "displayLength": 20,
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ], "destroy": true,
                    "order": [
                        [0, 'dec']
                    ],
                    data: data
                    , columns: [
                        { "data": "eid" },
                        { "data": "name" },
                        { "data": "phone" },
                        { "data": "email" },
                        { "data": "asm_name" },
                        { "data": "rm_name" },
                        { "data": "status" },
                        {
                            data: "eid", render: function (data, type, row, meta) {
                                return type === 'display' ?
                                    '<button class="btn btn-warning" alt="default" data-toggle="modal" data-target="#responsive-modal"   > Edit &nbsp<i class="icon-user "></i></button>' :
                                    data;
                            }
                        },
                    ]
                });
            }
        };
        xhr.send(req);
        xhr.onprogress = function (event) {
            // alert("on progress");
        };
        xhr.onerror = function () {
            alert("Request failed");
        };

    }



    fatchExecutive();


    function fetchCity(event) {

        var state = event.value
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'server/api.php', true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req = "callApi=" + JSON.stringify({ "table": "locations", state });
        xhr.send(req);

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.response);
                $("#city").empty();

                for (key in data) {
                    $("#city").append(`<option value='${data[key].id}'>${data[key].city}</option>`)
                }


            }
        };
        xhr.onprogress = function (event) {
            // alert("on progress");
        };
        xhr.onerror = function () {
            alert("Request failed");
        };


    }

</script>