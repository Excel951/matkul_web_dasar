<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan PHP di HTML 4</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="hari" id="hari">
        <br>
        <input type="submit" value="kirim" name="kirim">
    </form>

    <?php
    if (isset($_POST['kirim'])) {
        $a = htmlspecialchars($_POST['hari']);
        switch ($a) {
            case '1':
                echo 'Senin';
                break;

            case '2':
                echo 'Selasa';
                break;

            case '3':
                echo 'Rabu';
                break;

            case '4':
                echo 'Kamis';
                break;

            case '5':
                echo 'Jumat';
                break;

            case '6':
                echo 'Sabtu';
                break;

            case '7':
                echo 'Minggu';
                break;

            default:
                echo 'nothing';
                break;
        }
    }
    ?>
</body>

</html>