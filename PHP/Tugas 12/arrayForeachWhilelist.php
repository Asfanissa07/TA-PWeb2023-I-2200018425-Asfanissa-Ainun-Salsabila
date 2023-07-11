<?php 
$arrNilai = array("Alan"=>88, "Alex"=>90, "Wulan"=>77, "Andi"=>67);
echo "Menampilkan isi array asosiatif dengan foreeach: <br>";
foreach ($arrNilai as $nama => $nilai) {
	echo "Nilai $nama = $nilai <br>";
}

echo "<br>Menampilkan isi array asosiatif dengan array_walk: <br>";
array_walk($arrNilai, function($nilai, $nama) {
    echo "Nilai $nama = $nilai <br>";
});
// reset($arrNilai);
// echo "<br>Menampilkan isi array asosiatif dengan WHILE-LIST: <br>";
// while(list($nama, $nilai)=each($arrNilai)){
// 	echo "Nilai $nama = $nilai <br>";
// }
?>