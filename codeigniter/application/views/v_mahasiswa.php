<!DOCTYPE html>
<html>
<head>
	<title>FORM MAHASISWA</title>
</head>
<body>
<h1>DATA MAHASISWA</h1>
<table border="1" cellspacing="0" cellpadding="5">
	<thead>
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Agama</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($mahasiswa as $mhs): ?>
			<tr>
			<td><?= $mhs['nim']; ?></td>
			<td><?= $mhs['nama']; ?></td>
			<td><?= $mhs['email']; ?></td>
			<td><?= $mhs['agama']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>