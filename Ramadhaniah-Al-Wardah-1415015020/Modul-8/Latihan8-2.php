<!-- Membuat Database di PHP -->

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	//Membuat koneksi
	$conn = mysqli_connect($servername, $username, $password);
	
	//Memeriksa koneksi
	if (!$conn){ //jika tidak terkoneksi
		die("Connection failed: ". mysqli_connect_error());
	}
	
	/*
		include "Latihan8-1.php";
		echo "<br>";
	*/
	
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
