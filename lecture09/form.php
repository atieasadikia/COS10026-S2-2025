<?php
error_reporting(E_ALL);
ini_set('display_error',1);
require_once("settings.php");

$conn = mysqli_connect ($host,$username,$password,$database);

if(!$conn){
    echo " <p> Database Connection failed: ".mysqli_connect_error()."</p>";
}

// Step 1: Check if form has been submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Step 2: Collect and sanitise form inputs
    $name = sanitise_input($_POST["name"]);
    $number = sanitise_input($_POST["number"]);
    $colour = sanitise_input($_POST["colour"]);
    $teacher = sanitise_input($_POST["teacher"]);
    $genre = sanitise_input($_POST["genre"]);
    $naptime = sanitise_input($_POST["naptime"]);
    $birthday = sanitise_input($_POST["birthday"]);
    $dayrating = sanitise_input($_POST["dayrating"]);
    $comments = sanitise_input($_POST["comments"]);

    // Step 3: Handle checkboxes (convert arrays into comma-separated strings)
    $pets = isset($_POST["pet"]) ? implode(", ", array_map('sanitise_input', $_POST["pet"])) : "";
    $subjects = isset($_POST["subject"]) ? implode(", ", array_map('sanitise_input', $_POST["subject"])) : "";

    // Step 4: Basic form validation
    $errors = [];
    if (empty($name)) $errors[] = "Name is required.";
    if (!preg_match("/^[0-9]{1}$/", $number)) $errors[] = "Favourite number is required and must be a single digit (0–9).";
    if (empty($pets)) $errors[] = "Please select at least one pet.";
    if (empty($birthday)) $errors[] = "Birthday is required.";

    // Step 5: Show errors or insert data into database
    if (!empty($errors)) {
        // Display all error messages
        foreach ($errors as $error) {
            echo "<p style='color:red;'>" . htmlspecialchars($error) . "</p>";
        }
        echo "<p><strong>Please go back and fix the errors.</strong></p>";
    }
    else{ 
        $sql = "INSERT INTO favourites (name, number,colour, pet, teacher, subject, genre,naptime,birthday,dayrating, comments) 
        VALUES('$name','$number', '$colour', '$pets', '$teacher', 
                    '$subjects', '$genre', '$naptime', '$birthday', '$dayrating', '$comments')";
        if (mysqli_query($conn,$sql)){            
        echo "<h2>Your Submitted Favourites:</h2>";
        echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
        echo "<p><strong>Favourite Number:</strong> " . htmlspecialchars($number) . "</p>";
        echo "<p><strong>Colour:</strong> " . htmlspecialchars($colour) . "</p>";
        echo "<p><strong>Favourite Pets:</strong> " . htmlspecialchars($pets) . "</p>";
        echo "<p><strong>Favourite Teacher:</strong> " . htmlspecialchars($teacher) . "</p>";
        echo "<p><strong>Favourite Subjects:</strong> " . htmlspecialchars($subjects) . "</p>";
        echo "<p><strong>Genre:</strong> " . htmlspecialchars($genre) . "</p>";
        echo "<p><strong>Nap Time:</strong> " . htmlspecialchars($naptime) . "</p>";
        echo "<p><strong>Birthday:</strong> " . htmlspecialchars($birthday) . "</p>";
        echo "<p><strong>Day Rating:</strong> " . htmlspecialchars($dayrating) . "</p>";
        echo "<p><strong>Comments:</strong> " . htmlspecialchars($comments) . "</p>";
}else {
    echo "<p style='color:red;'> Error: ".mysqli_error($conn)."</p>";
}
}
    mysqli_close($conn);
}

// Function to sanitise form input
function sanitise_input($data) {
    $data = trim($data);           // Remove extra spaces
    $data = stripslashes($data);   // Remove backslashes
    $data = htmlspecialchars($data); // Convert special characters to HTML entities
    return $data;
}
?>
