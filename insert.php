<?php  
	require 'DBConnect.php';

	$id = $_POST['id_post'];
	$name = $_POST['name_post'];
	$date = $_POST['date_post'];
	$address = $_POST['address_post'];

	$query = "INSERT INTO Student VALUES('$id', '$name', '$date', '$address')";

	if (mysqli_query($connect, $query)) {
		echo "Sucessful";
	} else {
		echo "erro";
	}
?>