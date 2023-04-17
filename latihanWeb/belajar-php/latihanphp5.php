<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan PHP di HTML 2</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="nilai1" id="nilai1">
        <br>
        <input type="text" name="nilai2" id="nilai2">
        <br><input type="submit" value="kirim" name="kirim">
    </form>

    <?php
    if (isset($_POST['kirim'])) {
        $a = $_POST['nilai1'];
        $b = $_POST['nilai2'];
        echo $a * $b;
    }
    ?>
</body>

</html>