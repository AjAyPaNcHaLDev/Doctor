<?php
include "conn.php";
include "api.php";


// if(isset($_POST["insertUser"])){
//     $arr=array();
//     $arr=json_decode($_POST['insertUser']);
//     $name =$arr->name;
//     $email =strtolower($arr->email);
//     $phone =$arr->phone;
//     $password =$arr->password;
//     $type =$arr->type;
//     $status =$arr->status;


//     if($type!=="SALE-EXECUTIVE"){
//         $sql="INSERT INTO admin (type,name,phone,email,password ,status) VALUES ('{$type}','{$name}' ,'{$phone}','{$email}','{$password}','{$status}')";
//         $cheak="SELECT email FROM admin  WHERE email='$email'";
//         $count=mysqli_query($conn,$cheak) or die("errror");
//         if (mysqli_num_rows($count)>0) {
//         echo("already registered email id". $type);
//         }else{
//             mysqli_query($conn,$sql) or die("errror");
//             getAdminTable();
//         }
//     }else{
//         $sql="INSERT INTO sale_executive (type,name,phone,email,password ,status) VALUES ('{$type}','{$name}' ,'{$phone}','{$email}','{$password}','{$status}')";
//         $cheak="SELECT email FROM sale_executive  WHERE email='$email'";
//         $count=mysqli_query($conn,$cheak) or die("errror");
//         if (mysqli_num_rows($count)>0) {
//         echo("already registered email id". $type);
//         }else{
//             mysqli_query($conn,$sql) or die("errror");
//             getExecutiveTable();
//         }
//     }


// }







if(isset($_POST["insertExecutive"])){
    $arr=array();
    $arr=json_decode($_POST['insertExecutive']);
    $name =$arr->name;
    $email =strtolower($arr->email);
    $phone =$arr->phone;
    $password =$arr->password;
    $status =$arr->status;
    $sql="INSERT INTO admin (name,phone,email,password ,status) VALUES ('{$name}' ,'{$phone}','{$email}','{$password}','{$status}')";
    $cheak="SELECT email FROM admin  WHERE email='$email'";
    $count=mysqli_query($conn,$cheak) or die("[{msg:sql failed ,error:true}]");
    if (mysqli_num_rows($count)>0) {
    echo("[{msg:already registerd Executive,error:true}]");
    }else{
        mysqli_query($conn,$sql) or die("[{msg:sql failed ,error:true}]");
        echo("{msg:Executive registerd,error:false}");
       
    }
}
      
if(isset($_POST["insertAdmin"])){
    $arr=array();
    $arr=json_decode($_POST['insertAdmin']);
    $name =$arr->name;
    $email =strtolower($arr->email);
    $phone =$arr->phone;
    $password =$arr->password;
    $type =$arr->type;
    $status =$arr->status;
    $sql="INSERT INTO admin (type,name,phone,email,password ,status) VALUES ('{$type}','{$name}' ,'{$phone}','{$email}','{$password}','{$status}')";
    $cheak="SELECT email FROM admin  WHERE email='$email'";
    $count=mysqli_query($conn,$cheak) or die("[{msg:sql failed ,error:true}]");
    if (mysqli_num_rows($count)>0) {
    echo("{msg:already registerd Admin,error:true}");
    }else{
        mysqli_query($conn,$sql) or die("[{msg:sql failed ,error:true}]");
        echo("{msg:Admin registerd,error:false}");
       
    }
}






if(isset($_POST["insertDoctor"])){
    $arr=array();
    $arr=json_decode($_POST['insertDoctor']);
    $name =$arr->name;
    $phone =$arr->phone;
    $dob =$arr->dob;
    $specialization =$arr->specialization;
    $address =$arr->address;
    $city =$arr->city;
    $state =$arr->state;
    $exID =$arr->exID;  
     
    $sql="INSERT INTO doctors ( eid,name, phone, dob, specialization, address, state,city)
  VALUES ('{$exID}','{$name}','{$phone}','{$dob}','{$specialization}' ,'{$address}','{$state}','{$city}')";
    $cheak="SELECT phone FROM doctors  WHERE phone='$phone'";
    $count=mysqli_query($conn,$cheak) or die("[{msg:sql failed ,error:true}]");
    if (mysqli_num_rows($count)>0) {
    echo("[{msg:already registerd Doctor,error:true}]");
    }else{
        mysqli_query($conn,$sql) or die("[{msg:sql failed ,error:true}]");
        echo("[{msg:registerd,error:false}]");
       
    }
}








?>  