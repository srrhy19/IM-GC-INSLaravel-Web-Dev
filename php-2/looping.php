<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <!-- Soal No 1: Looping I Love PHP -->
    <h3>Soal No 1 Looping I Love PHP</h3>
    <p>Looping Ascending:</p>
    <?php
    // Ascending loop (increase by 2)
    for ($i = 10; $i <= 20; $i += 2) {
        echo "$i - I Love PHP<br>";
    }

    // Descending loop (decrease by 2)
    echo "<p>Looping Descending:</p>";
    for ($i = 20; $i >= 2; $i -= 2) {
        echo "$i - I Love PHP<br>";
    }
    ?>

    <!-- Soal No 2: Looping Array Modulo -->
    <h3>Soal No 2 Looping Array Modulo</h3>
    <?php
    $numbers = [18, 45, 29, 61, 47, 34];
    echo "Array numbers: ";
    print_r($numbers);
    echo "<br>";

    // Array to store the remainder when divided by 5
    $rest = [];
    foreach ($numbers as $number) {
        $rest[] = $number % 5;
    }

    echo "Array sisa baginya adalah: ";
    print_r($rest);
    ?>

    <!-- Soal No 3: Looping Associative Array -->
    <h3>Soal No 3 Looping Associative Array</h3>
    <?php
    $items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
    ];

    // Convert the $items to an associative array
    $assoc_items = [];
    foreach ($items as $item) {
        $assoc_items[] = [
            'id' => $item[0],
            'name' => $item[1],
            'price' => $item[2],
            'description' => $item[3],
            'source' => $item[4]
        ];
    }

    // Output the associative array
    foreach ($assoc_items as $assoc_item) {
        echo "<pre>";
        print_r($assoc_item);
        echo "</pre>";
    }
    ?>

    <!-- Soal No 4: Asterix -->
    <h3>Soal No 4 Asterix 5x5</h3>
    <?php
    // Displaying an asterix pattern 5x5
    echo "Asterix: <br>";
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    ?>

</body>
</html>