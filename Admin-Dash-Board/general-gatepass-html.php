<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General GatePass Register</title>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css " rel="stylesheet">
    <link rel="stylesheet" href="general-gatepass.css">
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
            <h3 id="title"><i class="fa fa-id-card"></i> Staff Gate pass Register</h3>
            <hr>
            <div class="row">
                <div class="col-md-9">
                    <form action="">
                        <div class="form-grpup">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" id="name" name="name" placeholder="Name" class="form-control">
                        </div>
                        <div class="form-grpup">
                            <label for="dept" class="control-label">Department</label>
                            <input type="text" id="dept" name="dept" placeholder="Department" class="form-control">
                        </div>
                        <div class="form-grpup">
                            <label for="email" class="control-label">EMAIL</label>
                            <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-grpup">
                            <label for="degree" class="control-label">Time</label>
                            <select name="degree" id="degree" class="form-control">
                                <option value="" disabled selected>--Select--</option>
                                <option value="In-Time">In Time</option>
                                <option value="Out-Time">Out Time</option>
                            </select>
                        </div>
                        <div class="form-grpup">
                            <label for="time" class="control-label">Current Time</label>
                            <input type="time" id="time" name="time" placeholder="Current Time" class="form-control">
                        </div>
                        <div class="form-grpup">
                            <label for="date" class="control-label">Today Date</label>
                            <input type="date" id="date" name="date" placeholder="Today date" class="form-control">
                        </div>
                        <div class="form-grpup"> 
                            <label for="reason" class="control-label">Reason</label>
                            <input type="text" id="reason" name="reason" placeholder="Reason" class="form-control">
                        </div>
                        <br>
                        <button type="submit" class="btn"><i class="fa  fa-file-text-o "></i> REGISTER</button>
                    </form>
                    <br><br><br>
                </div>
            </div>
        </div>
        </div>
        </div>
</body>
</html>