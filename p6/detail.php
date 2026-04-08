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
    <title>Detail Produk</title>
</head>
<body>
    <table>
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
        <tr>
            <td>Jumlah dibeli</td>
            <td> : </td>
            <td>
                <form action="shoppingcart.php" method="GET">
                    <input type="hidden" name="id" value="<?= $p->ProductID; ?>">
                    <input type="text" name="jumlah" size="5">
                    <input type="submit" value="Beli">
                </form>
            </td>
        </tr>
    </table>
</body>
</html>