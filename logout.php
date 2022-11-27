<?php
session_start();
session_destroy();
header('Location: ユーザーログイン画面.php');
?>