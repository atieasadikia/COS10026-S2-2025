<?php
// Start the session to access stored user data
session_start();

// Check if the username is set in the session
if (!isset($_SESSION['username'])) {
    // If not set, redirect the user back to the landing page
    header("Location: landing.php");
    exit(); // Always exit after sending a header to stop the script
    // Note: session_destroy() here would never be reached because of exit()
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome Page</title>
        <!-- Link to an external CSS file for styling -->
        <link rel="stylesheet" type="text/css" href="styles/style.css">
    </head>
    <body>

    <!-- Include the common header -->
    <?php include 'header.inc'; ?>

    <!-- Main section of the page -->
    <section id="main">

    <!-- Welcome message using the name stored in the session -->
    <h1>Welcome to the page, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>We are glad to have you here.</p>

    </section>

    <!-- Include the common footer -->
    <?php include 'footer.inc'; ?>

    <?php 
    // Clear all session variables
    session_unset();

    // Destroy the session after showing the welcome message
    session_destroy();
    ?>

</body>
</html>
