<?php
include './connection.php';

$kodeper = $_POST['kode'];
$tanggal = $_POST['tanggal'];
$konsumen = $_POST['konsumen'];
$karyawan = $_POST['karyawan'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];
$keterangan = $_POST['keterangan'];

$querySQL = '';
$stmt = $conn->prepare($querySQL);
$stmt->bind_param('sssssss', $kodeper, $tanggal, $konsumen, $karyawan, $telepon, $alamat, $keterangan);
// $stmt->execute();