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
$totalhrg = $data['totalhrg'];
$totalitem = $data['totalitem'];

// echo json_encode($kodeper);

$querySQL = 'INSERT INTO `permintaan`(`kodeper`, `kodekar`, `tanggal`, `konsumen`, `telepon`, `alamat`, `keterangan`, `totalitem`, `totalhrg`) VALUES (?,?,?,?,?,?,?,?,?)';
$stmt = $conn->prepare($querySQL);
$stmt->bind_param('sssssssdd', $kodeper, $karyawan, $tanggal, $konsumen, $telepon, $alamat, $keterangan, $totalitem, $totalhrg);
$success = $stmt->execute();

if ($success) {
    echo json_encode('Berhasil');
} else {
    echo json_encode('Gagal');
}
