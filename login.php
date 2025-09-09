<?php
// admin/login.php
require_once 'config.php';
require_once 'functions.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


    $stmt = $pdo->prepare("SELECT id, password_hash FROM utenti WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password_hash'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Credenziali errate '.$username.' - '.$password;
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3 class="mb-3 text-center">Accedi a CMS</h3>
            <?php if ($error): ?>
                <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>
            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="text" name="password" class="form-control" required>
                </div>
                <button class="btn btn-primary w-100">Accedi</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
