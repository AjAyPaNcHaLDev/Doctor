<?php
include "conn.php";
include("../session.php");
function getTable($sql)
{
  $sql;
    $myarray = array();
    $data = mysqli_query($GLOBALS['conn'], $sql) or die("some thik went wronge");
    while ($row = mysqli_fetch_assoc($data)) {
        $myarray[] = ($row);
    }

    print_r(json_encode($myarray));

}
if (isset($_POST["callApi"])) {

    $arr = array();
    $arr = json_decode($_POST['callApi']);
    $tab = $arr->table;

    switch ($tab) {
        case "getExecutiveTable":
            // $join ="SELECT * FROM sale_executive INNER JOIN admin  ON sale_executive.under_asm = admin.id ORDER BY eid DESC";
            $sql = "SELECT * FROM sale_executive   ORDER BY eid DESC";
            getExecutive($sql);
            break;

        case "gm_table":
            $sql = "SELECT * FROM admin WHERE type=1 ORDER BY id DESC";

            getTable($sql);
            break;
        case "Tlm_table":
            $sql = "SELECT * FROM admin WHERE type=2 ORDER BY id DESC";

            getTable($sql);
            break;
        case "Slm_table":

            $sql = "SELECT * FROM admin WHERE type=3 ORDER BY id DESC";
            getTable($sql);
            break;
        case "Flm_table":

            $sql = "SELECT * FROM admin WHERE type=4 ORDER BY id DESC";
            getTable($sql);
            break;

        case "getChemistTable":
            
            if (empty($arr->eid) ) {
                $admin = $_SESSION['id'];

                $sql="SELECT eid  FROM sale_executive  WHERE flm=$admin or gm=$admin or  slm=$admin or tlm=$admin";
                $sql=mysqli_query($conn,$sql);
                $everyExecutive=array();
                while($row=mysqli_fetch_assoc($sql)){
                    $everyExecutive[]=$row['eid'];
                }
                $everyExecutive=implode(",",$everyExecutive);
                  $sql = "SELECT * FROM doctors WHERE type='Chemist' AND eid in ($everyExecutive) ORDER BY id DESC";
                getTable($sql);
            } else {
                $sql="SELECT * FROM doctors WHERE type='Chemist' "; 
                if(!empty($arr->eid)){
                    $eid=$arr->eid; 
                    $sql .="  AND  eid=${eid}"; 
                }

                if(!empty($arr->city)){
                    $city=$arr->city;
                     $sql .="  AND city='${city}'";
                }
                getTable($sql);
            }
            break;
        case "getDoctorTable":
            
             
            if (empty($arr->eid) ) {
                $admin = $_SESSION['id'];

                $sql="SELECT eid  FROM sale_executive  WHERE flm=$admin or slm=$admin or gm=$admin or tlm=$admin";
                $sql=mysqli_query($conn,$sql);
                $everyExecutive=array();
                while($row=mysqli_fetch_assoc($sql)){
                    $everyExecutive[]=$row['eid'];
                }
                $everyExecutive=implode(",",$everyExecutive);
                $sql = "SELECT * FROM doctors WHERE type='doctor' AND eid in ($everyExecutive) ORDER BY id DESC";
                getTable($sql);
            } else { 
                
                    $sql="SELECT * FROM doctors WHERE type='doctor' "; 
                    if(!empty($arr->eid)){
                        $eid=$arr->eid; 
                        $sql .="  AND  eid=${eid}"; 
                    }

                    if(!empty($arr->city)){
                        $city=$arr->city;
                        $sql .="  AND city='${city}'";
                    }
              
                getTable($sql);
            }
            break;
        case "getTourPlan":
            
            $date = $arr->date;
            $sql="SELECT * FROM tour_plan   WHERE date_of_visit='${date}' ";
            if (isset($_SESSION['eid'])) {
                $eid=$_SESSION['eid'];
                $sql .= " AND eid=${eid} ";
            }
            if (isset($_SESSION['id'])) {
                $id=$_SESSION['id'];
                $id_exe = "SELECT eid FROM sale_executive WHERE flm=$id or gm=$id or  slm=$id or tlm=$id";
                $id_exe = mysqli_query($conn, $id_exe);
                $everyExecutive = array();
                while ($row = mysqli_fetch_assoc($id_exe)) {
                    $everyExecutive[] = $row['eid'];
                }
                $everyExecutive = implode(",", $everyExecutive); 
                $sql .= "AND (eid in ($everyExecutive)   OR admin_id=${id})   ";
            }
          
            getTable($sql);

            break;
        case "id_doctor":
            $id = $arr->id;
            $sql = "SELECT * FROM `doctors` WHERE `id` in (${id} ) ";

            getTable($sql);

            break;
        case "location":

            switch ($arr->type) {
                case "city":
                    $state = $arr->state;
                    $sql = "SELECT DISTINCT  city FROM `location` WHERE state = '$state'  ";
                    break;
                case "tahasil":
                    $city = $arr->city;
                    $sql = "SELECT DISTINCT  	tahasil	 FROM `location` WHERE city = '$city'  ";
                    break;
            }

            //  $sql = "SELECT DISTINCT  city FROM `location` WHERE state = '$state'  ";

            getTable($sql);

            break;
        case "getExecutiveForSales":
            $month = $arr->month;
             $sql = "SELECT DISTINCT eid ,admin_id FROM `tour_plan` WHERE `date_of_visit` like '%$month-%'"; 
            getExecutiveForSales($sql, $month); 
            break;
        case "getExecutiveWorkInfo":
            $eid = $arr->id;
            $month = $arr->month;
            getExecutiveWorkInfo($eid, $month); 
            break; 
        case "parent": 
            $type = $arr->type; 
            $sql = "SElECT name ,id FROM admin WHERE type=$type";
            getTable($sql); 
            break;
    }



}

