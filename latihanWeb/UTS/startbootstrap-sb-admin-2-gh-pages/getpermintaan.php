<?php
include './connection.php';

$querySQL = "SELECT p.kodeper, p.tanggal, p.konsumen, k.nama, p.totalitem, p.totalhrg FROM `permintaan` p JOIN karyawan k ON p.kodekar=k.kode_karyawan";
$result = mysqli_query($conn, $querySQL);

while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

print_r(json_encode($rows));
