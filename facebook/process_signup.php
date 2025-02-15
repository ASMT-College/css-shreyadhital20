<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        die("Passwords do not match! <a href='index.html'>Go Back</a>");
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Database connection (Optional)
    $conn = new mysqli("localhost", "root", "", "facebook_db");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert into database
    $sql = "INSERT INTO users (name, dob, gender, email, password) 
            VALUES ('$name', '$dob', '$gender', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Signup successful! <a href='index.html'>Login</a>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
