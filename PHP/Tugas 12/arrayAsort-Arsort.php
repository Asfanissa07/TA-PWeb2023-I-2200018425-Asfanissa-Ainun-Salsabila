<?php 
$arrNilai = array("Alan"=>88, "Alex"=>90, "Ulan"=>77, "Andi"=>67);
echo "<b>Array sebelum diurutkan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

asort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan asort</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

arsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan arsort</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
 ?>