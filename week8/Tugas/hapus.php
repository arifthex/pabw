<?php  
	$conn=mysqli_connect("localhost","root","","crud"); 
	$nrp=$_POST['nrpsearch'];   

	$hasil="DELETE FROM mahasiswa WHERE nrp = '$nrp'"; 
	$query = mysqli_query($conn, $hasil);

	if($query){
		echo "<script>alert('data berhasil di hapus')</script>";
		echo "<script>location='form.html'; </script>";
	}else{
		echo "<script>alert('data tidak ditemukan')</script>";
		echo "<script>location='form.html'; </script>";
	}
?>