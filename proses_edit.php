
<?php
include "./koneksi_per5.php";

if(isset($_POST['edit'])){

	$npm =$_POST ["npm"];
	$nama =$_POST ["nama"];
	$jurusan=$_POST ["jurusan"];
	$jk =$_POST ["jk"];
	$alamat=$_POST["alamat"];

	$query = "UPDATE db_data SET nama='$nama', jurusan='$jurusan', jk='$jk', alamat='$alamat' where npm='$npm'";

	$sql = mysqli_query($conn, $query);

	if ($sql == true) {
		header("location:tampil.php");
	}else{
		echo $query;
	}
}
?>