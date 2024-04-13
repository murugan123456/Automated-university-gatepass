<?php
session_start();

if (!isset($_SESSION['username'])) {
    // Redirect or handle unauthorized access
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collegegatepass";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$registerNumber = $_SESSION['username'];

$sql = "SELECT * FROM staffgatepass WHERE EMAIL='$registerNumber' ORDER BY DATE ";
$result = $conn->query($sql);
$sqli = "SELECT * FROM staffregister WHERE EMAIL='$registerNumber' OR USERNAME='$registerNumber'";
$res = $conn->query($sqli);

if ($res->num_rows == 1) {
    $row1 = $res->fetch_assoc();
include 'topnav.php';

// Start HTML document
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css " rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="staff-gatepass-details.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-inverse navbar-fixed-top">
                    <div class="navbar-header">
                        <a href="#" class="navbar-brand">PSVCET</a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#links">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div> 
                    <div class="navbar-collapse collapse" id="links" >
                        <ul class="nav navbar-nav navbar-right" style="padding: 0px 20px;">
                            <li><a href="Signup.html"><i class="fa fa-info-circle"></i> About PSVCET</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row" style="margin-top: 60px;">
            <div class="col-md-3 col-sm-6">
                <nav class="navbar navbar-stacked">
                    <div class="navbar-header">
                        <a href="staff-dashboard-html.php">
                            <h3 class="navbar-brand text-success">
                                <span class="fa fa-dashboard"></span> Staff Dashboard
                            </h3>
                        </a>
                        <button type="button" class="navbar-toggle navbar-success bg-warning" data-toggle="collapse" data-target="#left">
                            <i class="fa fa-angle-double-down text-danger" style="font-size: 30px; padding-top: 7px;"></i>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navbar-collapse collapse" id="left">
                                <?php include 'nav.php'; ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-md-9 col-sm-6">
                <div class="row">
                    <h3 class="text-danger" style="padding-left: 15px;"><i class="fa fa-address-card"></i> Previous Gate Pass Details</h3>
                    <hr>
                        <div class="col-md-3 col-xs-4">
                           <h5>Name : <i><?php echo $row1['NAME'] ?></i></h5>
                           </div>
                           <div class="col-md-3 col-xs-4">
                           <h5>Department : <i><?php echo $row1['DEPARTMENT']  ?></i></h5>
                           </div>
                           <div class="col-md-3 col-xs-4">
                           <h5>EMAIL : <i><?php echo $row1['EMAIL']  ?></i></h5>
                           </div> <?php } ?>
                           <?php
                            if ($result->num_rows > 0) { 
                           echo '<br><br><br>';
                            echo '<div class="table-responsive col-md-10">';
                            echo '<table class="table">';
                            echo '<tr>';
                            echo '<th>DATE</th>';
                            echo '<th>TIME</th>';
                            echo '<th>WAY IN OR OUT</th>';
                            echo '<th>REASON</th>';
                            echo '</tr>';
                        // Display gate pass details if available
                        while ($row = $result->fetch_assoc()) { 
                            echo '<tr>';
                            echo '<td>' . $row['DATE'] . '</td>';
                            echo '<td>' . $row['TIME'] . '</td>';
                            echo '<td>' . $row['INOROUT'] . '</td>';
                            echo '<td>' . $row['REASON'] . '</td>';
                            echo '</tr>';
                        }
                        echo '</table></div>';
                    } else {
                        // Display message if no gate pass found
                        echo '<script>alert("You Have No Gate Pass")
                        window.location.href = "staff-gatepass-details-html.php"</script>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
