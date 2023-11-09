<?php
// Koneksi ke DBMS mysql
$conn = mysqli_connect("localhost", "root", "", "latihan_week7");

// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // Ambil data dari tiap elemen dalam form
    $kodebarang = $_POST["kodebarang"];
    $namabarang = $_POST["namabarang"];
    $gambar = $_POST["Gambar"];
    $hargajual = $_POST["hargajual"];
    $stokbarang = $_POST["stokbarang"];

    // Query insert data
    $query = "INSERT INTO toko_parfum (kodebarang, namabarang, Gambar, hargajual, stokbarang)
              VALUES ('$kodebarang', '$namabarang', '$gambar', '$hargajual', '$stokbarang')";

    // Jalankan query
    mysqli_query($conn, $query);
}
?>
