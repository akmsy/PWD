<?php 
    session_name("Belanja");
    session_start();
    $id = $_GET["id"]; // menangkap data yang dikirim melalui url, lalu disimpan dalam variabel id
    $jumlah = $_GET["jumlah"]; // menangkap data yang dikirim melalui url, lalu disimpan dalam variabel jumlah
    $koneksi = new mysqli("localhost", "root", "", "nwind");
    $sql = "SELECT * FROM products WHERE ProductID = " . $id; // mengambil data dari tabel products berdasarkan id yang dikirim melalui url
    $produk = $koneksi->query($sql); // mengeksekusi sql menggunakan fungsi query yang melekat pada sebuah koneksi
    $_SESSION['belanja'][$id]= $jumlah;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Chart</title>
</head>
<body>
    <?php 
        // var_dump($_SESSION['belanja']);
    ?>

    <table>
        <tr>
            <th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
        </tr>
        <?php
            foreach($_SESSION['belanja'] as $productId => $jumlah){ // looping mengambi index dan value dari session belanja, lalu disimpan dalam variabel id dan jumlah
                // ambil data produk dari tabel untuk produk id $productId
                // menggunakan sql:
                // setelah itu ambil nama dan harga kemudian tampilkan di dalam <td>
                $sql = "SELECT * FROM products WHERE ProductID = " . $productId; // mengambil data dari tabel products berdasarkan id yang dikirim melalui url
                $produk = $koneksi->query($sql); // mengeksekusi sql menggunakan fungsi query yang melekat pada sebuah koneksi
                $data = $produk->fetch_object(); // mengambil data produk berdasarkan id yang dikirim melalui url, lalu diubah menjadi objek
        ?>

        <tr>
            <td><?= $data->ProductID; ?></td>
            <td><?= $data->ProductName; ?></td>
            <td><?= $data->UnitPrice; ?></td>
            <td><?= $jumlah; ?></td>
            <td><?= $data->UnitPrice * $jumlah; ?></td>
        </tr>

        <?php
            }
        ?>
    </table>
</body>
</html>