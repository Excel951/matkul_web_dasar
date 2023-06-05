<?php
include './connection.php';

$kodeper = $_POST['kodeper'];

$querySQL = "SELECT dp.kode_barang, b.nama_barang, b.satuan, dp.harga_jual, dp.jumlah FROM `detailpermintaan` dp JOIN `barang` b ON b.kode_barang=dp.kode_barang WHERE dp.kodeper=$kodeper";
$result = mysqli_query($conn, $querySQL);

while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

print_r(json_encode($rows));