function getExecutive($sql)
{

    $myarray = array();

    $data = mysqli_query($GLOBALS['conn'], $sql) or die("some thik went wronge 1");
    $result = array();
    while ($row = mysqli_fetch_assoc($data)) {
        $row['eid'];
        $row['name'];
        $row['email'];
        $row['phone'];
        $tlm = $row['tlm'];
        $slm = $row['slm'];
        $flm = $row['flm'];
        $gm =  (int)$row['gm'];
        $row['status'];
        
        $query = "SELECT name as gm_name from admin WHERE id=$gm limit 1";
        $info = mysqli_query($GLOBALS['conn'], $query) or die("some thik went wronge q1 "); 
       
        if(mysqli_num_rows($info)>=0) 
          {
          $gm_name = mysqli_fetch_assoc($info);
            $gm_name = $gm_name['gm_name'];
          }else
           $gm_name ="";

        $query = "SELECT name as tlm_name   from admin WHERE id=$tlm limit 1";
        $info = mysqli_query($GLOBALS['conn'], $query) or die("some thik went wronge q2");
        if(mysqli_num_rows($info)>0) 
          {
          $tlm_name = mysqli_fetch_assoc($info);
          $tlm_name=$tlm_name['tlm_name'];
        } else
            $tlm_name = "";

        $query = "SELECT name as slm_name   from admin WHERE id=$slm limit 1";
        $info = mysqli_query($GLOBALS['conn'], $query) or die("some thik went wronge q3");
        if(mysqli_num_rows($info)>0)
          {
       $slm_name = mysqli_fetch_assoc($info);   
       $slm_name=$slm_name['slm_name'];
          }
          else
        $slm_name = array("slm_name" => "");
       
        
        $query = "SELECT name as flm_name   from admin WHERE id=$flm limit 1";
        $info = mysqli_query($GLOBALS['conn'], $query) or die("some thik went wronge q4"); 
        if(mysqli_num_rows($info)>0)
          {
       $flm_name = mysqli_fetch_assoc($info);  
       $flm_name=$flm_name['flm_name'];
          }
          else
        $flm_name = array("flm_name" => "");
        
        $myarray[] = array(
            "eid" => $row['eid'],
            "name" => $row['name'],
            "email" => $row['email'],
            "phone" => $row['phone'],
            "status" => $row['status'],
            "tlm_name" => $tlm_name,
            "slm_name" => $slm_name,
            "flm_name" => $flm_name,
            "gm_name" => $gm_name
        );

    }

    print_r(json_encode($myarray));

}


