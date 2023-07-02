<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pilih Program Studi</title>
</head>
<body>
	<form action="prosesRadio.php" method="post" name="input">
		<input type="radio" name="prodi" value="Teknik Informatika" checked>Teknik Informatika<br>
		<input type="radio" name="prodi" value="Teknik Industri" checked>Teknik Industri<br>
		<input type="radio" name="prodi" value="Manajemen" checked>Manajemen<br>
		<input type="radio" name="prodi" value="Psikologi" checked>Psikologi<br>
		<input type="radio" name="prodi" value="Bimbingan Konseling" checked>Bimbingan Konseling<br>
		<input type="submit" name="pilih" value="Pilih">
		<input type="reset" name="reset" value="Reset">
	</form>
</body>
</html>