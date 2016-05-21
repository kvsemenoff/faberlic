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
	
	<section class="ae">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<a href="#" class="ae-link ae-link__margin"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Все продукты</a>
					<h1>Суп со шпинатом</h1>
					
					<span class="ae-span ae-span__margin">Продукт моментального приготовления</span>
					<span class="ae-span ae-span__margin ae-span__margin2">Вес: 25 гр.</span>
					
					<div class="ae-span2__margin">
						<span class="ae-span2">Базовая цена: 49 руб.</span>
					</div>
					
					<div class="ae-button__margin ae-button">
						<a href="#" class="ae-button__button">Купить</a>
					</div>
					
					<span class="ae-span ae-span__margin3">Следите за скидкам и акциями на сайте Faberlic</span>
					
					<ul>
						<li class="ae-menu ae-menu__margin">О продукте</li>
						<li class="ae-menu ae-menu__margin">Состав</li>
						<li class="ae-menu ae-menu__margin">Как применять</li>
						<li class="ae-menu ae-menu__margin">Отзывы</li>
					</ul>
				</div>
				<div class="col-md-4">
					<div class="ae-relative">
						<img class="ae-absolute ae-img" src="img/soup.png" alt="">
					</div>		
				</div>
			</div>		
		</div>
	</section>

<section class="">
	<div class="container">
		<div class="row">
			<div class="ae-center col-md-offset-2 col-md-8 col-md-offset-2">
				<span class="ae-ingrid-sostav ae-ingrid-sostav__margin">В состав супа вошли такие уникальные растительные компоненты, как шпинат и крапива.</span>
				<img class="ae-shpinat__margin" src="img/shpinat.png" alt="">
				<h2 class="ae-word__margin ae-word">-шпинат-</h2>
				<p class="ae-par__margin ae-par">Шпинат богат белками, углеводами и жирами; также шпинат содержит органические, насыщенные и ненасыщенные жирные кислоты, клетчатка, крахмал, сахара; витамины А, Е, С, Н, К, РР, много витаминов группы В, бета-каротин; кальций, магний, натрий, калий, фосфор, железо, цинк, медь, марганец, селен. Употребление шпината делает здоровее зубы и дёсны, предупреждает анемию и развитие опухолей, укрепляет кровеносные сосуды, стимулирует работу поджелудочной железы и нормализует деятельность кишечника. Шпинат особенно полезен беременным женщинам и маленьким детям, так как в нём есть почти все необходимые витамины и многие минералы. Этот овощ прекрасно усваивается, потому что в нём есть вещества, которые стимулируют деятельность слюнных и поджелудочной желёз.</p>
				<img class="ae-shpinat__margin2" src="img/krapiva.png" alt="">
				<h2 class="ae-word__margin ae-word">-Крапива-</h2>
				<p class="ae-par__margin2 ae-par">Крапива, улучшая в целом протекание всех энергетических процессов, оказывает стимулирующее действие на углеводный и белковый обмен, поэтому ее так часто рекомендуют при хронических заболеваниях, когда заметно снижается общая сопротивляемость организма. Крапива содержит секретин, который нормализует обмен веществ, стимулирует образование инсулина и тем самым ведёт к снижению количества сахара в крови, что необходимо людям, страдающим сахарным диабетом.</p>
				<span class="ae-inter__margin ae-inter">Вход в программу:</span>
				<a class="ae-button2 ae-button2__margin" href="">перезагрузка</a>
				<a class="ae-button2 ae-button2_color" href="">ускорение</a>
			</div>
		</div>		
	</div>
</section>

	<section class="ae">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="">
						<li class="ae-menu ae-menu__margin2">О продукте</li>
						<li class="ae-menu ae-menu__margin2">Состав</li>
						<li class="ae-menu ae-menu__margin2">Как применять</li>
						<li class="ae-menu ae-menu__margin2">Отзывы</li>
					</ul>
				</div>
			</div>		
		</div>
	</section>
<!-- *********************** programs.php *********************** -->

	<?php require_once('footer.php'); ?>
	

	
</body>
</html>