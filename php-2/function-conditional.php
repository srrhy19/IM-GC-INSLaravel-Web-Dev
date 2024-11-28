<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Function</title> 
</head> 
<body> 
    <h1>Berlatih Function PHP</h1> 

    <!-- Soal No 1: Greetings -->
    <h3>Soal No 1 Greetings</h3>
    <?php 
    // Function to display greetings
    function greetings($name) {
        echo "Halo " . ucfirst($name) . ", Selamat Datang di Garuda Cyber Institute!<br>";
    }

    // Test the function
    greetings("Bagas"); 
    greetings("Wahyu"); 
    greetings("Annisa");
    ?>
    
    <br>

    <!-- Soal No 2: Reverse String -->
    <h3>Soal No 2 Reverse String</h3>
    <?php 
    // Function to reverse the string without using strrev()
    function reverseString($str) {
        $reversed = "";
        // Loop through the string backwards
        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $reversed .= $str[$i];
        }
        echo $reversed . "<br>";
    }

    // Test the function
    reverseString("nama peserta"); 
    reverseString("Garuda Cyber Institute"); 
    reverseString("We Are GC-Ins Developer");
    ?>
    
    <br>

    <!-- Soal No 3: Palindrome -->
    <h3>Soal No 3 Palindrome</h3>
    <?php 
    // Function to check if a string is a palindrome
    function palindrome($str) {
        // Reverse the string using reverseString function
        $reversed = "";
        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $reversed .= $str[$i];
        }
        
        // Check if the string is equal to its reversed version
        if ($str == $reversed) {
            echo "true<br>";
        } else {
            echo "false<br>";
        }
    }

    // Test the function
    palindrome("civic");  // true
    palindrome("nababan"); // true
    palindrome("jambaban"); // false
    palindrome("racecar"); // true
    ?>
    
    <br>

    <!-- Soal No 4: Tentukan Nilai -->
    <h3>Soal No 4</h3>
    <p>buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter 
        berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 
        100 maka akan mereturn String “Sangat Baik” Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar samadengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang” 
    <p>jawab :</p>
    <?php 
    // Function to determine the grade based on the score
    function tentukan_nilai($score) {
        if ($score >= 85 && $score <= 100) {
            return "Sangat Baik";
        } elseif ($score >= 70 && $score < 85) {
            return "Baik";
        } elseif ($score >= 60 && $score < 70) {
            return "Cukup";
        } else {
            return "Kurang";
        }
    }

    // Test the function
    echo tentukan_nilai(98); //Sangat Baik <br>
    echo tentukan_nilai(76); //Baik <br>
    echo tentukan_nilai(67); //Cukup <br>
    echo tentukan_nilai(43); //Kurang <br>
    ?>
</body> 
</html>