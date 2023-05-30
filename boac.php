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

    <section class="boac">
        <div class="boac-text">
            <h1>Best Spots in Boac<br>Marinduque</h1>
          
        </div>
        <div class="boac-about">
            <p>Boac is one of the municipalities located on Marinduque Island. This small town sits on the southeastern portion of the province and is best known for its rural charm and scenic landscapes. Among its most popular attractions are the different waterfalls nestled in the area's forests, namely: Ginaras Falls, Kabugsakan Falls, and Hinulugan Falls. Travelers can also head to the Duyay Cave for a leisurely picnic. If you're up for a more thrilling adventure, you can go to the Talamban Cave where you can go spelunking. 
			    Along with its natural attractions, the town preserves various cultural sites as well such as the Diocesan Shrine of Our Lady of Biglang Awa. This chapel sits atop a hill from where churchgoers and other visitors can enjoy a scenic view of the town. For a deeper dive into the town's history, you can also drop by the Boac National Museum. Here, you'll find several exhibits that depict the early lives of the ancestors of Boac. 
            <br><br><br>Here are the Best Spots you can see in Boac Marinduque:
            </p>
        </div>
    </section>


    <main>
        <section id="tours">
            <?php
                if (isset($_GET['search'])) {
                    $search = $_GET['search'];
                    $xml = simplexml_load_file('boac.xml');
                   
                    $found = false;
                    foreach ($xml->place as $place) {
                        
                        
                        if (stripos($place->title, $search) !== false) {
                            

                            echo '<div class="place">';                            
                            echo '<h3>' . $place->title . '</h3>';  
                            echo '<img src="' .$place->image . '"alt ="Boac Image"><br>';                             
                            echo '<p>' . $place->content . '</p>';
                            echo '<p><span>Location: </span> ' . $place->location . '</p>';
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
                   
                    foreach ($xml->place as $place) {
                        
                        echo '<div class="place">';
                        echo '<h3>' . $place->title . '</h3>';
                        echo '<img src="' .$place->image . '"alt ="Boac Image" />';   
                        echo '<p>' . $place->content . '</p>';
                        // echo '<span>' . $place->location . '</span>';
                        // echo '<h4>' . $place->where . '</h4>';
                        echo '<p><span>Location:</span> ' . $place->location . '</p>';
                        
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