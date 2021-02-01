<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript" charset="utf-8" src="/buyme/js/buyme.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="fonts/fonts.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<!-- <script src="buyme/stuff/highlight.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery.js"></script> -->
	<!-- <script src="buyme/stuff/etc.js"></script> -->
	<!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,cyrillic" rel="stylesheet" type="text/css"> -->
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->
	<!-- <link rel="stylesheet" href="buyme/stuff/bs.css"> -->
	<!-- <link rel="stylesheet" href="buyme/stuff/style.css">
	<link rel="stylesheet" href="buyme/stuff/highlight.css">
	<link href="buyme/stuff/img/favicon.ico" rel="shortcut icon" type="image/x-icon"> -->
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
	<title>Сейфы для трудовых книжек от производителя. Сейфы Эталон</title>
</head>
<body data-spy="scroll" data-target="#navbarSupportedContent">
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark menu-bg d-flex justify-content-between ">
		<div class="col-5 col-sm-2 order-first text-left p-0 m-0">
			<a class="navbar-brand" href="/">
				<img src="/images/logo.png" class="img-fluid d-inline-block float-left mr-md-2" alt="Сейфы для трудовых книжек Эталон" align="left" loading="lazy">
				<span class="mt-md-1">Сейфы<br/>Эталон</span>
			</a>
		</div>
		<!--<button class="navbar-toggler order-3 m-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse col-12 col-lg-8 justify-content-center order-4 order-lg-1 text-center" id="navbarSupportedContent">
			<ul class="nav navbar-nav nav-pills my-2 my-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="#id_2">Выгоды</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#id_3">
						Сейфы
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#id_3-1">Досье</a>
						<a class="dropdown-item" href="#id_3-2">Учёт</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#id_4">Доставка</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" href="#id_5">Наши заказчики</a>
				</li> 
				<li class="nav-item">
					<a class="nav-link" href="#id_6">Контакты</a>
				</li>
			</ul>
		</div> -->
		<div class="tel order-2 col-7 col-sm-5 col-lg-2 text-center ">+7 (930) 684-<span class="num_hide">28-88</span> <div class="sh_nmr">Показать телефон</div></div>
	</nav>
	<!--Первый блок-->
	<div class="container d-flex flex-lg-nowrap d-flex flex-md-wrap flex-sm-wrap flex-wrap justify-content-center mt-5">
		<div class="bg-light col-12 col-sm-12 col-lg-6">
			<h1 class="display-4">Токарные работы</h1>
			<div class="p-4">
				<p class="lead">— высокая точность</p>
				<p class="lead">— изготовление деталей любой сложности</p>
				<p class="lead">— выполняем единичные заказы</p>
			</div>
			<?php
	//проверяем, существуют ли переменные в массиве POST
					if(!isset($_POST['tel'])){
						?> <form action="index.php" method="post">
							<div class="form-group mt-3">
								<input type="tel" name="tel" class="form-control" id="InputTel1" aria-describedby="telHelp" placeholder="+79998887766" required>
							</div>
							<button type="submit" value="Отправить" class="btn btn-primary float-right">Оставить заявку</button>
							</form>
							<?php
						} else {
 //показываем форму
							$tel = $_POST['tel'];
							$tel = htmlspecialchars($tel);
							$tel = urldecode($tel);
							$tel = trim($tel);
							if (mail("etalon.safe@ya.ru", "Заявка с сайта", "ФИО:".$tel.". E-mail: ".$email ,"From: example2@mail.ru \r\n")){
								echo "Сообщение успешно отправлено";
							} else {
								echo "При отправке сообщения возникли ошибки";
							}
						}
						?> 
		</div>
		<div class="col-12 col-sm-12 col-lg-6 d-flex align-self-center pt-2 d-flex justify-content-center">
			<img class="img-fluid shadow-lg" src="/images/tokrab.jpg" alt="Generic placeholder image">
		</div>
	</div>
	<!--Блок с материалами-->
	<div class="container-fluid mt-5 col-12">
		<div class="text-center bg-light"><h1 class=" display-4">Работаем со всеми материалами</h1></div>
		<div class="container-fluid pt-2 col-10 d-flex justify-content-between flex-md-wrap flex-sm-wrap flex-wrap">
			<div class="card col-12 col-sm-5 col-lg-2 mt-3">
				<img class="card-img-top" src="/images/pathToYourImage.png" alt="Card image cap">
				<div class="card-body">
					<h4 class="card-title text-nowrap">Материалы</h4>
					<p class="card-text">
					  <p>-</p>
					  <p>-</p>
					  <p>-</p>
					</p>
					<div class="b1c-good"><div class="b1c-name">Материалы</div>
						<a href="#!" class="btn btn-primary b1c">Купить</a>
					</div>
				</div>
			</div>
			<div class="card col-12 col-sm-5 col-lg-2 mt-3">
				<img class="card-img-top" src="/images/pathToYourImage.png" alt="Card image cap">
				<div class="card-body">
					<h4 class="card-title text-nowrap">Дерево</h4>
					<p class="card-text">
					  <p>-</p>
					  <p>-</p>
					  <p>-</p>
					</p>
					<div class="b1c-good"><div class="b1c-name">Дерево</div>
						<a href="#!" class="btn btn-primary b1c">Купить</a>
					</div>
				</div>
			</div>
			<div class="card col-12 col-sm-5 col-lg-2 mt-3">
				<img class="card-img-top" src="/images/pathToYourImage.png" alt="Card image cap">
				<div class="card-body">
					<h4 class="card-title text-nowrap">Композиты</h4>
					<p class="card-text">
					  <p>-</p>
					  <p>-</p>
					  <p>-</p>
					</p>
					<div class="b1c-good"><div class="b1c-name">Композиты</div>
						<a href="#!" class="btn btn-primary b1c">Купить</a>
					</div>
				</div>
			</div>
			<div class="card col-12 col-sm-5 col-lg-2 mt-3">
				<img class="card-img-top" src="/images/pathToYourImage.png" alt="Card image cap">
				<div class="card-body">
					<h4 class="card-title text-nowrap">Полимеры</h4>
					<p class="card-text">
					  <p>-</p>
					  <p>-</p>
					  <p>-</p>
					</p>
					<div class="b1c-good"><div class="b1c-name">Полимеры</div>
						<a href="#!" class="btn btn-primary b1c">Купить</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Реквизиты-->
	<div class="container-fluid mt-5">
		<div>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-4">
					<p>ИНН 5260467572</p>
					<p>КПП 526001001</p>
					<p>ОГРН 1195275054721</p>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<p>603093, г. Н. Новгород,</p>
					<p>ул. Родионова, д. 171С, оф. 309</p>
				</div>
				<div class="col-12 text-center">
					<p>© 2021 Сейфы Эталон.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>