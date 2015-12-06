<!-- Memasukkan data pada tabel -->

<?php
	include "Konek.php";
	
	//SQL untuk mengisi data
	$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES
	('John', 'Doe', 'john@example.com')";
	if (mysqli_query($conn, $sql)){
		echo "New record created successfully.";
	}
	else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
?>
