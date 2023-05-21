<?php
include "../latihanphp13.php";
if (isset($_POST['simpan'])) {
    $kodebrg = $_POST['kodebrg'];
    $namabrg = $_POST['namabrg'];
    $satuan = $_POST['satuan'];
    $harga = $_POST['harga'];
    $hargajual = $_POST['hargajual'];

    $sql = "insert into barang values('" . $kodebrg . "','" . $namabrg . "','" . $satuan . "'," . $harga . "," . $hargajual . ")";
    mysqli_query($conn, $sql);
    header("Location: latihanphp14.php");
}

?>
<!DOCTYPE html>
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

</html>