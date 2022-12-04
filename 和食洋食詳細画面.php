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
          <a href="#" onclick="history.back(-1); return false;" class="nav-link link-dark">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            <font style="vertical-align: inherit;">戻る</font></a>
        </li>
      </ul>
  </div>
  <form action="カート画面.php" method="post">
  <div class="row">
    <?php
      $pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan;dbname=LAA1417400-healthybox;charset=utf8','LAA1417400','Pass0000');
      $sql="SELECT * FROM bento WHERE bento_id = ?";
      $ps = $pdo->prepare($sql);
      $ps->bindValue(1,$_GET['id'],PDO::PARAM_STR);
      $ps->execute();
      foreach($ps->fetchAll() as $row){
        echo '
                <div class="col-md-5">
                <div class="syasin"><img class="img-fluid" src="'.$row['image'].'" alt="写真"></div>
                <p></p>
                <font size="4S">個数<br>
                <select name="count">';
                for($i=1;$i<=10;$i++){
                  echo '<option value="'.$i.'">'.$i.'</option>';
                };
        echo   '</select>
                <p></p>
                <font size="6"><p style="text-align: right;">'.$row['price'].'円</p></Main></font>
                </font>
              </div>
          
              <div class="col-md-7">
                  <br>
                  <h2>'.$row['bento_name'].'</h2>
                  <br>
                  <p>'.$row['text'].'</p>

                  <input type="hidden" name="id" value="'.$row['bento_id'].'">
                  <input type="hidden" name="name" value="'.$row['bento_name'].'">
                  <input type="hidden" name="price" value="'.$row['price'].'">
                  <div class="img-fluid">
                  <input type="submit" class="btn btn--cart" value="カートに入れる">
                  </div>
              </div>
              ';
      }
    ?>
  </div>
  </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="./script/script.js"></script>
  </body>
</html>