
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 10.2.2</title>
</head>
<body>
    <form method="POST">
        <label>Masukkan tinggi segitiga: </label>
        <input type="number" name="tinggi" required>
        <button type="submit">Generate</button>
    </form>
    <?php   
        $baris = 0;
        $i = 0;
        $j = 0;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tinggiSegitiga = $_POST["tinggi"];
            echo "<br>";
            for ($baris = 1; $baris <= $tinggiSegitiga; $baris++) {
                for ($i = 1; $i <= $tinggiSegitiga - $baris; $i++) {
                    echo "&nbsp; ";
                }
                for ($j = 1; $j < 2 * $baris; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        }
     ?>
</body>
</html>