function getExecutiveForSales($sql, $month)
{
    $myarray = array();
    $data = mysqli_query($GLOBALS['conn'], $sql) or die("some thik went wronge");
    $result = array();
// echo $sql;
// return;
    while ($row = mysqli_fetch_assoc($data)) {

        $eid = $row['eid'];
        $admin_id = $row['admin_id'];
        if(!empty($eid)){ 
            $exQuery = "SELECT * FROM sale_executive WHERE eid='$eid' ";
            $exQuery = mysqli_query($GLOBALS['conn'], $exQuery) or die("some thik went wronge exQuery 1");
            $exQuery = mysqli_fetch_assoc($exQuery); 
            $total_day_work = mysqli_num_rows(mysqli_query($GLOBALS['conn'], "SELECT DISTINCT date_of_visit FROM `tour_plan` WHERE `date_of_visit` like '%$month-%' AND eid=$eid AND 	attendance=1"));
            $km_query = mysqli_query($GLOBALS['conn'], "SELECT visit_km FROM `tour_plan` WHERE `date_of_visit` like '%$month-%' AND eid=$eid AND 	attendance=1");
            $visit_km = 0;
            while ($_km = mysqli_fetch_assoc($km_query)) {
                $visit_km +=(int) $_km['visit_km'];
            }
            $visits = mysqli_num_rows($km_query);
            $overalltotal = $total_day_work * $exQuery['day_care'] + $visit_km * $exQuery['tariff_kms'];
            $myarray[] = array(
                "eid" => $exQuery['eid'],
                "phone" => $exQuery['phone'],
                "name" => $exQuery['name'],
                "day_care" => $exQuery['day_care'],
                "email" => $exQuery['email'],
                "visits" => $visits,
                "total_kms" => $visit_km,
                "total_visit_rs" => $visit_km * $exQuery['tariff_kms'],
                "attendances" => $total_day_work,
                "tariff_kms" => $exQuery['tariff_kms'],
                "day_care_total" => $total_day_work * $exQuery['day_care'],
                "total" => $overalltotal 
            );
        }
        if(!empty($admin_id)){
            $admQuery = "SELECT * FROM admin WHERE id='$admin_id' ";
            $admQuery = mysqli_query($GLOBALS['conn'], $admQuery) or die("some thik went wronge admQuery 1");
            $admQuery = mysqli_fetch_assoc($admQuery); 
            $total_day_work = mysqli_num_rows(mysqli_query($GLOBALS['conn'], "SELECT DISTINCT date_of_visit FROM `tour_plan` WHERE `date_of_visit` like '%$month-%' AND admin_id=$admin_id AND 	attendance=1"));
            $km_query = mysqli_query($GLOBALS['conn'], "SELECT visit_km FROM `tour_plan` WHERE `date_of_visit` like '%$month-%' AND admin_id=$admin_id AND 	attendance=1");
            $visit_km = 0;
            while ($_km = mysqli_fetch_assoc($km_query)) {
                $visit_km +=(int) $_km['visit_km'];
            }
            $visits = mysqli_num_rows($km_query);
            $overalltotal = $total_day_work * $admQuery['day_care'] + $visit_km * $admQuery['tariff_kms'];
            $myarray[] = array(
                "eid" => $admQuery['admin_id'],
                "phone" => $admQuery['phone'],
                "name" => $admQuery['name'],
                "day_care" => $admQuery['day_care'],
                "email" => $admQuery['email'],
                "visits" => $visits,
                "total_kms" => $visit_km,
                "total_visit_rs" => $visit_km * $admQuery['tariff_kms'],
                "attendances" => $total_day_work,
                "tariff_kms" => $admQuery['tariff_kms'],
                "day_care_total" => $total_day_work * $admQuery['day_care'],
                "total" => $overalltotal
            );
        } 

    }

    print_r(json_encode($myarray));

}


function getExecutiveWorkInfo($eid, $month)
{

    $myarray = array();
    $executive_info = mysqli_query($GLOBALS['conn'], "SELECT * FROM sale_executive WHERE eid=$eid") or die("some thik went wronge ff");


    $executive_info = mysqli_fetch_assoc($executive_info);

    $quary = mysqli_query($GLOBALS['conn'], "SELECT * FROM `tour_plan` WHERE `date_of_visit` like '%$month-%' AND eid=$eid  ");

    while ($row = mysqli_fetch_assoc($quary)) {
        $myarray[] = $row;

    }
    print_r(json_encode(array($executive_info, $myarray)));
}






?>