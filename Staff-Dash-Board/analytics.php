<?php 
    $mysqli = new mysqli('localhost','root','','CollegeGatePass');
    if(!$mysqli){
        die('connection error'.$mysqli->error);
    }
    $query = "SELECT DEPARTMENT,COUNT(NAME) as DEPTCOUNT FROM studentgatepassdetails GROUP BY DEPARTMENT";
    $result = $mysqli->query($query);
    $deptdata = array();
    foreach($result as $row){
        $deptdata[] = $row;
    } 
    $yearquery = "SELECT YEAR,COUNT(YEAR) as YEARCOUNT FROM studentgatepassdetails GROUP BY YEAR";
    $yearresult = $mysqli->query($yearquery);
    $year = array();
    foreach($yearresult as $row){
        $year[] = $row;
    }
    $monthquery = "SELECT MONTH(OUTDATE) AS MONTH, COUNT(*) AS MONTHTOTAL FROM studentgatepassdetails GROUP BY MONTH(OUTDATE);";
    $monthresult = $mysqli->query($monthquery);
    $monthdata = array();
    foreach($monthresult as $row){
        $monthdata[] = $row;
    }

    $dept = "SELECT DEPARTMENT,count(REGNUMBER) as DEPARTMENTCOUNT from studentgatepassdetails group by DEPARTMENT;";
    $deptresult = $mysqli->query($dept);
    $deptres = array();
    foreach($deptresult as $row){
        $deptres[] = $row;
    }

    $staff = "SELECT count(name) as total from staffgatepass;;";
    $staffresult = $mysqli->query($staff);
    $staffres = array();
    foreach($staffresult as $row){
        $staffres[] = $row;
    }

    
    // $deptdata = json_encode($data);
    // $yeardata = json_encode($year);
    // print json_encode($data); 
    // echo json_encode($year);
    $array = array("deptdata"=>$deptdata, "yeardata"=>$year,"monthdata"=>$monthdata,"deptres"=>$deptres,"staffres"=>$staffres);
    print json_encode($array);
    $mysqli->close(); 
?>

    
