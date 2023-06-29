<?php
function deleteBarang()
{
    require_once './Connection_API.php';

    $kode = $_GET["kode"];

    $querySQL = "DELETE FROM BARANG WHERE kode_barang='$kode'";

    $result = mysqli_query($conn, $querySQL);

    if ($result) {
        $responseDelete = array(
            'status' => '200',
            'message' => 'Success Delete Barang',
            'data' => $result
        );
    } else {
        $responseDelete = array(
            'status' => '500',
            'message' => 'Failed to Delete Barang',
            'data' => null
        );
    }

    header("Content-Type: application/json");
    echo json_encode($responseDelete);
}
