<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css " rel="stylesheet">
    <link rel="stylesheet" href="get-report.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
                    <ul class="navbar-nav nav navbar-right" style="padding: 0px 20px;">
                        <li><a href="Signup.html"></i>About PSVCET</a></li>
                        <li><a ><i class="glyphicon glyphicon-logout"></i> Logout</a></li>
                    </ul>
                    </div>
                </nav>
                </div>
            </div>
    <div class="row" style="margin-top: 60px;">
        <div class="col-md-3 col-sm-6">
            <nav class="navbar navbar-stacked">
                <div class="row">
                <div class="navbar-header">
                    <a href="staff-dashboard-html.php"><h3 class="navbar-brand text-success" for="button"><span class="fa fa-dashboard"></span> Staff Dashboard</h3></a>
                    <button type="button" class="navbar-toggle navbar-success navabr-right bg-warning" data-toggle="collapse" data-target="#left" name="button">
                        <i class="fa fa-angle-double-down text-danger" style="font-size: 30px; padding-top: 7px;"></i>
                    </button>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12 " >
                        <div class="navbar-collapse collapse" id="left">
                        <?php include 'nav.php'; ?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-info"><i class="fa fa-file-text text-primary"></i> Report</h3>
                    <hr>
                    <form action="">
                        <div class="form-grpup">
                            <label for="report-type" class="control-label">Select report Type</label>
                            <select class="form-control" id="reporttype">
                                <option value="" disabled selected>--Report Type--</option>
                                <option value="department">department</option>
                                <option value="year">Year</option>
                                <option value="register-number">Register Number</option>
                                <option value="date">Date</option>
                            </select>
                        </div>
                        <div>
                            <label for="report-value" class="control-label" id="detail-1">Enter Detail</label>
                            <input type="text" name="detail" id="report-detail" class="form-control" placeholder="Enter Detail">
                        </div>
                        <div id="date2" style="visibility: hidden;">
                            <label for="report-value" class="control-label">To Date</label>
                            <input type="date" name="detail" id="to-date-detail" class="form-control" placeholder="Enter Report Detail">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-table"></i> Get Report</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
        <script src="get-report.js"></script>
</body>
</html>