<?php
include './connection.php';

$querySQL = "select p.kodeper,p.tanggal, p.konsumen, k.nama, p.telepon, p.alamat, p.keterangan from permintaan p join karyawan k on p.kodekar=k.kode_karyawan";
$result = mysqli_query($conn, $querySQL);

while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

print_r(json_encode($rows));
