<?php
require('DBconnection.php');

// admin test information
$username = 'admin@domain.com';
$password = 'admin123';

// hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// put in the table
$sql = "INSERT INTO admins (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $hashed_password);

if ($stmt->execute()) {
    echo " Admin created successfully!";
} else {
    echo " Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
