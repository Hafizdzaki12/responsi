<!-- Memasukkan data pada tabel -->

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB"
	
	//Membuat koneksi
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	//SQL untuk mengisi data
	$sql = "INSERT INTO MyGue
	sts (firstname, lastname, email) VALUES
	('John', 'Doe', 'john@example.com')";
	if (mysqli_query($conn, $sql)){
		echo "New record created successfully.";
	}
	else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
?>
