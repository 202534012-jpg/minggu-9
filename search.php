<?php
$query = trim($_GET["query"] ?? "");
?>
<form method="get">
  <label for="query">Kata kunci</label>
  <input id="query" name="query" value="<?= htmlspecialchars($query, ENT_QUOTES, "UTF-8") ?>">
  <button type="submit">Cari</button>
</form>
<p>Hasil untuk: <?= htmlspecialchars($query, ENT_QUOTES, "UTF-8") ?></p>