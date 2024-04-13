<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css " rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
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
                        <!-- <div class="navbar-collapse collapse" id="left">
                            <ul class=" nav nav-stacked" id="sidebar-links">
                                <li><a href="studetn-gatepass-register.html"><i class="fa fa-user"></i> Student Gatepass register</a></li>
                                <li><a href="Student-Registration.html"><i class="fa fa-pencil-square-o "></i> Student Registration</a></li>
                                <li><a href="general-gatepass.html"><i class="fa fa-id-card"></i> Staff Gatepass Register</a></li>
                                <li><a href="report.html"><i class="fa fa-file-text"> </i> Report</a></li>
                            </ul>
                        </div> -->
                        <?php include 'sidenave.php'; ?>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-9">
            
        </div>
        </div>
        </div>
</body>
</html>