<!-- Ubah Data -->

<?php
	include "Konek.php";
	
	$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_query($conn, $sql)){
		echo "Record updated successfully.";
	}
	else {
		echo "Error updating record: ".mysqli_error($conn);
	}
	
	mysqli_close($conn);
?>
