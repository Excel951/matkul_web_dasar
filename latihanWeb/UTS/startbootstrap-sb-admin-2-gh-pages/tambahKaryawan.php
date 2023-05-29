<?php
include './connection.php';

$kode = $_POST['kode_karyawan'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$password = $_POST['password'];

// without using prepared statement
// $querySQL = "insert into karyawan values ('$kode','$nama','$jabatan','$telepon','$email','$password')";
// mysqli_query($conn, $querySQL);

// using prepare statement
$querySQL = "insert into karyawan (`kode_karyawan`, `nama`, `jabatan`, `telepon`, `email`, `password`) values (?,?,?,?,?,?)";
$stmt = $conn->prepare($querySQL);
$stmt->bind_param('ssssss', $kode, $nama, $jabatan, $telepon, $email, $password);
$stmt->execute();
