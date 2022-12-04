<?php
    $pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan;dbname=LAA1417400-healthybox;charset=utf8','LAA1417400','Pass0000');
    $sql="DELETE FROM details WHERE bento_id = ?";
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$_GET['name'],PDO::PARAM_STR);
    $ps->execute();
    header("Location:カート画面.php");
?>