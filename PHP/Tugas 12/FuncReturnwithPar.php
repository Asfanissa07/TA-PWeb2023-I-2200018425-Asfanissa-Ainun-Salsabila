<?php  
function luasLingkaran($jari){
	return 3.14*$jari*$jari;
}

$r = 7;
echo "Luas lingkaran dengan jari-jari $r = ";
echo luasLingkaran($r);
?>