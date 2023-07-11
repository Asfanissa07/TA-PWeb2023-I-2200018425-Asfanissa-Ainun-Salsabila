<?php  
function tambahString($str){
	$str = $str.", Yogyakarta";
	return $str;
}

$string = "Universitas Ahmad Dahlan";
echo "\$string = $string <br>";
echo tambahString($string)."<br>";
echo "\$string = $string<br>";
?>