<?php
session_start();
require('DBconnection.php');

if (isset($_SESSION['admin_email'])) {
    header("Location: admin_dashboard.php");
    exit();
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];  
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admins WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $admin = $result->fetch_assoc();

        if ($admin['password'] === $password) {
            $_SESSION['admin_email'] = $admin['email'];
            $_SESSION['admin_id'] = $admin['id'];
            header("Location: admin_dashboard.php");
            exit();
        } else {
            $error = "Password is incorrect!";
        }
    } else {
        $error = "Admin not found!";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <style>
        body { font-family: Arial; background:#111; color:gold; text-align:center; padding-top:100px; }
        input { padding:10px; margin:10px; font-size:16px; width:250px; }
        input[type=submit] { background:gold; color:#111; border:none; cursor:pointer; }
        input[type=submit]:hover { background:white; color:gold; }
        .error { color:red; margin-top:20px; font-size:1.6rem; }
    </style>
</head>
<body>
    <h1>Admin Login</h1>
    <form method="post">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Login">
    </form>

    <?php if (!empty($error)): ?>
        <div class="error"><?= $error ?></div>
    <?php endif; ?>
</body>
</html>
