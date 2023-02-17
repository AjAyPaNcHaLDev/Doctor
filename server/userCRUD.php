<?php
include "conn.php";
include "api.php";  
if (isset($_POST["insertExecutive"])) {
    $arr = array();
    $arr = json_decode($_POST['insertExecutive']);
    $name = $arr->name;
    $email = strtolower($arr->email);
    $phone = $arr->phone;
    $day_care = $arr->day_care;
    $tariff_kms = $arr->tariff_kms;
    $password = $arr->password;
    $status = $arr->status;
    $flm = $arr->flm;
    $slm = $arr->slm;
    $tlm = $arr->tlm;
    $state = $arr->state;
    $city = $arr->city;
    $task = $arr->task;
    $gm = $arr->gm;
    $date = date("Y/m/d");



    if ($task == 0) {
        $Insert = "INSERT INTO sale_executive (name,phone,email,password ,status,state,city,gm,flm,slm,tlm,day_care,tariff_kms) VALUES
        ('{$name}' ,'{$phone}','{$email}','{$password}','{$status}','{$state}','{$city}','{$gm}','{$flm}','{$slm}','{$tlm}','{$day_care}','{$tariff_kms}')";
        $cheak = "SELECT email FROM sale_executive  WHERE email='$email' or phone='$phone'";
        $count = mysqli_query($conn, $cheak) or die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "Something went wrong {count row}"))));
        if (mysqli_num_rows($count) > 0) {
            print_r(json_encode(array("error" => true, "data" => null, "msg" => "already register email or phone")));
            exit();
        } else {
            mysqli_query($conn, $Insert) or die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "error while register new Executive"))));
            print_r(json_encode(array("error" => false, "data" => null, "msg" => "Executive registered")));
            exit();
        }
    } else if ($task == 1) {
        $eid = $arr->eid;
        $Update = "UPDATE `sale_executive` SET  `name`='{$name}' ,`phone`='{$phone}',`email`='{$email}',`password`='{$password}',`status`='{$status}',`state`='{$state}',`city`='{$city}',`tlm`='{$tlm}',`flm`='{$flm}',`slm`='$slm',`tariff_kms`='{$tariff_kms}',`day_care`='{$day_care}',`entry_date`='$date' WHERE eid=$eid";
        $cheak = "SELECT email FROM sale_executive  WHERE (email='$email' or phone='$phone') AND eid != $eid";
        $count = mysqli_query($conn, $cheak) or die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "unable to update executive info"))));
        if (mysqli_num_rows($count) > 0) {
            die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "already registered Details"))));
        } else {
            mysqli_query($conn, $Update) or die(print_r(json_encode(array("error" => true, "Executive Update failed "))));
            print_r(json_encode(array("error" => false, "msg" => "Executive Updated")));
            exit();
        }

    } else {
        print_r(json_encode(array("error" => true, "msg" => "Something went wrong")));
        exit();
    }


}
if (isset($_POST["insertManager"])) {
    $arr = array();
    $arr = json_decode($_POST['insertManager']);
    $name = $arr->name;
    $email = strtolower($arr->email);
    $phone = $arr->phone;
    $password = $arr->password;
    $type = $arr->type;
    $status = $arr->status;
    $parentId = $arr->underParent;
    $day_care = $arr->day_care;
    $tariff_kms = $arr->tariff_kms;
    $id = $arr->_id;
    $task = $arr->task;
    $Insert = "INSERT INTO admin (type,name,phone,email,password ,status,parentId,day_care,tariff_kms) VALUES ('{$type}','{$name}' ,'{$phone}','{$email}','{$password}','{$status}','{$parentId}','{$day_care}','{$tariff_kms}')";
    $Update = "UPDATE `admin` SET `type`='$type',`parentId`='$parentId',`name`='$name',`phone`='$phone',`email`='$email',`password`='$password',`status`='$status',`day_care`='${day_care}', `tariff_kms`='${tariff_kms}' WHERE id=$id";
    $cheak = "SELECT email FROM admin  WHERE email='$email' or phone='$phone' ";
    $count = mysqli_query($conn, $cheak) or die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "Something went wrong"))));

    if ($task == 0) {
        $cheak = "SELECT email FROM admin  WHERE email='$email' or phone='$phone' ";
        $count = mysqli_query($conn, $cheak) or die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "Something went wrong"))));
        if (mysqli_num_rows($count) > 0) {
            print_r(json_encode(array("error" => true, "data" => null, "msg" => "already registered details")));
            exit(); 
        } else {
            mysqli_query($conn, $Insert) or die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "Something went wrong while add admin"))));
            print_r(json_encode(array("error" => false, "data" => null, "msg" => "Admin Registerd")));
            exit();
        }
    } else if ($task == 1) {
        $cheak = "SELECT email FROM admin  WHERE (email='$email' or phone='$phone') AND id != $id";
        $count = mysqli_query($conn, $cheak) or die("[{msg:sql failed 0 ,error:true}]");
        if (mysqli_num_rows($count) > 0) {
            print_r(json_encode(array("error" => true, "data" => null, "msg" => "Admin add Failed due to already registerd phone or email Updated")));
            exit();
        } else {
            mysqli_query($conn, $Update) or die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "unable to update admin."))));
            print_r(json_encode(array("error" => false, "data" => null, "msg" => "Admin Updated")));
            exit();
        }
    }
}
if (isset($_POST["insertDoctor"])) {
    $arr = array();
    $arr = json_decode($_POST['insertDoctor']);
    $name = $arr->name;
    $phone = $arr->phone;
    empty($arr->dob) == true ? $dob = null : $dob = $arr->dob;
    empty($arr->specialization) == true ? $specialization = null : $specialization = $arr->specialization;
    empty($arr->qualification) == true ? $qualification = null : $qualification = $arr->qualification;
    empty($arr->doctor_category) == true ? $category = null : $category = $arr->doctor_category;
    $address = $arr->address;
    $city = $arr->city;
    $state = $arr->state;
    $email = $arr->email;
    $exID = empty($arr->exID) == true ? null : $arr->exID;
    $type = $arr->type;
    $task = $arr->task;




    if ($task == 0) {
        $Insert = "INSERT INTO doctors ( eid,name, phone,email, dob, specialization,qualification, address, state,city,type,category)
    VALUES ('{$exID}','{$name}','{$phone}','{$email}','{$dob}','{$specialization}','{$qualification}' ,'{$address}','{$state}','{$city}','{$type}','{$category}')";
        $cheak = "SELECT phone FROM doctors  WHERE email='$email'";
        $count = mysqli_query($conn, $cheak) or die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "Something went wrong {count row}"))));
        if (mysqli_num_rows($count) > 0) {
            print_r(json_encode(array("error" => true, "data" => null, "msg" => "already register email or phone")));
            exit();
        } else {
            mysqli_query($conn, $Insert) or die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "error while register "))));
            print_r(json_encode(array("error" => false, "data" => null, "msg" => "registered")));
            exit();
        }
    } else if ($task == 1) {

        $dId = $arr->dId;

        $Update = "UPDATE `doctors` SET ";
        //   $Update .=$exID!="admin"?"`eid`='$exID', ":null; 
        $Update .= "  `type`='$type',`name`='$name',`phone`='$phone',`email`='$email',`dob`='$dob',`specialization`='$specialization',`address`='$address',`state`='$state',`city`='$city',`qualification`='$qualification',`category`='$category' WHERE  id=$dId";

        $cheak = "SELECT email FROM doctors  WHERE (email='$email' or phone='$phone') AND id != $dId";
        $count = mysqli_query($conn, $cheak) or die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "unable to update Doctor or Chemist info"))));
        if (mysqli_num_rows($count) > 0) {
            print_r(json_encode(array("error" => true, "data" => null, "msg" => "already registered Details")));
            exit();
        } else {
            if (!mysqli_query($conn, $Update)) {
                print_r(json_encode(array("error" => true, "  Update failed ")));
                exit();
            }
            print_r(json_encode(array("error" => false, "msg" => "  Updated")));
            exit();
        }

    } else {
        print_r(json_encode(array("error" => true, "msg" => "Something went wrong")));
        exit();
    }





}
if (isset($_POST["registerTourPlan"])) {
    $arr = array();
    $arr = json_decode($_POST['registerTourPlan']);
    $id_doctor = implode(",", $arr->id_doctor);
    $date_of_visit = $arr->date_of_visit;
    $place_from = $arr->place_from;
    $place_to = $arr->place_to;
    $place_return_to = $arr->place_return_to;
    $doctor_remark = $arr->doctor_remark;
    $remark = $arr->remark;
    $tahasil = $arr->tahasil;
  
    if (isset($_SESSION['eid'])) {
        $exID = $_SESSION['eid'];
        $role = "SE-" . $exID;
    }else{
        $exID = $arr->exID;
    }
    if (isset($_SESSION['id'])) {
        $admin_id = $_SESSION['id'];
        $type = $_SESSION['type'];
        switch ($type) {
            case 1:
                $role = "GM-" . $admin_id;
                break;
            case 2:
                $role = "TLM-" . $admin_id;
                break;
            case 3:
                $role = "SLM-" . $admin_id;
                break;
            case 4:
                $role = "FLM-" . $admin_id;
                break;
        }
    }else{
        $admin_id ="NULL";
    }
    $insertby = $_SESSION['name'];
    $km = $arr->km;
    $attendance_remark = "Persent";
    $sql = "INSERT INTO tour_plan ( eid,admin_id, id_doctor, date_of_visit, place_from, place_to, place_return_to, doctor_remark, remark,visit_km,tahasil,attendance,attendance_remark,role,insertby)
        VALUES ({$exID},{$admin_id},'{$id_doctor}','{$date_of_visit}','{$place_from}','{$place_to}','$place_return_to' ,'{$doctor_remark}','{$remark}','{$km}','{$tahasil}',1,'$attendance_remark','{$role}','{$insertby}')";

    $check = "SELECT * FROM tour_plan WHERE date_of_visit='$date_of_visit'  AND eid=$exID";
    if (mysqli_num_rows(mysqli_query($conn, $check)) > 0) {
        print_r(json_encode(array("error" => true, "data" => null, "msg" => " On $date_of_visit this date tour plain already added.")));
        exit();  
    }
    mysqli_query($conn, $sql) or die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "failed to add DAR"))));
    print_r(json_encode(array("error" => false, "data" => null, "msg" => "DAR added")));
    exit();
}


