<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_abiru.css" />
</head>
<body>
    <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 15%; height: 713px; background-color: #B6D7C3; float: left;">
      <svg class="bi pe-none me-2" width="40" height="32"></svg>
      <div style="text-align: center">
        <font style="vertical-align: inherit;"><img src="./img/c242312f152b7a5ce3fd4c26e6fd3e4c.png" class="img-fluid" alt="おにぎり" width="150" height="150" /></font>
      </div>
      <p></p>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="トップ画面.php" class="nav-link link-dark">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              <font style="vertical-align: inherit;">トップへ戻る</font></a>
          </li>
        </ul>
    </div>

    <p class="text-center" style="font-size: 1%;">　　　　</p><br>
    <h1 class="text-center" style="text-decoration: underline; text-decoration-color: #B6D7C3;">洋食</h1><br>
 
    <div class="row">
    <?php
      $pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan;dbname=LAA1417400-healthybox;charset=utf8','LAA1417400','Pass0000');
      $sql = "SELECT * FROM bento WHERE jpn=0";
      $selectdata = $pdo->query($sql);
      foreach($selectdata as $row){
        echo '<div class="col-md-4">
            <a href="和食洋食詳細画面.php?id='.$row['bento_id'].'">
            <img style="width: 300px; height: 210px;" src="'.$row['image'].'">
            </a>
            <p></p>
            <p class="card-title" style="color: gray; text-align:right">カロリー '.$row['calorie'].'kcal</p>
            <h5 style="text-align:right">'.$row['bento_name'].'　　　'.$row['price'].'円</h5>
          </div>';
      }
    ?>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>