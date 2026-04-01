<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>
<body>
    <table>

        <tr>
            <th>PID</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>

        <?php 
        // FUNGSI 1 : membuat koneksi ke database
        $koneksi = new mysqli("localhost", "root", "", "nwind");
        //alamat server, username, password, nama database
        // $cid = $_GET["cid"]; // menangkap data yang dikirim melalui url, lalu disimpan dalam variabel cid
        $sql = "SELECT * FROM products"; // mengambil data dari tabel products
        // $sql = "SELECT * FROM products WHERE CategoryID = $cid"; // mengambil data dari tabel products
        
        // FUNGSI 2 : mengeksekusi sql
        $produk = $koneksi->query($sql); // mengeksekusi sql menggunakan fungsi query yang melekat pada sebuah koneksi
        // var_dump($produk->fetch_object()); // menampilkan hasil query
        // var_dump($produk->fetch_object()); // menampilkan hasil query
        // satu baris terambil, lalu diubah menjadi objek
        
        // FUNGSI 3 : menampilkan data produk
        while($data = $produk->fetch_object()){ // akan melakukan looping. setiap kali looping fetch objek akan dilakukan 1x, akan looping terus sampai produknya habis
            // var_dump($data); //1 data satu objek, lalu ditampilkan
            // var_dump($data->ProductName); // menampilkan nama produk saja, karena data sudah dalam bentuk objek, maka bisa langsung memanggil propertinya, tapi string masih kelihatan karena pake var_dump
        ?>

        <tr>
            <td><?= $data->ProductID; ?></td>
            <td><?= $data->ProductName; ?></td>
            <td><?= $data->UnitPrice; ?></td>
        </tr>

        <?php 
            // print($data->ProductID); 
            // print(" - ");
            // print($data->ProductName);
            // print(" - ");
            // print($data->UnitPrice); 
            // print "<br>----------------------<br>";
        }
        ?>
    </table>
</body>
</html>