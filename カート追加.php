<?php
    //DBからセッション配列に持ってくる

    session_start();
    $id=$_REQUEST['id']; //前の画面のinput nameに入っていた商品番号
    if(!isset($_SESSION['name'])){
        $_SESSION['cart']=[];
    }
    $count=0;
    if(isset($_SESSION['cart'])){ //カートに同じ商品があるのかチェック
        $count=$_SESSION['cart'][$id]['count']; //カート内の商品個数を代入
    }
    $_SESSION['product'][$id]=[
        'bento_name'=>$_REQUEST[$_POST['bento_name']],
        'price'=>$_REQUEST[$_POST['price']],
        'count'=>$count+$_REQUEST['count']
    ];
    require 'カート画面.php';
        //色々処理してheder関数で送る。最後はexで閉じ
?>