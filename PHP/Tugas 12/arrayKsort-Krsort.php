<?php 
$arrNilai = array("Alan"=>88, "Alex"=>90, "Wulan"=>77, "Andi"=>67);
echo "<b>Array sebelum diurutkan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

ksort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diururtkan dengan ksort():</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

krsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diururtkan dengan krsort():</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>