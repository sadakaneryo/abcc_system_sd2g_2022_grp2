<?php
require_once 'DBManager.php';
session_start();
$dbmng = new DBManager();
$dbmng->loginCheck($_POST['id'],$_POST['pass']);
?>