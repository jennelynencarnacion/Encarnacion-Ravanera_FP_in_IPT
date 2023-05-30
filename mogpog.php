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

    <section class="mogpog-class">
        <div class="mogpog-text">
            <h1>Best Tourist Spots in Mogpog<br>Marinduque</h1>
          
        </div>
        <div class="mogpog-about">
            <p>Mogpog, officially the Municipality of Mogpog is a 3rd class municipality in the province of Marinduque, Philippines. According to the 2020 census, it has a population of 34,516 people.
            <br><br><br>Here are the Best Spots you can see in Mogpog Marinduque:
            </p>
        </div>
    </section>


    <main>
        <section id="tours-mogpog">
            <?php
                if (isset($_GET['search'])) {
                    $search = $_GET['search'];
                    $xml = simplexml_load_file('boac.xml');
                   
                    $found = false;
                    foreach ($xml->mogpog as $mogpog) {
                        
                        
                        if (stripos($mogpog->title, $search) !== false) {
                            

                            echo '<div class="mogpog">';                            
                            echo '<h3>' . $mogpog->title . '</h3>';  
                            echo '<img src="' .$mogpog->image . '"alt ="Image"><br>';                             
                            echo '<p>' . $mogpog->content . '</p>';
                            echo '<p><span>Location: </span> ' . $mogpog->location . '</p>';                      
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
                   
                    foreach ($xml->mogpog as $mogpog) {
                        
                        echo '<div class="mogpog">';
                        echo '<h3>' . $mogpog->title . '</h3>';
                        echo '<img src="' .$mogpog->image . '"alt =" Image" />';   
                        echo '<p>' . $mogpog->content . '</p>';
                   
                        echo '<p><span>Location:</span> ' . $mogpog->location . '</p>';
                        
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