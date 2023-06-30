<?php
function createBarang()
{
    require_once './Connection_API.php';

    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    $kode = $data["kode"];
    $nama = $data["nama"];
    $satuan = $data["satuan"];
    $hargabeli = $data["hargabeli"];
    $hargajual = $data["hargajual"];
    $stok = $data["stok"];

    $querySQL = "INSERT INTO BARANG VALUES ('$kode', '$nama', '$satuan', $hargabeli, $hargajual, $stok)";

    $result = mysqli_query($conn, $querySQL);

    if (mysqli_affected_rows($conn) > 0) {
        $responseCreate = array(
            'status' => '200',
            'message' => 'Success Create Barang',
        );
    } else {
        $responseCreate = array(
            'status' => '500',
            'message' => 'Failed to Create Barang',
        );
    }

    header("Content-Type: application/json");
    echo json_encode($responseCreate);
}
