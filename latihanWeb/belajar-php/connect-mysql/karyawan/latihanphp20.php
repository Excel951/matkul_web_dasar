<?php
include "../latihanphp13.php";

if (isset($_POST['ubah'])) {
    $kodeKar = $_POST['kode_karyawan'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $querySQL = "update karyawan set nama='$nama', jabatan='$jabatan', telepon='$telepon', email='$email', password='$password' where kode_karyawan='$kodeKar'";

    mysqli_query($conn, $querySQL);
    header("Location: latihanphp14.php");
} else {
    $kodeKar = $_GET['kode_karyawan'];

    $querySQL = "select * from karyawan where kode_karyawan='$kodeKar'";

    $hasil = mysqli_query($conn, $querySQL);
    $isi = mysqli_fetch_assoc($hasil);

    $nama = $isi['nama'];
    $jabatan = $isi['jabatan'];
    $telepon = $isi['telepon'];
    $email = $isi['email'];
    $password = $isi['password'];
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Barang</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="kode_karyawan" id="kode_karyawan" placeholder="Kode Karyawan" value="<?php echo $kodeKar; ?>" readonly>
        <br>
        <input type="text" name="nama" id="nama" placeholder="Nama Karyawan" value="<?php echo $nama; ?>">
        <br>
        <select name="jabatan" id="jabatan" value="<?php echo $jabatan; ?>">
            <option value="null">Pilih Karyawan</option>
            <option value="Admin">Admin</option>
            <option value="Operator">Operator</option>
            <option value="Manajer">Manajer</option>
        </select>
        <br>
        <input type="tel" name="telepon" id="telepon" placeholder="Telepon" value="<?php echo $telepon; ?>">
        <br>
        <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>">
        <br>
        <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>">
        <br>
        <input type="submit" value="ubah" name="ubah">
    </form>
</body>

</html>