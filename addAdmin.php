<?php
 
include "./header.php"; ?>


        <!-- ===== Top-Navigation- Left-Sidebar  ===== -->


        <!-- ===== Top-Navigation- Left-Sidebar end
===== -->
        <!-- Page Content -->
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-4">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Add Manager</h3>
                            <p class="text-muted m-b-30 font-13"> please fill all the information</p>
                             <center style="color:green"><b>Info :</b> Please Enter correct information</center>

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
                                                    placeholder="Enter email" >
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
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-lock"></i></div>
                                                <input type="password" class="form-control" id="password"
                                                    name="password" placeholder="password" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone">Day Care</label>
                                            <div class="input-group">   
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input  autocomplete="off" type="number" class="form-control" id="day_care" name="day_care" placeholder="Amount" required > </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Per Km traff</label>
                                            <div class="input-group">   
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input  autocomplete="off" type="number" class="form-control" id="tariff_kms" name="tariff_kms" placeholder="Amount"> </div>
                                            </div>
                                        <div class="form-group">
                                            <label for="userType">Choose Manager type</label>

                                            <select style="margin-left:12px;" onchange="fetchParent(this)"
                                                class="selectpicker" id="type" data-style="form-control" name="type"
                                                required="true">
                                                <option value="select">select</option> 
                                                <!-- <option value="1">General  Manager</option> -->
                                                <option value="2">Third Line Manager</option>
                                                <option value="3">Second Line Manager</option>
                                                <option value="4">First Line Manager</option>
                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <label for="password">Uner Manager</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                                <select class="form-control" id="underParent" name="underParent">
                                                    <option value="">select</option>
                                                </select>
                                            </div>
                                        </div>




                            <center style="color:red"><b>Warning :</b> if you update Manager info  its impact your sales and tour plan </center>


                                        <div class="form-group">
                                            <ul class="icheck-list">
                                                <li>
                                                    <input type="radio" class="check" id="status0" name="status" checked
                                                        value="active" data-radio="iradio_flat-red">
                                                    <label for="status0">active</label>
                                                </li>
                                                <li>
                                                    <input type="radio" class="check" id="status1" name="status"
                                                        value="inactive" data-radio="iradio_flat-red">
                                                    <label for="status1">inactive</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="alert"></div>
                                        <div class="form-group">
                                            <button type="submit" style="float:right;" id="smtbtn" name="addUser"
                                                class="btn btn-success waves-effect waves-light m-r-10">Add New</button>
                                            <button type="reset" style="float:right;" onclick="reset_form()"
                                                class="btn btn-error waves-effect waves-light m-r-10">reset</button>
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
                                <div class="table-responsive">
                                    <h3>General Manager's</h3>
                                    <table id="gm_table" class="display nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Action</th>
                                                <th>ID</th>
                                                <th>Type</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Date</th> 
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
                                                <th>Status</th>
                                                <th>Date</th> 
                                            </tr>
                                        </tfoot>

                                    </table>
                                </div>
                            </div>




                            <div class="white-box">
                                <div class="table-responsive">
                                    <h3>Third Line Manager's</h3>
                                    <table id="Tlm_table" class="display nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Action</th>
                                                <th>ID</th>
                                                <th>Type</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Date</th> 
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
                                                <th>Status</th>
                                                <th>Date</th> 
                                            </tr>
                                        </tfoot>

                                    </table>
                                </div>
                            </div>



                            <div class="white-box">
                                <div class="table-responsive">
                                    <h3>Second Line Manager's</h3>
                                    <table id="Slm_table" class="display nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Action</th>
                                                <th>ID</th>
                                                <th>Type</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Date</th>
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
                                                <th>Status</th>
                                                <th>Date</th>
                                            </tr>
                                        </tfoot>

                                    </table>
                                </div>
                            </div>
                            <div class="white-box">
                                <div class="table-responsive">
                                    <h3>First Line Manager's</h3>
                                    <table id="Flm_table" class="display nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Action</th>
                                                <th>ID</th>
                                                <th>Type</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Date</th> 
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
                                                <th>Status</th>
                                                <th>Date</th>
                                            </tr>
                                        </tfoot>

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

    <?php include "footer.php" ?>
</body>

</html>


