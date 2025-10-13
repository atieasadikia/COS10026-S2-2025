<?php
// Start the session to store user data
session_start();

// Create a variable to store any error messages
$error = "";

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Check if the name field is empty
    if (empty(trim($_POST['name']))) {
        // If empty, set an error message
        $error = "Your name is required!";
    } else {
        // If not empty, save the name in the session
        $_SESSION['username'] = $_POST['name'];
        
        // Redirect the user to the welcome page
        header("Location: welcome.php");
        exit(); // Always exit after a header redirect
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Enter Your Name</title>
    <!-- Link to an external CSS file for styling -->
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>

    <!-- Include the common header -->
    <?php include 'header.inc'; ?>

    <!-- Main section of the page -->
    <section id="main">

    <!-- Form to collect user's name -->
    <form action="landing.php" method="post">
        <label for="name">Please enter your name:</label><br>
        
        <!-- Input box for name. If there's an error, show a red border -->
        <input 
            type="text" 
            id="name" 
            name="name" 
            style="<?php echo $error ? 'border:2px solid red;' : ''; ?>"
        >
        <br>

        <!-- Display the error message if there is any -->
        <?php 
        if ($error) {
            echo "<p style='color:red;'>$error</p>";
        }
        ?>

        <!-- Submit button -->
        <input type="submit" value="Submit">
    </form>

    </section>

    <!-- Include the common footer -->
    <?php include 'footer.inc'; ?>

</body>
</html>
