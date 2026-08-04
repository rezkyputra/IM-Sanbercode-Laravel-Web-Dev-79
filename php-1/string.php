<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Latihan string</h1>
    <?php
    echo "<h3>Soal 1</h3>";
    $soal1 = "Lorem Ipsum a12345";

    echo "Soal 1 : " . $soal1 . "<br>";
    echo "Panjang String soal 1 : " . strlen($soal1) . "<br>";
    echo "Jumlah Kata soal 1 : " . str_word_count($soal1) . "<br>";

    echo "<h3>Soal 2</h3>";
    $soal2 = "Selamat Datang";
    echo "Soal 2 : " . $soal2 . "<br>";
    echo "Kata 1 Soal 2 : " . substr($soal2,0,7) . "<br>";
    echo "Kata 2 Soal 2 : " . substr($soal2,8,6) . "<br>";

    echo "<h3>Soal 3</h3>";
    $soal3 = "Halo nama saya Rezky";
    echo "Soal 3 : " . $soal3 . "<br>";
    echo "Soal 3 ganti : " . str_replace("Rezky", "Putra", $soal3);

    ?>
</body>
</html>