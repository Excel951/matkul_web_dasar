<?php
function selectiveView()
{
    require_once './Connection_API.php';

    $kode = $_GET["kode"];

    $querySQL = "SELECT * FROM BARANG WHERE kode_barang='$kode'";

    $result = mysqli_query($conn, $querySQL);

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    if ($rows > 0) {
        $responseSelect = array(
            'status' => '200',
            'message' => 'Success View Selective Barang',
            'data' => $rows
        );
    } else {
        $responseSelect = array(
            'status' => '500',
            'message' => 'Failed to View Selective Barang',
            'data' => null
        );
    }

    header("Content-Type: application/json");
    echo json_encode($responseSelect);
}
