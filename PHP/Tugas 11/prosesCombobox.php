<?php 
if(isset($_POST['pilih'])){
	$film = $_POST['kartun'];
	echo "Filme Favorit pilihan Saudara adalah:"; 
	echo "<font color=purple><b>$film</b></font>";
}
?>