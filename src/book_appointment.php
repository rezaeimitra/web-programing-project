<?php
session_start();
require('DBconnection.php');

// Checks if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "<script>
        alert('Please login first to book an appointment.');
        window.location.href = 'login.php';
    </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id']; // گرفتن آی‌دی کاربر لاگین‌شده
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $appointment_date = mysqli_real_escape_string($conn, $_POST['appointment_date']);
    $appointment_time = mysqli_real_escape_string($conn, $_POST['appointment_time']);
    $message = !empty($_POST['message']) ? mysqli_real_escape_string($conn, $_POST['message']) : '';

    //Booking with Tebet user_id
    $sql = "INSERT INTO appointments (user_id, name, email, phone, appointment_date, appointment_time, message) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issssss", $user_id, $name, $email, $phone, $appointment_date, $appointment_time, $message);

    if ($stmt->execute()) {
        echo "<script>
            alert('Appointment successfully booked in Mira Atelier!');
            window.location.href='bookings.php';
        </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
