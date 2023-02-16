<?php include "./header.php"; ?>
             <style>
                .status {
                    float: right;
                }
            </style>
        <div class="page-wrapper">
 <?php  if($_SESSION['type']==1) {?>  
        <!-- TLM -->
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
                                                <th>Role</th>
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
                                                <th>Role</th>
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
        
         <?php }?>
        <!-- SLM -->
<?php  if($_SESSION['type']==1||$_SESSION['type']==2) {?>      
         
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
                                                <th>Role</th>
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
                                                <th>Role</th>
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
         
      
         <?php }?>
        <!-- FLM -->
<?php  if($_SESSION['type']==1||$_SESSION['type']==2||$_SESSION['type']==3) {?>  
         
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
                                                <th>Role</th>
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
                                                <th>Role</th>
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
       
        
         <?php }?>
<?php  if($_SESSION['type']==1||$_SESSION['type']==2||$_SESSION['type']==3||$_SESSION['type']==4) {?>  
        <!-- SE -->
        
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
                                                <th>Role</th>
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
                                                <th>Role</th>
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
        <?php }?>
    <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true" style="display: none;">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" style="text-align:center;">Work Details </h4>
                            <h4 id="user_name"></h4>
                            <h4 id="user_email"></h4>
                            <h4 id="user_phone"></h4>
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
                                            <th>Insert By</th>
                                            <th>Role</th> 
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


 <?php  /*if($_SESSION['type']==1) {?>  
    fatchExecutive(document.getElementById("month").value,"tblGM"); 
         <?php }*/?>
<?php  if($_SESSION['type']==1||$_SESSION['type']==2) {?>   
    fatchExecutive(document.getElementById("month").value,"tblTLM");  
         <?php }?>
<?php  if($_SESSION['type']==1||$_SESSION['type']==2||$_SESSION['type']==3) {?>  
    fatchExecutive(document.getElementById("month").value,"tblSLM"); 
         <?php }?>
    fatchExecutive(document.getElementById("month").value,"tblFLM"); 
<?php  if($_SESSION['type']==1||$_SESSION['type']==2||$_SESSION['type']==3||$_SESSION['type']==4) {?>  
    fatchExecutive(document.getElementById("month").value,"tblExecutive"); 
        <?php }?> 

    function fatchExecutive(month,table) { 
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'server/api.php', true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req = "callApi=" + JSON.stringify({ "table": "getWorkInfo", month ,tablefor:table});
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
                            data: "id", render: function (data, type, row, meta) {
                                const user_type=row.user_type;
                                return type === 'display' ?
                                    `<button class="btn btn-warning" alt="default" data-toggle="modal" data-target="#responsive-modal" onclick="viewExecutive(${data},${user_type}  )"  > View &nbsp<i class="icon-user " ></i></button>` :
                                    data;
                            }
                        },
                        { "data": "id" },
                        { "data": "name" },
                        { "data": "phone" },
                        { "data": "role" },
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

   


      function viewExecutive(id,user_type) {
        var month = document.getElementById("month").value;
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'server/api.php', true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req = "callApi=" + JSON.stringify({ "table": "getExecutiveWorkInfo", id,user_type, month });


        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.response); 
                document.getElementById('user_name').innerHTML = data[0].name
                document.getElementById('user_email').innerHTML = data[0].email
                document.getElementById('user_phone').innerHTML = data[0].phone
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
                        { "data": "insertby" },
                        { "data": "role" },
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