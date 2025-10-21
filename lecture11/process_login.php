<?php
// Start the session to store user information between pages
session_start();

// Include database connection settings from a separate file
require_once("settings.php");

// Create a connection to the database
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    // Log the error privately instead of exposing sensitive details to users
    error_log("Database connection failed: " . mysqli_connect_error());
    // Show a generic error message to avoid leaking server/database details
    die("Sorry, something went wrong. Please try again later" );
}

// Check if the form was submitted using POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Trim input values to avoid accidental spaces affecting login
    $input_username = trim($_POST['username']);
    $input_password = trim($_POST['password']);

    // Prepare an SQL statement to prevent SQL injection attacks
    $stmt = $conn->prepare("SELECT username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $input_username);
    $stmt->execute();
    $result = $stmt->get_result();

    // If a user is found with the entered username
    if ($user = $result->fetch_assoc()) {
        // Verify the entered password with the hashed password in the database
        if (password_verify($input_password, $user['password'])) {
            // Regenerate session ID to prevent session fixation attacks
            session_regenerate_id(true);
            // Save the username in the session to track the user login status
            $_SESSION['username'] = $user['username'];

            // Currently checking for admin role based on username - not secure
            // Better practice: add a 'role' column in the database and check against that
            if ($user['username'] == 'sirdoki') {
                // Redirect manager/admin to their page
                header('Location: manager.php');
                exit;
            } else {
                // Redirect regular users to their welcome page
                header('Location: welcome.php');
                exit;
            }
        }
    }

    // If login fails, store an error message (no details revealed for security)
    $_SESSION['error'] = "Invalid username or password. Please try again.";
    header('Location: login.php');
    exit;
}
?>
