<?php 
    $id = $_GET["id"]; // menangkap data yang dikirim melalui url, lalu disimpan dalam variabel id
    $koneksi = new mysqli("localhost", "root", "", "nwind");
    $sql = "SELECT * FROM products WHERE ProductID = " . $id; // mengambil data dari tabel products berdasarkan id yang dikirim melalui url
    $produk = $koneksi->query($sql); // mengeksekusi sql menggunakan fungsi query yang melekat pada sebuah koneksi
    // var_dump($produk);
    $p = $produk->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
    <table>
        <!-- <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr> -->
        <tr>
            <td>ID</td>
            <td> : </td>
            <td><?= $p->ProductID; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td><?= $p->ProductName; ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td> : </td>
            <td><?= $p->UnitPrice; ?></td>
        </tr>
    </table>
</body>
</html>