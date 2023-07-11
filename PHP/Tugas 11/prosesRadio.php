<?php 
if(isset($_POST['pilih'])){
	$programstudi = $_POST['prodi'];
	echo "Program Studi yang Saudara pilih adalah:";
	echo " <b><font color = 'red'> $programstudi </font></b>";
}
?>