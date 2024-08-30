<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simbol Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        input[type="text"] {
            padding: 10px;
            width: 300px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Simbol Checker</h2>
        <form action="" method="POST">
            <input type="text" name="sentence" placeholder="Masukkan kalimat di sini" required>
            <input type="submit" value="Cek Simbol">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sentence = $_POST['sentence'];

            $symbols = ['!', '*', '$','-','%','^','&','*','(',')','#'];

            $foundSymbols = [];

            foreach ($symbols as $symbol) {
                if (strpos($sentence, $symbol) !== false) {
                    $foundSymbols[] = $symbol;
                }
            }

            if (!empty($foundSymbols)) {
                echo '<p class="result">Karakter yang terdapat pada kalimat: ' . implode(", ", $foundSymbols) . '</p>';
            } else {
                echo '<p class="result">Tidak terdapat simbol pada kalimat.</p>';
            }
        }
        ?>
    </div>
</body>
</html>
