<?php
include './connection.php';

$querySQL = "SELECT p.kodepem, p.tanggal, k.nama, s.perusahaan, s.telepon_kantor, p.totalitem, p.totalhrg FROM `pemesanan` p JOIN `karyawan` k ON k.kode_karyawan=p.kodekar JOIN `supplier` s ON s.kode_supp=p.kode_supp";
$result = mysqli_query($conn, $querySQL);

while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

print_r(json_encode($rows));
