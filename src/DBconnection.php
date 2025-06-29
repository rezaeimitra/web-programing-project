<?php

$host = 'mysql';
$user = 'Mitra';
$password = 'root';
$db = 'Atelier';
$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    echo "connection error --> " . mysqli_connect_error();
}

?>