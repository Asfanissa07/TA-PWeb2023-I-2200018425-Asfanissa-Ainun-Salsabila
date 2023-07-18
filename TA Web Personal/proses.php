<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = $_POST["nama"] ?? "";
    $email = $_POST["email"] ?? "";
    $pesan = $_POST["pesan"] ?? "";

    if (!empty($nama) && !empty($email) && !empty($pesan)) {
        echo "Terimakasih, $nama! Pesan Anda berhasil dikirim.<br><br>";

        // Menampilkan data yang dikirimkan dari form
        echo "Nama: $nama<br>";
        echo "Email: $email<br>";
        echo "Pesan: $pesan<br><br>";

        // Simpan data ke dalam file teks
        $file = fopen("dataPesanUser.txt", "a"); // "a" untuk mode append (menambahkan ke akhir file)
        fwrite($file, "Nama: $nama\n");
        fwrite($file, "Email: $email\n");
        fwrite($file, "Pesan: $pesan\n");
        fwrite($file, "--------------------------\n");
        fclose($file);
    } else {
        echo "Mohon isi semua kolom dengan lengkap sebelum mengirim pesan.";
    }
}
?>