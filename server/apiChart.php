<?php
include "conn.php";
if (isset($_POST["apiChart"])) {
    $arr = array();
    $arr = json_decode($_POST['apiChart']);
    $type = $arr->type;
    switch ($type) {
        case "sales":
            getSales($arr);
            break;
        case "sales-year":
            getSalesByYear($arr);
            break;
        case "morris-bar-sales-months":
            morrisBarSalesMonths($arr);
            break;
        case "morris-bar-sales-year":
            morrisBarSalesYear($arr);
            break;
    }
} 
function getSalesByYear($arr)
{
    $eid = $arr->eid;
    $year = $arr->year;
    if ($eid == " " || $eid == "") {
        $sql = "SELECT internal_sales,external_sales ,id  from sales WHERE choosed_date like '%$year%' ";
        $data = mysqli_query($GLOBALS['conn'], $sql) or die( );
    } else {
        $eid = $arr->eid;
        $sql = "SELECT  internal_sales,external_sales ,id  from sales WHERE choosed_date like '%$year%' AND eid='$eid'";
        $data = mysqli_query($GLOBALS['conn'], $sql) or die( );
    }
    $internal_sales = 0;
    $external_sales = 0;
    $total = 0;
    if (mysqli_num_rows($data) > 0) {
        while ($row = mysqli_fetch_assoc($data)) {
            $internal_sales += (int) $row['internal_sales'];
            $external_sales += (int) $row['external_sales'];
        }
        $total = $internal_sales + $external_sales;
        print_r(json_encode(array("internal_sales" => $internal_sales, "external_sales" => $external_sales, "total" => $total)));
    } else {
        print_r(json_encode(array("internal_sales" => 0, "external_sales" => 0, "total" => 0)));
    }
}

function getSales($arr)
{
    $eid = $arr->eid;
    $month_year = $arr->month;
    $sql = "SELECT internal_sales,external_sales ,id  from sales WHERE `choosed_date` like '%$month_year%' ";
    if (!empty($eid) || $eid != null) {
        $eid = $arr->eid;
        $sql .= "  AND eid='$eid'";
    }
    $data = mysqli_query($GLOBALS['conn'], $sql) or die();
    $internal_sales = 0;
    $external_sales = 0;
    $total = 0;
    if (mysqli_num_rows($data) > 0) {
        while ($row = mysqli_fetch_assoc($data)) {
            $internal_sales += (int) $row['internal_sales'];
            $external_sales += (int) $row['external_sales'];
        }
        $total = $internal_sales + $external_sales;
        print_r(json_encode(array("internal_sales" => $internal_sales, "external_sales" => $external_sales, "total" => $total)));
    } else {
        print_r(json_encode(array("internal_sales" => 0, "external_sales" => 0, "total" => 0)));
    }
}

function morrisBarSalesMonths($arr) {
    $eid = $arr->eid;
    $month =   $arr->month;
    $myarray = array();
    
    if ($eid == " " || $eid == "") {
        $sales = mysqli_query($GLOBALS['conn'], "SELECT DISTINCT choosed_date FROM `sales` WHERE `choosed_date` LIKE '%$month-%' ");
    } else {
        //   code hare if show chart for executive
        $sales = mysqli_query($GLOBALS['conn'], "SELECT DISTINCT choosed_date FROM `sales` WHERE eid=$eid AND  `choosed_date` LIKE '%$month-%' ");
    }

    while ($uniqDate = mysqli_fetch_assoc($sales)) {
        $d = $uniqDate['choosed_date'];
        if ($eid == " " || $eid == "") {
            $data = mysqli_query($GLOBALS['conn'], "SELECT *   FROM `sales` WHERE  choosed_date ='$d' ");
        } else {
            //   code hare if show chart for executive
            $data = mysqli_query($GLOBALS['conn'], "SELECT *   FROM `sales` WHERE  choosed_date ='$d' AND eid=$eid ");
        }
        //   $data=mysqli_query($GLOBALS['conn'],"SELECT *   FROM `sales` WHERE  choosed_date ='$d' ");
        $internal_sales = 0;
        $external_sales = 0;
        $choosed_date;
        $total = 0;
        while ($info = mysqli_fetch_assoc($data)) {
            $internal_sales += (int) $info['internal_sales'];
            $choosed_date = $info['choosed_date'];
            $external_sales += (int) $info['external_sales'];
            $total += (int) $info['internal_sales'] + (int) $info['external_sales'];
        }
        $myarray[] = array('internal_sales' => $internal_sales, 'external_sales' => $external_sales, 'y' => $choosed_date, 'total' => $total, "error" => false);
    }
    print_r(json_encode($myarray));
}

function morrisBarSalesYear($arr)
{

    $year = $date = $arr->year;
    $myarray = array();
    for ($month = 1; $month <= 12; $month++) {
        $m = str_pad($month, 2, '0', STR_PAD_LEFT);
        $sql = "SELECT DISTINCT choosed_date , `internal_sales` , `external_sales` FROM `sales` WHERE `choosed_date` LIKE '%$year-$m%' ";

        if (!empty($arr->eid)) {

            $eid = $arr->eid;
            $sql .= "AND eid=$eid ";

        }
        $sales_month_data = mysqli_query($GLOBALS['conn'], $sql);
        $total_month_internal_sales = 0;
        $total_month_external_sales = 0;
        $date = $m . "-" . $year;
        while ($info = mysqli_fetch_assoc($sales_month_data)) {
            $total_month_internal_sales += (int) $info['internal_sales'];
            $total_month_external_sales += (int) $info['external_sales'];
        }
        $total_month_sales = $total_month_internal_sales + $total_month_external_sales;
        $myarray[] = array("y" => $date, "internal_sales" => $total_month_internal_sales, "external_sales" => $total_month_external_sales, "total" => $total_month_sales, "error" => false);
    }
    print_r(json_encode($myarray));
}
?>