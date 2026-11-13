<?php
declare(strict_types=1);

session_start();

if (!isset($_SESSION["student"])) {
    http_response_code(403);
    exit("Tidak ada data mahasiswa yang diproses.");
}

$student = $_SESSION["student"];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Berhasil Diproses</title>
</head>
<body>
    <h1>Data Berhasil Diproses!</h1>

    <h3>Profil Mahasiswa</h3>

    <p>
        Nama:
        <?= htmlspecialchars($student["name"], ENT_QUOTES, "UTF-8") ?>
    </p>

    <p>
        Email:
        <?= htmlspecialchars($student["email"], ENT_QUOTES, "UTF-8") ?>
    </p>

    <p>
        Program Studi:
        <?= htmlspecialchars($student["major"], ENT_QUOTES, "UTF-8") ?>
    </p>

    <a href="form.php">Kembali ke Form</a>
    <br><br>
    <a href="index.php">Halaman Utama</a>
</body>
</html>
