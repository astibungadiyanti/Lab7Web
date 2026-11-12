
<?php
$data = null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email = trim($_POST["email"] ?? "");

    // Validasi data
    if ($nama === "") {
        $error[] = "Nama wajib diisi.";
    }

    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    }

    if ($prodi === "") {
        $error[] = "Program studi wajib diisi.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }

    if (
        !ctype_digit((string)$semesterInput) ||
        (int)$semesterInput < 1 ||
        (int)$semesterInput > 14
    ) {
        $error[] = "Semester harus berupa angka 1-14.";
    }

    // Jika tidak ada kesalahan
    if (!$error) {
        $data = [
            "nama" => $nama,
            "nim" => $nim,
            "prodi" => $prodi,
            "semester" => (int)$semesterInput,
            "email" => $email
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #eef2ff;
            margin: 0;
            padding: 40px 15px;
        }

        .container {
            background: white;
            max-width: 550px;
            margin: auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px #ccc;
        }

        h2 {
            text-align: center;
            color: #2563eb;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 7px;
            border: 1px solid #ccc;
            border-radius: 7px;
        }

        button {
            width: 100%;
            margin-top: 22px;
            padding: 13px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 7px;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }

        .hasil {
            background: #dcfce7;
            padding: 18px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .error {
            background: #fee2e2;
            color: #b91c1c;
            padding: 15px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Formulir Data Mahasiswa</h2>
    <p style="text-align:center;">
        Silakan masukkan data mahasiswa dengan benar.
    </p>

    <form method="POST">

        <label>Nama Lengkap</label>
        <input type="text" name="nama" required>

        <label>NIM</label>
        <input type="text" name="nim" required>

        <label>Program Studi</label>
        <input type="text" name="prodi" required>

        <label>Semester</label>
        <input type="number" name="semester"
               min="1" max="14" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <button type="submit">Kirim Data</button>

    </form>

    <?php if ($error): ?>

        <div class="error">
            <h3>Terjadi Kesalahan:</h3>

            <?php foreach ($error as $pesan): ?>
                <p><?= htmlspecialchars($pesan) ?></p>
            <?php endforeach; ?>
        </div>

    <?php endif; ?>

    <?php if ($data): ?>

        <div class="hasil">
            <h3>Data Mahasiswa Berhasil Dikirim!</h3>

            <p>Nama:
                <?= htmlspecialchars($data["nama"], ENT_QUOTES, "UTF-8") ?>
            </p>

            <p>NIM:
                <?= htmlspecialchars($data["nim"], ENT_QUOTES, "UTF-8") ?>
            </p>

            <p>Program Studi:
                <?= htmlspecialchars($data["prodi"], ENT_QUOTES, "UTF-8") ?>
            </p>

            <p>Semester:
                <?= $data["semester"] ?>
            </p>

            <p>Email:
                <?= htmlspecialchars($data["email"], ENT_QUOTES, "UTF-8") ?>
            </p>
        </div>

    <?php endif; ?>

</div>

</body>
</html>