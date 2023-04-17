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
        <label for="nilai">Masukkan nilai</label>
        <input type="text" name="nilai" id="nilai">
        <br><input type="submit" value="kirim" name="kirim">
    </form>

    <?php
    // procedure
    function tampil()
    {
        echo 'procedure in PHP';
    }

    // procedure dengan cara method dengan parameter
    function kelipatan($a)
    {
        echo 2 * $a;
    }

    // fungsi
    function pangkat($y)
    {
        $a = $y * 2;
        return $a;
    }

    if (isset($_POST['kirim'])) {
        $nilai = (int) htmlspecialchars($_POST['nilai']);
        tampil();
        echo '<br>';
        kelipatan($nilai);
        echo '<br>';
        kelipatan(pangkat($nilai));
    }
    ?>
</body>

</html>