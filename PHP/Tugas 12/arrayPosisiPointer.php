<?php 
$transport = array("Mobil", "Sepeda", "Motor", "Pesawat", "Kereta");
echo "<pre>";
print_r($transport);
echo "</pre>";
$mode = current($transport);
echo $mode."<br>";
$mode = next($transport);
echo $mode."<br>";
$mode = next($transport);
echo $mode."<br>";
$mode = next($transport);
echo $mode."<br>";
$mode = next($transport);
?>