<!DOCTYPE html>
<html>
<head>
	<title>Simpan data mahasiswa</title> 
</HEAD> 
<BODY> 
	<h1>Simpan data mahasiswa MySQL</h1>
	<?php  
	$conn=mysqli_connect ("localhost","root","","crud") or die ("koneksi gagal"); 
	$nrp = $_POST["nrp"]; 
	$nama = $_POST["nama"]; 
	$alamat = $_POST["alamat"]; 
	$jurusan = $_POST["jurusan"];
	$nama2 = $_FILES['foto']['name'];
	$file_tmp = $_FILES['foto']['tmp_name'];
	$lokasi = "foto/";
	$upload = move_uploaded_file($file_tmp, $lokasi.$nama2);
	

	echo "Nrp      : $nrp <br>"; 
	echo "Nama     : $nama <br>";
	echo "alamat   : $alamat <br>";
	echo "jurusan  : $jurusan <br>";
	echo '<td style="border:1px solid #000000;" align="center">
		<img src="foto/'.$nama2.'" width="100"/><br/>
		</td>';
	
	$sql = "insert into mahasiswa (nrp,nama,alamat,foto,ID_Jur) 
			values('$nrp','$nama','$alamat','$nama2','$jurusan') ";
	$hasil2 = mysqli_query($conn,$sql) or die (mysqli_error());
	if ($hasil2) {
		echo "Simpan data berhasil dilakukan";
	} else  {
		echo "Tidak dapat menambah siswa";
	}
	
	?> 
</BODY> 
</HTML>