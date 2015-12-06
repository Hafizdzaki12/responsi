<!-- Membuat Table di PHP -->

<?php
	include "Konek.php";
	
	//SQL untuk membuat tabel
	$sql = "CREATE TABLE MyGuests(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
	firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50), reg_date TIMESTAMP);";
	if (mysqli_query($conn, $sql)){
		echo "Table created successfully.";
	}
	else {
		echo "Error creating table: ".mysqli_error($conn);
	}
	mysqli_close($conn);
?>
