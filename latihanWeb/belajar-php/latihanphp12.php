<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan PHP di HTML 8 (Fungsi)</title>
</head>

<body>
    <form action="" method="post">
        <label for="nilai1">Masukkan nilai 1</label>
        <input type="text" name="nilai1" id="nilai1">
        <br>
        <label for="nilai2">Masukkan nilai 2</label>
        <input type="text" name="nilai2" id="nilai2">
        <br><input type="submit" value="kirim" name="kirim">
    </form>

    <?php
    include './kumpulanfungsi.php';

    if (isset($_POST['kirim'])) {
        $nilai1 = (int) htmlspecialchars($_POST['nilai1']);
        $nilai2 = (int) htmlspecialchars($_POST['nilai2']);

        echo 'fungsi kali ' . $nilai1 . ' dan ' . $nilai2 . ' ' . kali($nilai1, $nilai2) . '<br>';
        echo 'fungsi bagi ' . $nilai1 . ' dan ' . $nilai2 . ' ' . bagi($nilai1, $nilai2) . '<br>';
        echo 'fungsi tambah ' . $nilai1 . ' dan ' . $nilai2 . ' ' . tambah($nilai1, $nilai2) . '<br>';
        echo 'fungsi kurang ' . $nilai1 . ' dan ' . $nilai2 . ' ' . kurang($nilai1, $nilai2) . '<br>';
    }
    ?>
</body>

</html>