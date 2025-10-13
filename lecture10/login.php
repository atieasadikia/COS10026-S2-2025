<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login page example">
    <meta name="keywords" content="login form, CSS, responsive design">
    <meta name="author" content="AT">
    <title>Doki's Management System</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <style>
        
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 10px;
            font-weight: bold;
            color: #2c3e50;
        }
        input[type="text"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #d64c6c;
            color: #fff;
        }
        .error {
            color: #d64c6c;
            background-color: #fde5e8;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php 
        include 'header.inc';
    ?>
    <section id="login-main">
        <h1>Login</h1>
        <?php
            if(isset($_SESSION['error'])){
                echo '<div>' .$_SESSION['error']. '</div>';
                unset($_SESSION['error']);
            }
        ?>
        <form action="process_login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
        </form>
    </section>
    <?php 
    include 'footer.inc';
    ?>
</body>
</html>