if (isset($_POST["submitLeave"])) {
    $arr = array();
    $arr = json_decode($_POST['submitLeave']);

    if (isset($_SESSION['eid'])) {
        $eid = $_SESSION['eid'];
        $role = "SE-" . $eid;
    } else{
        $eid = "NULL";
    }

    if (isset($_SESSION['id'])) {
         $admin_id = $_SESSION['id'];
        $type = $_SESSION['type'];
        switch ($type) {
            case 1:
                $role = "GM-" . $admin_id;
                break;
            case 2:
                $role = "TLM-" . $admin_id;
                break;
            case 3:
                $role = "SLM-" . $admin_id;
                break;
            case 4:
                $role = "FLM-" . $admin_id;
                break;
        }
    } else {
         
        $admin_id = "NULL";
    }
    $insertby = $_SESSION['name'];
    $date_of_visit = $arr->date_of_visit;
    $leave = $arr->leave;
    $attendance_remark = $arr->attendance_remark;
    
    if(empty($attendance_remark)){ 
        $attendance_remark = "Leave";
    }
    $sql = "INSERT INTO tour_plan ( eid ,admin_id,date_of_visit ,attendance,attendance_remark,role,insertby) VALUES ({$eid},{$admin_id},'{$date_of_visit}',0 ,'$attendance_remark','{$role}','{$insertby}')";
    $cheak = "SELECT * FROM tour_plan  WHERE ( eid=$eid AND date_of_visit='$date_of_visit' AND attendance=0) ";
    $count = mysqli_query($conn, $cheak) or die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "Something went wrong"))));
    if (mysqli_num_rows($count) > 0) {
        // echo ("[{msg:already filled leave ,error:true}]");
        die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "leave already added"))));
    } else {
        if ($leave == true) {
            mysqli_query($conn, $sql) or die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "Something went wrong"))));

            print_r(json_encode(array("error" => false, "data" => null, "msg" => "Leave added")));
            exit();
        } else {
            print_r(json_encode(array("error" => true, "data" => null, "msg" => "leave not accepted  by server leave must be {leave:true}")));
            exit();
        }
    }



}
if (isset($_POST['getUserByid'])) {
    $arr = array();
    $arr = json_decode($_POST['getUserByid']);
    $eid = $arr->eid;
    $sql = "SELECT * FROM `sale_executive` WHERE  eid=$eid   ";
    $res = mysqli_query($conn, $sql) or die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "Something went wrong"))));
    if (mysqli_num_rows($res) > 0) {
        print_r(json_encode(array("error" => false, "data" => mysqli_fetch_assoc($res))));
    } else {
        print_r(json_encode(array("error" => true, "data" => null, "msg" => "No   Adrress Found")));
        exit();
    }
}
if (isset($_POST['getAdminByID'])) {
    $arr = array();
    $arr = json_decode($_POST['getAdminByID']);
    $id = $arr->_id;
    $sql = "SELECT * FROM `admin` WHERE  id=$id   ";
    $res = mysqli_query($conn, $sql) or die("query error");
    if (mysqli_num_rows($res) > 0) {
        print_r(json_encode(array("error" => false, "data" => mysqli_fetch_assoc($res))));
    } else {

        print_r(json_encode(array("error" => true, "data" => null, "msg" => "No user Found")));
        exit();
    }
}
if (isset($_POST['getDoctorByid'])) {
    $arr = array();
    $arr = json_decode($_POST['getDoctorByid']);
    $id = $arr->id;
    $sql = "SELECT * FROM `doctors` WHERE  id=$id   ";
    $res = mysqli_query($conn, $sql) or die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "Something went wrong"))));
    if (mysqli_num_rows($res) > 0) {
        print_r(json_encode(array("error" => false, "data" => mysqli_fetch_assoc($res))));
    } else {
        print_r(json_encode(array("error" => true, "data" => null, "msg" => "No   Adrress Found")));
        exit();
    }
}

