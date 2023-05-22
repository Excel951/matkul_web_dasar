<?php
include './connection.php';

$kode = $_POST['kode_karyawan'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$password = $_POST['password'];

$querySQL = "insert into karyawan values ('$kode','$nama','$jabatan','$telepon','$email','$password')";
mysqli_query($conn, $querySQL);
