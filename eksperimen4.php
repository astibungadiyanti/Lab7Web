
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Validasi NIM</title>
    <style>
        body {
            font-family: Arial;
            background: #f1f5f9;
            padding: 40px;
        }
        .container {
            max-width: 450px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 10px #ccc;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            box-sizing: border-box;
        }
        button {
            background: #2563eb;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Validasi NIM Mahasiswa</h2>

    <form method="POST">
        <input type="text" name="nim"
               placeholder="Masukkan NIM" required>

        <button type="submit">Periksa NIM</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $nim = trim($_POST["nim"] ?? "");

        if (!ctype_digit($nim)) {
            echo "<p>NIM hanya boleh berisi angka.</p>";
        } elseif (strlen($nim) !== 8) {
            echo "<p>NIM harus terdiri dari 8 angka.</p>";
        } else {
            echo "<p>NIM berhasil divalidasi.</p>";
        }
    }
    ?>

</div>

</body>
</html>