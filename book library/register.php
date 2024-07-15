<?php
include 'config/db_connect.php';

// Get username and password from form
$new_username = $_POST['new_username'];
$new_password = $_POST['new_password'];

// Hash the password
$hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

// Insert user details into database
$query = "INSERT INTO users (username, password) VALUES ('$new_username', '$hashed_password')";

if (mysqli_query($conn, $query)) {
    echo "Registration successful!";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
