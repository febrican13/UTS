<?php
$data = $_POST['nama_negara'] . "," .
        $_POST['jumlah_pertandingan'] . "," .
        $_POST['jumlah_menang'] . "," .
        $_POST['jumlah_seri'] . "," .
        $_POST['jumlah_kalah'] . "," .
        $_POST['jumlah_poin'] . "," .
        $_POST['nama_operator'] . "," .
        $_POST['nim_mahasiswa'] . "\n";

file_put_contents("data.txt", $data, FILE_APPEND);

header("Location: index.php");
exit;
?>
