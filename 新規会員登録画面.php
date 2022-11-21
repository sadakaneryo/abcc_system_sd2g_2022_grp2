<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>新規会員登録確認画面</title>
<style>


</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="./css/style_login.css">
</head>
<h1 style="text-align:center">会員登録</h1>
<body style="background-color:rgb(193, 243, 226);">
    <div name="maindiv" class = "container">
        <div class = "row">
            <div class = "col-md-4 offset-md-2">
                <div class = "card">
                    <div class = "card-body" style="background-color:rgb(143, 243, 185); ">
                    <h5>メールアドレス</h5>
                            <div class = "col-12 mb-1">
                                <div class = "form-floating">
                                    <input type = "text" class = "form textboxsize" name = "mail">      
                                </div>
                            </div>
                            <h5>パスワード</h5>
                            <div class="col-12">
                                <div  class="form-floating">
                                    <input  type="text"  class="form textboxsize" name = "pass">
                                </div>
                            </div>
                            <div class="col-12">
                                <div  class="form-floating">
                                    <input  type="text"  class="form textboxsize" name = "password">
                                </div>
                            </div>
                            <h6>半角英数字、6文字以上。<br>確認の為、２回入力してください</h6>
                            <h5>姓　　　　　　　名</h5>
                            <div class="col-12">
                                <div  class="form-floating">
                                    <input type = "text" class = "form namesize" name = "sei">　<input type = "text" class = "form namesize" name = "mei">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           


            
            <div class = "col-md-4">
                <div class = "card">
                    <div class = "card-body" style="background-color:rgb(143, 243, 185); ">
                        <h5>郵便番号</h5>
                            <div class = "col-12 mb-1">
                                <div class = "form-floating">
                                    <input type = "text" class = "form textboxsize" name = "post">
                                    
                                </div>
                            </div>
                            <h5>住所</h5>
                            <div class="col-12">
                                <div  class="form-floating">
                                    <input  type="text"  class="form jusho" name = "address">
                                </div>
                            </div>
                            <h5>電話番号</h5>
                            <div class="col-12">
                                <div  class="form-floating">
                                    <input  type="text"  class="form textboxsize" name = "number">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            

            
                <div class = "col-md-8 offset-md-2">
                    <div class = "card">
                <div class = "card-body" style="background-color:rgb(143, 243, 185); ">
                    <div class="col-12">
                        <div class="d-grid gap-2">
                            <div class="tbutton">
                            <a href=新規会員登録確認画面.php class = "button">確認する</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

            



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>