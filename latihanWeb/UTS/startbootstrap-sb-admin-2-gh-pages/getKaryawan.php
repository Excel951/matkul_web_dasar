<?php
include "./connection.php";

$querySQL = "select * from karyawan";
$result = mysqli_query($conn, $querySQL);

while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

print_r(json_encode($rows));
