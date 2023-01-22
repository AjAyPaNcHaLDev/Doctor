<?php include "server/conn.php" ?>
<?php include "./header.php"; ?>

<!-- Page Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="white-box">
                    <h3 class="box-title m-b-0">My Tour Plan</h3>
                    <p class="text-muted m-b-30 font-13"> please fill all the information</p>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form onsubmit="registerTourPlan()" id="registerTourPlan" action="server/userCRUD.php"
                                method="post">


                                <div class="form-group">
                                    <label for="date_of_visit">Selected Date form calender</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>



                                        <input type="date" id="date_of_visit" name="date" value="<?php if (isset($_GET['date']))
                                            echo date("Y-m-d", strtotime($_GET['date'])); ?>" disabled>

                                    </div>

                                </div>




                                <!--<div class="form-group" style="display:none">-->
                                <!--        <label for="exampleInputuname"></label>-->
                                <!--<div class="input-group">-->
                                <!--    <div class="input-group-addon"><i class="ti-user"></i></div>-->
                                <!--    <input type="text" class="form-control" id="name" name="name" placeholder="name"   value=<?php echo $_SESSION['eid'] ?>> </div>-->

                                <!--</div>-->

                                <!--<div class="form-group">-->
                                <!--        <label for="place_from">Place From</label>-->
                                <!--<div class="input-group">-->
                                <!--    <div class="input-group-addon"><i class="ti-user"></i></div>-->
                                <!--    <input type="text" class="form-control" id="place_from" name="place_from" placeholder="From"> </div>-->

                                <!--</div>-->

                                <!--<div class="form-group">-->
                                <!--        <label for="place_to">Place To</label>-->
                                <!--<div class="input-group">-->
                                <!--    <div class="input-group-addon"><i class="ti-user"></i></div>-->
                                <!--    <input type="text" class="form-control" id="place_to" name="place_to" placeholder="To"> </div>-->

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
                                    <label for="city">City From </label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                        <select class="form-control" name="city" id="place_from">
                                            <option>select</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="city">City To </label>
                                    <div class="input-group">
                                        <div class="input-group-addon"> <i class="icon-user"></i></div>
                                        <select class="form-control" name="city" onchange="getInfo(this)" id="place_to">
                                            <option>select</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="place_return_to">City Return To </label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                        <select class="form-control" name="place_return_to" id="place_return_to">
                                            <option>select</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="city">Tahasil </label>
                                    <div class="input-group">
                                        <div class="input-group-addon"> <i class="icon-user"></i></div>
                                        <select class="form-control" name="tahasil" id="tahasil">
                                            <option>select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="price">Visit Km's</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input type="text" class="form-control" id="km" name="km" placeholder="Km">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="doctor_remark">Doctor Remarks</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input type="text" class="form-control" id="doctor_remark" name="doctor_remark"
                                            placeholder="Doctor Remark">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="remarks">Tour Remarks</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input type="text" class="form-control" id="remarks" name="remarks"
                                            placeholder="Remark">
                                    </div>

                                </div>
                                <div class="row">

                                    <label for="exampleInputuname">Doctors</label>
                                    <table id="tabdoctor" class="table color-table primary-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Spaclization / Type</th>
                                                <th>Address</th>
                                                <th>City</th>
                                                <th>Mark</th>
                                            </tr>
                                        </thead>

                                        <!--onchange='addDoctor({$id})'-->
                                        <tbody>


                                        </tbody>
                                    </table>

                                    <label for="exampleInputuname">Chemist</label>
                                    <table id="tabchemist" class="table color-table primary-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>City</th>
                                                <th>Mark</th>
                                            </tr>
                                        </thead>
                                        <!--onchange='addDoctor({$id})'-->
                                        <tbody>

                                        </tbody>
                                    </table>
                                    <div class="form-group">
                                        <button type="submit" style="float:right;" name="TourPlan"
                                            class="btn btn-success waves-effect waves-light m-r-10">Submit Tour
                                            Plan</button>
                                    </div>

                            </form>


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

