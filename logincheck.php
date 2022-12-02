><?php
session_start();
$pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan;dbname=LAA1417400-healthybox;charset=utf8mb4','LAA1417400','Pass0000');
$sql = "SELECT * FROM users WHERE user_id = ?";

$ps = $pdo->prepare($sql);
$ps->bindValue(1, $_POST['userid'], PDO::PARAM_STR);

$ps->execute();

$searchArray = $ps->fetchAll();

foreach($searchArray as $row){
    if($_POST['password']==$row['user_password']){
        $min = 1000000;
        $max = 9999999;
        $code = mt_rand($min,$max);
        $_SESSION['uid'] = $row['user_id'];
        $_SESSION['name'] = $row['sei'];
        $_SESSION['oid'] = $code;

        header('Location: トップ画面.php');
    }else{
        header('Location: ユーザーログイン画面.php');
    }
}
if(count($searchArray)==0){
    header('Location: ユーザーログイン画面.php');
}
?>