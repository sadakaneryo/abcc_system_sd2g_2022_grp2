<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>検索結果一覧画面</title>
<style>
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
</head>

<body>
<div class="container-fluid">
    <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 20%; height: 800px; background-color: #B6D7C3; float: left;">
        <svg class="bi pe-none me-2" width="40" height="32"></svg>
        <font style="vertical-align: inherit;"><img src="img/c242312f152b7a5ce3fd4c26e6fd3e4c.png" class="img-fluid" alt="おにぎり" width="100" height="100" /></font>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li>
          <a href="トップ画面.php" class="nav-link link-dark">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            トップへ戻る
          </font></font></a>
        </li>
      </ul>
      <hr>
    </div>

    <p class="text-center" style="font-size: 1%;">　　　　</p><br>
    <h1 class="text-center" style="text-decoration: underline; text-decoration-color: #B6D7C3;">検索結果</h1><br>

    <div class="row">
      <?php
        $pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan;dbname=LAA1417400-healthybox;charset=utf8','LAA1417400','Pass0000');
        $sql="SELECT * FROM bento WHERE bento_name LIKE ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,'%'.$_POST['search'].'%',PDO::PARAM_STR);
        $ps->execute();
        $result = $ps->fetchAll();
        foreach($result as $row){
          echo '<div class="col-md-4">
                  <a href="和食洋食詳細画面.php?id='.$row['bento_id'].'">
                  <img style="width: 300px; height: 210px;" src="'.$row['image'].'">
                  </a>
                  <p></p>
                  <p class="card-title" style="color: gray; text-align:right">カロリー '.$row['calorie'].'kcal</p>
                  <h5 style="text-align:right">'.$row['bento_name'].'　　　'.$row['price'].'円</h5>
                </div>';
        }
        if(count($result)==0){
          echo '<p class="text-center" style="color:red;">該当する商品はございません</p>';
        }
      ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>