<!DOCTYPE html>
<html>
<head>
	
	<title>DATA MAHASISWA</title>
</head>
<body>

	<form action="tampil.php">
			
		
		
	</form><br>
	<form action="tampil.php">
		<input type="submit" value="TAMPPILAKAN DATA" name="PINDAH">
	</form>

</body>
</html>

<?php
include("koneksi_per5.php");
$no=$_GET['no'];

	$sql="delete from db_data where no='$no'";
	if(mysqli_query($conn,$sql))
	{
		echo "DATA BERHASIL DIHAPUS";
		header("Location:tampil.php");
	}
	else
	{
		echo "EROR!!".$sql."".mysqli_error($conn);
	}
	$conn->close();

?>