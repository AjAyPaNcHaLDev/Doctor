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
            <h3 class="box-title m-b-0">Add Executive</h3>
            <p class="text-muted m-b-30 font-13"> please fill all the information</p>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form onsubmit="registerUser()" id="registerUser" action="server/userCRUD.php" method="post">
                       
                        <div class="form-group">
                            <label for="exampleInputuname">Name</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="ti-user"></i></div>
                        <input  autocomplete="off" type="text" class="form-control" id="name" name="name" placeholder="Username"> </div>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="ti-email"></i></div>
                        <input  autocomplete="off" type="email" class="form-control" id="email" name="email" placeholder="Enter email" required> </div>
                </div>
                <div class="form-group">
                    <label for="phone">Phone number</label>
                    <div class="input-group">   
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                        <input  autocomplete="off" type="number" class="form-control" id="phone" name="phone" placeholder="Enter phone" required > </div>
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
                    <label for="userType">Third Line Manager</label>
         <div class="input-group">   
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                <select style="margin-left:12px;" class="form-control" id="Tlm"  data-style="form-control" name="type" required="true">
                <option value="select" selected disabled>select</option>          
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
                    <label for="userType">Second Line Manager</label>
         <div class="input-group">   
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                <select style="margin-left:12px;" class="form-control" id="Slm"  data-style="form-control" name="type" required="true">
                <option value="select" selected disabled>select</option>          
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
                
                
                   <div class="form-group">
                    <label for="userType">First Line Manager</label>
         <div class="input-group">   
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                <select style="margin-left:12px;" class="form-control" id="Flm"  data-style="form-control" name="type" required="true">
                <option value="select" selected disabled>select</option>          
                                <?php
                                $sql = "SELECT * FROM `admin` WHERE type = '4' ";
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
                <!--        <input  autocomplete="off" type="number" class="form-control" id="rasm" name="rasm" placeholder="enter id RASM"> </div>-->
                <!--</div>-->
                <div class="form-group">
                    <label for="state">State</label>
                    <div class="input-group">   
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                      <select style="margin-left:12px;" class="form-control" id="state"  data-style="form-control" name="type"
                         onchange="fetchCity(this)"
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
                    <label for="city">City </label>
                    <div class="input-group">   
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                           <select class="form-control" name="city" id="city"><option>select</option></select>
                </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="ti-lock"></i></div>
                        <input  autocomplete="off" type="password" class="form-control" id="password" name="password" placeholder="password"> </div>
                </div>
               
                
               
            <div class="form-group">
                <ul class="icheck-list">
                <li>
                    <input  autocomplete="off" type="radio" class="check" id="status0" name="status" checked value="active" data-radio="iradio_flat-red">
                    <label for="status0">active</label>
                </li>
                <li>
                    <input  autocomplete="off" type="radio" class="check" id="status1" name="status" value="inactive"  data-radio="iradio_flat-red">
                    <label for="status1">inactive</label>
                </li>
                </ul>
                </div>
           
                <div class="form-group">
                <button type="submit" style="float:right;" id="smtbtn" name="addUser" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                 <button style="float:right;" name="addUser" type="reset" class="btn btn-error waves-effect waves-light m-r-10" onclick="resetTask()">reset</button>
                </div>
            </form>

        </div>
    </div>
    
        </div>
    </div>
    <!-- vvvvvvvvvvv -->
    <div class="col-sm-8">
        <div class="white-box">
            <h3 class="box-title m-b-0">Executive</h3>
            <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
            <div class="table-responsive">
                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                             <th>Action</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>GM</th>
                            <th>FLM</th>
                            <th>SLM</th>
                            <th>TLM</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Action</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>FLM</th>
                            <th>GM</th>
                            <th>SLM</th>
                            <th>TLM</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody >
                      
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
 .status{
float:right;
 }
    
</style>
                        
                            <!-- sample modal content -->
                            <!-- /.modal -->
                            <div id="responsive-modal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog " >
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Executive Details <span class="status">status:&nbsp;&nbsp; <span> inactive</span></span></h4>
                                            <h4>Rohit</h4>    </div>
                                        <div class="modal-body">
                                         
                                         
                                         
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                         
                            <!-- Button trigger modal -->
                        </div>

<!-- model content ended-->


<!-- ===== Right-Sidebar ===== -->
<div class="right-sidebar">
    <div class="slimscrollright">
        <div class="rpanel-title"> Add Executive Panel <span><i class="icon-close right-side-toggler"></i></span> </div>
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
let task=0;
let eid;



