<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username and password are correct
    // In real-world scenario, you would check against a database
    if ($username === "admin" && $password === "password") {
        // Redirect to dashboard or home page
        header("Location: dashboard.php");
        exit;
    } else {
        // Display error message
        echo "Invalid username or password";
    }
}
?> 
