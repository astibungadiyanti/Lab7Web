
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3 - Daftar Mahasiswa</title>
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
        h2 { color: #2563eb; }
        li { padding: 7px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Daftar Mahasiswa</h2>

    <?php
        $mahasiswa = [
            "Alya",
            "Bima",
            "Citra",
            "Doni",
            "Eka",
            "Fajar",
            "Gina"
        ];

        echo "<ol>";

        foreach ($mahasiswa as $nama) {
            echo "<li>" .
                 htmlspecialchars($nama) .
                 "</li>";
        }

        echo "</ol>";
    ?>

</div>

</body>
</html>