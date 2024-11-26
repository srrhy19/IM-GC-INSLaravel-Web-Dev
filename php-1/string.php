<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1 style="text-align:center;">Berlatih String PHP</h1>

    <?php
    // SOAL NO 1: Tunjukkan dengan menggunakan echo berapa panjang dari string yang diberikan berikut!
    // Tunjukkan juga jumlah kata di dalam kalimat tersebut!
    // Contoh: $string = "PHP is never old"; Output: Panjang string: 16, Jumlah kata: 4

    echo "<h3>Soal No 1</h3>";
    $first_sentence = "I love programming in PHP."; // Panjang string: 27, jumlah kata: 5
    $second_sentence = "PHP makes web development easier and faster."; // Panjang string: 43, jumlah kata: 7

    echo "<p>Panjang string pertama: " . strlen($first_sentence) . " karakter, Jumlah kata: " . str_word_count($first_sentence) . "</p>";
    echo "<p>Panjang string kedua: " . strlen($second_sentence) . " karakter, Jumlah kata: " . str_word_count($second_sentence) . "</p>";

    // SOAL NO 2: Mengambil kata pada string dan karakter-karakter yang ada di dalamnya.
    // String: "I love programming"
    // Output: Kata pertama: "I", Kata kedua: "love", Kata ketiga: "programming"
    
    echo "<h3>Soal No 2</h3>";
    $string2 = "I love programming";
    echo "<label>String: </label> \"$string2\" <br>";
    // Memecah string menjadi array berdasarkan spasi
    $words = explode(" ", $string2); // Memecah string menjadi array
    echo "<p>Kata pertama: " . $words[0] . "</p>";
    echo "<p>Kata kedua: " . $words[1] . "</p>";
    echo "<p>Kata ketiga: " . $words[2] . "</p>";

    // SOAL NO 3: Mengubah karakter atau kata yang ada di dalam sebuah string.
    // String: "PHP is a powerful language."
    // Ganti kata "powerful" dengan "amazing"
    echo "<h3>Soal No 3</h3>";
    $string3 = "PHP is a powerful language.";
    echo "<p>String asli: \"$string3\" </p>";
    $modified_string = str_replace("powerful", "amazing", $string3); // Mengganti kata "powerful" dengan "amazing"
    echo "<p>String setelah diubah: \"$modified_string\"</p>";
    ?>

</body>
</html>
