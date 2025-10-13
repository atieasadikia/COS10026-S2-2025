<?php
// Start a session to use session variables like login info
session_start();

// Include the settings file that has database connection details
require_once("settings.php"); // Contains $host, $username, $password, $database

// Connect to the MySQL database using the provided credentials
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection is successful
if (!$conn) {
    // If the connection fails, stop the page and show an error message
    die("Database connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is about Doki the cat, who is a silver Scottish fold">
    <meta name="keywords" content="cat, Scottish fold, silver, feline">
    <meta name="author" content="AT">

    <title>A Day in the Life of Doki</title>

    <!-- External CSS stylesheet -->
    <link rel="stylesheet" type="text/css" href="styles/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Edu+VIC+WA+NT+Beginner:wght@400..700&display=swap" rel="stylesheet">
    
    <!-- Some embedded CSS for figcaption border -->
    <style>
        figcaption {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <!-- Include the site header -->
    <?php include 'header.inc'; ?>

    <section id="main">
        <?php 
        // Check if the user is logged in and their username is 'sirdoki'
        if (isset($_SESSION['username']) && $_SESSION['username'] == 'sirdoki') {
            echo '<h1>Hi Doki the Manager</h1>';
            echo '<p>Here is the list of all your friends:</p>';

            // Query to get all friends from the 'friends' table
            $query = "SELECT id, name, description FROM friends";
            $result = mysqli_query($conn, $query);

            // If there are rows returned, display them in a table
            if (mysqli_num_rows($result) > 0) {
                echo '<table border="1" cellpadding="10" cellspacing="0">';
                echo '<tr><th>ID</th><th>Name</th><th>Description</th></tr>';
                
                // Fetch each row and show it in the table
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['description'] . '</td>';
                    echo '</tr>';
                }

                echo '</table>';
            } else {
                // If no friends found in the table
                echo '<p>No friends found! Poor Doki!</p>';
            }
        } else {
            // If user is not 'sirdoki', show a warning message
            echo '<h1>Hi, you are not Doki the manager</h1>';
            echo '<p>This page is for authorised users only.</p>';
        }
        ?>
    </section>

    <!-- Include the site footer -->
    <?php include_once 'footer.inc'; ?>
</body>
</html>
