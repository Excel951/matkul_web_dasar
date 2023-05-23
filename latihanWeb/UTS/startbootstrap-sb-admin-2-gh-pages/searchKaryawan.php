<?php

use function PHPSTORM_META\type;

include './connection.php';

$kode = $_GET['kode'];

$querySQL = "select * from karyawan where kode_karyawan='$kode'";
$hasil = mysqli_query($conn, $querySQL);

while ($row = mysqli_fetch_assoc($hasil)) {
    $rows[] = $row;
};

// echo gettype($rows);
// var_dump($rows);
print_r(json_encode($rows));
