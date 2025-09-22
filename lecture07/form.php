<?php
    function sanitise_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // sanitise the input
    $name = sanitise_input($_POST["name"]);
    $number = sanitise_input($_POST["number"]);
    $pets = isset($_POST["pet"]) ? $_POST["pet"] : []; // Handle checkboxes, the code explanation is below
    
    /* isset($_POST["pet"]): This checks if the form field "pet" has been submitted (i.e., if it exists in the $_POST array).
        ? $_POST["pet"]: If the "pet" field is set, the value of that field is assigned to the $pets variable.
        : []: If the "pet" field is not set, an empty array [] is assigned to the $pets variable.
        You can have if by ? and else by :
    */
    $teacher = sanitise_input($_POST["teacher"]);
    $birthday = sanitise_input($_POST["birthday"]);
    $comments = sanitise_input($_POST["comments"]);

    // Validate Name (required)
    if (empty($name)) {
        echo "Name is required.<br>";
    }

    // Validate Number (required)
    if (!empty($number)) {
        echo "Number is required.<br>";
    } 
    // Validate Number (must be 0-9)
    if (!preg_match("/^[0-9]{1}$/", $number)) {
        echo "Please enter a valid number between 0 and 9.<br>";
    }

    // Validate if at least one pet is selected
    if (empty($pets)) {
        echo "Please select at least one pet.<br>";
    }

    // Validate Birthday (required)
    if (empty($birthday)) {
        echo "Birthday is required.<br>";
    }

    // If all inputs are valid, display the form results
    if (!empty($name) && preg_match("/^[0-9]{1}$/", $number) && !empty($pets) && !empty($birthday)) {
        // Display the results
        echo "<h2>Your Submitted Favourites:</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Favourite Number:</strong> $number</p>";
        
        // Display pets
        echo "<p><strong>Favourite Pets:</strong> " . implode(", ", $pets) . "</p>";
        
        echo "<p><strong>Favourite Teacher:</strong> $teacher</p>";
        echo "<p><strong>Birthday:</strong> $birthday</p>";
        echo "<p><strong>Comments:</strong> $comments</p>";
    } else {
        echo "<p><strong>Please go back and fix the errors.</strong></p>";
    }
}


?>
