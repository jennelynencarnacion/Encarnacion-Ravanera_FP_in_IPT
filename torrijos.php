<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="boac.css">
    <title>Marinduque Tourism Guide</title>

</head>
<body>

<!-------------------------------- HEADER ----------------->
    <div class="header" id="header">
			
		<nav>
			<h2 class="logo">Tour<span>ism</span><h2></h2>
			<ul>
			    <li><a href="code.php">Home</a></li>
				<li><a href="about.php">About</a></li>
                <li><a href="destination.php">Destinations</a></li>
				<li><a href="contact.php">Contact Us</a></li>
						
					
		    </ul>

            <form method="GET">
                <input type="text" placeholder="Search..." id="search" name="search">
                <button type="submit">Search</button>
            </form>			
		</nav>
           
    </div>

    <section class="torrijos-class">
        <div class="torrijos-text">
            <h1>Best Spots in Torrijos<br>Marinduque</h1>
        </div>
        <div class="torrijos-about">
            <p>Torrijos is 4th-class municipality in the province of Marinduque, Philippines, with a population of 29,366 people as of 2010. Historically, an engagement during the Philippine-American War in Torrijos plotted Colonel Maximo Abad and American Devereux Shields’s forces, where Abad’s men annihilated the Americans, becoming one of the worst defeats suffered by the colonists during the war. In 1942, the Japanese occupied Torrijos, but in 1945, Filipino and American troops fought against the Japanese during World War II, which was known as the Battle of Marinduque. With its rich history and culture, the place is now one of the favorite spots of travelers and holidaymakers visiting the country. If you are planning to do the same, here is a set of information you can use:
            <br><br><br>Here are the Best Spots you can see in Torrijos Marinduque:
            </p>
        </div>
    </section>


    <main>
        <section id="tours-torrijos">
            <?php
                if (isset($_GET['search'])) {
                    $search = $_GET['search'];
                    $xml = simplexml_load_file('boac.xml');
                    
                    $found = false;
                    foreach ($xml->torrijos as $torrijos) {
                        if (stripos($torrijos->title, $search) !== false) {
                            echo '<div class="torrijos">';
                            echo '<h3>' . $torrijos->title . '</h3>';  
                            echo '<img src="' .$torrijos->image . '"alt ="image"><br>'; 
                            echo '<p>' . $torrijos->content . '</p>';
                            echo '<p><span>Location: </span> ' . $torrijos->location . '</p>';
                            echo '</div>';
                            $found = true;
                        }
                    }
                    if (!$found) {
                        echo '<p>No blogs found.</p>';
                    }
                    // Display the search metadata
                    echo '<p>Showing results for search: ' . $search . '</p>';
                } else {
                    $xml = simplexml_load_file('boac.xml');
                 
                    foreach ($xml->torrijos as $torrijos) {
                        echo '<div class="torrijos">';
                        echo '<h3>' . $torrijos->title . '</h3>';
                        echo '<img src="' .$torrijos->image . '"alt ="image"><br>';
                        echo '<p>' . $torrijos->content . '</p>';
                        
                        echo '<p><span>Location:</span> ' . $torrijos->location . '</p>';
                        
                        echo '</div>';
                    }
                }
            ?>
        </section>
    </main>
	<footer>
		<p>&copy; 2023 Marinduque Tourism Website</p>
	</footer>
    
</body>
</html>