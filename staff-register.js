function validatePassword() {
    var password = document.getElementById("confirmpass").value;
    var confirmPassword = document.getElementById("pass").value;

    // Check if the passwords match
    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return false;
    }
    return true;
}