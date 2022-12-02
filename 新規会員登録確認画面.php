<?php
session_start();
?>
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
<h1 style="text-align:center">確認</h1>
<body style="background-color:rgb(193, 243, 226);">
<form action="登録完了画面.php" method = "post">
    <div name="maindiv" class = "container">
        <div class = "row">
            <div class = "col-md-4 offset-md-2">
                <div class = "card">
                    <div class = "card-body" style="background-color:rgb(143, 243, 185); ">
                        <h5>メールアドレス</h5>
                            <div class = "col-12 mb-1">
                                <div class = "form-floating">
                                    <input type = "text" class = "form textboxsize" name = "mail" value="<?php echo $_POST['mail']; ?>">
                                </div>
                            </div>
                            <h5>パスワード</h5>
                            <div class="col-12">
                                <div  class="form-floating">
                                    <input  type="text"  class="form textboxsize" name = "pass" value="<?php echo $_POST['pass']; ?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <div  class="form-floating">
                                    <input  type="text"  class="form textboxsize" name = "password" value="<?php echo $_POST['password']; ?>">
                                </div>
                            </div>
                            <h6>半角英数字、6文字以上。<br>確認の為、２回入力してください</h6>
                            <h5>姓　　　　　　　名</h5>
                            <div class="col-12">
                                <div  class="form-floating">
                                    <input type = "text" class = "form namesize" name = "sei" value="<?php echo $_POST['sei']; ?>">　<input type = "text" class = "form namesize" name = "mei" value="<?php echo $_POST['mei']; ?>">
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
                                    <input type = "text" class = "form textboxsize" name = "code" value="<?php echo $_POST['code']; ?>">
                                    
                                </div>
                            </div>
                            <h5>住所</h5>
                            <div class="col-12">
                                <div  class="form-floating">
                                    <input  type="text"  class="form jusho" name = "address" value="<?php echo $_POST['address']; ?>">
                                </div>
                            </div>
                            <h5>電話番号</h5>
                            <div class="col-12">
                                <div  class="form-floating">
                                    <input  type="text"  class="form textboxsize" name = "number" value="<?php echo $_POST['number']; ?>">
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
                                        <input type = "submit" value ="登録する" class = "button">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>