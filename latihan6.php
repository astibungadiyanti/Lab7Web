
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 6 - Form POST</title>
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
        input {
            width: 95%;
            padding: 10px;
            margin: 8px 0 15px;
        }
        button {
            background: #2563eb;
            color: white;
            border: none;
            padding: 11px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .hasil {
            background: #dcfce7;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Data Mahasiswa</h2>

    <form method="POST" action="">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Program Studi:</label>
        <input type="text" name="prodi" required>

        <button type="submit" name="kirim">
            Kirim Data
        </button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $nama = trim($_POST["nama"] ?? "");
            $prodi = trim($_POST["prodi"] ?? "");

            if ($nama === "" || $prodi === "") {
                echo "<p>Semua kolom wajib diisi.</p>";
            } else {
                echo "<div class='hasil'>";
                echo "<h3>Data Berhasil Diterima</h3>";

                echo "Nama: " .
                     htmlspecialchars($nama, ENT_QUOTES, "UTF-8") .
                     "<br>";

                echo "Program Studi: " .
                     htmlspecialchars($prodi, ENT_QUOTES, "UTF-8");

                echo "</div>";
            }
        }
    ?>

</div>

</body>
</html>