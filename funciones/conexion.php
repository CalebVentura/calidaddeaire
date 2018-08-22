<?php 
	$conn = new mysqli('localhost','comsociot','sensoresiot','iotproject');

	if ($conn->connect_error) {
		echo $error = $conn->connect_error;
	}
 ?>

