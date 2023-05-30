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

    <section class="santacruz-class">
        <div class="santacruz-text">
            <h1>Best Spots in Santa Cruz<br>Marinduque</h1>
        </div>
        <div class="santacruz-about">
            <p>The town of Santa Cruz is one of the six municipalities in the province of Marinduque and it was named as one of the top ten 
                most beautiful towns and cities in Mimaropa region. It was based on tourist attractions, culture and heritage as well as natural resources.
                In the town of Santa Cruz you can Visit Beautiful places to visit and exciting activities that you can  do such as  Island Hopping,
                visiting caves and underground river, youn also swim in the waterfalls and beaches. 
                <br><br><br>Here are the Best Spots you can see in Santa Cruz Marinduque:
            </p>
        </div>
    </section>


    <main>
        <section id="tours-santacruz">
            <?php
                if (isset($_GET['search'])) {
                    $search = $_GET['search'];
                    $xml = simplexml_load_file('boac.xml');
                    
                    $found = false;
                    foreach ($xml->santacruz as $santacruz) {
                        if (stripos($santacruz->title, $search) !== false) {
                            echo '<div class="santacruz">';
                            echo '<h3>' . $santacruz->title . '</h3>';  
                            echo '<img src="' .$santacruz->image . '"alt ="image"><br>'; 
                            echo '<p>' . $santacruz->content . '</p>';
                            echo '<p><span>Location: </span> ' . $santacruz->location . '</p>';
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
                 
                    foreach ($xml->santacruz as $santacruz) {
                        echo '<div class="santacruz">';
                        echo '<h3>' . $santacruz->title . '</h3>';
                        echo '<img src="' .$santacruz->image . '"alt ="image"><br>';
                        echo '<p>' . $santacruz->content . '</p>';
                        
                        echo '<p><span>Location:</span> ' . $santacruz->location . '</p>';
                        
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



