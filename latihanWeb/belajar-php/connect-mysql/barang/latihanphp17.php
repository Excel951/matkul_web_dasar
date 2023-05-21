<?php
include '../latihanphp13.php';
if (isset($_GET['kode_barang'])) {
    $kodebrg = $_GET['kode_barang'];
    $sql = "delete from barang where kode_barang='" . $kodebrg . "'";
    mysqli_query($conn, $sql);
    header("Location: latihanphp14.php");
}
