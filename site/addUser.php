<!DOCTYPE html>
<html lang="en">
<body class="mini-sidebar fix-header">
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
echo"ok";
}else{
echo" yah not ok";
}
else echo"not ok";

?>

<div class="row">
<div class="col-md-4">
        <div class="white-box">
            <h3 class="box-title m-b-0">Add user</h3>
            <p class="text-muted m-b-30 font-13"> please fill all the information</p>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form onsubmit="registerUser()" id="registerUser" action="server/userCRUD.php" method="post">
                       
                        <div class="form-group">
                            <label for="exampleInputuname">Name</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="ti-user"></i></div>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Username"> </div>
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
                    <label for="userType">Choose user type</label>
         
                <select style="margin-left:12px;" class="selectpicker" data-style="form-control" name="type" required="true">
                                <option value="Admin">Admin</option>
                                <option value="REGIONAL MANAGER">REGIONAL MANAGER</option>
                                <option value="ASM">ASM</option>
                                <option value="SALE-EXECUTIVE">SALE-EXECUTIVE </option>
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
           
                <div class="form-group">
                <button type="submit" style="float:right;" name="addUser" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                </div>
            </form>

        </div>
    </div>
    
        </div>
    </div>
    <div class="col-sm-8">
                        <div class="white-box">
                            <h3 class="box-title">Danger Table</h3>
                            <p class="text-muted">Add class <code>.color-table .danger-table</code></p>
                            <div class="table-responsive">
                                <table class="table color-table danger-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Nigam</td>
                                            <td>Eichmann</td>
                                            <td>@Sonu</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Deshmukh</td>
                                            <td>Prohaska</td>
                                            <td>@Genelia</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Roshan</td>
                                            <td>Rogahn</td>
                                            <td>@Hritik</td>
                                        </tr>
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
var status=1;
if ($("#status0").is(":checked")) {
   status=0;

}else{
    status=1;

}

let xhttp=new XMLHttpRequest();
xhttp.open('POST','server/userCRUD.php');
xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
data="data="+JSON.stringify({name,email,phone,password,type,status});

xhttp.onreadystatechange=function(){
    if(this.readyState==4&&this.status==200){


}   
}

xhttp.send(data);




}
    
 
</script>