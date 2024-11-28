<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Dashboard</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffe4e1;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* Container styling */
        .container {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        /* Heading */
        h1 {
            font-size: 28px;
            color: #fff;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            font-style: italic;
        }

        /* Menu styling */
        .menu {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .menu a {
            text-decoration: none;
            color: #fff;
            background: rgba(255, 255, 255, 0.3);
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .menu a:hover {
            background: #fff;
            color: #ff6f61;
            transform: scale(1.05);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        /* Footer styling */
        footer {
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard PHP</h1>
        <p>Ayo mulai perjalanan coding PHP-mu dan raih keterampilan baru hari ini! 🚀</p>
        <div class="menu">
            <a href="looping.php">Latihan Looping</a>
            <a href="function-conditional.php">Latihan Function & Conditional</a>
        </div>
    </div>
    <footer>
        &copy; 2024 Belajar PHP | Dashboard oleh Sri Rahayu
    </footer>
</body>
</html>
