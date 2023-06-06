<?php
include './connection.php';

$kodepem = $_POST['kodepesan'];

$querySQL = "SELECT dp.`kode_barang`, b.nama_barang, b.satuan, dp.`harga_beli`, dp.`jumlah` FROM `detailpemesanan` dp JOIN `barang` b ON b.kode_barang=dp.kode_barang WHERE dp.kodepem=$kodepem";
$result = mysqli_query($conn, $querySQL);

while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

print_r(json_encode($rows));
