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

if ($name === "") $errors[] = "Nama wajib diisi.";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Email tidak valid.";
if ($major === "") $errors[] = "Program studi wajib diisi.";

if ($errors !== []) {
    http_response_code(422);
    foreach ($errors as $error) {
        echo "<p>" . htmlspecialchars($error, ENT_QUOTES, "UTF-8") . "</p>";
    }
    exit;
}

header("Location: success.php", true, 303);
exit;