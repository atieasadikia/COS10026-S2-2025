<?php
// Start the session to store user information between pages
session_start();

// Include database connection settings
require_once("settings.php");

// Create a connection to the database
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted using POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the input values from the login form and remove extra spaces
    $input_username = trim($_POST['username']);
    $input_password = trim($_POST['password']);

    // Prepare an SQL query to check if the username and password match a user in the database
    $query = "SELECT * FROM users WHERE username = '$input_username' AND password = '$input_password'";
    
    // Run the query
    $result = mysqli_query($conn, $query);

    // If a matching user is found
    if ($user = mysqli_fetch_assoc($result)) {
        // Save the username in the session so we know the user is logged in
        $_SESSION['username'] = $user['username'];

        // Check if the user is the manager (e.g. Doki)
        if ($user['username'] == 'sirdoki') {
            // Redirect manager to manager page
            header('Location: manager.php');
            exit;
        } else {
            // Redirect other users to the welcome page
            header('Location: welcome.php');
            exit;
        }

    } else {
        // If login failed, store an error message and go back to the login page
        $_SESSION['error'] = "Invalid username or password. Please try again.";
        header('Location: login.php');
        exit;
    }
}
?>
