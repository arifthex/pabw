<?php  
	$nama=$_POST['namasearch']; 
	$conn=mysqli_connect("localhost","root","","crud");   
	$hasil=mysqli_query($conn,"select m.nrp,m.nama,m.alamat,j.ID_Jur,j.Nama from mahasiswa m JOIN jurusan j ON m.ID_Jur=j.ID_Jur where m.nama like '%$nama%'  ");  

	$jumlah=mysqli_num_rows($hasil);  
	echo "<br>";  
	echo "Ditemukan: $jumlah";  
	echo "<br>";  
	while($baris=mysqli_fetch_array($hasil))    {    
		echo "NRP : ";    
		echo $baris[0];    
		echo "<br>";  
		echo "Nama : ";    
		echo $baris[1];    
		echo "<br>";   
		echo "Alamat : ";    
		echo $baris[2];
		echo "<br>";    
		echo "ID Jurusan : ";    
		echo $baris[3];    
		echo "<br>";       
		echo "Jurusan :";    
		echo $baris[4]; 
		echo "<br>";  
	} 
?>