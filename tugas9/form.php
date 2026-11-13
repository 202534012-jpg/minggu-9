
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pendaftaran Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main class="container">

    <h1>Form Pendaftaran Mahasiswa</h1>

    <p>Silakan isi data pendaftaran berikut.</p>

    <form action="process.php" method="post">

        <label for="name">Nama Lengkap</label>

        <input
            type="text"
            id="name"
            name="name"
            maxlength="100"
            required
        >

        <label for="email">Email</label>

        <input
            type="email"
            id="email"
            name="email"
            maxlength="254"
            required
        >

        <label for="major">Program Studi</label>

        <select id="major" name="major" required>

            <option value="">Pilih program studi</option>

            <option value="Sistem Informasi">
                Sistem Informasi
            </option>

            <option value="Teknologi Informasi">
                Teknologi Informasi
            </option>

        </select>

        <button type="submit">Daftar</button>

    </form>

    <a href="search.php">Kembali ke Pencarian</a>

</main>

</body>
</html>