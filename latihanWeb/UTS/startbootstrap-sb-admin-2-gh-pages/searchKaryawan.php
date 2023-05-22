<?php
include './connection.php';

$kode = $_GET['kode'];

$querySQL = "select * from karyawan where kode_karyawan='$kode'";
$hasil = mysqli_query($conn, $querySQL);

echo json_encode($hasil);
