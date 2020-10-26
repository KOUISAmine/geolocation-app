<?php
require_once('includes/db_connect.php'); // Database connection file
require_once('includes/functions.php');  // PHP functions file


$title = "Geolocation App";           // Set the title's page
include_once('includes/header.php');  // Header file
?>

<h1>Welcome to Morocco!</h1>
<div class="card">
  <img src="img/casablanca.jpg" style="width:100%">
  <div class="container">
    <h3>Casablanca</h3> 
    <p>Is the largest city of Morocco</p> 
  </div>
</div>

<div class="card">
  <img src="img/fes.jpg" style="width:100%">
  <div class="container">
    <h3>Fes</h3> 
    <p>Is the second largest city in Morocco</p> 
  </div>
</div>

<div class="card">
  <img src="img/rabat.jpg" style="width:100%">
  <div class="container">
    <h3>Rabat</h3> 
    <p>Is the capital city of Morocco</p>
  </div>
</div>

<?php include_once('includes/footer.php'); ?>
	
	
	

	
	

