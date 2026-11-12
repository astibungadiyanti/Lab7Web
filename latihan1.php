
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1 - PHP</title>
    <style>
        body {
            font-family: Arial;
            background: #f1f5f9;
            text-align: center;
            padding: 50px;
        }
        .container {
            background: white;
            padding: 30px;
            max-width: 500px;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 3px 10px #ccc;
        }
        h1 { color: #2563eb; }
    </style>
</head>
<body>

<div class="container">
    <h1>Belajar PHP</h1>

    <?php
        echo "<p>PHP berhasil dijalankan.</p>";
        echo "<p>Waktu server: " . date("d-m-Y H:i:s") . "</p>";
    ?>

</div>

</body>
</html>
