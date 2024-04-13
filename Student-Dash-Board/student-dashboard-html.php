<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css " rel="stylesheet">
    <link rel="stylesheet" href="student-dashboard.css">
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
                    <h3 class="navbar-brand text-success" for="button"><span class="fa fa-dashboard"></span> Dashboard</h3>
                    <button type="button" class="navbar-toggle navbar-success navabr-right bg-warning" data-toggle="collapse" data-target="#left" name="button">
                        <i class="fa fa-angle-double-down text-danger" style="font-size: 30px; padding-top: 7px;"></i>
                    </button>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12 " >
                    <?php include 'sidenav.php'; ?>
                    </div>
                </div>
            </nav>
        </div>
            <div class="col-md-9 col-sm-6" >
                <h3 class="text-danger" style="margin-top: 30px;"><i class="fa fa-user"></i> Student Information</h3>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6 " id="std"> 
                        <div class="student">
                        <center>
                            <img src="IMG_20230603_061415_271.webp" alt="student Image">
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
                            <tr>
                                <td>Date of Birth</td>
                                <td id="registration-number">26-05-2003</td>
                               </tr>
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
                            <td>Student Phone No</td>
                            <td id="phone">8270462759</td>
                           </tr>
                           <tr>
                            <td>Student Email </td>
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
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        </div>
</body>
</html>