<?php 
if(isset($_POST["proses"])){
	$saran = nl2br($_POST["saran"]);
	echo "Kritik/Saran Saudara adalah: <br>";
	echo "<font color = green><b>$saran</b></font>";
}
?>