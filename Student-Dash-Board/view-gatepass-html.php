<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css " rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="view-gatepass.css">
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
        <div class="col-md-9 col-sm-6">
            <div class="row" >
                <h3 class="text-primary" style="padding-left: 15px;"><i class="fa fa-address-card"> </i> Previous Gate Pass Details</h3>
                <hr>   
            <div class="col-md-3">
                <h5>Name : <i>Murugan</i></h5>
            </div>
            <div class="col-md-3">
                <h5>register Number : <i>611820104035</i></h5>
            </div>
            <div class="col-md-3">
                <h5>Department : <i>CSE</i></h5>
            </div>
            <div class="col-md-3">
                <h5>Year : <i>IV</i></h5>
            </div>
            <br> <br><br>
            <div class="table-responsive">
            <table class="table table-striped ">
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Reason</th>
                </tr>
                <tr>
                    <td>12-02-2024</td>
                    <td>13:05</td>
                    <td>Exam Finished</td>
                </tr>
                <tr>
                    <td>08-02-2024</td>
                    <td>13:10</td>
                    <td>Exam Finished</td>
                </tr>
                <tr>
                    <td>14-02-2024</td>
                    <td>13:07</td>
                    <td>Health Issue</td>
                </tr>
            </table>
        </div>
        </div>
        </div>   
        </div>
    </div>
</body>
</html>