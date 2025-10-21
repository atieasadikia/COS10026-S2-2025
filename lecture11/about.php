<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Doki</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">

    <!-- Font From Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Edu+VIC+WA+NT+Beginner:wght@400..700&display=swap" 
    rel="stylesheet">
    <style>
    #family {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  text-align: center;
  margin-top: 20px;
}

#family div {
  flex: 1 1 250px;
  margin: 10px;
}

#family img {
  width: 100%;
  max-width: 250px; /* limits how big each image can be */
  height: auto;     /* keeps the image proportions correct */
  border-radius: 10px; /* optional, for rounded corners */
  box-shadow: 0 2px 5px rgba(0,0,0,0.2); /* optional, adds a light shadow */
}

#main h1, #main h2, #main p {
  text-align: center;
  font-family: "Edu VIC WA NT Beginner", sans-serif;
}
 </style>
</head>
<body>
    <?php include 'header.inc'; ?>

    <section id="main">
        <h1>About Doki</h1>
        <p>Doki was born in New South Wales (NSW) in October 2019.</p>
        <h2>Doki's Biological Parrent</h2>
        <section id="family">
            <div id="mother">
                <h2>Mother</h2>
                <img src="images/dokis_mom.jpg" alt="A female Silver Tabby Adult Cat">
            </div>
            <div id="doki">
                <h2>Doki</h2>
                <img src="images/doki.jpg" alt="An Scottish fold silver tabby cat">
                
            </div>
    
            <div id="dad">
                <h2>Father</h2>
                <img src="images/dokis_dad.jpg" alt="An Scottish fold silver tabby adult cat">
                
            </div>
        </section>
    </section>
    <?php include 'footer.inc'; ?>
    
</body>
</html>