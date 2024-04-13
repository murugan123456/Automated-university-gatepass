<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css " rel="stylesheet">
    <link rel="stylesheet" href="Student-Registration.css">
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
                        <li><a href="/home.html"><i class="fa fa-logout"></i> Logout</a></li>
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
            <h3 id="title"><i class="fa fa-edit"></i> Student Registration</h3>
            <hr>
            <div class="row">
                <div class="col-md-9">
                    <form action="Student-Registration.php" method = "post">
                        <div class="form-grpup">
                            <label for="name" class="control-label">Name</label>
                            <input type="name" id="name" name="name" placeholder="Student Name" class="form-control" required>
                        </div>
                        <div class="form-grpup">
                            <label for="Register-Number" class="control-label">Register Number</label>
                            <input type="number" id="Register-Number" name="Register-Number" placeholder="Register Number" class="form-control" required>
                        </div>
                        <div class="form-grpup">
                            <label for="DateOfBirth" class="control-label">Date of Birth</label>
                            <input type="date" id="DateOfBirth" name="DateOfBirth" placeholder="Date of Birth" class="form-control" required>
                        </div>  
                        <div class="form-grpup">
                            <label for="degree" class="control-label">Degree</label>
                            <select name="degree" id="degree" class="form-control" required>
                                <option value="" disabled selected>Select Degree</option>
                                <option value="B.E">B.E</option>
                                <option value="M.E">M.E</option>
                                <option value="MBA">MBA</option>
                            </select>
                        </div>
                        <div class="form-grpup">
                            <label for="dept" class="control-label">Department</label>
                            <select name="dept" id="dept" class="form-control" required>
                                <option value="" disabled selected>Select Department</option>
                                <option value="CSE">CSE</option>
                                <option value="IT">Information Technology</option>
                                <option value="ECE">ECE</option>
                                <option value="EEE">EEE</option>
                                <option value="MECH">MECH</option>
                                <option value="CIVIL">CIVIL</option>
                                <option value="ML & DS">ML & DS</option>
                                <option value="AI">AI</option>
                            </select>
                        </div>
                        <div class="form-grpup">
                            <label for="year" class="control-label">Year</label>
                            <select name="year" id="year" class="form-control" required>
                                <option value="" disabled selected>Select Year</option>
                                <option value="I year">I year</option>
                                <option value="II year">II year</option>
                                <option value="III year">III year</option>
                                <option value="IV year">IV year</option>
                            </select>
                        </div>
                        <div class="form-grpup">
                            <label for="mobile-number" class="control-label">Student Mobile Number</label>
                            <input type="text" id="mobile-number" name="mobile-number" placeholder="Student Mobile Number" class="form-control" required>
                        </div>
                        <div class="form-grpup">
                            <label for="Email" class="control-label">Student Email</label>
                            <input type="Email" id="Email" name="Email" placeholder="Student Email" class="form-control" required>
                        </div>
                        <div class="form-grpup">
                            <label for="parent-mobile-number" class="control-label">Parent Mobile Number</label>
                            <input type="text" id="parent-mobile-number" name="parent-mobile-number" placeholder="Parent Mobile Number" class="form-control" required>
                        </div>
                        <div class="form-grpup">
                            <label for="parent-Email" class="control-label">parent Email</label>
                            <input type="Email" id="parent-Email" name="parent-Email" placeholder="Parent Email" class="form-control" required>
                        </div>
                        <div class="form-grpup">
                            <label for="photo" class="control-label">photo</label>
                            <input type="file" id="photo" name="photo" placeholder="" class="form-control" accept=".jpeg,.jpg" required>
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