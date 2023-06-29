<?php
function updateBarang()
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

    $querySQL = "UPDATE `barang` SET `nama_barang`='$nama',`satuan`='$satuan',`harga`='$hargabeli',`harga_jual`='$hargajual',`stok`='$stok' WHERE kode_barang='$kode'";

    $result = mysqli_query($conn, $querySQL);

    if ($result) {
        $responseUpdate = array(
            'status' => '200',
            'message' => 'Success Update Barang',
            'data' => $result
        );
    } else {
        $responseUpdate = array(
            'status' => '500',
            'message' => 'Failed to Update Barang',
            'data' => null
        );
    }

    header("Content-Type: application/json");
    echo json_encode($responseUpdate);
}
