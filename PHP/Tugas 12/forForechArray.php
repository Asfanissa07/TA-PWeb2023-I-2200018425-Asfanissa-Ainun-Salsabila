<?php 
$arrWarna = array("Red", "Ocean", "Pink", "Green", "Orange",  "Purple", "Blue");

echo "Menampilkan isi array dengan FOR: <br>";
for($i = 0; $i < count($arrWarna); $i++){
	echo "Warna pelangi <font color = $arrWarna[$i]>".$arrWarna[$i]."</font><br>";
}

echo "<br>Menampilkan isi array dengan FORECACH: <br>";
foreach ($arrWarna as $warna) {
	echo "Warna Pelangi <font color = $warna>".$warna."</font><br>";
}
?>