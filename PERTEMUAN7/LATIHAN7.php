</tr>
<?php $i = 1; ?>
<?php foreach ($brg as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
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
</table>
</body>
</html>
