<?php 
    $id = $_GET["id"]; // menangkap data yang dikirim melalui url, lalu disimpan dalam variabel id
    $jumlah = $_GET["jumlah"]; // menangkap data yang dikirim melalui url, lalu disimpan dalam variabel jumlah
    $koneksi = new mysqli("localhost", "root", "", "nwind");
    $sql = "SELECT * FROM products WHERE ProductID = " . $id; // mengambil data dari tabel products berdasarkan id yang dikirim melalui url
    $produk = $koneksi->query($sql); // mengeksekusi sql menggunakan fungsi query yang melekat pada sebuah koneksi
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
        print $id;
        print "-";
        print $jumlah;
    ?>
</body>
</html>