<?php
function createBarang()
{
    require_once './Connection_API.php';

    $kode = $_POST["kode"];
    $nama = $_POST["nama"];
    $satuan = $_POST["satuan"];
    $hargabeli = $_POST["hargabeli"];
    $hargajual = $_POST["hargajual"];
    $stok = $_POST["stok"];

    $querySQL = "INSERT INTO BARANG VALUES ('$kode', '$nama', '$satuan', $hargabeli, $hargajual, $stok)";

    $result = mysqli_query($conn, $querySQL);

    if ($result) {
        $responseCreate = array(
            'status' => '200',
            'message' => 'Success Create Barang',
            'data' => $result
        );
    } else {
        $responseCreate = array(
            'status' => '500',
            'message' => 'Failed to Create Barang',
            'data' => null
        );
    }

    header("Content-Type: application/json");
    echo json_encode($responseCreate);
}