<?php
echo "<input type='text' style='display:none'id='eID' value='" . $_SESSION['eid'] . "'/>";
?>
<script>
    var exID = $('#eID').val();
    $(function () {

        //   $("#tabdoctor").DataTable();
        //     $("#tabchemist").DataTable();
    });



    var id_doctor = [];
    function addDoctor(newItem) {

        id_doctor.indexOf(newItem) === -1 ? id_doctor.push(newItem) : deleteItem(newItem);


    }


    function deleteItem(newItem) {
        indexForRemoval = id_doctor.indexOf(newItem, 0);
        id_doctor.splice(indexForRemoval, 1);

    }


    // addDoctor(9);
    // addDoctor(3);



    var date = new Date();
    var currentDate = date.toISOString().slice(0, 10);

    function registerTourPlan() {
        event.preventDefault();
        var place_to = $('#place_to').val();
        var place_from = $('#place_from').val();
        var km = $('#km').val();
        var doctor_remark = $('#doctor_remark').val();
        var date_of_visit = $('#date_of_visit').val();
        var remark = $('#remarks').val()
        var exID = $('#eID').val();
        var place_return_to = $('#place_return_to').val();
        var tahasil = $("#tahasil").val();

        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'server/userCRUD.php');
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        data = "registerTourPlan=" + JSON.stringify({ date_of_visit, id_doctor: id_doctor, place_to, place_from, exID, doctor_remark, remark, km, place_return_to, tahasil });


        if (id_doctor.length == 0) {
            alert("please checked atlist one form Doctor and Chemist")
            return;
        }

        xhr.send(data);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {

                const res = JSON.parse(xhr.response);
                if (res.error == true) {
                    swal("something went wrong", res.msg, "error");
                } else {
                    swal("result", res.msg, "success");
                }



            }

        };

        xhr.onerror = function () {
            alert("Request failed");
        };

    }



    function fetchtahasil(event) {

        var city = event.value
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'server/api.php', true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req = "callApi=" + JSON.stringify({ "table": "location", city, type: "tahasil" });
        xhr.send(req);

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.response);
                $("#tahasil").empty();
                $("#tahasil").append(`<option selected disabled>select</option>`)
                for (key in data) {
                    $("#tahasil").append(`<option value='${data[key].tahasil}'>${data[key].tahasil}</option>`)
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
                $("#place_from").empty();
                $("#place_to").empty();
                $("#place_return_to").empty();
                $("#place_from").append(`<option selected disabled>select</option>`)
                $("#place_to").append(`<option selected disabled>select</option>`)
                $("#place_return_to").append(`<option selected disabled>select</option>`)
                for (key in data) {
                    $("#place_from").append(`<option value='${data[key].city}'>${data[key].city}</option>`)
                    $("#place_to").append(`<option value='${data[key].city}'>${data[key].city}</option>`)
                    $("#place_return_to").append(`<option value='${data[key].city}'>${data[key].city}</option>`)
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








    function getInfo(event) {
        fetchDoctor(event);
        fetchtahasil(event);
        fetchChemist(event);
    }


    function fetchDoctor(event) {



        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'server/api.php', true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req = "callApi=" + JSON.stringify({ "table": "getDoctorTable", eid: exID, city: event.value });
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.response);
                i = 0;
                $('#tabdoctor').DataTable({
                    dom: 'Bfrtip',
                    "columnDefs": [{
                        "visible": true,
                        "targets": 1
                    }],

                    "displayLength": 10,
                    buttons: [

                    ], "destroy": true,
                    "order": [
                        [0, 'dec']
                    ],
                    data: data
                    , columns: [
                        { "data": "id" },
                        { "data": "name" },
                        { "data": "specialization" },
                        { "data": "address" },
                        { "data": "city" },
                        {
                            data: "id", render: function (data, type, row, meta) {
                                return type === 'display' ?
                                    `<input type='checkbox' value='${data}'  onchange="addDoctor(${data})"   id='_${data}'/>`

                                    :
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

    function fetchChemist(event) {



        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'server/api.php', true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req = "callApi=" + JSON.stringify({ "table": "getChemistTable", eid: exID, city: event.value });
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.response);
                i = 0;
                $('#tabchemist').DataTable({
                    dom: 'Bfrtip',
                    "columnDefs": [{
                        "visible": true,
                        "targets": 1
                    }],

                    "displayLength": 10,
                    buttons: [

                    ], "destroy": true,
                    "order": [
                        [0, 'dec']
                    ],
                    data: data
                    , columns: [
                        { "data": "id" },
                        { "data": "name" },
                        { "data": "address" },
                        { "data": "city" },
                        {
                            data: "id", render: function (data, type, row, meta) {
                                return type === 'display' ?
                                    `<input type='checkbox' value='${data}'  onchange="addDoctor(${data})"   id='_${data}'/>`
                                    :
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

</script>