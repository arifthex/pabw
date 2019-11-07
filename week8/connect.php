<!DOCTYPE html>
<html>
<head>
	<title>Koneksi database mysql</title>
</head>
<body>
<?php 
	$conn=mysqli_connect ("localhost","root","","crud"); 
	if ($conn) {     
	echo "OK"; 
	} else {    echo "Server not connected"; 
	}  
?>
</body>
</html>