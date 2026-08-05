<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Belajar Looping</h1>

    <?php
    echo "<h3>Contoh Soal 1</h3>";

    echo "--Looping 1 -- <br>";
    $i = 1;
    while($i<=19){
        echo "$i - Looping Ganjil <br>";
        $i+=2;
    }

    echo "--Looping 2 -- <br>";

    $a = 19;
    do {
       echo "$a - Looping Ganjil <br>";
       $a-=2;
    } while ($a >= 1);

    echo "<h3>Contoh Soal 2</h3>";

    $biodata = [
        ["001", "Budi", "ReactJS"],
        ["002", "Rezky", "Laravel"],
        ["003", "Ayu", "Phyton"],
        ["004", "Citra", "Digital Marketing"],
        ["005", "Adit", "Golang"],
    ];

    foreach($biodata as $arrbio){
        $tampung = [
            "id" => $arrbio[0],
            "name" => $arrbio[1],
            "Materi" => $arrbio[2]
        ];

        print_r($tampung);
        echo"<br>";
    }

    echo "<h3>Contoh Soal 3</h3>";

    for($k=1; $k<=5; $k++){
        for($j=$k; $j <= 5; $j++){
            echo " * ";
        }
        echo "<br>";
    }

    ?>
</body>
</html>