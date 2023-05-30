<?php
$xml = simplexml_load_file("places.xml") or die("Error: Cannot create object");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mrinduque Tourism Guide</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

											<!-- home section -->
	
		<div class="header" id="header">
			
			<nav>
				<h2 class="logo">Tour<span>ism</span><h2></h2>
				<ul>
					<li><a href="code.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="destination.php">Destinations</a></li>
					<li><a href="contact.php">Contact Us</a></li>
						
					
				</ul>				
			</nav>
			<div class="header-class">
				<div class="header-text">
					<h1>Let's Explore<br>The Beauty of MARINDUQUE!!</h1>
					<a href="destination.php" class="btn">Explore</a>
				</div>
			</div>
		</div>
		
	<!----------------------- ABOUT MARINDUQUE -------------------->
	<section class="about" id="about">
		<div class="container-about">
		<h1> About <span>Marinduque</span></h1>
			<p>Dubbed as the “Heart of the Philippines,” the province of Marinduque is ready to welcome everyone like kings and queens!<br><br>
				Marinduque is a heart-shaped island in Southern Tagalog. Coincidentally, the island is also the geographical center of the Philippine archipelago as evidenced by a geodetic stone marker known as Luzon Datum located at the summit of Mataas na Bundok in the town of Mogpog. The province is made up of six (6) municipalities and fourteen (14) islands and islets with the town of Boac as its capital. Northeast of the mainland are island group of Santa Cruz, Mongpong and Maniwaya Island, popular for its white sand beaches. Meanwhile, in the southwest is Tres Reyes Islands, a group of islands which also boast of white sand beaches and bountiful waters. More than being the heart of the Philippines, geographically and visually, Marinduque is also known for Moryonan or Moriones Lenten Rites making the island province as the Lenten Mecca of Southern Tagalog.
				Moryonan or Moriones Lenten Rites is when colorfully garbed and masked soldiers and centurions parade the streets of Boac, Mogpog and Gasan. The tradition is observed during Holy Week where the streets of the towns are converted into a huge stage as the story of Longinus unfolds.
				Such a small island full of natural and cultural wonders, and blessed with lovely people. Marinduque has everything that your heart desires. From white sandy beaches, to centuries old churches, panoramic mountains, cave systems, scenic waterfalls, rich tradition and culture, and more!
			<br><br>Marinduque, more than a destination, make it your home!
			</p>
		</div>	
	</section>

<!----------------------------------- HOTEL AND RESTAURANTS DESIGN ------------------------- -->
	<section class="places" id="places">
		<div class="places-intro">
			<h1> Hotels <span>&</span> Restaurants</h1>
			<p>There are high-end resorts and hotel in Marinduque, but most tourists spend a night in local hotels, inns and guest houses. Meanwhile, the adventurous ones may choose to pitch a tent in Poctoy Beach, Tres Reyes Islands or Maniwaya Island. <br><br>Some of the prominent hotels and resorts in the province are:</p>
		</div>
	<div class="container">
		<?php foreach ($xml->place as $place): ?>
			<div class="card">
				<img src="<?php echo $place->image; ?>" alt="<?php echo $place->name; ?>">
				<div class="intro">
				<h2><?php echo $place->name; ?></h2>
				<p><?php echo $place->description; ?></p>
				<p><?php echo '<span>Location:</span> ' . $place->location  ; ?> </p>
				
				<a href="<?php echo $place->website; ?>" class="btn">See More</a>
				</div>
				
			</div>
		<?php endforeach; ?>
	</div>


	<!------------------------------------------ ACTIVITIES --------------------------------->
	<section class="activities" id="activities">
		<h1> Activities and Events in <span>Marinduque </span> </h1>
		<?php
			// Load the XML file
			$xml = simplexml_load_file('places.xml');

			// Display the activities and events
			echo '<ul>';
			foreach ($xml->activity as $activity) {
				echo '<li>';
				echo '<h3>' . $activity->title . '</h3>';
				echo '<p>' . $activity->description . '</p>';
				echo '</li>';
			}
			echo '</ul>';
			?>

	</section>
	<footer>
		<p>&copy; 2023 Marinduque Tourism Website</p>
	</footer>
	
</body>
</html>