function fatchExecutive(){
    
 let xhr=new XMLHttpRequest();
 xhr.open('POST','server/api.php',true);
 xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
 req="callApi="+JSON.stringify({"table":"getExecutiveTable"});
 xhr.onreadystatechange = function()
       {
         if (xhr.readyState == 4 && xhr.status == 200)
         {
            var data =JSON.parse(xhr.response);   
             i=0;
$('#example23').DataTable({
    dom: 'Bfrtip',
    "columnDefs": [{
                "visible": true,
                "targets": 3    
            }],
            
            "displayLength": 20,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],"destroy": true,
        "order": [
                [0, 'dec']
            ],
    data:data
    ,columns:[
        {data: "eid" , render : function ( data, type, row, meta ) {
              return type === 'display'  ?
                '<button class="btn btn-warning" alt="default" onClick="getUserByID('+data+')"> Update &nbsp<i class="icon-user "></i></button>' :
                data;
            }},
        {"data":"eid"},
        {"data":"name"},
        {"data":"phone"},
        {"data":"email"},
        {"data":"gm_name"},
        {"data":"flm_name"},
        {"data":"slm_name"},
        {"data":"tlm_name"},
        {"data":"status"},
    ]
});
  }
       };
       xhr.send(req);
       xhr.onprogress = function(event) {
 // alert("on progress");
 };
 xhr.onerror = function() {
 alert("Request failed");
 };
    
 }
 


 fatchExecutive();


function fetchCity(event) { 
    var state =event.value
 let xhr=new XMLHttpRequest();
xhr.open('POST','server/api.php',true);
xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
 req="callApi="+JSON.stringify({"table":"location",state,type:"city"});
 xhr.send(req);

 xhr.onreadystatechange = function()
          {
            if (xhr.readyState == 4 && xhr.status == 200)
            {
                  var data =JSON.parse(xhr.response);   
                  $("#city").empty();
               $("#city").append(`<option value=''>select</option>`)
                  for(key in data){
                          $("#city").append(`<option value='${data[key].city}'>${data[key].city}</option>`)
                  }
                  
 
            }
          };
xhr.onprogress = function(event) {
    // alert("on progress");
};
xhr.onerror = function() {
  alert("Request failed");
};
 
 
}



      function  getUserByID(id){
           
             let xhr=new XMLHttpRequest();
    xhr.open('POST','server/userCRUD.php',true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    req="getUserByid="+JSON.stringify({eid:id});
    xhr.send(req);  
                  
          xhr.onreadystatechange = function()
          {
            if (xhr.readyState == 4 && xhr.status == 200)
            {
                
            var data =JSON.parse(xhr.response); 
                if(data.error==false){ 
                    data=data.data
                     const obj={
                        value:data.state
                    } 
                    fetchCity(obj) 
                    
                     setTimeout(()=>{
                    $("#name").val(data.name);
                    $("#email").val(data.email);
                    $("#phone").val(data.phone);
                    $("#day_care").val(data.day_care);
                    $("#tariff_kms").val(data.tariff_kms);
                    $("#Tlm").val(data.tlm);  
                    $("#Slm").val(data.slm); 
                    $("#Flm").val(data.flm);
                    $("#state").val(data.state);  
                    $("#password").val(data.password); 
 
                     },200) 
                          var $select = document.querySelector('#city');
                          $select.value = data.city; 
                      console.log($("#city").val())
                 
                    var $radios = $('input:radio[name=status]');
                 $radios.filter(`[value=${data.status}]`).prop('checked', true); 
                    task=1; 
                   eid=id; 
                $("#smtbtn").text("Update");
                swal("selected","","info");
                }else{
                    task=0;
                eid=null;
                swal("something went wrong","","error");
                }
                 
            } 
          } 
        } 
        

        
        <?php if (isset($_SESSION['id'])) echo "let gm='" . $_SESSION['id'] . "';";?>
  function registerUser(){
        event.preventDefault();
        const name=$('#name').val();
        const email=$('#email').val();
        const phone=$('#phone').val();
        const day_care=$('#day_care').val();
        const tariff_kms=$('#tariff_kms').val();
        const password=$('#password').val();
        const flm=$('#Flm').val();
        const slm=$('#Slm').val();
        const tlm=$('#Tlm').val();

        if(flm==null||slm==null||tlm==null){
            alert("please select FLM,SLM,TLM ")
            return
        }
        if(gm==""){
            alert("something went wrong");
            return;
        }
        var state=$('#state').val();
        var city=$('#city').val();
        var status=1;
        if ($("#status0").is(":checked")) {
           status="active";
        }else{
            status="inactive";
        
        }
 
        let xhr=new XMLHttpRequest();
        xhr.open('POST','server/userCRUD.php');
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        data="insertExecutive="+JSON.stringify({task,eid,name,email,phone,password,status,flm,slm,tlm,state,city,tariff_kms,day_care,gm});
         xhr.send(data);
        
         xhr.onreadystatechange = function()
                  {
                    if (xhr.readyState == 4 && xhr.status == 200)
                    { 
                      
                     //swal("Please Check Status",data,"info");
                     
                     const res=JSON.parse(xhr.response);
                     if(res.error==true){ 
                     swal("something went wrong",res.msg,"error");
                     }else{ 
                     swal("result",res.msg,"success");
                     }
         fatchExecutive();
            }
                  };  
        xhr.onprogress = function(event) {
            // alert("on progress");
        };
        xhr.onerror = function() {
          alert("Request failed");
        };
        
        }
          

        
        function resetTask(){
            $("#smtbtn").text("Submit");
               task=0;
                eid=null; 
        }
 
</script>