<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная страница</title>
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="css/style3.css">

	<link rel="stylesheet" href="css/fonts.css">

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	
	
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="libs/wow/animate.css">
	<meta content="telephone=no" name="format-detection"/>
</head>
<body>
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/owl.carousel/owl.carousel.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="libs/wow/wow.min.js"></script>

	<script>
    	new WOW().init();
    </script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/common.js"></script>

	<?php require_once('header_top.php'); ?>

<!-- *********************** programs.php *********************** -->
	
	<div class="program_item">
		<div class="program_item__img-box">
			<img src="img/program-img.png" alt="program-img" class="program_item__imgtop">
		</div>
		<div class="program_item__title">Перезагрузка</div>
		<div class="program_item__subtitle">классическая программа</div>
		<div class="program_item__text">Для тех, кто хочет долговременного эффекта и готов изменить свои привычки питания</div>
		<div class="program_item__girl">
			<img src="img/program-girl.png" alt="program-girl" class="program_item__girl-img">
		</div>
		<div class="program_item-button"></div>  <!-- Указать существующий класс кнопки -->
	</div>
	
<!-- *********************** programs.php *********************** -->

	<?php require_once('footer.php'); ?>
	

	
</body>
</html>