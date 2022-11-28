<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>BootstrapCDN読込済み</title>
<style>
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid"> 
      <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px; height:1000px; background-color: #B6D7C3; float: left;">
          <svg class="bi pe-none me-2" width="40" height="32"></svg>
          <font style="vertical-align: inherit;"><img src="img/c242312f152b7a5ce3fd4c26e6fd3e4c.png" alt="おにぎり" width="100" height="100" /></font>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li>
            <a href="logout.php" class="nav-link link-dark">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              ログアウト
            </font></font></a>
          </li>
        </ul>
        <hr>
      </div>  
    </div>

    <form action="検索結果一覧画面.php" method="post">
      <div class="form-group">
        <div class="row">
          <div class="col-md-4">
              <img src="img/eae8ba6e-608b-4b84-b83a-a525d0429bbd.jpg">
          </div>
          <div class="col-md-6">
              <input type="text" name="search" class="form-control" placeholder="商品名入力欄" style="width:100%;">
          </div>
          <div class="col-md-2">
              <button type="submit" class= "btn">検索</button>
          </div>
        </div> 
      </div>
    </form>

    <u><font size="5">おすすめ</font></u>
    <div class="row">
      <div class="col-md-4">
        <a href="和食洋食詳細画面.php?id=001">
          <img src="img/w1.jpg"width="230"hspace="20">
        </a>
      </div>
      <div class="col-md-4">
        <a href="和食洋食詳細画面.php?id=002">
          <img src="img/w2.jpg"width="230"hspace="20">
        </a>
      </div>
      <div class="col-md-4">
        <a href="和食洋食詳細画面.php?id=004">
          <img src="img/y2.png"width="230"hspace="20">
        </a>
      </div>
    </div>

    <u><font size="5">低カロリーランキング</font></u>

    <div class="row">
      <?php
      $pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan;dbname=LAA1417400-healthybox;charset=utf8','LAA1417400','Pass0000');
      $rank = 1;
      $sql2 = "SELECT image, bento_id FROM bento ORDER BY calorie";
      $rankdata = $pdo->query($sql2);
      foreach($rankdata as $row){
        echo '<div class="col-md-4">
                <p><font size="4">'.$rank.'位</font></p>
                <a href="和食洋食詳細画面.php?id='.$row['bento_id'].'">
                  <img src="'.$row['image'].'"width="230"hspace="20">
                </a>
              </div>';
        $rank++;
        if($rank>=4){
          break;
        }
      }
      ?>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div style="position: relative; display:inline-block;">
          <img src="img/96d1f5baa4f82e00a23c916d1769cbf2.jpg"onclick="location.href='和食一覧画面.php'" width="750"hspace="20" alt="topimg">
          <div style="position: absolute; top: 0; left: 0; max-width: 100%; max-height: 0%; padding: 157px; text-align: center;">
            <h1 style="text-decoration:underline; font-size:100px; margin-left:150px;" >和食</h1>
          </div>
        </div>
      </div>

      <div class="col-lg-6"> 
        <div>
          <h1 style="text-decoration:underline; font-size:70px; padding-left:auto; padding-right:auto;" >menu</h1>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-lg-6 offset-lg-6">
        <div style="position: relative; display:inline-block;">
          <img src="img/bfc238d6fae978f546cc7f3a083f4178..jpeg"onclick="location.href='洋食一覧画面.php'"width="750" alt="topimg">
          <img src="bfc238d6fae978f546cc7f3a083f4178..jpeg"width="750" alt="topimg">
          <div style="position: absolute; top: 0; left: 0; max-width: 100%; max-height: 0%; padding: 149px; text-align: center;">
            <h1 style="text-decoration:underline; font-size:100px; margin-left:150px;" >洋食</h1>
          </div>
        </div>
      <div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>