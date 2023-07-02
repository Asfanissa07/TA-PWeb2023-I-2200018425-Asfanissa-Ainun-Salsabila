<?php
$ip = "";
$sks = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ip = $_POST['ip'];
    if ($ip >= 3.00) {
        $sks = 24;
    } else if ($ip >= 2.50 && $ip <= 2.99) {
        $sks = 22;
    } else if ($ip >= 2.00 && $ip <= 2.49) {
        $sks = 20;
    } else if ($ip >= 1.50 && $ip <= 1.99) {
        $sks = 18;
    } else if ($ip < 1.50) {
        $sks = 15;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 10.2.1</title>
    <style type="text/css">
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            
        }

        h2 {
            text-align: center;
        }

        .content {
            margin-right: 15px;
        }

        .input {
            width: 50%;
            padding: 5px;
            border-radius: 6px;
            border: 1px solid #41C150;
        }

        .kirim {
            width: 30%;
            padding: 10px;
            background-color: #41C150;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .kirim:hover {
            background-color: #34AB42;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Penentuan Beban SKS Berdasarkan Besar IP</h2>
        <form method="POST">
            <div class="content">
                <label for="ip">Masukkan IP anda :</label>
                <input class="input" type="text" name="ip" value="<?php echo $ip; ?>">
            </div>
            <br>
            <div class="content">
                <input class="kirim" type="submit" value="Kirim">
                <input class="kirim" type="reset" value="Ulangi">
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<div id='hasil'>";
            echo "<br>IP Anda adalah <b>$ip</b><br>";
            echo "Anda dapat mengambil sks sebanyak <b>$sks</b>";
            echo "</div>";
        }
        ?>

        <script type="text/javascript">
            document.querySelector("form").addEventListener("reset", function() {
                document.getElementById("hasil").innerHTML = "";
            });
        </script>
    </div>
</body>
</html>
