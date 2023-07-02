<?php 
if(isset($_POST['Login'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];
	if($user == "admin" && $pass == "rahasia"){
		echo "<h2>Login anda berhasil</h2>";
	}else{
		echo "<h2>Login gagal, maaf ulangi lagi</h2>";
		echo '<a href="loginInput.php"><button>Kembali</button></a>';
	}
}
?>