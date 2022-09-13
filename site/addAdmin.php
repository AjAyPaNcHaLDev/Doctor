<!DOCTYPE html>
<html lang="en">
<body class="mini-sidebar fix-header">
    <link href="../plugins/components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
   
    <!-- Preloader -->

<div class="preloader">
<div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">

<!-- ===== Top-Navigation- Left-Sidebar  ===== -->

<?php include "./header.php";?>
<!-- ===== Top-Navigation- Left-Sidebar end
===== -->
<!-- Page Content -->
<div class="page-wrapper">
<div class="container-fluid">
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            </div>
     <?php


if(isset($_SESSION["session_status"]))
if($_SESSION["session_status"]){
 
}else{
 header("location:login.php");
}
 

?>

<div class="row">
<div class="col-md-4">
        <div class="white-box">
            <h3 class="box-title m-b-0">Add Admin</h3>
            <p class="text-muted m-b-30 font-13"> please fill all the information</p>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form onsubmit="registerUser()" id="registerUser" action="server/userCRUD.php" method="post">
                       
                        <div class="form-group">
                            <label for="exampleInputuname">Name</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="ti-user"></i></div>
                        <input type="text" class="form-control" id="name" name="name" placeholder="name"> </div>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="ti-email"></i></div>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"> </div>
                </div>
                <div class="form-group">
                    <label for="phone">Phone number</label>
                    <div class="input-group">   
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter phone"> </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="ti-lock"></i></div>
                        <input type="password" class="form-control" id="password" name="password" placeholder="password"> </div>
                </div>
               
                
                <div class="form-group">
                    <label for="userType">Choose Admin type</label>
         
                <select style="margin-left:12px;" class="selectpicker" id="type"  data-style="form-control" name="type" required="true">
                <option value="select">select</option>                
                <option value="REGIONAL MANAGER">REGIONAL MANAGER</option>
                                <option value="ASM">ASM</option>
                            </select> 
            
            </div>
            <div class="form-group">
                <ul class="icheck-list">
                <li>
                    <input type="radio" class="check" id="status0" name="status" value="0" data-radio="iradio_flat-red">
                    <label for="status0">active</label>
                </li>
                <li>
                    <input type="radio" class="check" id="status1" name="status" value="1" checked data-radio="iradio_flat-red">
                    <label for="status1">disabled</label>
                </li>
                </ul>
                </div>
           <div id="alert"></div>
                <div class="form-group">
                <button type="submit" style="float:right;" name="addUser" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                </div>
            </form>

        </div>
    </div>
    
        </div>
    </div>
    <!-- vvvvvvvvvvv -->
    <div class="col-sm-8">
        <div class="white-box">
            <div class="table-responsive">
                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Date</th>
                             <th>Edit</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Edit</th>
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
<!-- ===== Right-Sidebar ===== -->
<div class="right-sidebar">
    <div class="slimscrollright">
        <div class="rpanel-title"> Service Panel <span><i class="icon-close right-side-toggler"></i></span> </div>
        <div class="r-panel-body">
        
        </div>
    </div>
</div>
<!-- ===== Right-Sidebar-End ===== -->
</div>
<!-- /.container-fluid -->
<footer class="footer t-a-c"> © 2017 Cubic Admin
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
<script src="js/custom.js"></script>
<!-- ===== Plugin JS ===== -->
<!-- ===== Style Switcher JS ===== -->
<script src="../plugins/components/styleswitcher/jQuery.style.switcher.js"></script>
<script src="../plugins/components/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

        <script src="../plugins/components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>


<script>

function registerUser(){
event.preventDefault();
var name=$('#name').val();
var email=$('#email').val();
var phone=$('#phone').val();
var password=$('#password').val();
var type=$('#type').val();
if(type==="select"){
  alert("please select admin type")
    return;
}

var status=1;
if ($("#status0").is(":checked")) {
   status=0;

}else{
    status=1;

}   

let xhr=new XMLHttpRequest();
xhr.open('POST','server/userCRUD.php');
xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
data="insertAdmin="+JSON.stringify({name,email,phone,password,type,status});

 xhr.send(data);

 xhr.onreadystatechange = function()
	  	{
	    	if (xhr.readyState == 4 && xhr.status == 200)
	    	{
	      		alert(xhr.responseText);
fatchAdmins();
}
	  	};
xhr.onprogress = function(event) {
    // alert("on progress");
};
xhr.onerror = function() {
  alert("Request failed");
};

}

function fatchAdmins(){
 
 let xhr=new XMLHttpRequest();
 xhr.open('POST','server/api.php',true);
 xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
 req="callApi="+JSON.stringify("{table:getAdminTable}");
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
                "targets": 2    
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
        {"data":"id"},
        {"data":"type"},
        {"data":"name"},
        {"data":"phone"},
        {"data":"email"},
        {"data":"status"},
        {"data":"date"},
        {data: "id" , render : function ( data, type, row, meta ) {
              return type === 'display'  ?
                '<button class="btn btn-warning" onClick="alert('+data+')"> Edit &nbsp<i class="icon-user "></i></button>' :
                data;
            }},
    ]
});


//  result.forEach(element => {
    // const row = document.createElement("tr");
    // const serial = document.createElement("td");
    // serial.appendChild(document.createTextNode(i));
    // const type = document.createElement("td");
    // type.appendChild(document.createTextNode(element.type));
    // const name = document.createElement("td");
    // name.appendChild(document.createTextNode(element.name));
    // const phone = document.createElement("td");
    // phone.appendChild(document.createTextNode(element.phone));
    // const email = document.createElement("td");
    // email.appendChild(document.createTextNode(element.email));
    // const id = document.createElement("td");
    // id.appendChild(document.createTextNode(element.id));
    // const status = document.createElement("td");
    // status.appendChild(document.createTextNode(element.status));
    // const date = document.createElement("td");
    // date.appendChild(document.createTextNode(element.date));
    //     row.appendChild(serial)
    //     row.appendChild(id);
    //     row.appendChild(type)
    //     row.appendChild(name)
    //     row.appendChild(phone)
    //     row.appendChild(email)
    //     row.appendChild(status)
    //     row.appendChild(date)
       
//     $("#tableBody").append(row);
//     //  $("#tableBody").append("<tr><td>"+i+"</td><td>"+element.id+"</td><td>"+element.type+"</td><td>"+element.name+"</td><td>"+element.phone+"</td><td>"+element.email+"</td><td>"+element.id+"</td><tr>");
//     //  tbody.innerHTML +=("<tr><td>"+i+"</td><td>"+element.id+"</td><td>"+element.type+"</td><td>"+element.name+"</td><td>"+element.phone+"</td><td>"+element.email+"</td><td>"+element.id+"</td><tr>");
//  i++;
//  });

 
         }
       };
       xhr.send(req);
       xhr.onprogress = function(event) {
 // alert("on progress");
 };
 xhr.onerror = function() {
 alert("Request failed");
 };

// $('#myTable').DataTable({
//     ajex:"server/api.php",
//     type: 'POST',
//     data:"callApi="+JSON.stringify("{table:getAdminTable}")
//     ,columns:[
//         {"data":"serial"},
//         {"data":"id"},
//         {"data":"type"},
//         {"data":"name"},
//         {"data":"phone"},
//         {"data":"email"},
//         {"data":"status"},
//         {"data":"date"},
//     ]
// });
// $('#example').DataTable({
//         ajax: 'data/arrays.txt',
//     });





 }
 



 

fatchAdmins();
</script>


<script>
    $(function() {
        

        $('#example23 tbody').on('click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
    });
    
    </script>