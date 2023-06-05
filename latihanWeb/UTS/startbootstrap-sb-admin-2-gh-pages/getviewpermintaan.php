<?php
include './connection.php';

$kodeper = $_POST['kodeper'];

$querySQL = "SELECT p.kodeper, p.tanggal, k.nama, p.konsumen, p.telepon, p.alamat, p.keterangan FROM `permintaan` p JOIN `karyawan` k ON p.kodekar=k.kode_karyawan WHERE p.kodeper=$kodeper";
$result = mysqli_query($conn, $querySQL);

while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

print_r(json_encode($rows));
