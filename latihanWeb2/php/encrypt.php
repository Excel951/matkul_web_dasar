<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP Encrypt</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="input">Password</label>
                </td>
                <td>:</td>
                <td>
                    <input type="text" name="input" id="input">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="input2">Masukkan lagi password</label>
                </td>
                <td>:</td>
                <td>
                    <input type="text" name="input2" id="input2">
                </td>
            </tr>
        </table>
        <button id="btn" type="submit" name="kirim">Input</button>
    </form>
    <br>
    <h4 id="hasil"></h4>

    <?php
    $inputan;
    $coba;
    $verify;
    if (isset($_POST["kirim"])) {
        $inputan = htmlspecialchars($_POST["input"]);
        $coba = crypt($inputan, "st");
        $inputan2 = htmlspecialchars($_POST["input2"]);
        $verify = password_verify($inputan2, $coba);

        if ($verify != 0) {
            echo "Password sesuai";
        } else {
            echo "Password tidak sesuai";
        }
    }
    // echo "Encrypt $coba <br>";
    // echo "Decrypt $verify";
    ?>
    <!-- <script>
        let btn=document.querySelector("#btn")
        btn.addEventListener("click",()=>{
            let inputan=document.querySelector("#input").value
            if (inputan.length==0) {
                alert("Inputan kosong")
            }else{
                const xhttp=new XMLHttpRequest()
                xhttp.onload=function(){
                    document.querySelector("#hasil").innerHTML=this.responseText
                }
                xhttp.open("GET","./encryptFunc.php?input="+inputan)
                xhttp.send()
            }
        })
    </script> -->
</body>

</html>