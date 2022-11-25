<?php
    //DBからセッション配列に持ってくる

    session_start();
    $id=$_REQUEST['id'];
    if(!isset($_SESSION['name'])){
        $_SESSION['product']=[];
    }
    $count=0;
    if(isset($_SESSION['product'])){
        $count=$_SESSION['product']=[];
    }
    $_SESSION['product'][$id]=[
        'name'=>$_RE
    ]
        //色々処理してheder関数で送る。最後はexで閉じ
?>