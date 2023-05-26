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
        <label for="input">Input:</label>
        <input type="text" name="input" id="input">
        <br>
        <button id="btn" type="submit" name="kirim">Input</button>
    </form>
    <br>
    <h4 id="hasil"></h4>

    <?php
    if (isset($_POST["kirim"])) {
        $inputan = htmlspecialchars($_POST["input"]);
        $coba = crypt($inputan, "st");
        $coba1 = password_hash;
    }
    echo "Encrypt $coba <br>";
    echo "Decrypt $coba1";
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