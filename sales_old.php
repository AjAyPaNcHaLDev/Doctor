<?php include "server/conn.php"?>
<?php include "./header.php";?>
<!DOCTYPE html>
<html lang="en">
<body class="mini-sidebar fix-header">
    <link href="asset/plugins/components/datatables/jquery.dataTables.min.css " rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
   
    <!-- Preloader -->

<div class="preloader">
<div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">

<!-- ===== Top-Navigation- Left-Sidebar  ===== -->
 
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
        <form onsubmit="addSales()" id="addSales" action="server/userCRUD.php" method="post">
         
    <div class="form-group">
            <label for="date_of_visit">Select Date form calender</label>
    <div class="input-group">
        <div class="input-group-addon"><i class="ti-user"></i></div>
        
            <input type="date" class="form-control" id="choosed_date" name="date"> </div>
            <script>
         var date = new Date();
                 var currentDate = date.toISOString().slice(0,10);
        document.getElementById('choosed_date').value = currentDate;
      
            </script>
      
    </div>
         <div class="form-group">
                    <label for="userType">Choose Chemist  </label>
          <div class="table-responsive">
                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Choose</th> 
                              <th>Name</th>
                            <th>Phone</th>
                                                    </tr>
                    </thead>
                    <tbody>
                          <?php
                                $eid=$_SESSION['eid'];
            $sql="SELECT * FROM `doctors` WHERE eid='$eid' AND type='Chemist'";
            $res=mysqli_query($conn,$sql) or die("<srcipt> alert()</srcipt>");
        
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_assoc($res)){
                    $name=$row['name'];
                    $id=$row['id'];
                        $phone=$row['phone'];
                      
                         
                  echo"<tr><td style=text-align:center><input type='radio' name='Chemist' value='$name,$id' /> </td><td>$name</td><td>$phone</td></tr>";
               }
            }
            
                                ?>
                    </tbody>
                    <tfoot>
                        <tr>
                               <th>Choose</th> 
                          <th>Name</th>
                            <th>Phone</th>
                        </tr>
                    </tfoot>
                    
                   
                </table>
            </div>
        
               
            </div>
            
            
           
        <div class="form-group">
                <label for="internal_sales">Internal Sales</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="ti-user"></i></div>
            <input type="number" class="form-control" id="internal_sales" name="internal_sales" placeholder="internal sales"> </div>
    
        </div>
        
        <div class="form-group">
                <label for="doctor_remark">External Sales	</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="ti-user"></i></div>
            <input type="text" class="form-control" id="external_sales" name="external_sales	" placeholder="external sales	"> </div>
    
        </div>

         
             <div class="form-group">
                <button type="submit" style="float:right;" name="sales" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
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
<!-- ============================== -->
<?php include "footer.php"?>
</body>

</html>

<?php
echo"<input type='text' style='display:none'id='eID' value='".$_SESSION['eid']."'/>";
?>
<script>

// var id_doctor=[]; 
// function addDoctor(newItem){
    
// id_doctor.indexOf(newItem) === -1 ? id_doctor.push(newItem) : deleteItem(newItem);
  

// }


// function deleteItem(newItem){
//      indexForRemoval=id_doctor.indexOf(newItem,0);
//  id_doctor.splice(indexForRemoval,1);

// }


// addDoctor(9);
// addDoctor(3);



// var date = new Date();
//     var currentDate = date.toISOString().slice(0,10);
//     document.getElementById('date_of_visit').value = currentDate;

function addSales(){
event.preventDefault(); 
var internal_sales=$('#internal_sales').val();
var external_sales=$('#external_sales').val();
var choosed_date=$('#choosed_date').val();
var exID=$('#eID').val();

var  chemist=$('input[name="Chemist"]:checked').val()
 if( chemist==undefined){
     alert("please select one Chemist from table");
 }
 
 
  const myArray = chemist.split(",");
   
let xhr=new XMLHttpRequest();
xhr.open('POST','server/userCRUD.php');
xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
data="addSales="+JSON.stringify({exID,internal_sales,external_sales,entry_date:currentDate,chemist_name:myArray[0],chemist_id:myArray[1],choosed_date});

 
    // if(id_doctor.length==0){
    //     alert("please checked atlist one form Doctor and Chemist")
    //     return;
    // }
 
                 xhr.send(data);
                 xhr.onreadystatechange = function()
                	  	{
                	    	if (xhr.readyState == 4 && xhr.status == 200){
                
                               // alert(xhr.responseText);
                                 const res=JSON.parse(xhr.response);
                	      		   if(res.error==true){ 
                	      		   swal("something went wrong",res.msg,"error");
                	      		   }else{ 
                	      		   swal("result",res.msg,"success");
                	      		   }
                
                            }
                	    
                	  	};
                
                xhr.onerror = function() {  
                  alert("Request failed");
                };
                
                }
   
                    $(document).ready( function () {
                     $('#example23').DataTable();
                        } );
                     
                    </script>