<?php 
$con = new mysqli('localhost','root','','CollegeGatepass');
if($con->connect_error){
    echo $con->connect_errno;
    die();
} 
else {
    $name = $_REQUEST['name'];
    $RegNumber = $_REQUEST['Register-Number'];
    $dob = $_REQUEST['DateOfBirth'];
    $Degree = $_REQUEST['degree'];
    $department = $_REQUEST['dept'];
    $Year = $_REQUEST['year'];
    $smobile = $_REQUEST['mobile-number'];
    $semail = $_REQUEST['Email'];
    $pmobile = $_REQUEST['parent-mobile-number'];
    $pemail = $_REQUEST['parent-Email'];
    $photo = $_REQUEST['photo'];
    $query = "SELECT * FROM studentinformation WHERE REGNUMBER=$RegNumber ";
    $result=mysqli_query($con, $query); 
        if(mysqli_num_rows($result) > 0) {
            echo '<script>alert("Student Details Already Registered");
            window.location.href = "Student-Registration-html.php";</script>';
        } 
        else {
            $sql = "INSERT INTO `studentinformation`(`NAME`, `REGNUMBER`, `DOB`, `DEGREE`, `DEPARTMENT`, `YEAR`, `SMOBILE`, `SEMAIL`, `PMOBILE`, `PEMAIL`, `PHOTO`) 
            VALUES ('$name',' $RegNumber',' $dob','$Degree','$department',' $Year','$smobile','$semail','$pmobile',' $pemail','$photo ')";
            if(mysqli_query($con, $sql))
    {
        echo '<script>alert("Student Information Successfully Registered");
        window.location.href = "Student-Registration-html.php";
        </script>';
    }
        else{
            echo '<script>';
            echo 'alert("Insert Data Failed:);
            window.location.href = "Student-Registration-html.php";';
            echo '</script>';
        }
    }
    }
    mysqli_close($con);
?>
