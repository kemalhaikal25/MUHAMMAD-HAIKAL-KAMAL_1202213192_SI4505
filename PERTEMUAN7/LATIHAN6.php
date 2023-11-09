<?php
require 'functions.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'LATIHAN1.php';
    </script>";
} else {
    echo "
    <script>
        alert('Data gagal dihapus!');
        document.location.href = 'LATIHAN1.php';
    </script>";
}
?>

<?php $i = 1; ?>
<?php foreach ($brg as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin menghapus data?');">Hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
        <td><?= $row["merek"]; ?></td>
        <td><?= $row["tipe_produk"]; ?></td>
        <td><?= $row["harga"]; ?></td>
        <td><?= $row["stok"]; ?></td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>

<?php
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM toko_parfum WHERE id = $id");
    return mysqli_affected_rows($conn);
}
?>
