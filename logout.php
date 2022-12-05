<?php
session_start();
$pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan;dbname=LAA1417400-healthybox;charset=utf8','LAA1417400','Pass0000');
$sql="DELETE FROM details";
$ps = $pdo->query($sql);
session_destroy();
header('Location: ユーザーログイン画面.php');
?>