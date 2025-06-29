<?php
session_start();
require('DBconnection.php');

function sanitize($data) {
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars($data));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = sanitize($_POST['email']);
    $password = $_POST['password'];

    // First check admin login
    $admin_query = "SELECT * FROM admins WHERE email = ?";
    if ($admin_stmt = $conn->prepare($admin_query)) {
        $admin_stmt->bind_param("s", $email);
        $admin_stmt->execute();
        $admin_result = $admin_stmt->get_result();

        if ($admin_result->num_rows > 0) {
            $admin_row = $admin_result->fetch_assoc();

            if ($admin_row['password'] === $password) {
                $_SESSION['admin_id'] = $admin_row['id'];
                $_SESSION['admin_email'] = $admin_row['email'];
                session_write_close();

                header("Location: admin_dashboard.php");
                exit();
            } else {
                $error_message = "Admin password is incorrect!";
            }

            $admin_stmt->close();
        } else {
            // Try user login
            $user_query = "SELECT * FROM user WHERE email = ?";
            if ($user_stmt = $conn->prepare($user_query)) {
                $user_stmt->bind_param("s", $email);
                $user_stmt->execute();
                $user_result = $user_stmt->get_result();

                if ($user_result->num_rows > 0) {
                    $user_row = $user_result->fetch_assoc();

                    if (password_verify($password, $user_row['password'])) {
                        $login_time = date('Y-m-d H:i:s');
                        $login_query = "INSERT INTO user_logins (user_id, login_time) VALUES (?, ?)";
                        if ($login_stmt = $conn->prepare($login_query)) {
                            $login_stmt->bind_param("is", $user_row['id'], $login_time);
                            $login_stmt->execute();
                            $login_stmt->close();
                        }

                        $_SESSION['user_id'] = $user_row['id'];
                        $_SESSION['email'] = $user_row['email'];
                        session_write_close();

                        header("Location: user_dashboard.php");
                        exit();
                    } else {
                        $error_message = "User password is incorrect!";
                    }
                } else {
                    $error_message = "Can't find the user or admin";
                }

                $user_stmt->close();
            }
        }
    } else {
        $error_message = "Database error!";
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mira Atelier</title>
    <link rel="stylesheet" href="css/login.css"> 
</head>
<body>

    <header>
        <h1>Mira Atelier - Login</h1>
        <nav>
            <a href="index.php">Home</a>
        </nav>
    </header>

    <section class="login" id="login">
        <h1 class="heading"> <span>Login</span>to user account </h1>

        <?php if (!empty($error_message)): ?>
            <div class="error-message" style="color: red; text-align: center;">
                <?= $error_message ?>
            </div>
        <?php endif; ?>

        <div class="login-form">
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">Login</button>

                <div class="form-group">
                    <a href="register.php">Register</a>
                </div>
            </form>
        </div>
    </section>

    <script src="js/script.js"></script>
</body>
</html>
