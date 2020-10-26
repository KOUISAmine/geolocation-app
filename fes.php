<?php
require_once('includes/db_connect.php'); // Database connection file
require_once('includes/functions.php');  // PHP functions file

$title = "Fes";                          // Set the title's page
include_once('includes/header.php');     // Header file

$city = 'fes';                           // Set the city name
updateViews($conn, $city);               // update the current number of visits
?>

<div id="city">
	<img src="img/fes.jpg" style="hight:100%"/>
	<div class="city-container">
		<h1>You live in Fes</h1>
		<h2>Fes is the second largest city in Morocco after Casablanca</h2>
		<ul>
			<li><b>Area:</b> 195 km</li>
			<li><b>Metropolitan area:</b> 20,166 km</li>
			<li><b>Postal code:</b> 30080-30206</li>
			<li><b>Population:</b> 1.224 million </li>
		</ul>
		<div class="cnt">
			<p class="label-counter">Page views: &emsp;</p>
			<span class="counter"><?= getViews($conn, $city); ?></span>
		</div>
	</div>
</div>

<?php include_once('includes/footer.php'); ?>