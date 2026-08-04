<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Soal Array</h1>
    <?php
    echo "<h3>Soal 1</h3>";
    $trainer = ["Budi", "Ardit", "Lisa", "Ayu", "Citra"];

    print_r($trainer);

    echo "<h3>Soal 2</h3>";
    echo "Total Trainer : " . count($trainer) . "<br>";
    echo "<ol>";
    echo "<li> " . $trainer[0] . "</li>";
    echo "<li> " . $trainer[1] . "</li>";
    echo "<li> " . $trainer[2] . "</li>";
    echo "<li> " . $trainer[3] . "</li>";
    echo "<li> " . $trainer[4] . "</li>";
    echo "</ol>";

    echo "<h3>Soal 3</h3>";
    $biotrainer = [
        ["id" => "001", "nama" => "Rezky", "materi" => "Laravel"],
        ["id" => "002", "nama" => "Citra", "materi" => "ReactJS"],
        ["id" => "003", "nama" => "Radit", "materi" => "Phyton"]
    ];

    echo "<pre>";
    print_r($biotrainer);
    echo "</pre>";

    echo "<h1>" . $biotrainer[1]["nama"] ."</h1>"


    ?>
</body>
</html>