<?php 
if(isset($_POST['Input'])){
	$nama1 = $_POST['nama1'];
	$nama2 = $_POST['nama2'];
	$nama3 = $_POST['nama3'];
	echo "<b>Daftar nama teman yang belajar PHP:<br>";
	echo "1. $nama1 <br>";
	echo "2. $nama2 <br>";
	echo "3. $nama3 <br>";
}
?>