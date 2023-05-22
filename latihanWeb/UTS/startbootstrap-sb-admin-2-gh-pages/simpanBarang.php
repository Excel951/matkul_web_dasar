<?php
include "./connection.php";
// if (isset($_POST['btnSaveBarang'])) {
$kodebrg = $_POST['kode'];
$namabrg = $_POST['nama'];
$satuan = $_POST['satuan'];
$hargabeli = $_POST['hargabeli'];
$hargajual = $_POST['hargajual'];

$sql = "insert into barang values('" . $kodebrg . "','" . $namabrg . "','" . $satuan . "'," . $hargabeli . "," . $hargajual . ")";
print($sql);
mysqli_query($conn, $sql);
// header("Location: latihanphp14.php");
// }


?>
<!-- <!DOCTYPE html>
<html lang="en">

<body>
    <form action="" method="post">
        <input type="text" name="kodebrg" id="kodebrg" placeholder="Kode Barang">
        <br>
        <input type="text" name="namabrg" id="namabrg" placeholder="Nama Barang">
        <br>
        <input type="text" name="satuan" id="satuan" placeholder="Satuan">
        <br>
        <input type="text" name="harga" id="harga" placeholder="Harga">
        <br>
        <input type="text" name="hargajual" id="hargajual" placeholder="Harga Jual">
        <br>
        <input type="submit" value="simpan" name="simpan">
    </form>
</body>

</html> -->