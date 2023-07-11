<?php  
function cetakGanjil($awal, $akhir){
	for($i = $awal; $i < $akhir; $i++){
		if($i%2==1){
			echo "$i, ";
		}
	}
}
$a = 1;
$b = 45;
echo "<b>Bilangan ganjil dari $a sampai $b, adalah: </b><br>";
cetakGanjil($a, $b);
?>