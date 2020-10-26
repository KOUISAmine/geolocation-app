<?php

/**
*
* Here we group all user-defined PHP functions.
*
*/

// get the number of visits for the specified page
function getViews($conn, $page_name)
{	
	$sql = "SELECT * FROM pages WHERE name like '$page_name'";
	$result = $conn->query($sql);

	if($result){
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				return $row["visits"];
			}
		} else {
			return "no results";
		}
	}
}

// update the number of visits for the specified page
function updateViews($conn, $page_name)
{
	$sql = "UPDATE pages SET visits = visits + 1 WHERE name like '$page_name'";
	
	if(!$conn->query($sql))
    {
        echo "Error updating record: " . $mysqli->error;
    }
	
}
?>