<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $pegawai = [
            "p1" => ["nama" => "Andi", "alamat" => "Jl. Jeruk Nipis", "kota" => "Jogja"],
            "p2" => ["nama" => "Budi", "alamat" => "Jl. Apel Malang", "kota" => "Surabaya"],
            "p3" => ["nama" => "Citra", "alamat" => "Jl. Pisang Kepok", "kota" => "Bandung"],
            "p4" => ["nama" => "Dewi", "alamat" => "Jl. Mangga Duren", "kota" => "Jakarta"]
        ];

        // var_dump($pegawai);
    ?>    

    <table border="1">

        <?php
        foreach ($pegawai as $key => $item) {
            // variabel yang akan menampung data array (loping), $key untuk menampung index, $item untuk menampung item
        ?>
        
        <tr>
            <td><?=$key?></td>
            <td><a href="detail.php?id=<?=$key?>"><?=$item["nama"]?></a></td>

            <!-- <td><?=$item["alamat"]?></td>
            <td><?=$item["kota"]?></td> -->
        </tr>

        <?php
            print "ID Pegawai: $key <br>";
            print "Nama: " . $item["nama"] . "<br>";
            print "Alamat: " . $item["alamat"] . "<br>";
            print "Kota: " . $item["kota"] . "<br><br>";
            }
            ?>
    </table>
</body>
</html>