// if (isset($_POST["addSales"])) {
//     $arr = array();
//     $arr = json_decode($_POST['addSales']);
//     $internal_sales = $arr->internal_sales;
//     $external_sales = $arr->external_sales;
//     $entry_date = $arr->entry_date;
//     $chemist_name = $arr->chemist_name;
//     $chemist_id = $arr->chemist_id;
//     $exID = $arr->exID;
//     $choosed_date = $arr->choosed_date;
//     $sql = "INSERT INTO sales ( eid, chemist_id, entry_date, internal_sales, external_sales,  chemist_name,choosed_date)
//         VALUES ('{$exID}','{$chemist_id}','{$entry_date}','{$internal_sales}','{$external_sales}' ,'{$chemist_name}','{$choosed_date}')";
//     mysqli_query($conn, $sql) or die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "Something went wrong"))));
//     print_r(json_encode(array("error" => false, "data" => null, "msg" => "Sales Added")));exit();
// }

//  if (isset($_POST["addSales"])) {
//     $arr = array();
//     $arr = json_decode($_POST['addSales']);
//     $internal_sales = $arr->internal_sales;
//     $external_sales = $arr->external_sales;
//     $entry_date = $arr->entry_date; 
//     $adm = $arr->adm;
//     $exID = $arr->exID;
//     $choosed_date = $arr->choosed_date;
//     $sql = "INSERT INTO sales ( eid, admin_id, entry_date, internal_sales, external_sales,  choosed_date)
//         VALUES ('{$exID}','{$adm}','{$entry_date}','{$internal_sales}','{$external_sales}' ,'{$choosed_date}')";
//     mysqli_query($conn, $sql) or die(print_r(json_encode(array("error" => true, "data" => null, "msg" => "Something went wrong"))));
//     print_r(json_encode(array("error" => false, "data" => null, "msg" => "Sales Added")));exit();
// } 
?>