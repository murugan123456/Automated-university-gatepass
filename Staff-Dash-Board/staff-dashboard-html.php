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

$sql = "SELECT * FROM staffregister WHERE EMAIL='$registerNumber' OR USERNAME='$registerNumber'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $originalDate = $row['DATEOFBIRTH'];
    $newDate = date("d-M-Y", strtotime($originalDate)); // Format date as needed

    // Build image path based on image name from database
    $imageName = $row['IMGNAME']; // Assuming 'PHOTO' is the column containing the image name
    $imagePath = "uploads/" . $imageName; // Path to the image file

    // Display the HTML content with dynamic image and other user information
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css " rel="stylesheet">
        <link rel="stylesheet" href="staff-dashboard.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php include 'topnav.php'; ?>
                </div>
            </div>
            <div class="row" style="margin-top: 60px;">
                <div class="col-md-3 col-sm-6">
                    <nav class="navbar navbar-stacked">
                        <div class="row">
                            <div class="navbar-header">
                                <a href="staff-dashboard-html.php">
                                    <h3 class="navbar-brand text-success" for="button">
                                        <span class="fa fa-dashboard"></span> Staff Dashboard
                                    </h3>
                                </a>
                                <button type="button" class="navbar-toggle navbar-success navabr-right bg-warning" data-toggle="collapse" data-target="#left" name="button">
                                    <i class="fa fa-angle-double-down text-danger" style="font-size: 30px; padding-top: 7px;"></i>
                                </button>
                            </div>
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
                <div class="col-md-6" id="std"> 
                    <div class="student">
                        <center>
                            <!-- Display the image dynamically -->
                            <img src="<?php echo $imagePath; ?>" alt="User Image">
                        </center>
                        <br>
                        <table>
                            <tr>
                                <td>Name:</td>
                                <td><?php echo $row['NAME']; ?></td>
                            </tr>
                            <tr>
                                <td>Job Role:</td>
                                <td id="Qualification"><?php echo $row['JOBROLE']; ?></td>
                            </tr>
                            <tr>
                                <td>Date of Birth:</td>
                                <td id="dob"><?php echo $newDate; ?></td>
                            </tr>
                            <tr>
                                <td>Department:</td>
                                <td id="dept"><?php echo $row['DEPARTMENT']; ?></td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td id="gender"><?php echo $row['GENDER']; ?></td>
                            </tr>
                            <tr>
                                <td>Mobile Number:</td>
                                <td id="phone"><?php echo $row['MOBILE']; ?></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td id="email"><?php echo $row['EMAIL']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div> 
        </div>
    </body>
    </html>
    <?php
}
$conn->close();
?>
