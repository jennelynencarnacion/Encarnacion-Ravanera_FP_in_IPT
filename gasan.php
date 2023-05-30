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

    <section class="gasan-class">
        <div class="gasan-text">
            <h1>Best Spots in Gasan<br>Marinduque</h1>
          
        </div>
        <div class="gasan-about">
            <p>Gasan is a town in the province of Marinduque in the Philippines. With 33,000 people living within town limits, it is the province's third-largest town in terms of population, and is often called the cultural capital of Marinduque.
            <br><br><br>Here are the Best Spots you can see in Gasan Marinduque:
            </p>
        </div>
    </section>


    <main>
        <section id="tours-gasan">
            <?php
                if (isset($_GET['search'])) {
                    $search = $_GET['search'];
                    $xml = simplexml_load_file('boac.xml');
                   
                    $found = false;
                    foreach ($xml->gasan as $gasan) {
                        
                        
                        if (stripos($gasan->title, $search) !== false) {
                            

                            echo '<div class="gasan">';                            
                            echo '<h3>' . $gasan->title . '</h3>';  
                            echo '<img src="' .$gasan->image . '"alt ="Image"><br>';                             
                            echo '<p>' . $gasan->content . '</p>';
                            echo '<p><span>Location: </span> ' . $gasan->location . '</p>';
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
                   
                    foreach ($xml->gasan as $gasan) {
                        
                        echo '<div class="gasan">';
                        echo '<h3>' . $gasan->title . '</h3>';
                        echo '<img src="' .$gasan->image . '"alt ="Image" />';   
                        echo '<p>' . $gasan->content . '</p>';
                        echo '<p><span>Location:</span> ' . $gasan->location . '</p>';
                        
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