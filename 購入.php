<?php
    $pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan;dbname=LAA1417400-healthybox;charset=utf8','LAA1417400','Pass0000');
    $sql="DELETE FROM details";
    $ps = $pdo->query($sql);
    header("Location:購入完了画面.php");
?>