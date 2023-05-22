<?php
include './connection.php';
// if (isset($_GET['kode_barang'])) {
$kodebrg = $_POST['kode'];
$sql = "delete from barang where kode_barang='" . $kodebrg . "'";
mysqli_query($conn, $sql);
    // header("Location: latihanphp14.php");
// }
