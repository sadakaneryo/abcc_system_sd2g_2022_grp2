<?php
session_start();
?>

<!DOCTYPE html>
<html>
 
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>登録完了画面</title>
<style>
    .onigiri{
        width:60%;
        height: auto;
        position: relative;
        margin-top: 5%;
        margin-left: auto;
        margin-right: auto; 
    }
    .onigiri img{
        width:100%;
        height:auto;
    }
    p{
        position: absolute;
        top:50%;
        left:50%;
        transform: translate(-50%,-50%);
        font-size: 30px;
        padding:0;
        margin:auto;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
</head>
 
<body>
    <?php
    $pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan;dbname=LAA1417400-healthybox;charset=utf8mb4','LAA1417400','Pass0000');
    $sql = "INSERT INTO users (user_id, user_password, phone_number, sei, mei, post_code, user_address) VALUES (?,?,?,?,?,?,?)";
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$_POST['mail'],PDO::PARAM_STR);
    $ps->bindValue(2,$_POST['pass'],PDO::PARAM_STR);
    $ps->bindValue(3,$_POST['number'],PDO::PARAM_STR);
    $ps->bindValue(4,$_POST['sei'],PDO::PARAM_STR);
    $ps->bindValue(5,$_POST['mei'],PDO::PARAM_STR);
    $ps->bindValue(6,$_POST['code'],PDO::PARAM_STR);
    $ps->bindValue(7,$_POST['address'],PDO::PARAM_STR);
    $ps->execute();
    ?>
    
    <div class="container-fluid">
        <div class="onigiri">
            <img src="img/food_onigiri_frame_5104-500x375.png" class="img-fluid">
            <p>
                登録完了しました。
            </p>
        </div>
 
        <div class="row">
            <div class="text-center col-md-3 offset-md-9">
                <button type="button" onclick="location.href='トップ画面.php'" class="mt-3 btn btn-lg" style="background-color: #B6D7C3;">トップへ戻る</button>
            </div>
        </div>
    </div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
 
</html>