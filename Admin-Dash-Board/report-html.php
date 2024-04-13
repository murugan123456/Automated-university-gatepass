<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css " rel="stylesheet">
    <link rel="stylesheet" href="report.css">
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
            <div class="row" id="report">
                <h4 id="title"><i class="fa fa-line-chart"></i> Gatepass Report</h4>
                <hr>
                <div class="row" >
                    <center>
                    <h5 id="time"> <i class="fa fa-clock-o"></i> Time Peroid : <i>12-01-2024</i> to <i>20-02-2024</i></h5>
                    </center>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="bg-warning text-success">
                        <h2><i class="fa fa-users"></i> 234</h2>
                        <h4> Total GatePass </h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="bg-info text-warning">
                        <h2> <i class="fa fa-desktop"></i> CSE</h2>
                        <h4>54 students</h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="bg-danger text-info">
                        <h2><i class="fa fa-file-code-o"></i> IT</h2>
                        <h4>32 students</h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6" >
                    <div class="bg-info text-danger">
                        <h2><i class="fa fa-microchip"></i> ECE</h2>
                        <h4>23 students</h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="bg-danger text-primary">
                        <h2><i class="fa fa-plug"></i> EEE</h2>
                        <h4>12 students</h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="bg-success text-danger">
                        <h2> <i class="fa fa-wrench"></i> MECH</h2>
                        <h4>32 students</h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="bg-warning text-success">
                        <h2><i class="fa fa-home"></i> CIVIL</h2>
                        <h4>10 students</h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="bg-danger text-warning">
                        <h2><i class="fa  fa-android"></i> AI</h2>
                        <h4>23 students</h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="bg-info text-success">
                        <h2><i class="fa  fa-puzzle-piece"></i> ML & DS</h2>
                        <h4>34 Studetns</h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="bg-primary text-warning">
                        <h2><i class="fa  fa-user"></i> Staff</h2>
                        <h4>23 gatepass</h4>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
</body>
</html>