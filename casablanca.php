<?php
require_once('includes/db_connect.php'); // Database connection file
require_once('includes/functions.php');  // PHP functions file

$title = "Casablanca";                   // Set the title's page
include_once('includes/header.php');     // Header file

$city = 'casablanca';                   // Set the city name
updateViews($conn, $city);              // update the current number of visits
?>


<div id="city">
	<img src="img/casablanca.jpg" style="hight:100%" />
	<div class="city-container">
		<h1>You live in Casablanca</h1>
		<h2>Casablanca is the largest city of Morocco</h2>
		<ul>
			<li><b>Area:</b> 220 km</li>
			<li><b>Metropolitan area:</b> 20,166 km</li>
			<li><b>Postal code:</b> 20000-20200</li>
			<li><b>Population:</b> 3.36 million</li>
		</ul>
		<div class="cnt">
			<p class="label-counter">Page views: &emsp;</p>
			<span class="counter"><?= getViews($conn, $city); ?></span>
		</div>
	</div>
</div>


<?php include_once('includes/footer.php'); ?>

