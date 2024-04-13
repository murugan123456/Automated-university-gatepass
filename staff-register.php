<?php
// Database configuration
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'collegegatepass';

// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Fetch and sanitize form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $dob = mysqli_real_escape_string($conn, $_POST['DateOfBirth']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $department = mysqli_real_escape_string($conn, $_POST['dept']);
    $jobRole = mysqli_real_escape_string($conn, $_POST['job-role']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile-number']);
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    // Check if email already exists
    $checkEmailQuery = "SELECT * FROM staffregister WHERE EMAIL = '$email' OR USERNAME = '$username'";
    $checkEmailResult = $conn->query($checkEmailQuery);
    
    if ($checkEmailResult->num_rows > 0) {
        // Email already registered
        echo '<script>alert("Email or Username already registered. Please use a different email and User Name.");
        window.location.href = "staff-register.html";
        </script>';
    } else {
        // Process file upload (photo)
        $photoName = $_FILES['photo']['name'];
        $photoTmpName = $_FILES['photo']['tmp_name'];
        
        // Move uploaded photo to desired directory (adjust path as needed)
        $uploadDirectory = 'Staff-Dash-Board/uploads/';
        $targetFilePath = $uploadDirectory . $photoName;
        move_uploaded_file($photoTmpName,$targetFilePath);
        // Prepare SQL insert statement with placeholders
$insertQuery = "INSERT INTO staffregister (NAME, DATEOFBIRTH, GENDER, DEPARTMENT, JOBROLE, MOBILE, EMAIL, USERNAME, PASS, IMGNAME, PHOTO) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare the statement
$stmt = $conn->prepare($insertQuery);

// Bind parameters to the statement
$stmt->bind_param("sssssssssss", $name, $dob, $gender, $department, $jobRole, $mobile, $email, $username, $password, $photoName, $targetFilePath);

// Execute the statement
if ($stmt->execute()) {
echo '<script>alert("Registration Successfull!");</script>
window.location.href = "staff-login.html";';
} else {
echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();

}
    }
?>
