<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>
<body>
<form action="TM_7hasil.php" method="POST">
	<label for="name">Nama :</label>
	<input type="text" name="nm" id="nama" required=""> <br><br>
	<label for="alamat">Alamat :</label>
	<input type="text" name="alamat" id="alamat"><br><br>
	<label>Jenis kelamin :</label>
	<input type="radio" name="jk" id="lk" value="laki-laki" checked="">
	<label for="lk">laki-laki &nbsp</label> 
	<input type="radio" name="jk" id="pr" value="perempuan">
	<label for="pr">Perempuan &nbsp</label> <br><br>
	<label>Golongan darah : </label>
	<select name="golongan">
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="AB">AB</option>
		<option value="O">O</option>
	</select> <br><br>
	<label>Hoby : </label>
	<input type="checkbox" name="hobi[]" id="baca" value="baca"><label for="baca">Membaca</label>
	<input type="checkbox" name="hobi[]" id="bad" value="Badminton"><label for="bad">Badminton</label>
	<input type="checkbox" name="hobi[]" id="fut" value="futsal"><label for="fut">Futsal</label>
	<input type="checkbox" name="hobi[]" id="tak" value="takraw"><label for="tak">Takraw</label> <br><br>
	<label>Keterangan</label><br>
	<textarea name="keterangan"></textarea>
	<br>
	<input type="submit" name="submit" value="Kirim">
</form>
</body>
</html>