<script>

    function registerUser() {
        event.preventDefault();
        const name = $('#name').val();
        const email = $('#email').val();
        const phone = $('#phone').val();
        const password = $('#password').val();
        const type = $('#type').val(); 
        const day_care=$('#day_care').val();
        const tariff_kms=$('#tariff_kms').val();
        
        if (type === "select") {
            alert("please select admin type")
            return;
        }
        var underParent = $('#underParent').val()

        var status = "active";
        if ($("#status0").is(":checked")) {
            status = "active";

        } else {
            status = "inactive";

        }

        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'server/userCRUD.php');
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        data = "insertManager=" + JSON.stringify({
            task,
            _id,
            name,
            email,
            phone,
            password,
            type,
            status,
            underParent,
            day_care, 
            tariff_kms
        });

        xhr.send(data);

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {

                const res = JSON.parse(xhr.response);
                if (res.error == true) {
                    swal("something went wrong", res.msg, "error");
                } else {
                    swal("result", res.msg, "success");
                }


                fetchManager(gm_table, "gm_table");
                fetchManager(Tlm_table, "Tlm_table");
                fetchManager(Slm_table, "Slm_table");
                fetchManager(Flm_table, "Flm_table");
            }
        };
        xhr.onprogress = function (event) {
            // alert("on progress");
        };
        xhr.onerror = function () {
            alert("Request failed");
        };

    }

    gm_table = "callApi=" + JSON.stringify({
        "table": "gm_table"
    });


    fetchManager(gm_table, "gm_table");

    Tlm_table = "callApi=" + JSON.stringify({
        "table": "Tlm_table"
    });


    fetchManager(Tlm_table, "Tlm_table");

    Slm_table = "callApi=" + JSON.stringify({
        "table": "Slm_table"
    });


    fetchManager(Slm_table, "Slm_table");



    Flm_table = "callApi=" + JSON.stringify({
        "table": "Flm_table"
    });


    fetchManager(Flm_table, "Flm_table");



    function fetchManager(req, table) {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'server/api.php', true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(req);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.response);
                i = 0;
                $("#" + table).DataTable({
                    dom: 'Bfrtip',
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "displayLength": 20,
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                    "destroy": true,
                    "order": [
                        [0, 'dec']
                    ],
                    data: data,
                    columns: [
                    {
                        data: "id",
                        render: function (data, type, row, meta) {
                            return type === 'display' ?
                                '<button class="btn btn-warning" onClick="getAdminByID(' + data +
                                ')"> Update &nbsp<i class="icon-user "></i></button>' :
                                data;
                        }
                    },{
                        "data": "id"
                    },
                    {
                        "data": "type"
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "phone"
                    },
                    {
                        "data": "email"
                    },
                    {
                        "data": "status"
                    },
                    {
                        "data": "date"
                    },
                    ]
                });
            }
        };

        xhr.onprogress = function (event) {
            // alert("on progress");
        };
        xhr.onerror = function () {
            alert("Request failed");
        };
    }




    function fetchParent(evnt) {

        if(evnt.value==1){
            alert("add or update GM not Allowed here.")
            $(evnt)[0].selectedIndex = 0;
            return;
        }
        req = "callApi=" + JSON.stringify({
            "table": "parent", type: evnt.value - 1
        });
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'server/api.php', true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(req);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {

                var data = JSON.parse(xhr.response);
                $("#underParent").empty();
                $("#underParent").append("<option selected disabled>select</option")
                for (key in data) {
                    $("#underParent").append(`<option value="${data[key].id}">${data[key].name}</option`)
                }
            }

        }
    }

    let task = 0;
    let _id = null;

    function getAdminByID(id) {
        _id = id;
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'server/userCRUD.php', true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req = "getAdminByID=" + JSON.stringify({ _id: id });
        xhr.send(req);

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {

                var data = JSON.parse(xhr.response);
                if (data.error == false) {
                    data = data.data
                        d={
                            value:data.type
                        }
                    fetchParent(d)

                    setTimeout(() => {
                        $("#name").val(data.name)
                        $("#email").val(data.email)
                        $("#phone").val(data.phone)
                        $("#password").val(data.password)
                        $("#type").val(data.type)
                        $("#underParent").val(data.parentId) 
                        $("#day_care").val(data.day_care);
                        $("#tariff_kms").val(data.tariff_kms);
                    }, 100)

                    var $radios = $('input:radio[name=status]');
                    $radios.filter(`[value=${data.status}]`).prop('checked', true);

                    task = 1;

                    $("#smtbtn").text("Update");
                    swal("Selected", "", "info");
                } else {
                    swal("Plase Check Status", data, "info");
                    task = 0;
                    _id = null;
                }

            }
        }
    }

    function reset_form() {
        _id = null
        task = 0;
        $("#smtbtn").text("Add New")
    }


</script>