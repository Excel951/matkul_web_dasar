<?php
include "../latihanphp13.php";

$sql = "select * from barang";
$hasil = mysqli_query($conn, $sql);

// print_r($hasil);

// cara akses tabel
echo '<a href="./latihanphp15.php"><button>Tambah</button></a>';
echo "<table border=1>";
echo "<thead><tr><td>Kode Barang</td><td>Nama Barang</td><td>Satuan</td><td>Harga</td><td>Harga Jual</td><td>Action</td></tr><thead>";
echo "<tbody>";

if (mysqli_num_rows($hasil) > 0) {
    while ($isi = mysqli_fetch_assoc($hasil)) {
        echo "<tr>";
        echo "<td>";
        echo $isi["kode_barang"];
        echo "</td>";
        echo "<td>";
        echo $isi["nama_barang"];
        echo "</td>";
        echo "<td>";
        echo $isi["satuan"];
        echo "</td>";
        echo "<td>";
        echo $isi["harga"];
        echo "</td>";
        echo "<td>";
        echo $isi["harga_jual"];
        echo "</td>";
        echo "<td>";
        echo '<a href="./latihanphp16.php?kode_barang=' . $isi["kode_barang"] . '"><button>U</button></az>';
        echo '<a href="./latihanphp17.php?kode_barang=' . $isi["kode_barang"] . '"><button>-</button></az>';
        echo "</td>";
        echo "</tr>";
    }
}
echo "</tbody>";
