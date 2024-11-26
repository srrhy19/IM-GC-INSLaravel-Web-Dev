<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array PHP</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Berlatih Array PHP</h1>

    <?php
    // SOAL NO 1: Kelompokkan nama-nama di bawah ini ke dalam Array.
    // Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"
    // Adults: "Hopper", "Nancy", "Joyce", "Jonathan", "Murray"
    echo "<h3>Soal No 1</h3>";

    $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
    $adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];

    echo "<p>Kids: </p>";
    echo "<ul>";
    foreach ($kids as $kid) {
        echo "<li>$kid</li>";
    }
    echo "</ul>";

    echo "<p>Adults: </p>";
    echo "<ul>";
    foreach ($adults as $adult) {
        echo "<li>$adult</li>";
    }
    echo "</ul>";

    // SOAL NO 2: Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
    echo "<h3>Soal No 2</h3>";

    echo "<p>Total Kids: " . count($kids) . "</p>";
    echo "<p>Total Adults: " . count($adults) . "</p>";

    echo "<p>Cast Stranger Things (Kids):</p>";
    echo "<ol>";
    foreach ($kids as $kid) {
        echo "<li>$kid</li>";
    }
    echo "</ol>";

    echo "<p>Cast Stranger Things (Adults):</p>";
    echo "<ol>";
    foreach ($adults as $adult) {
        echo "<li>$adult</li>";
    }
    echo "</ol>";

    // SOAL NO 3: Susun data-data berikut ke dalam bentuk Asosiatif Array di dalam Array Multidimensi
    // (Name, Age, Aliases, Status)
    echo "<h3>Soal No 3</h3>";

    $stranger_things_cast = [
        [
            "Name" => "Will Byers",
            "Age" => 12,
            "Aliases" => "Will the Wise",
            "Status" => "Alive"
        ],
        [
            "Name" => "Mike Wheeler",
            "Age" => 12,
            "Aliases" => "Dungeon Master",
            "Status" => "Alive"
        ],
        [
            "Name" => "Jim Hopper",
            "Age" => 43,
            "Aliases" => "Chief Hopper",
            "Status" => "Deceased"
        ],
        [
            "Name" => "Eleven",
            "Age" => 12,
            "Aliases" => "El",
            "Status" => "Alive"
        ]
    ];

    echo "<pre>";
    print_r($stranger_things_cast);
    echo "</pre>";
    ?>
</body>
</html>
