<?php
include './connection.php';

$data = json_decode(file_get_contents('php://input'), true);

$kodepem = $data['kode'];
$tanggal = $data['tanggal'];
$supplier = $data['supplier'];
$karyawan = $data['karyawan'];
$telepon = $data['telepon'];
$alamat = $data['alamat'];
$keterangan = $data['keterangan'];
$totalhrg = $data['totalhrg'];
$totalitem = $data['totalitem'];

$querySQL = "INSERT INTO `pemesanan`(`kodepem`, `kodekar`, `kode_supp`, `tanggal`, `telepon`, `alamat`, `keterangan`, `totalitem`, `totalhrg`) VALUES (?,?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($querySQL);
$stmt->bind_param('sssssssdd', $kodepem, $karyawan, $supplier, $tanggal, $telepon, $alamat, $keterangan, $totalitem, $totalhrg);
$success = $stmt->execute();

if ($success) {
    echo json_encode('Berhasil');
} else {
    echo json_encode('Gagal');
}
