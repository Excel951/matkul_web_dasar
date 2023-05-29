<?php
include "./connection.php";

$kode = $_POST["kode"];
$nama = $_POST["nama"];
$jabatan = $_POST["jabatan"];
$telepon = $_POST["telepon"];
$email = $_POST["email"];
$password = $_POST["password"];

// $querySQL="update karyawan set nama='$nama', jabatan='$jabatan', telepon='$telepon', email='$email', password='$password' where kode_karyawan='$kode'";
// mysqli_query($conn,$querySQL);

// using statement
$querySQL = "update karyawan set nama=?, jabatan=?, telepon=?, email=?, password=? where kode_karyawan=?";
$stmt = $conn->prepare($querySQL);
$stmt->bind_param('ssssss', $nama, $jabatan, $telepon, $email, $password, $kode);
$stmt->execute();
