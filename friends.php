<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crew</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">

    <!-- Font From Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Edu+VIC+WA+NT+Beginner:wght@400..700&display=swap" 
    rel="stylesheet">
</head>
<body>
   <?php include 'header.inc'; ?>
    <section id="main">
        <h1>Doki's Gang</h1>
        <div class="image-grid">
              <?php 
        // Include settings for database connection
        require_once("settings.php");

        // Connect to the database
        $conn = mysqli_connect($host, $username, $password, $database);

        // Check connection
        if (!$conn) {
          echo "<p>Database connection failed: " . mysqli_connect_error() . "</p>";
        } else {
          // Query to get friend data
          $sql = "SELECT name, description, picture FROM friends";
          $result = mysqli_query($conn, $sql);

          // If there are results, display them
          if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $name = htmlspecialchars($row['name']);
              $desc = htmlspecialchars($row['description']);
              $imgPath = htmlspecialchars($row['picture']);
              // add the alt description into the database and read it from there
              echo "<figure>";
              echo "<img src=\"$imgPath\" alt=\"$name\">";
              echo "<figcaption>$name - $desc</figcaption>";
              echo "</figure>";
            }
          } else {
            // No results found
            echo "<p>No cat friends found in the database.</p>";
          }

          // Close database connection
          mysqli_close($conn);
        }
            ?> 
              
        </div>
    </section>
   <?php include 'footer.inc'; ?>
    
</body>
</html>