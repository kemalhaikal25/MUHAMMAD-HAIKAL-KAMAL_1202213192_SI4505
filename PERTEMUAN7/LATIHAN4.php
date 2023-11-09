<?php
require 'LATIHAN1.php';

// Mengambil data di URL
$id = $_GET["id"];

// Query parfum berdasarkan id
$parfum = query("SELECT * FROM toko_parfum WHERE id = $id")[0];

// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // Cek apakah data berhasil diubah atau tidak
    if ( ubah ($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil diubah!');
            document.location.href = 'LATIHAN1.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal diubah!');
            document.location.href = 'LATIHAN1.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah data parfum</title>
</head>
<body>
    <h1>Ubah data parfum</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $parfum["id"]; ?>">
        <ul>
            <li>
                <label for="gambar">Gambar Parfum :</label>
                <input type="text" name="gambar" id="gambar" required value="<?= $parfum["gambar"]; ?>">
            </li>
            <li>
                <label for="merek">Merek Parfum :</label>
                <input type="text" name="merek" id="merek" required value="<?= $parfum["merek"]; ?>">
            </li>
            <li>
                <label for="tipe_produk">Tipe Produk :</label>
                <input type="text" name="tipe_produk" id="tipe_produk" required value="<?= $parfum["tipe_produk"]; ?>">
            </li>
            <li>
                <label for="harga">Harga Parfum :</label>
                <input type="text" name="harga" id="harga" required value="<?= $parfum["harga"]; ?>">
            </li>
            <li>
                <label for="stok">Stok Parfum :</label>
                <input type="text" name="stok" id="stok" required value="<?= $parfum["stok"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">UBAH DATA</button>
            </li>
        </ul>
    </form>
</body>
</html>
