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
    /* Doki's friends Page */
.image-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 10px;
    padding: 10px;
  }
  
  .image-grid figure {
    margin: 0;
    text-align: center;
  }
  
  .image-grid img {
    width: 100%;
    height: 150px; /* or any fixed height you like */
    object-fit: cover;
    display: block;
    border-radius: 8px;
  }
  
  .image-grid figcaption {
    margin-top: 5px;
    font-size: 0.9em;
    color: #555;
  } </style>
</head>
<body>
<?php include 'header.inc'; ?>

    <section id="main">
        <h1>Doki's Gang</h1>
        <div class="image-grid">
            <figure>
                <img src="images/friends/crazyPop.jpeg" alt="Cute Pop, is a cat sitting on their back">
                <figcaption>Pop - Doki’s wildest gang member, sitting like he owns the place.</figcaption>
             </figure>
             <figure>
                <img src="images/friends/popCheckersYAY.jpeg" alt="Pop and his friend">
                <figcaption>Checkers - Checkers’s the boss. Pop’s just here for snacks.</figcaption>
              </figure>
              <figure>
                <img src="images/friends/felix.jpg" alt="A cute dog wearing a Santa outfit.">
                <figcaption>Felix - When Santa needs class, he sends this guy.</figcaption>
              </figure>
              <figure>
                <img src="images/friends/Mimi.jpg" alt="Mimi the cute cat looking at camera">
                <figcaption>Mimi - Sweet on the outside, mafia on the inside.</figcaption>
              </figure>
              <figure>
                  <img src="images/friends/Desssie.jpg" alt="Dessie the Chicken">
                <figcaption>Dessie. She’s not a cat, but don’t tell her that.</figcaption>
              </figure>
              <figure>
                <img src="images/friends/honey.jpg" alt="Honey is a polite tabby cat">
                <figcaption>Honey—polite paws, criminal mind.</figcaption>
              </figure>
              <figure>
                <img src="images/friends/toothless.jpg" alt="Black cat like a rag">
                <figcaption>Toothless — trained in the art of vanishing.</figcaption>
              </figure>
              <figure>
                <img src="images/friends/Wilma.jpg" alt="Wilma is a white handsome dog">
                <figcaption>Wilma—too handsome to be a cat, but accepted anyway.</figcaption>
              </figure>
              <figure>
                  <img src="images/friends/rascal.jpg" alt="Rascal is a sleepy cat">
                  <figcaption>Rascal - Eyes closed, but always judging.</figcaption>
                </figure>

                <figure>
                  <img src="images/friends/sushi.png" alt="Sushi is the cat behind the window">
                  <figcaption>Sushi - Love's to be a victim .</figcaption>
                </figure>

        </div>
    </section>
    <?php include 'footer.inc'; ?>
    
</body>
</html>