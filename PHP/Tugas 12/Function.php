<?php  
function cetakGanjil(){
	for($i = 0; $i < 45; $i++){
		if($i%2==1){
			echo "$i, ";
		}
	}
}
echo "<b>Bilangan ganjil dari 1-45: </b><br>";
cetakGanjil();
?>