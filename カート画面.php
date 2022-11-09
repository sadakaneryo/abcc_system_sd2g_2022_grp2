<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
  <title>Document</title>

  <style>
    .cart{
      font-size: 50px;
    }
    
    .text{
      display: inline-block;
      margin: 20px 0 0 0;
    }
    .center{
      margin: 10;
      padding: 10;
    }
  </style>
</head>
<body>
  <div class="conteiner-fluid">
    <div class="d-none d-md-block"><!-- pcだけでサイドバー表示 -->
      <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px; height: 800px; background-color: #B6D7C3; float: left;">
        <svg class="bi pe-none me-2" width="40" height="32"></svg>
        <font style="vertical-align: inherit;"><img src="c242312f152b7a5ce3fd4c26e6fd3e4c.png" alt="おにぎり" width="100" height="100" /></font>
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
  </div>


  <div class="container-fluid">
    <div class="d-md-none"><!-- モバイルだけで表示 -->
      <div class="row">
        <div class="col-6">
          <p class="text-center alert-success">楽ちん♪ヘルシーボックス</p>
        </div>
        <div class="col-6">
          <div class="d-grid gap-2">
            <a href="http://"><p class="alert-success text-center">トップへ戻る</p></a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid">
    <div class="d-none d-md-block"><!-- pcだけでアイコン表示 -->
      <div class="row">
          <div class="col-4">
                
          </div>
          <div class="col-4">
              <div class="row">
                  <div class="col-4">
                      <div class="cart">
                          <i class="bi bi-cart"></i>
                      </div>
                  </div>
                  <div class="col-4">
                      <div class="text">
                          <h1 class="text-success">カート</h1>
                      </div>
                  </div>
                  <div class="col-4">
                      <div class="cart">
                          <i class="bi bi-cart"></i>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-4">
            
          </div>
      </div>
    </div>
  </div>


  <div class="container-fluid">
    <div class="d-md-none"><!-- モバイルはアイコン消す -->
      <div class="row">
          <div class="col-4">
                
          </div>
          <div class="col-4">
              <div class="row">
                  <div class="col-12">
                    <h1 class="text-center text-success">カート</h1>
                  </div>
              </div>
          </div>
          <div class="col-4">
            
          </div>
      </div>
    </div>
  </div>




  <div class="container-fluid mt-3">
    <div class="d-none d-md-block"><!-- pcだけのカート表示 -->
      <div class="row">
        <div class="col-md-8 offset-md-2 alert-success">
          <div class="row">
            <div class="col-md-4">
              <h2>商品</h2>
              <h2>テスト</h2>
              <h2>テスト</h2>
              <h2>テスト</h2>
              <h2>テスト</h2>
              <h2>テスト</h2>
            </div>
            <div class="col-md-3">
              <h2 style="text-align: right">個数</h2>
            </div>
            <div class="col-md-3">
              <h2 style="text-align: center">金額</h2>
            </div>
            <div class="col-md-2">
              <h2 style="text-align: right">削除</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid mt-3">
    <div class="d-md-none"><!-- モバイルのカート表示 -->
      <div class="row">
        <div class="col-md-8 offset-md-2 alert-success">
          <div class="row">
            <div class="col-2">
              <h2>商品</h2>
              <h2>テスト</h2>
              <h2>テスト</h2>
              <h2>テスト</h2>
              <h2>テスト</h2>
              <h2>テスト</h2>
            </div>
            <div class="col-3">
              <h2 style="text-align: right">個数</h2>
            </div>
            <div class="col-3">
              <h2 style="text-align: center">金額</h2>
            </div>
            <div class="col-2">
              <h2 style="text-align: right">削除</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="continer-fluid mt-5">
    <div class="d-none d-md-block"><!-- pcだけの表示 -->
      <div class="row">
        <div class="col-2 offset-2">
          <h2>合計</h2>
        </div>
        <div class="col-4">

        </div>
        <div class="col-4">
          <h2>　</h2>
          <h2>　</h2>
          <h2>　</h2>
          <button><h2>購入画面へ</h2></button>
        </div>
      </div>
    </div>
  </div>


  <div class="continer-fluid mt-5">
    <div class="d-md-none"><!--   モバイルだけの表示 -->
      <div class="row">
        <div class="col-12">
          <h2>合計</h2>
        </div>
        <div class="col-12">
          <div class=text-center>
            <button class="btn btn-lg">
              購入画面へ
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>