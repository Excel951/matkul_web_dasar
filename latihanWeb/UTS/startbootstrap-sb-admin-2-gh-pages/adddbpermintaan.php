<?php
include './connection.php';

$data = json_decode(file_get_contents('php://input'), true);

$kodeper = $data['kode'];
$tanggal = $data['tanggal'];
$konsumen = $data['konsumen'];
$karyawan = $data['karyawan'];
$telepon = $data['telepon'];
$alamat = $data['alamat'];
$keterangan = $data['keterangan'];

// echo json_encode($kodeper);

$querySQL = 'INSERT INTO `permintaan`(`kodeper`, `kodekar`, `tanggal`, `konsumen`, `telepon`, `alamat`, `keterangan`) VALUES (?,?,?,?,?,?,?)';
$stmt = $conn->prepare($querySQL);
$stmt->bind_param('sssssss', $kodeper, $karyawan, $tanggal, $konsumen, $telepon, $alamat, $keterangan);
$success = $stmt->execute();

if ($success) {
    echo json_encode('Berhasil');
} else {
    echo json_encode('Gagal');
}
