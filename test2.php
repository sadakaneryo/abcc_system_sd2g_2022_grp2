<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Bootstrap４回目</title>
<style>
	.bg-img{
		background-image: url("img/titleback.jpg");
		background-size: cover;
		background-position: center 60%;
	}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
	<div class="bg-img p-5">
		<div class="container">
			<img class="img-fluid" src="img/logo.png">
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<h1 class="col-md-12 text-white text-center bg-dark p-3 mt-3 mb-3">ジャンボトロンをつかってみよう</h1>
		</div>
		<div class="row bg-info">
			<p class="col-md-3 col-6 text-justify p-3"><img class="img-fluid" src="img/img1.jpg">あなたはUIデザインにお困りじゃないですか？エンジニアにとってデザインは未知の世界。しかし素晴らしいシステムに素晴らしいUIは欠かせません。</p>
			<p class="col-md-3 col-6 text-justify p-3"><img class="img-fluid" src="img/img2.jpg">エンジニアの真骨頂はプログラミング。UIデザインに掛ける時間は極力減らしたいと考えているのではありませんか？</p>
			<p class="col-md-3 col-6 text-justify p-3"><img class="img-fluid" src="img/img3.jpg">BootStrapならその悩み一発解決できます！簡単な設定のみでスラスラと美しいUIを作り上げることができるのです！</p>
			<p class="col-md-3 col-6 text-justify p-3"><img class="img-fluid" src="img/img4.jpg">さぁ、あなたもBootStrapの世界を体験しませんか！？BootStrapはあなたのエンジニアライフを充実させる手助けをします。</p>
		</div>
	</div>
	<?php
		echo 'テスト';
	?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>