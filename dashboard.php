<?php
// admin/dashboard.php
require_once 'config.php';
require_once 'functions.php';
require_login();
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Codex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">Codex CMS</span>
        <a href="logout.php" class="btn btn-outline-light">Logout</a>
    </div>
</nav>
<div class="container mt-4">
    <h1>Benvenuto nella Dashboard</h1>
    <p>Qui potrai gestire gli articoli, gli utenti, ecc.</p>
    <a href="articoli.php" class="btn btn-primary">Gestisci Articoli</a>
</div>
</body>
</html>
