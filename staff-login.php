
<?php
session_start();

$servername = "localhost";
$name = "root";
$password = "";
$dbname = "collegegatepass";

$conn = new mysqli($servername, $name, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$pass = $_POST['pass']; // Remember to hash this before checking

$sql = "SELECT * FROM staffregister WHERE (EMAIL='$username' OR USERNAME='$username') AND PASS='$pass'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Login successful
   $_SESSION['username'] = $username;
//    $_SESSION['pass'] = $pass;
   echo '<script>window.location.href = "/Final year Project/Staff-Dash-Board/staff-dashboard-html.php";</script>';
} else {
    // Login failed
    echo '<script>
        alert("Invalid User Name or Password");
        window.location.href="staff-login.html";
    </script>';
}

$conn->close();
?>