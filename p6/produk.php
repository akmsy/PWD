<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>
<body>
    <?php 
        $koneksi = new mysqli("localhost", "root", "", "nwind");
                  //alamat server, username, password, nama database
        $sql = "SELECT * FROM products"; // mengambil data dari tabel products
        $produk = $koneksi->query($sql); // mengeksekusi sql menggunakan fungsi query yang melekat pada sebuah koneksi
        var_dump($produk); // menampilkan hasil query
    ?>
</body>
</html>