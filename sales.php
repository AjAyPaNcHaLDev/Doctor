<?php include "server/conn.php";
 include "./header.php"; 
 $choosed_date =$internal_sales =$external_sales = "";
?>
 
        <!-- ===== Top-Navigation- Left-Sidebar end
===== -->
        <!-- Page Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Sales </h3>
                            <p class="text-muted m-b-30 font-13"> please fill all the information</p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">

                                <?php 
                                if (isset($_POST['choosed_date'])&&isset($_POST['internal_sales'])&&isset($_POST['external_sales']) ) { 
                                       $choosed_date = $_POST['choosed_date'];
                                    $internal_sales = $_POST['internal_sales'];
                                    $external_sales = $_POST['external_sales'];
                                    
                                    if( !empty($choosed_date) &&!empty($internal_sales) &&!empty($external_sales)){
                                        $admin_id = "";
                                        if (isset($_SESSION['eid'])) {
                                            $eid = $_SESSION['eid'];
                                            $role = "Executive-" . $eid;
                                        } else if (isset($_POST['eid'])) {
                                            $eid = $_POST['eid'];
                                        }
                                        if (isset($_SESSION['id'])) {
                                            $admin_id = $_SESSION['id'];
                                            $role = "Manager-" . $admin_id;
                                        } 
                                        $insertby = $_SESSION['name'];
                                        $check = "SELECT * FROM sales WHERE eid=$eid AND choosed_date='$choosed_date' ";
                                        $res = mysqli_query($conn, $check); 
                                        
                                        if (mysqli_num_rows($res) <=0) {
                                            if(!isset($_POST['sid'])){ //$_POST['sid'] stand for update only
                                                  $sql = "INSERT INTO `sales`(  `eid`, `choosed_date`, `internal_sales`, `external_sales`,  `insertby`, `role`) 
                                                VALUES ( $eid,'$choosed_date','$internal_sales','$external_sales','$insertby','$role')"; 
                                        
                                                if(mysqli_query($conn, $sql)){ 
                                                    echo "<script>alert('Sales Added')</script>";
                                                    $choosed_date =$internal_sales =$external_sales = ""; 
                                                    }else{ 
                                                    echo "<script>alert('Error while adding Sales')</script>";
                                                    } 
                                                    }else{ 
                                                    echo "<script>alert('undefind operation for insert')</script>";
                                                        } 
                                                    } else { 
                                                        if(isset($_POST['sid'])){ //$_POST['sid'] stand for update only    
                                                            $sid = $_POST['sid'];
                                                            $date = date("y-m-d h:i:sa");
 
                                                        $sql = "UPDATE `sales` SET `choosed_date`='$choosed_date',`internal_sales`='$internal_sales',
                                                        `external_sales`='$external_sales', `insertby`='$insertby',`role`='$role',
                                                        `update_at`= '$date'   WHERE id=$sid AND $eid";
                                                        if(mysqli_query($conn, $sql)){ 
                                                            echo "<script>alert('Sales Up')</script>";
                                                            $choosed_date =$internal_sales =$external_sales = ""; 
                                                            }else{ 
                                                            echo "<script>alert('Error while adding Sales')</script>";
                                                            } 
                                                        }else{ 

                                                    echo "<script>alert('Unable to Add Sales Already Added! ')</script>";
                                                            
                                                        }
                                                    }
                                                } else{
                                                    echo "<script>alert('please fill all fields')</script>";
                                                } 
                                            }  
                                        
                                ?>

                                    <form onsubmit="return addSales();"   id="addSales" method="post">
                                        
                                        <?php
                                        if (isset($_SESSION['id'])) {
                                            ?>
                                                <center> <label for="userType">Choose Sales Executive <span
                                                            style="color:blue;">Only Your Sales Executive List Showing!</span> </label></center>
                                                <div class="table-responsive">
                                                    <table id="example23" class="display nowrap" cellspacing="0"
                                                        width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Choose</th>
                                                                <th>Name</th>
                                                                <th>Phone</th>
                                                                <th>Email</th>
                                                                <th>FLM</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $id = $_SESSION['id'];
                                                            $sql = "SELECT * FROM `sale_executive` WHERE (`gm`= $id or `tlm` = $id or `flm`= $id or`slm` =$id) ";
                                                            if (isset($_GET['eid'])) {
                                                                $eid = $_GET['eid'];
                                                                $sql .= "  AND eid=$eid";
                                                            } else {
                                                                $eid = "";
                                                            }
                                                            $res = mysqli_query($conn, $sql) or die("<srcipt> alert()</srcipt>");
                                                            if (mysqli_num_rows($res) > 0) {
                                                                while ($row = mysqli_fetch_assoc($res)) {
                                                                    $name = $row['name'];
                                                                    $id = $row['eid'];
                                                                    $phone = $row['phone'];
                                                                    $email = $row['email'];
                                                                    $flm = $row['flm'];
                                                                    $query = "SELECT name as flm_name   from admin WHERE id=$flm limit 1";
                                                                    $info = mysqli_query($GLOBALS['conn'], $query) or die("<script></script");
                                                                    $flm_name = mysqli_fetch_assoc($info);
                                                                    $flm_name = $flm_name['flm_name'];
                                                                    ?><tr>
                                                                                <td style="text-align:center">  
                                                                                <?php if ($eid == $id) { ?>
                                                                                    <a href="sales.php">unselect</a>
                                                                                <?php } else {
                                                                                    ?>
                                                                        
                                                                                    <a href="sales.php?eid=<?= $id ?>">select</a>
                                                                                        <?php
                                                                                }
                                                                                ?>
                                                                   
                                                                                 </td>
                                                                                <td><?= $name ?></td>
                                                                                <td><?= $phone ?></td>
                                                                                <td><?= $email ?></td>
                                                                                <td><?= $flm_name ?></td>
                                                                                </tr>
                                                                                <?php
                                                                }
                                                            }
                                                            ?>
                                                        </tbody> 
                                                    </table>
                                                </div> 
                                         

                                        <?php } ?>
                                     
                                            <center> <label for="userType">  Sales   <span
                                                        style="color:blue;">Only Last 200 Enty Showing!</span> </label></center>
                                            <div class="table-responsive">
                                                <table id="example234" class="display nowrap" cellspacing="0"
                                                    width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Action</th>
                                                            <th>Choose Date</th>
                                                            <th>Internal Sales</th>
                                                            <th>External Sales</th>
                                                            <th>Insert By</th>
                                                            <th>Role</th>
                                                            <th>Insert Date</th>
                                                            <th>Update At</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        if (isset($_SESSION['eid'])) {
                                                             $eid = $_SESSION['eid'];
                                                        } else if (isset($_GET['eid'])) {
                                                            $eid = $_GET['eid']; 
                                                            echo "<input style='display:none;' type='text' name='eid' value='$eid'>";
                                                        } else {
                                                            $eid = "";
                                                        }
                                                        if (!empty($eid)) {

                                                            $sql = "SELECT * FROM `sales` WHERE  eid=$eid";
                                                            $sid = "";
                                                            if (isset($_GET['sid'])) {
                                                                $sid = $_GET['sid'];
                                                                $sql .= "  AND id=$sid";
                                                                echo "<input style='display:none;' type='text' name='sid' value='$sid'>";
                                                            }

                                                            $sql .= "  order by id desc limit 200";
                                                            $res = mysqli_query($conn, $sql) or die("<srcipt> alert()</srcipt>");

                                                            if (mysqli_num_rows($res) > 0) {
                                                                while ($row = mysqli_fetch_assoc($res)) {
                                                                    ?> 
                                                                             <tr>
                                                                                <td style="text-align:center">  
                                                                                <?php if ($sid == $row['id']) { ?>
                                                                                    <a href="sales.php?eid=<?= $eid ?>">unselect</a>
                                                                                    <?php
                                                                                    $choosed_date = $row['choosed_date'];
                                                                                    $internal_sales = $row['internal_sales'];
                                                                                    $external_sales = $row['external_sales'];
                                                                                } else {
                                                                                    ?>  
                                                                                    <a href="sales.php?eid=<?= $eid ?>&sid=<?= $row['id'] ?>">update</a>
                                                                                        <?php
                                                                                }
                                                                                ?> 
                                                                                 </td>
                                                                                <td><?= $row['choosed_date'] ?></td>
                                                                                <td><?= $row['internal_sales'] ?></td>
                                                                                <td><?= $row['external_sales'] ?></td>
                                                                                <td><?= $row['insertby'] ?></td>
                                                                                <td><?= $row['role'] ?></td>
                                                                                <td><?= $row['entry_date'] ?></td>
                                                                                <td><?= $row['update_at'] ?></td>
                                                                                </tr> 
                                                                                <?php
                                                                }
                                                            }
                                                        }
                                                        ?>
                                                    </tbody> 
                                                </table>
                                            </div>  

                                           
                                        <div class="form-group">
                                            <label for="date_of_visit">Select Date form calender</label>
                                             <script>
                                                var date = new Date();
                                                var currentDate = date.toISOString().slice(0, 10);
                                                document.getElementById('choosed_date').value = currentDate; 
                                            </script> 
                                            
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-user"></i></div> 
                                                <input type="date" class="form-control" id="choosed_date" name='choosed_date'value="<?= $choosed_date ?>"  >
                                            </div>
                                        </div>
                                        

                                        <div class="form-group">
                                            <label for="internal_sales">Internal Sales</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                                <input type="number" class="form-control" id="internal_sales"
                                                    name="internal_sales" placeholder="internal sales" value="<?= $internal_sales ?>"  >
                                            </div> 
                                        </div>

                                        <div class="form-group">
                                            <label for="doctor_remark">External Sales </label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="ti-user"></i></div>
                                                    <input type="text" class="form-control" id="external_sales"
                                                        name="external_sales" placeholder="external sales" value="<?= $external_sales ?>" >
                                                </div>
                                        </div>
                                        <div style="float:right">
                                        <?php if(isset($_POST['sid'])||isset($_GET['sid'])){
                                               ?>  
                                               <a  href="sales.php"  name="sales" class="btn btn-warning waves-effect waves-light m-r-10">Cancel </a>
                                             <button type="submit"   name="sales" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                              
                                               <?php 
                                          } else{
                                            ?>
                                            <button type="submit"   name="sales" class="btn btn-success waves-effect waves-light m-r-10">Add New</button>
                                            <?php
                                          } ?>
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
                        <div class="rpanel-title"> Service Panel <span><i
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
    <!-- ============================== -->
    <?php include "footer.php" ?>
</body>

</html>

<script>


     function addSales() {
        event.preventDefault();
        var internal_sales = $('#internal_sales').val();
        var external_sales = $('#external_sales').val();
        var choosed_date = $('#choosed_date').val();
       if(!internal_sales||!external_sales||!choosed_date){
        alert("Please select Date and fill Internal or External Sales!")
        return false;
    }
    event.currentTarget.submit();
     }


    $(document).ready(function () {
        $('#example23').DataTable();
        $('#example234').DataTable();
    });

</script>