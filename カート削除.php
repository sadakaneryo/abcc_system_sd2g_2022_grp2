<?php
    session_start();
    unset($_SESSION['チェックボックスの結果'][$_REQUEST['チェックボックスの結果']]);
    require 'カート画面.php'
?>