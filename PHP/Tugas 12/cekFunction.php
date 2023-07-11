<?php  
$functionName = 'file_get_contents';

if (function_exists($functionName)) {
    echo "Fungsi <b>$functionName</b> tersedia di versi PHP saat ini.";
} else {
    echo "Fungsi <b>$functionName</b> tidak tersedia di versi PHP saat ini.";
}

?>