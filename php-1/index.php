<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        h1 {
            color: #444;
            margin-bottom: 20px;
            text-align: center;
        }
        .container {
            background: #4682B4;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .menu {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .menu a {
            text-decoration: none;
            color: #fff;
            background: #87cefa;
            padding: 10px 15px;
            border-radius: 5px;
            text-align: center;
            transition: background 0.3s ease;
        }
        .menu a:hover {
            background: #0056b3;
        }
        footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard Belajar PHP</h1>
        <br><p>Siap untuk memulai perjalanan belajar PHP? Pilih salah satu latihan di bawah untuk mulai mengasah keterampilan Anda!</p></br>
        <div class="menu">
            <a href="string.php">Latihan String</a>
            <a href="array.php">Latihan Array</a>
        </div>
    </div>
    <footer>
        &copy; 2024 Belajar PHP | Dashboard oleh Sri Rahayu
    </footer>
</body>
</html>
