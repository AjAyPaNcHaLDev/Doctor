<?php include "server/conn.php"?>
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
<div class="col-md-8">
        <div class="white-box">
            <h3 class="box-title m-b-0">My Tour Plan</h3>
            <p class="text-muted m-b-30 font-13"> please fill all the information</p>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
    <form onsubmit="registerUser()" id="registerUser" action="server/userCRUD.php" method="post">
        

    <div class="form-group">
            <label for="exampleInputuname">Select Date form calender</label>
    <div class="input-group">
        <div class="input-group-addon"><i class="ti-user"></i></div>
        
        <input type="date" class="form-control" id="date_of_visit" name="date"  > </div>
        <script>
                                var date = new Date();
    var currentDate = date.toISOString().slice(0,10);
    document.getElementById('date_of_visit').value = currentDate;
        </script>
</div>


          
    
        <div class="form-group" style="display:none">
                <label for="exampleInputuname"></label>
        <div class="input-group">
            <div class="input-group-addon"><i class="ti-user"></i></div>
            <input type="text" class="form-control" id="name" name="name" placeholder="name"   value=<?php  echo $_SESSION['eid'] ?>> </div>
    
        </div>
    
        <div class="form-group">
                <label for="place_from">Place From</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="ti-user"></i></div>
            <input type="text" class="form-control" id="place_from" name="place_from" placeholder="From"> </div>
    
        </div>
        <div class="form-group">
                <label for="place_to">Place To</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="ti-user"></i></div>
            <input type="text" class="form-control" id="place_to" name="place_to" placeholder="To"> </div>
    
        </div>
        <div class="form-group">
                <label for="price">Price</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="ti-user"></i></div>
            <input type="text" class="form-control" id="price" name="price" placeholder="price"> </div>
    
        </div>
        <div class="form-group">
                <label for="doctor_remark">Doctor Remarks</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="ti-user"></i></div>
            <input type="text" class="form-control" id="doctor_remark" name="doctor_remark" placeholder="Doctor Remark"> </div>
    
        </div>

        <div class="form-group">
                <label for="remarks">Tour Remarks</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="ti-user"></i></div>
            <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Remark"> </div>
    
        </div>
        <div class="row">
                                
        <label for="exampleInputuname">Doctors</label>
                      <table class="table color-table primary-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Spaclization / Type</th>
                                            <th>Address</th>
                                            <th>Mark</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                              <?php 
                                    $eid=$_SESSION['eid'];
            $sql="SELECT * FROM doctors WHERE eid=$eid  AND type='doctor'";

            $send=mysqli_query($conn,$sql) or die("faild");

            if(mysqli_num_rows($send)>0){
                $i=1;
                while ($row=mysqli_fetch_assoc($send)) {
                    $name=$row['name'];
                    $id=$row['id'];
                    $specialization=$row['specialization'];
                    $address=$row['address'];
               echo "<tr><td>$i</td> <td>{$name}</td> <td>{$specialization}</td><td>{$address}</td><td><input value='{$id}' onchange='addDoctor({$id})' type='checkbox' id='_{$id}'></td></tr>";
            $i++;
                  }
            }else{
                echo "<tr><td>null</td> <td>null</td> <td>null</td><td>null</td></tr>";

            }         
             ?>
               </tbody>
                                </table>
             
                                <label for="exampleInputuname">Doctors</label>
                      <table class="table color-table primary-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Mark</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                              <?php 
                                    // $eid=$_SESSION['eid'];
                        $sql="SELECT * FROM doctors WHERE eid=$eid  AND type='chemeisty'";

            $send=mysqli_query($conn,$sql) or die("faild");

            if(mysqli_num_rows($send)>0){
                $i=1;
                while ($row=mysqli_fetch_assoc($send)) {
                    $name=$row['name'];
                    $id=$row['id'];
                    $address=$row['address'];
               echo "<tr><td>$i</td> <td>{$name}</td> <td>{$address}</td><td><input value='{$id}' onchange({id}) type='checkbox' id='_{$id}'></td></tr>";
            $i++;
                  }
            }else{
                echo "<tr><td>null</td> <td>null</td> <td>null</td><td>null</td></tr>";

            }         
             ?>
               </tbody>
                                </table>

            </form>


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

var arr=[3,43,55,66,54,3];
function addDoctor(id){
    alert("pk")
for(i=0;i<arr.length;i++){
   if(arr[i]==)
}
}



addDoctor(9);
arr.push(343333);
arr.remove(54)
addDoctor(9);



</script>


