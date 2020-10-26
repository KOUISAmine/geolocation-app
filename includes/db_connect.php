<?php

/**
*
* Here we create a database connection.
*
*/

$host = "localhost";          // Database Host
$user = "root";               // Database User
$passord = "";                   // Database Password
$db = "count_page_view";      // Database Name

// Connect to Database
$conn = new mysqli($host, $user, $passord, $db);

// Check connection
if($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error); 
}
?>