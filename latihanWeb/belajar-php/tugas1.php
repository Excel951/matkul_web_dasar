<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Membuat Kalkulator</title>
</head>

<body>
    <h1>Kalkulator</h1>
    <form action="" method="post">
        <label for="nilai1">Angka 1</label>
        <input type="number" name="nilai1" id="nilai1">
        <label for="nilai2">Angka 2</label>
        <input type="number" name="nilai2" id="nilai2">
        <input type="submit" value="+ Plus" name="plus">
        <input type="submit" value="- Minus" name="minus">
        <input type="submit" value="/ Divide" name="divide">
        <input type="submit" value="X Multiple" name="multiple">
        <input type="submit" value="Deret Ganjil" name="deretganjil">
        <input type="submit" value="Deret Genap" name="deretgenap">
    </form>

    <?php
    include './kumpulanfungsi.php';

    $nilai1 = (int) htmlspecialchars($_POST['nilai1']);
    $nilai2 = (int) htmlspecialchars($_POST['nilai2']);

    if (isset($_POST['plus'])) {
        $nilaiAkhir = tambah($nilai1, $nilai2);
        echo $nilaiAkhir;
    }
    if (isset($_POST['minus'])) {
        $nilaiAkhir = kurang($nilai1, $nilai2);
        echo $nilaiAkhir;
    }
    if (isset($_POST['divide'])) {
        $nilaiAkhir = bagi($nilai1, $nilai2);
        echo $nilaiAkhir;
    }
    if (isset($_POST['multiple'])) {
        $nilaiAkhir = kali($nilai1, $nilai2);
        echo $nilaiAkhir;
    }
    if (isset($_POST['deretganjil'])) {
        deretganjil($nilai1, $nilai2);
    }
    if (isset($_POST['deretgenap'])) {
        deretgenap($nilai1, $nilai2);
    }
    ?>
</body>

</html>