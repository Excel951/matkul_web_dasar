<?php
include '../latihanphp13.php';
if (isset($_POST['ubah'])) {
    $kodebrg = $_POST['kodebrg'];
    $namabrg = $_POST['namabrg'];
    $satuan = $_POST['satuan'];
    $harga = $_POST['harga'];
    $hargajual = $_POST['hargajual'];

    $sql = "update barang set nama_barang='" . $namabrg . "', satuan='" . $satuan . "', harga=" . $harga . ",harga_jual=" . $hargajual . " where kode_barang='" . $kodebrg . "'";

    mysqli_query($conn, $sql);
    header("Location: latihanphp14.php");
} else {
    $searchkodebrg = $_GET['kode_barang'];
    $sqlcari = "select * from barang where kode_barang='" . $searchkodebrg . "'";
    $hasil = mysqli_query($conn, $sqlcari);
    $isi = mysqli_fetch_assoc($hasil);
    $namabrg = $isi["nama_barang"];
    $satuan = $isi["satuan"];
    $hargabeli = $isi["harga"];
    $hargajual = $isi["harga_jual"];
}
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <form action="" method="post">
        <input type="text" name="kodebrg" placeholder="Kode Barang" value="<?php echo $searchkodebrg; ?> " readonly>
        <br>
        <input type="text" name="namabrg" placeholder="Nama Barang" value="<?php echo $namabrg; ?> ">
        <br>
        <input type="text" name="satuan" placeholder="Satuan" value="<?php echo $satuan; ?> ">
        <br>
        <input type="text" name="harga" placeholder="Harga" value="<?php echo $hargabeli; ?> ">
        <br>
        <input type="text" name="hargajual" placeholder="Harga jual" value="<?php echo $hargajual; ?> ">
        <br>
        <input type="submit" name="ubah" value="Ubah">
    </form>
</body>

</html>