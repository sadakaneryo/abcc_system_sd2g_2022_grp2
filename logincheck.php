<?php
require_once 'DBManager.php';
session_start();
$dbmng = new DBManager5();
$dbmng->loginCheck();
?>