<?php
session_start();
require('DBconnection.php');

// getting informatin from database
$query = "SELECT * FROM appointments ORDER BY appointment_date DESC";
$appointment_query = "SELECT * FROM appointments ORDER BY appointment_date DESC";
$appointment_result = mysqli_query($conn, $appointment_query);

if (!$appointment_result) {
    die("Query failed: " . mysqli_error($conn));
}

// Check if admin is logged in
if (!isset($_SESSION['admin_email'])) {
    header("Location: admin_login.php");
    exit();
}

// Delete user and related appointments
if (isset($_GET['delete_user_id'])) {
    $user_id = $_GET['delete_user_id'];

    // Get user email for appointment deletion
    $stmt_email = $conn->prepare("SELECT email FROM user WHERE id = ?");
    $stmt_email->bind_param("i", $user_id);
    $stmt_email->execute();
    $stmt_email->bind_result($email);
    $stmt_email->fetch();
    $stmt_email->close();

    // Delete appointments with that email
    $stmt_appointments = $conn->prepare("DELETE FROM appointments WHERE email = ?");
    $stmt_appointments->bind_param("s", $email);
    $stmt_appointments->execute();
    $stmt_appointments->close();

    // Delete user
    $stmt_delete = $conn->prepare("DELETE FROM user WHERE id = ?");
    $stmt_delete->bind_param("i", $user_id);
    $stmt_delete->execute();
    $stmt_delete->close();

    header('Location: admin_dashboard.php#users');
    exit();
}

// Delete appointment
if (isset($_GET['delete_appointment_id'])) {
    $appointment_id = $_GET['delete_appointment_id'];
    $stmt = $conn->prepare("DELETE FROM appointments WHERE id = ?");
    $stmt->bind_param("i", $appointment_id);
    $stmt->execute();
    $stmt->close();

    header('Location: admin_dashboard.php#appointments');
    exit();
}

// Fetch all users
$user_result = $conn->query("SELECT * FROM user");

// Fetch all appointments with user's full name
$appointment_query = "
    SELECT appointments.*, 
           CONCAT(user.firstname, ' ', user.middlename, ' ', user.lastname) AS user_name 
    FROM appointments 
    LEFT JOIN user ON appointments.email = user.email";
$appointment_result = $conn->query($appointment_query);

// Fetch all contact form messages
$message_result = $conn->query("SELECT * FROM contacts ORDER BY id DESC");

// Fetch login history with usernames
$login_query = "
    SELECT user_logins.*, 
           CONCAT(user.firstname, ' ', user.middlename, ' ', user.lastname) AS user_name 
    FROM user_logins 
    LEFT JOIN user ON user_logins.user_id = user.id
    ORDER BY login_time DESC";
$login_result = $conn->query($login_query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/admin_dashboard.css?v=2.8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>

    <!-- Navigation -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="nuclear-outline"></ion-icon>
                        </span>
                        <span class="title">Mira Atelier</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="speedometer-outline"></ion-icon>
                        </span>
                        <span class="title">Admin Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Clients</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="cog-outline"></ion-icon>
                        </span>
                        <span class="title">Setting</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="exit-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main content -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/image/user01.jpg" alt="User">
                </div>
            </div>

            <!-- Cards -->
            <div class="cardBox">
                <div class="card">
                    <div class="numbers">1,504</div>
                    <div class="cardName">Daily Views</div>
                    <div class="iconBox">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div class="numbers">80</div>
                    <div class="cardName">Bookings</div>
                    <div class="iconBox">
                        <ion-icon name="bookmarks-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div class="numbers">248</div>
                    <div class="cardName">Comments</div>
                    <div class="iconBox">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div class="numbers">1,700</div>
                    <div class="cardName">Projects</div>
                    <div class="iconBox">
                        <ion-icon name="file-tray-stacked-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- Recent Bookings Table -->
            <section class="admin-dashboard" id="appointments">
                <h2>appointment Managment</h2>
                <div class="details">
                    <div class="recentOrders">
                        <div class="cardheader">
                            <h2>Recent Bookings</h2>
                            <a href="#" class="bnt">View All</a>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Phone</td>
                                    <td>Date</td>
                                    <td>Time</td>
                                    <td>Message</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_assoc($appointment_result)): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                                        <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                        <td><?php echo htmlspecialchars($row['appointment_date']); ?></td>
                                        <td><?php echo $row['appointment_time'] ? htmlspecialchars($row['appointment_time']) : 'Not specified'; ?></td>
                                        <td><?php echo htmlspecialchars($row['message']); ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/a_dash.js"></script>

    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>

