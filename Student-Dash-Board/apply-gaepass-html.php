<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Gatepass</title>
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
        <div class="col-md-9 col-sm-6">
            <div class="row" >
            <h3 class="text-warning" style="padding-left: 15px;"><i class="fa fa-pencil-square-o"> </i> Apply Gate Pass</h3>
            <hr>   
            <div class="col-md-6">
            <form action="">
                <div class="form-grpup">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                </div>
                <div class="form-grpup">
                    <label for="name" class="control-label">name</label>
                    <input type="text" id="name" name="name" placeholder="Student Name" class="form-control">
                </div>
                <div class="form-grpup">
                    <label for="Register-Number" class="control-label">Register Number</label>
                    <input type="Register-Number" id="Register-Number" name="Register-Number" placeholder="Register Number" class="form-control">
                </div>
                <div class="form-grpup">
                    <label for="Reason" class="control-label">Reason</label>
                    <input type="Reason" id="Reason" name="Reason" placeholder="Reason" class="form-control">
                </div>
                <div class="form-grpup">
                    <label for="Degree" class="control-label">Degree</label>
                    <input type="Degree" id="Degree" name="Degree" placeholder="Degree" class="form-control">
                </div>
                <div class="form-grpup">
                    <label for="department" class="control-label">department</label>
                    <input type="text" id="department" name="department" placeholder="department" class="form-control">
                </div>
                <div class="form-grpup">
                    <label for="year" class="control-label">Year</label>
                    <input type="year" id="year" name="year" placeholder="Year" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-success"><span class="fa fa-paper-plane "></span> Request </button>
            </form>
        </div>
    </div>
</div>   
        </div>
        </div>
</body>
</html>