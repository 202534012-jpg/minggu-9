<?php
declare(strict_types=1);

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Method tidak diizinkan.");
}

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$major = trim($_POST["major"] ?? "");

$errors = [];

if ($name === "" || strlen($name) > 100) {
    $errors[] = "Nama wajib diisi dan maksimal 100 karakter.";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email tidak valid.";
}

$allowedMajors = [
    "Sistem Informasi",
    "Teknologi Informasi"
];

if (!in_array($major, $allowedMajors, true)) {
    $errors[] = "Program studi tidak valid.";
}

if ($errors !== []) {
    http_response_code(422);

    echo "<h2>Validasi Gagal</h2>";

    foreach ($errors as $error) {
        echo "<p>" .
            htmlspecialchars($error, ENT_QUOTES, "UTF-8") .
            "</p>";
    }

    echo '<a href="form.php">Kembali ke Form</a>';
    exit;
}

session_start();

$_SESSION["student"] = [
    "name" => $name,
    "email" => $email,
    "major" => $major
];

header("Location: success.php", true, 303);
exit;
