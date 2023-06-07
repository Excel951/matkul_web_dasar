<?php
include './connection.php';

$querySQL = "SELECT * FROM SUPPLIER";
$result = mysqli_query($conn, $querySQL);

while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

echo json_encode($rows);
