
<?php
$query = trim($_GET["query"] ?? "");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pencarian Data</title>
</head>
<body>
    <h2>Pencarian Data</h2>

    <form method="get">
        <label for="query">Masukkan Kata Kunci:</label>
        <input
            type="text"
            id="query"
            name="query"
            value="<?= htmlspecialchars($query, ENT_QUOTES, "UTF-8") ?>"
        >
        <button type="submit">Cari</button>
    </form>

    <p>
        Hasil pencarian:
        <?= htmlspecialchars($query, ENT_QUOTES, "UTF-8") ?>
    </p>

    <a href="index.php">Kembali</a>
</body>
</html>