<?php include "./header.php"; ?>
 
        <!-- ===== Top-Navigation- Left-Sidebar end
===== -->
        <!-- Page Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">


                    <div class="row">
                        <div class="col-md-4">
                            <div class="white-box">
                                <h3 class="box-title m-b-0">Chemist</h3>
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
                                                        placeholder="name" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email address</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        placeholder="Enter email" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone number</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                    <input type="number" class="form-control" id="phone" name="phone"
                                                        placeholder="Enter phone" required>
                                                </div>
                                            </div>
                                            <!--<div class="form-group">-->
                                            <!--    <label for="dob">Date of Birth</label>-->
                                            <!--    <div class="input-group">   -->
                                            <!--        <div class="input-group-addon"><i class=" icon-calender"></i></div>-->
                                            <!--        <input type="date" class="form-control" id="dob" name="dob" placeholder="01/01/1999"> </div>-->
                                            <!--</div>-->


                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class=" icon-calender"></i></div>
                                                    <input type="text" class="form-control" id="address" name="address"
                                                        placeholder="address" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                    <select style="margin-left:12px;" class="form-control" id="state"
                                                        data-style="form-control" name="type" required
                                                        onchange="fetchCity(this)" required="true">
                                                        <option value="select" selected disabled>select</option>
                                                        <?php
                                                        $sql = "SELECT DISTINCT  state FROM `location`  ";
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
                                                    <select class="form-control" name="city" id="city" required>
                                                        <option>select</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div id="alert"></div>
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
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="white-box">
                                    <h3 class="box-title m-b-0">Chemist's</h3>
                                    <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
                                    <div class="table-responsive">
                                        <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>ID</th>
                                                    <th>Type</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>D.O.B.</th>
                                                    <th>Specialization</th>
                                                    <th>qualification</th>
                                                    <th>Address</th>
                                                    <th>State</th>
                                                    <th>City</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>ID</th>
                                                    <th>Type</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>D.O.B.</th>
                                                    <th>Specialization</th>
                                                    <th>qualification</th>
                                                    <th>Address</th>
                                                    <th>State</th>
                                                    <th>City</th>
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

            </div>
            <!-- ===== Right-Sidebar ===== -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Add Chemist Panel <span><i
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

    <?php include "footer.php" ?>
</body>

</html>

<?php

if ($_SESSION['type'] == 1) {

    echo "<input type='text' id='eID' value='admin'/>";
} else if ($_SESSION['type'] == "5") {

    echo "<input type='text' id='eID' value='" . $_SESSION['eid'] . "'/>";
}
?>
<script>



    var exID = $('#eID').val();
    function registerUser() {
        event.preventDefault();
        var name = $('#name').val();
        var phone = $('#phone').val();
        var dob = $('#dob').val();
        var address = $('#address').val();
        var city = $('#city').val();
        var state = $('#state').val();
        var email = $('#email').val();
        type = "Chemist";
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'server/userCRUD.php');
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        data = "insertDoctor=" + JSON.stringify({ exID, name, phone, dob, email, address, city, state, type });
        xhr.send(data);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {


                const res = JSON.parse(xhr.response);
                if (res.error == true) {
                    swal("something went wrong", res.msg, "error");
                } else {
                    swal("result", res.msg, "success");
                }

                fetchChemist();

            }

        };

        xhr.onerror = function () {
            alert("Request failed");
        };

    }

    // >>>>>>>>>>>>>>>>>>


    function fetchChemist() {

        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'server/api.php', true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req = "callApi=" + JSON.stringify({ "table": "getChemistTable", eid: exID });
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.response);
                i = 0;
                $('#example23').DataTable({
                    dom: 'Bfrtip',
                    "columnDefs": [{
                        "visible": false,
                        "targets": 6
                    }, {
                        "visible": false,
                        "targets": 7
                    }, {
                        "visible": false,
                        "targets": 8
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
                        {
                            data: "id", render: function (data, type, row, meta) {
                                return type === 'display' ?
                                    '<button class="btn btn-warning" onClick="alert(' + data + ')">   &nbsp<i class="icon-user "></i></button>' :
                                    data;
                            }
                        },
                        { "data": "id" },
                        { "data": "type" },
                        { "data": "name" },
                        { "data": "phone" },
                        { "data": "email" },
                        { "data": "dob" },
                        { "data": "specialization" },
                        { "data": "qualification" },
                        { "data": "address" },
                        { "data": "state" },
                        { "data": "city" },
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



    fetchChemist();

    // >>>>>>>>>>>





    function fetchCity(event) {
        var state = event.value
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'server/api.php', true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req = "callApi=" + JSON.stringify({ "table": "location", state, type: "city" });
        xhr.send(req);

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.response);
                if (data.error == true) {

                    swal("Plase Check Status", data, "info");
                }
                $("#city").empty();
                $("#city").append(`<option selected disabled>select</option>`)
                for (key in data) {
                    $("#city").append(`<option value='${data[key].city}'>${data[key].city}</option>`)
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


<script>
    $(function () {
        $('#example23 tbody').on('click', 'tr.group', function () {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
        $('#example24 tbody').on('click', 'tr.group', function () {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
    });





</script>