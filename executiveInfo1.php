<?php include "./header.php"; ?>
             <style>
                .status {
                    float: right;
                }
            </style>
        <!-- ===== Top-Navigation- Left-Sidebar end
===== -->
        <!-- Page Content -->
        <!-- SELF GM -->
        <?php if(isset($_SESSION['type'])) 
            {
                if($_SESSION['type']==1){
                ?>
  <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="row"> 
                        <div class="col-sm-12">
                            <div class="white-box">
                                <h3 class="box-title m-b-0">Info GM</h3>
                                <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p> <div class="form-group">
                                    <label for="userType">Choose Month</label>
                                    <div class="input-group"> 
                                        <div class="input-group-addon"><i class="icon-date"></i></div> 
                                        <input type="month" class="form-control" id="month"  value="<?=date('Y-m')?>"
                                            onchange="fatchExecutive(this.value,'tblGM')">
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="tblGM" class="display nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>View</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Total Parsent</th>
                                                <th>Visit</th>
                                                <th>Traff KMS Rs</th>
                                                <th>Total KMS</th>
                                                <th>Visit Total Rs</th>
                                                <th>DayCare Rs</th>
                                                <th>Total Day Care </th>
                                                <th>Total Rs</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>View</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Total Parsent</th>
                                                <th>Visit</th>
                                                <th>Traff KMS Rs</th>
                                                <th>Total KMS</th>
                                                <th>Visit Total Rs</th>
                                                <th>DayCare Rs</th>
                                                <th>Total Day Care </th>
                                                <th>Total Rs</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>   </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>
      
               <?php }
              
            }
        ?>

        <!-- TLM -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="row"> 
                        <div class="col-sm-12">
                            <div class="white-box">
                                <h3 class="box-title m-b-0">Info TLM</h3>
                                <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p> <div class="form-group">
                                    <label for="userType">Choose Month</label>
                                    <div class="input-group"> 
                                        <div class="input-group-addon"><i class="icon-date"></i></div> 
                                        <input type="month" class="form-control" id="month"  value="<?=date('Y-m')?>"
                                            onchange="fatchExecutive(this.value,'tblTLM')">
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="tblTLM" class="display nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>View</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Total Parsent</th>
                                                <th>Visit</th>
                                                <th>Traff KMS Rs</th>
                                                <th>Total KMS</th>
                                                <th>Visit Total Rs</th>
                                                <th>DayCare Rs</th>
                                                <th>Total Day Care </th>
                                                <th>Total Rs</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>View</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Total Parsent</th>
                                                <th>Visit</th>
                                                <th>Traff KMS Rs</th>
                                                <th>Total KMS</th>
                                                <th>Visit Total Rs</th>
                                                <th>DayCare Rs</th>
                                                <th>Total Day Care </th>
                                                <th>Total Rs</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>   </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>
        <!-- SLM -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="row"> 
                        <!-- vvvvvvvvvvv -->
                        <div class="col-sm-12">
                            <div class="white-box">
                                <h3 class="box-title m-b-0">Info SLM</h3>
                                <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>

                                <div class="form-group">
                                    <label for="userType">Choose Month</label>
                                    <div class="input-group">
                                         
                                        <div class="input-group-addon"><i class="icon-date"></i></div>

                                        <input type="month" class="form-control" id="month"  value="<?=date('Y-m')?>"
                                            onchange="fatchExecutive(this.value,'tblSLM')">
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="tblSLM" class="display nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>View</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Total Parsent</th>
                                                <th>Visit</th>
                                                <th>Traff KMS Rs</th>
                                                <th>Total KMS</th>
                                                <th>Visit Total Rs</th>
                                                <th>DayCare Rs</th>
                                                <th>Total Day Care </th>
                                                <th>Total Rs</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>View</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Total Parsent</th>
                                                <th>Visit</th>
                                                <th>Traff KMS Rs</th>
                                                <th>Total KMS</th>
                                                <th>Visit Total Rs</th>
                                                <th>DayCare Rs</th>
                                                <th>Total Day Care </th>
                                                <th>Total Rs</th>
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
        <!-- FLM -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="row">

                        <!-- vvvvvvvvvvv -->
                        <div class="col-sm-12">
                            <div class="white-box">
                                <h3 class="box-title m-b-0">Info FLM</h3>
                                <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>

                                <div class="form-group">
                                    <label for="userType">Choose Month</label>
                                    <div class="input-group">
                                         
                                        <div class="input-group-addon"><i class="icon-date"></i></div>

                                        <input type="month" class="form-control" id="month"  value="<?=date('Y-m')?>"
                                            onchange="fatchExecutive(this.value,'tblFLM')">
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="tblFLM" class="display nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>View</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Total Parsent</th>
                                                <th>Visit</th>
                                                <th>Traff KMS Rs</th>
                                                <th>Total KMS</th>
                                                <th>Visit Total Rs</th>
                                                <th>DayCare Rs</th>
                                                <th>Total Day Care </th>
                                                <th>Total Rs</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>View</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Total Parsent</th>
                                                <th>Visit</th>
                                                <th>Traff KMS Rs</th>
                                                <th>Total KMS</th>
                                                <th>Visit Total Rs</th>
                                                <th>DayCare Rs</th>
                                                <th>Total Day Care </th>
                                                <th>Total Rs</th>
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
        <!-- SE -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="row">

                        <!-- vvvvvvvvvvv -->
                        <div class="col-sm-12">
                            <div class="white-box">
                                <h3 class="box-title m-b-0">Info Sales Executive</h3>
                                <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>

                                <div class="form-group">
                                    <label for="userType">Choose Month</label>
                                    <div class="input-group">
                                         
                                        <div class="input-group-addon"><i class="icon-date"></i></div>

                                        <input type="month" class="form-control" id="month"  value="<?=date('Y-m')?>"
                                            onchange="fatchExecutive(this.value,'tblExecutive')">
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="tblExecutive" class="display nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>View</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Total Parsent</th>
                                                <th>Visit</th>
                                                <th>Traff KMS Rs</th>
                                                <th>Total KMS</th>
                                                <th>Visit Total Rs</th>
                                                <th>DayCare Rs</th>
                                                <th>Total Day Care </th>
                                                <th>Total Rs</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>View</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Total Parsent</th>
                                                <th>Visit</th>
                                                <th>Traff KMS Rs</th>
                                                <th>Total KMS</th>
                                                <th>Visit Total Rs</th>
                                                <th>DayCare Rs</th>
                                                <th>Total Day Care </th>
                                                <th>Total Rs</th>
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
    </div>
    <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true" style="display: none;">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Executive Details </h4>
                            <h4 id="ex_name"></h4>
                            <h4 id="ex_email"></h4>
                            <h4 id="DayCare">
                                <h4 id="TraffRs"></h4>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table id="model_table" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                        <th>Date of Visit</th>
                                            <th>Attendance</th>
                                            <th>Attendance Remark</th>
                                            <th>From</th>
                                            <th>TO</th>
                                            <th>Return To</th>
                                            <th>Tahasil</th>
                                            <th>visit_km</th>

                                        </tr>
                                    </thead>
                                   
                                    <tbody>

                                    </tbody>
                                </table>
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
   <footer class="footer t-a-c"> © 2023 Savexa pharma </footer>  
    <?php include "footer.php" ?>
