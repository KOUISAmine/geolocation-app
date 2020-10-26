<?php
require_once('includes/db_connect.php'); // Database connection file
require_once('includes/functions.php');  // PHP functions file

$title = "Rabat";                        // Set the title's page
include_once('includes/header.php');     // Header file

$city = 'rabat';                         // Set the city name
updateViews($conn, $city);               // update the current number of visits
?>

<div id="city">
	<img src="img/rabat.jpg" style="hight:100%"/>
	<div class="city-container">
		<h1>You live in Rabat</h1>
		<h2>Rabat is the capital city of Morocco</h2>
		<ul>
			<li><b>Area:</b> 117 km</li>
			<li><b>Metropolitan area:</b> 17,166 km</li>
			<li><b>Postal code:</b> 10054-10106</li>
			<li><b>Population:</b> 577,827 </li>
		</ul>
		<div class="cnt">
			<p class="label-counter">Page views: &emsp;</p>
			<span class="counter"><?= getViews($conn, $city); ?></span>
		</div>
	</div>
</div>

<?php include_once('includes/footer.php'); ?>