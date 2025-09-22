<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is about Doki the cat, who is a silver Scottish fold">
    <meta name="keywords" content="cat, Scottish fold, silver, feline">
    <meta name="author" content="AT">
    
    <title>A Day in the Life of Doki</title>

    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <!-- Font From Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Edu+VIC+WA+NT+Beginner:wght@400..700&display=swap" 
    rel="stylesheet">
    <!-- Embedded CSS -->
    <style>
        figcaption{
            border: 1px solid black;
        }
        
    </style>
</head>
<body>
    <section id="header">
        <header>
            <img id="logo" src="images/doki_logo.png" alt="A cat who sells ice cream"> 
            <h2>Little Doctor: Doki the Cat</h2>
        </header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="fav_form.html">Survey</a></li>
                <li><a href="friends.html"> Crew</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </section>
    <section id="main">
    <?php
        $catName = "Doki";
        echo "<h1>A Day in the Life of <a href=#doki_pic> $catName (THE CAT)</a></h1>";
    ?>

    
    <p>Welcome to the purrfectly amusing world of feline antics!</p>
    <?php
        $acttivities = array("Waking up","Ignore Breakfast","Zoomies","Annoying the dog");
        echo "<h3> $catName's Top 3 Favourite Activities: </h3>";

        for ($i = 0;$i < 3; $i++){
            echo "Activity " . ($i +1).": $acttivities[$i]</p>";
        }

        if (in_array("Zoomies", $acttivities)){
            echo "<p> Of course, $catName Loves Zoomies!</p>";
        }
    ?>
    <section id="routine">
        <div id="morning" class="routine_text">
            <h2>Morning Routine</h2>
            <p>Start with a <strong>stretch</strong>.</p>
            <ul>
                <li>Wake up and demand breakfast </li>
                <li>Ignore breakfast</li>
            </ul>
        </div>
        <div id="midday" class="routine_text">
            <h2>Midday Fun</h2>
            <p>Time for <em>mischief</em>.</p>
            <ol>
                <li>Knock over a vase</li>
                <li>Get stuck in a box</li>
                <li>Annoy the dog
                    <ul>
                        <li>Steal the dog's toy</li>
                        <li>Hide in the dog's bed</li>
                    </ul>
                </li>
            </ol>
        </div>

        <div id="evening" class="routine_text">
            <h2>Evening</h2>
            <p>As the sun sets, craziness begins.</p>
            <dl>
                <dt>Zoomies</dt>
                <dd>Running around the house</dd>
                <dt>Dinner</dt>
                <dd>Demanding, then ignoring</dd>
            </dl>
        </div>
    </section>
    <p> Had enough fun? Go and nap!</p>
    <hr>
    <table>
        <caption>Favourite Nap Spots and Their Comfort Levels</caption>
        <tr>
            <th>Spot</th>
            <th>Comfort</th>
            <th>Preference</th>
        </tr>
        <tr>
            <td>Laptop</td>
            <td>8/10</td>
            <td>High</td>
        </tr>
        <tr>
            <td>Laundry basket</td>
            <td>9/10</td>
            <td>Medium</td>
            
        </tr>
    </table>
    <figure>
        <img id="doki_pic" src="images/doki.gif" alt="A Funny Silver Scottish Fold Cat, sitting and waving his tail">
        <figcaption>This is Doki! Ati's Cat</figcaption>
    </figure>

    <p><em>Learn more about cats?</em> Visit <a href="https://en.wikipedia.org/wiki/Cat">this website</a>.</p>

    <h3>Send Email to <a href="mailto:ati@swin.edu.au">Ati</a> for Additional Information</h3>
    </section>
    <section id="footer">
        <footer>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="fav_form.html">Survey</a></li>
                    <li><a href="about.html">About Doki</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <p>© 2025 Swinburne University of Technology - All Fun and No Stress</p>
        </footer>
    </section>
</body>
</html>
