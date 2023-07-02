<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pweb Tugas 9</title>
</head>
<body>
	<h2>Listing program 9.1</h2>
	<?php
	$gaji = 1000000;
	$pajak = 0.1;
	$thp = $gaji - ($gaji*$pajak);

	echo "Gaji sebelum pajak = Rp. $gaji <br>";
	echo "Gaji yang dibawa pulang = Rp. $thp <br><br>";
	?> 
	
	<hr>
	<h2>Listing program 9.2</h2>
	<?php 
	$a = 5;
	$b = 4;
	echo "$a == $b : ".(($a == $b) ? 'true' : 'false');
	echo "<br>$a != $b : ".(($a != $b) ? 'true' : 'false');
	echo "<br>$a > $b : ". (($a > $b) ? 'true' : 'false');
	echo "<br>$a < $b : ". (($a < $b) ? 'true' : 'false');
	echo "<br>($a == $b) && ($a > $b) : ".((($a == $b) && ($a > $b)) ? 'true' : 'false');
	echo "<br>($a == $b) || ($a > $b) : ".((($a != $b) || ($a > $b)) ? 'true' : 'false');
	 ?>
</body>
</html>


