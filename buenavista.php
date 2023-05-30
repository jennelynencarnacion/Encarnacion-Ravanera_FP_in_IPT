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

    <section class="buenavista-class">
        <div class="buenavista-text">
            <h1>Best Spots in Buenavista<br>Marinduque</h1>
        </div>
        <div class="buenavista-about">
            <p>Buenavista is one of the municipalities in the province of Marinduque, Philippines. According to the 2010 census conducted by the Rural Health Unit, it has a population of 23,111 people. This smallest, once-forgotten town of Buenavista, small but the most scenic place in Marinduque where the Malindig volcano looms over the lives of the peace-loving and culture-bound people living there, is steadily rising above the decades-old hardship and poverty. Small resorts and parks are being built, roads being upgraded, training programs and livelihood programs undertaken, the people no longer feel they are left behind and now recognize their importance in contributing their own share in the island-province's tourism development and economic progress.

            <br><br><br>Here are the Best Spots you can see in Buenavista Marinduque:
            </p>
        </div>
    </section>


    <main>
        <section id="tours-buenavista">
            <?php
                if (isset($_GET['search'])) {
                    $search = $_GET['search'];
                    $xml = simplexml_load_file('boac.xml');
                   
                    $found = false;
                    foreach ($xml->buenavista as $buenavista) {
                        if (stripos($buenavista->title, $search) !== false) {
                            echo '<div class="buenavista">';
                            echo '<h3>' . $buenavista->title . '</h3>';  
                            echo '<img src="' .$buenavista->image . '"alt ="image"><br>'; 
                            echo '<p>' . $buenavista->content . '</p>';
                            echo '<p><span>Location: </span> ' . $buenavista->location . '</p>';
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
                    $imagePath = $xml->image;
                    foreach ($xml->buenavista as $buenavista) {
                        echo '<div class="buenavista">';
                        echo '<h3>' . $buenavista->title . '</h3>';
                        echo '<img src="' .$buenavista->image . '"alt ="image"><br>';    
                        echo '<p>' . $buenavista->content . '</p>';
                        
                        echo '<p><span>Location:</span> ' . $buenavista->location . '</p>';
                        
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