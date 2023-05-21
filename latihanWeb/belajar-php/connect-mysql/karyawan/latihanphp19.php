<?php
include "../latihanphp13.php";
if (isset($_POST['simpan'])) {
    $kodeKar = $_POST['kode_karyawan'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $querySQL = "insert into karyawan values ('$kodeKar','$nama','$jabatan','$telepon','$email','$password')";

    mysqli_query($conn, $querySQL);
    header("Location: latihanphp18.php");
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Karyawan</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="kode_karyawan" id="kode_karyawan" placeholder="Kode Karyawan">
        <br>
        <input type="text" name="nama" id="nama" placeholder="Nama Karyawan">
        <br>
        <select name="jabatan" id="jabatan">
            <option value="null">Pilih Karyawan</option>
            <option value="Admin">Admin</option>
            <option value="Operator">Operator</option>
            <option value="Manajer">Manajer</option>
        </select>
        <br>
        <input type="tel" name="telepon" id="telepon" placeholder="Telepon">
        <br>
        <input type="email" name="email" id="email" placeholder="Email">
        <br>
        <input type="password" name="password" id="password" placeholder="Password">
        <br>
        <input type="submit" value="simpan" name="simpan">
    </form>
</body>

</html>