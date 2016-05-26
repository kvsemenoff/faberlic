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
	<?php require_once('header_middle.php'); ?>
	<?php require_once('futures.php'); ?>
	<?php require_once('footer.php'); ?>

	<!-- *********************** IMT *********************** -->
	<div class="ac-wrapper-mod-window">	
		<section class="mod-window-top">
			<div class="container">
				<div class="row">
					<img src="img/calc-mod.png" alt="calc-mod" class="ac-people-calc">
					<span class="ac-people-span4">Рассчитайте свой Индекс Массы Тела и узнайте, находится ли ваш вес в пределах нормы!</span>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<p class="ac-people-text acp-text">Индекс Массы Тела (ИМТ) показывает степень соответствия веса человека и его роста, позволяя оценить приблизительно нормальный вес у человека определенного роста. Этот показатель считается более достоверным, чем отдельно взятое значение веса.</p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<p class="ac-people-text acp-text">Однако ИМТ не учитывает многих особенностей тела человека – например, люди, активно занимающиеся спортом, могут получить завышенное значение из-за большой мышечной массы. Поэтому результат ИМТ является не более чем рекомендацией и основой для понимания своего веса и дальнейшего прогресса.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="mod-window-middle">
			<div class="ac-form-box">
				<!-- <div class="ac-people">
					<span class="ac-form-index-text">Ваш пол</span>
			        <ul class="ac-people-list">
			            <li class="ac-people-woman active"></li>
			            <li class="ac-people-man"></li>
			        </ul>
			    </div> -->
		        <div class="ac-form-element">
					<span class="ac-form-index-text">Ваш вес (кг)</span>
					<input type="text" name="text" placeholder="54" class="ac-form-index-input">
				</div>
				<div class="ac-form-element">
					<span class="ac-form-index-text">Ваш рост (см)</span>
					<input type="text" name="uname" placeholder="172" class="ac-form-index-input">
				</div>
				<div class="ac-form-button-box">
					<input type="submit" class="ac-form-button" id="" value="РАСЧИТАТЬ">
				</div>
	       </div>
	    </section>
	    <section class="mod-window-bottom">
	       <div class="ac-calc-box">
				<div class="ac-form-result">
					<span class="ac-people-span2">- 25 -</span>
					<span class="ac-people-span3">ЛИШНИЙ ВЕС</span>
					<p class="ac-people-text">Значение ИМТ в диапазоне 25 до 29,99 определяет наличие лишнего веса. Этот показатель – первый признак того, что вам необходимо задуматься о своем весе. Начните правильно питаться, постарайтесь снизить потребление сахара и повысить физическую активность. Снижение веса хорошо отразится не только на вашей внешности, но и улучшит ваше самочувствие. С продуктами Faberlic перестроить организм на сбалансированное питание проще, чем кажется!</p>
					<div class="ac-soc-buttons">
						<ul class="ac-soc-buttons-list">
							<li><a href="#" class="ac-odn"><img src="img/mw-odnok.png" alt="mw-odnok"></a></li>
							<li><a href="#" class="ac-vk"><img src="img/mw-vk.png" alt="mw-vk"></a></li>
							<li><a href="#" class="ac-fc"><img src="img/mw-fc.png" alt="mw-fc"></a></li>
							<li><a href="#" class="ac-mail"><img src="img/mw-mail.png" alt="mw-mail"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- *********************** IMT *********************** -->

	
</body>
</html>