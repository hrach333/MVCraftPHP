<?php
?><!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= htmlspecialchars($title) ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-normalize/modern-normalize.min.css">
<style>
body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Ubuntu;max-width:860px;margin:40px auto;padding:0 16px}
header,footer{display:flex;justify-content:space-between;align-items:center}
a{color:#4169e1;text-decoration:none}
.card{border:1px solid #e5e7eb;border-radius:12px;padding:16px;margin:12px 0}
.card h2{margin:0 0 8px 0;font-size:20px}
.btn{display:inline-block;padding:8px 12px;border:1px solid #4169e1;border-radius:10px}
</style>
</head>
<body>
<header>
  <div><a href="/">MVCraftPHP</a></div>
  <nav><a class="btn" href="/">Главная</a></nav>
</header>
<main><?= $content ?></main>
<footer><small>© <?= date('Y') ?> MVCraftPHP</small><small>Powered by your MVC</small></footer>
</body>
</html>
