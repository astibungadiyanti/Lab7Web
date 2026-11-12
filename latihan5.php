
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 5 - Form GET</title>
    <style>
        body {
            font-family: Arial;
            background: #f1f5f9;
            padding: 40px;
        }
        .container {
            background: white;
            max-width: 500px;
            margin: auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 10px #ccc;
        }
        input, button {
            padding: 10px;
            margin-top: 10px;
        }
        button {
            background: #2563eb;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Pencarian Kata Kunci</h2>

    <form method="GET" action="">
        <label>Kata kunci:</label><br>
        <input type="text" name="kata"
               placeholder="Masukkan kata kunci">
        <button type="submit">Cari</button>
    </form>

    <?php
        if (isset($_GET["kata"])) {
            $kata = trim($_GET["kata"]);

            echo "<h3>Hasil Pencarian:</h3>";
            echo "Kata kunci: " .
                 htmlspecialchars($kata, ENT_QUOTES, "UTF-8");
        }
    ?>

</div>

</body>
</html>