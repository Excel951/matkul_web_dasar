<?php
include '../latihanphp13.php';

$sql = 'select * from karyawan';
$hasil = mysqli_query($conn, $sql);

echo '<a href="./latihanphp19.php"><button>Tambah</button></a>';
echo '<table border=1>';
echo '<thead><tr><td>Kode Karyawan</td><td>Nama Karyawan</td><td>Jabatan</td><td>Telepon</td><td>Email</td><td>Action</td></tr></thead>';
echo '<tbody>';

if (mysqli_num_rows($hasil) > 0) {
    while ($isi = mysqli_fetch_assoc($hasil)) {
        echo '<tr>';
        echo '<td>';
        echo $isi["kode_karyawan"];
        echo '</td>';
        echo '<td>';
        echo $isi["nama"];
        echo '</td>';
        echo '<td>';
        echo $isi["jabatan"];
        echo '</td>';
        echo '<td>';
        echo $isi["telepon"];
        echo '</td>';
        echo '<td>';
        echo $isi["email"];
        echo '</td>';
        echo '<td>';
        echo '<a href="./latihanphp20.php?kode_karyawan=' . $isi["kode_karyawan"] . '"><button>U</button></a>';
        echo '<a href="./latihanphp21.php?kode_karyawan=' . $isi["kode_karyawan"] . '"><button>-</button></a>';
        echo '</td>';
        echo '</tr>';
    }
}
echo '</tbody>';
echo '</table>';
