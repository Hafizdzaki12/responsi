<!-- Hapus Data -->

<?php
	include "Konek.php";
	
	//SQL untuk menghapus sebuah record
	$sql = "DELETE FROM MyGuests WHERE id=3";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_query($conn, $sql)){
		echo "Record deleted successfully.";
	}
	else {
		echo "Error deleting record: ".mysqli_error($conn);
	}
	
	mysqli_close($conn);
?>
