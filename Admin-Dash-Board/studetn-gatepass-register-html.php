<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Gatepass Register</title>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css " rel="stylesheet">
    <link rel="stylesheet" href="student-gatepass-register.css">
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
                    <a href="#"><h3 class="navbar-brand text-success" for="button"><span class="fa fa-dashboard"></span> Admin Dashboard</h3></a>
                    <button type="button" class="navbar-toggle navbar-success navabr-right bg-warning" data-toggle="collapse" data-target="#left" name="button">
                        <i class="fa fa-angle-double-down text-danger" style="font-size: 30px; padding-top: 7px;"></i>
                    </button>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12 " >
                    <?php include 'sidenave.php'; ?>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-9"> 
            <h3 class=""><i class="fa fa-user"> </i> Student Gate Pass Register</h3>
            <div class="row">
                <div class="col-md-6">
                    <h4>Show student face in front of camera</h4>
                    <hr>
                    <video src="" id="cameraFeed" autoplay width="100%" height="100%"></video>
                </div>
                <div class="col-md-6" >
                    <h4>Student Information</h4>
                    <hr>
                    <div class="student">
                        <center>
                            <img src="IMG_20230603_061415_271 copy.webp" alt="student Image">
                        </center>
                        <br>
                        <table>
                           <tr>
                            <td>Name </td>
                            <td id="name">Murugan.M</td>
                           </tr>
                           <tr>
                            <td>Register Number</td>
                            <td id="registration-number">611820104035</td>
                           </tr>
                           <tr>
                            <td>Degree</td>
                            <td id="degree">B.E</td>
                           </tr>
                           <tr>
                            <td>Department</td>
                            <td id="dept">CSE</td>
                           </tr>
                           <tr>
                            <td>Year</td>
                            <td id="year">IV</td>
                           </tr>
                           <tr>
                            <td>Phone No</td>
                            <td id="phone">8270462759</td>
                           </tr>
                           <tr>
                            <td>Email </td>
                            <td id="email">murugan.m3562@gmail.com</td>
                           </tr>
                           <tr>
                            <td>Parent Mobile No</td>
                            <td id="phone">9750872519</td>
                           </tr>
                           <tr>
                            <td>Parent Email</td>
                            <td id="phone">mageshmani2451@gmail.com</td>
                           </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <script src="student-gatepass-register.js"></script>
</body>
</html>