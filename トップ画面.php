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
              <a href="#" class="nav-link link-dark">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                トップへ戻る
              </font></font></a>
            </li>
          </ul>
          <hr>
        </div>  
    </div>

    <form action="検索結果一覧画面.php" method="post">
      <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <img src="img/eae8ba6e-608b-4b84-b83a-a525d0429bbd.jpg"width="400">
            </div>
            <div class="col-lg-7">
                <input type="text" class="form-control" placeholder="商品名入力欄"style="width:100%;">
                
            </div>

            <div class="col-lg-1">
                <button type="submit" class= "btn" btn-default >検索</button>
            </div>

        </div> 
      </div>
    </form>

    <u><font size="5">おすすめ</font></u>
    <div>
      <img src="8d8ffbb4f3b234690c3f42d27d9463d6-720x480@2x.webp"width="230"hspace="20">
      <img src="11_å__é£_å¼_å½_-480x320.jpg"width="230"hspace="20">
      <img src="10_æ´_é£_å¼_å½_-480x320.jpg"width="230"hspace="20">
    </div>

    <u><font size="5">低カロリーランキング</font></u>
    <div>
      <p><font size="4">1位</font></p>
      <img src="img/10_æ´_é£_å¼_å½_-480x320.jpg"width="230"hspace="20">
      <p><font size="4">2位</font></p>
      <img src="/15_ä¸¡å´_ã__ã__ã__ã__ã__ã__ã__-480x320.jpg"width="230"hspace="20">
    </div>
      

    <div class="row">
      <div class="col-lg-6">
        <div style="position: relative; display:inline-block;">
          <img src="96d1f5baa4f82e00a23c916d1769cbf2.jpg"onclick="location.href='和食一覧画面.php'" width="750"hspace="20" alt="topimg">
          <div style="position: absolute; top: 0; left: 0; max-width: 100%; max-height: 0%; padding: 157px; text-align: center;">
            <h1 style="text-decoration:underline; font-size:100px; margin-left:150px;" >和食</h1>
          </div></div>
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
          </div></div>
    <div>



    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>