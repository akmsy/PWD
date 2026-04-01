<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $id = $_GET["id"];
        print "id:$id";
        
        $pegawai = [
            "p1" => ["nama" => "Andi", "alamat" => "Jl. Jeruk Nipis", "kota" => "Jogja"],
            "p2" => ["nama" => "Budi", "alamat" => "Jl. Apel Malang", "kota" => "Surabaya"],
            "p3" => ["nama" => "Citra", "alamat" => "Jl. Pisang Kepok", "kota" => "Bandung"],
            "p4" => ["nama" => "Dewi", "alamat" => "Jl. Mangga Duren", "kota" => "Jakarta"]
        ];

        var_dump($pegawai[$id]);
    ?>
</body>
</html>