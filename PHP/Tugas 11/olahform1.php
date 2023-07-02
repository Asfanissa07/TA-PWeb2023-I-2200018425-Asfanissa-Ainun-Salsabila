<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengoalahan Form cara #1</title>
</head>
<body>
	<form action="" method="post" name="input">
		<label>Nama Lengkap:</label>
		<input type="text" name="nama"><br>
		<input type="submit" name="Submit" value="Tampilkan isi TextBox">
	</form>
</body>
</html>

<?php 	
if(isset($_POST['Submit'])){
	$nama = $_POST['nama'];
	echo "<br>Nama anda adalah <b>$nama</b>";
}
?>