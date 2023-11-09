<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "latihan_week7");

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query data dari tabel toko_parfum
$result = mysqli_query($conn, "SELECT merek, gambar, tipe_produk, harga, stok FROM toko_parfum");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Parfum Branded</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            font-size: 28px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin: 20px auto;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100px;
            max-height: 100px;
        }

        a {
            text-decoration: none;
            color: #333;
        }

        a:hover {
            color: #f00;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .action-button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        .action-button:hover {
            background-color: #f00;
        }
    </style>
</head>
<body>
    <header>
        <h1>Daftar Parfum di TOKO PARFUM JAWIR</h1>
    </header>
    <table>
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Merek Parfum</th>
            <th>Tipe Produk</th>
            <th>Harga Parfum</th>
            <th>Stok Parfum</th>
            <th>Aksi</th>
        </tr>
        <?php
        $nomor_urut = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $nomor_urut . "</td>";
            echo '<td><img src="' . $row['gambar'] . '" alt=""></td>';
            echo "<td>" . $row['merek'] . "</td>";
            echo "<td>" . $row['tipe_produk'] . "</td>";
            echo "<td>$" . $row['harga'] . "</td>";
            echo "<td>" . $row['stok'] . "</td>";
            echo '<td class="action-buttons">
                    <a class="action-button" href="#">Ubah</a>
                    <a class="action-button" href="#">Hapus</a>
                  </td>';
            echo "</tr>";
            $nomor_urut++;
        }
        ?>
    </table>
</body>
</html>
