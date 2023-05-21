<?php
include '../latihanphp13.php';

$sql = 'select * from karyawan';
$hasil = mysqli_query($conn, $sql);

echo '<a href="./latihanphp19.php"><button>Tambah<button></a>';
echo '<table border=1>';
echo '<thead><tr><td>Kode Barang</td><td>Nama Barang</td><td>Satuan</td><td>Harga</td><td>Harga Jual</td><td>Action</td></tr><thead>';
echo '<tbody>';

if (mysqli_num_rows($hasil) > 0) {
    while ($isi = mysqli_fetch_assoc($hasil)) {
    
    }
}
