<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // $bil1 = 50;
        // $bil2 = 20;
        $bil1 = $_GET["a"];
        $bil2 = $_GET["b"];
        $hasil = $bil1 * $bil2;
        print "Bilangan 1: $bil1 <br>";
        print "Bilangan 2: $bil2 <br>"; 
        print "Hasil Perkalian: $hasil <br>";
    ?>
</body>
</html>