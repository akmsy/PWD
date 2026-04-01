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
        // var_dump($produk->fetch_object()); // menampilkan hasil query
        // var_dump($produk->fetch_object()); // menampilkan hasil query
                        // satu baris terambil, lalu diubah menjadi objek

        while($data = $produk->fetch_object()){ // akan melakukan looping. setiap kali looping fetch objek akan dilakukan 1x, akan looping terus sampai produknya habis
            var_dump($data);
            print "<br>----------------------<br>";
        }
    ?>
</body>
</html>