<?php
include '../latihanphp13.php';
if (isset($_GET['kode_karyawan'])) {
    $kodeKar = $_GET['kode_karyawan'];

    $querySQL = "delete from karyawan where kode_karyawan='$kodeKar'";

    mysqli_query($conn, $querySQL);
    header("Location: latihanphp18.php");
}
