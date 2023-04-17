<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan PHP di HTML 5</title>
</head>

<body>
    <form action="" method="post">
        <label for="nilaiAkhir">Masukkan nilai akhir</label>
        <input type="text" name="nilaiAkhir" id="nilaiAkhir">
        <br><input type="submit" value="kirim" name="kirim">
    </form>

    <?php
    if (isset($_POST['kirim'])) {
        $i = 1;
        $ind_Akhir = (int) htmlspecialchars($_POST['nilaiAkhir']);
        echo 'Nilai akhir : ' . $ind_Akhir . '<br>';
        echo 'Hitung dari 1 sampai nilai akhir <br>';
        while ($i <= (int) htmlspecialchars($_POST['nilaiAkhir'])) {
            echo $i . '<br>';
            $i++;
        }
    }
    ?>
</body>

</html>