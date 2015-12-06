<!-- Eksekusi Banyak Query | Modded -->

<?php
	include "Konek.php";
	
	//SQL untuk retrieve data
	$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES
	('John', 'Doe', 'john@example.com'),
	('Mary', 'Moe', 'mary@example.com'),
	('Julie', 'Dooley', 'julie@example.com')";
	
	if (mysqli_query($conn, $sql)){
		$last_id = mysqli_insert_id($conn);
		echo "New records created successfully.";
	}
	else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
?>
