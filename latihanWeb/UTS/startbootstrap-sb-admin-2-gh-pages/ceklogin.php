<?php
// kode dibawah berfungsi sebagai penyimpanan supaya output nantinya dihasilkan
// tidak perlu diload kembali ketika kita membuka browser lagi
// ob_start();

include './connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

// implementasi prepared statement
// prepared statement

// stage 1: prepare
$querySQL = "SELECT * FROM USER WHERE email=? and password=?";
$stmt = $conn->prepare($querySQL);

// stage 2: bind and execute
$stmt->bind_param("ss", $email, $password);

$result = $conn->query($querySQL);

while ($row = mysqli_fetch_assoc($result)) {
    $results[] = $row;
}

print_r(json_encode($result[]));
