<?php
function updateBarang()
{
    require_once './Connection_API.php';

    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    $kode = $data["kode_barang"];
    $nama = $data["nama_barang"];
    $satuan = $data["satuan"];
    $hargabeli = $data["harga"];
    $hargajual = $data["harga_jual"];
    $stok = $data["stok"];

    $querySQL = "UPDATE `barang` SET `nama_barang`='$nama',`satuan`='$satuan',`harga`='$hargabeli',`harga_jual`='$hargajual',`stok`='$stok' WHERE kode_barang='$kode'";

    $result = mysqli_query($conn, $querySQL);

    if (mysqli_affected_rows($conn) > 0) {
        $responseUpdate = array(
            'status' => '200',
            'message' => 'Success Update Barang',
        );
    } else {
        $responseUpdate = array(
            'status' => '500',
            'message' => 'Failed to Update Barang',
        );
    }

    header("Content-Type: application/json");
    echo json_encode($responseUpdate);
}
