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
            echo "STUDENT DETAILS ALREADY REGISTERED !";
        } 
        else {
            $sql = "INSERT INTO `studentinformation`(`NAME`, `REGNUMBER`, `DOB`, `DEGREE`, `DEPARTMENT`, `YEAR`, `SMOBILE`, `SEMAIL`, `PMOBILE`, `PEMAIL`, `PHOTO`) 
            VALUES ('$name',' $RegNumber',' $dob','$Degree','$department',' $Year','$smobile','$semail','$pmobile',' $pemail','$photo ')";
            if(mysqli_query($con, $sql))
    {
        echo "<html>
                <style>
                    h2{
                        text-align:center;
                        font-size:20px;
                        color:red;
                    }
                </style>
                <body>
                <h2>STUDENT INFORMATION'S SAVED</h2>
                </body>
              </html>";
    }
        else{
            echo "insert data failed";
        }
    }
    }
    mysqli_close($con);
?>
