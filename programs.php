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
	
<!-- *********************** header_middle ***********************-->
	<section class="header_middle">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-6 col-xs-12">
					<div class="header_middle-left">
						<span class="header_middle-span1 header_middle-span1__programs">Программы</span>
						<p class="header_middle-span3 header_middle-span3__programs">
							Все люди разные и у всех разные потребности в коррекции веса – кому-то нужно кардинально поменять себя, а кому-то достаточно просто поддерживать себя в форме. Для этого мы разработали 3 программы Управления весом для разных людей и разных потребностей
						</p>
					</div>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12">
					<div class="header_middle-right">
						<img src="img/program-girl-top.png" alt="program-girl-top" class="header_middle-women header_middle-women__programs">
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- *********************** header_middle ***********************-->
<div class="program-cell">
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
</div>
<div class="program-cell program-cell1">
	<div class="program_item program_item1">
		<div class="program_item__img-box">
			<img src="img/program-img1.png" alt="program-img1" class="program_item__imgtop">
		</div>
		<div class="program_item__title">Ускорение</div>
		<div class="program_item__subtitle">интенсивная программа</div>
		<div class="program_item__text">Для тех, кто хочет получить быстрый результат и готов активно работать над собой</div>
		<div class="program_item__girl">
			<img src="img/tetka.png" alt="tetka" class="program_item__girl-img1">
		</div>
		<div class="program_item-button"></div>  <!-- Указать существующий класс кнопки -->
	</div>
</div>
<div class="program-cell program-cell2">
	<div class="program_item program_item2">
		<div class="program_item__img-box">
			<img src="img/program-img2.png" alt="program-img2" class="program_item__imgtop">
		</div>
		<div class="program_item__title">Разгрузочный день</div>
		<div class="program_item__subtitle">Периодическая программа</div>
		<div class="program_item__text">Для тех, кто доволен своим весом, но иногда хочет избавиться от чувства тяжести</div>
		<div class="program_item__girl">
			<img src="img/program-girl1.png" alt="program-girl1" class="program_item__girl-img2">
		</div>
		<div class="program_item-button"></div>  <!-- Указать существующий класс кнопки -->
	</div>
</div>
<a href="#" class="program_item-link">Подбери себе программу</a>
<!-- *********************** programs.php *********************** -->

	<?php require_once('footer.php'); ?>
	

	
</body>
</html>