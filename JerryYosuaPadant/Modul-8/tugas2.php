<!-- Membuat Database di PHP -->

<?php
	include "latihan8-1.php";
	
	//Membuat database
	$sql = "CREATE DATABASE myDB";
	if (mysqli_query($conn, $sql)){
		echo "Database created successfully.";
	}
	else {
		echo "Error creating database: ".mysqli_error($conn);
	}
	mysqli_close($conn);
?>