</body>

</html>


//
<script>  
   date = new Date(); 
    fatchExecutive(document.getElementById("month").value,"tblGM"); 
    fatchExecutive(document.getElementById("month").value,"tblTLM"); 
    fatchExecutive(document.getElementById("month").value,"tblSLM"); 
    fatchExecutive(document.getElementById("month").value,"tblFLM"); 
    fatchExecutive(document.getElementById("month").value,"tblExecutive"); 

    function fatchExecutive(month,table) { 
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'server/api.php', true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req = "callApi=" + JSON.stringify({ "table": "getExecutiveForSales", month });
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.response);
                i = 0;
                $('#'+table).DataTable({
                    dom: 'Bfrtip',
                    "columnDefs": [{
                        "visible": true,
                        "targets": 3
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
                            data: "eid", render: function (data, type, row, meta) {


                                return type === 'display' ?
                                    '<button class="btn btn-warning" alt="default" data-toggle="modal" data-target="#responsive-modal" onclick="viewExecutive(' + data + ')"  > View &nbsp<i class="icon-user " ></i></button>' :
                                    data;
                            }
                        },
                        { "data": "eid" },
                        { "data": "name" },
                        { "data": "phone" },
                        { "data": "email" },
                        { "data": "attendances" },
                        { "data": "visits" },
                        { "data": "tariff_kms" },
                        { "data": "total_kms" },
                        { "data": "total_visit_rs" },
                        { "data": "day_care" },
                        { "data": "day_care_total" },
                        { "data": "total" },
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

   


      function viewExecutive(id) {
        var month = document.getElementById("month").value;
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'server/api.php', true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req = "callApi=" + JSON.stringify({ "table": "getExecutiveWorkInfo", id, month });


        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.response); 
                document.getElementById('ex_name').innerHTML = data[0].name
                document.getElementById('ex_email').innerHTML = data[0].email
                document.getElementById('DayCare').innerHTML = "Day Care: " + data[0].day_care
                document.getElementById('TraffRs').innerHTML = "Traff per Km: " + data[0].tariff_kms
                i = 0;
                $('#model_table').DataTable({
                    dom: 'Bfrtip',

                    "displayLength": 30,
                    buttons: [], "destroy": true,
                    "order": [
                        [0, 'dec']
                    ],
                    data: data[1]
                    , columns: [
                        { "data": "date_of_visit" },
                        { "data": "attendance" },
                        { "data": "attendance_remark" },
                        { "data": "place_from" },
                        { "data": "place_to" },
                        { "data": "place_return_to" },
                        { "data": "tahasil" },
                        { "data": "visit_km" },
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