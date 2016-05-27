<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Программы</title>
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

	<script src="js/responsiveTabs.js"></script>
	<script src="js/common.js"></script>
	<script>


		$(document).ready(function(){
			//alert(1);
			var acProgram = new Array(8);
			var acStep = 1;

			var ac_row_link = $('.ac-row_link');
			var ac_left_arrow = $('.ac-circle-left img');
			var ac_right_arrow = $('.ac-circle-right img');
			var ac_question = $('.ac-question');
			var program_item_pinklink = $('.program_item-pinklink');
			var header_middle_span4__programs = $('.header_middle-span4__programs');
			var program_cell = $('.program-cell');
			acClear = function(){ac_row_link.removeClass('ac-row_link-hover');}
			acRecall = function(){
				acClear();
				$('.ac-row_link[datanumber=' + acProgram[acStep-1] + ']').addClass('ac-row_link-hover');
			}
			isFull = function(){
				for (var i = 0; i < acProgram.length; i++){
					if (isNaN(acProgram[i])){return false;}
				}
				return true;
			}
			summ = function(){
				var n = 0;
				for (var i = 0; i < acProgram.length; i++){
					n += parseInt(acProgram[i]);
				}
				return n;
			}
			hideBlocks = function(){
				program_item_pinklink.addClass('ae-dispnone');
				header_middle_span4__programs.addClass('ae-dispnone');
				program_cell.addClass('ae-dispnone');
			}

			ac_right_arrow.click(function(){
				if (acStep < acProgram.length){
					acStep++;
					ac_question.eq(acStep-1).removeClass('ae-dispnone').prev().addClass('ae-dispnone');
					$('.ac-list__item-active').removeClass('ac-list__item-active').next().addClass('ac-list__item-active');
					acRecall();
					if (acStep == acProgram.length){
						ac_right_arrow.addClass('ae-dispnone');
					} else {
						ac_left_arrow.removeClass('ae-dispnone');
					}
				}
			});
			ac_left_arrow.click(function(){
				if (acStep > 1){
					acStep--;
					ac_question.eq(acStep-1).removeClass('ae-dispnone').next().addClass('ae-dispnone');
					$('.ac-list__item-active').removeClass('ac-list__item-active').prev().addClass('ac-list__item-active');
					acRecall();
					if (acStep == 1){
						ac_left_arrow.addClass('ae-dispnone');
					} else {
						ac_right_arrow.removeClass('ae-dispnone');
					}

				}
			});
			ac_row_link.click(function(){
			 	acClear();
			 	acProgram[acStep-1]=$(this).attr('datanumber');
			 	$(this).addClass('ac-row_link-hover');
			 	if (isFull()){
			 		var acSumm = summ();
			 		$('.ac-block1').slideUp('fast');
			 		hideBlocks();
			 		//$('.ac-block1').removeClass('ae-dispnone');
			 		if (acSumm >= 8 && acSumm <= 13){
						program_item_pinklink.eq(0).removeClass('ae-dispnone');
						header_middle_span4__programs.eq(0).removeClass('ae-dispnone');
						program_cell.eq(0).removeClass('ae-dispnone');
						program_cell.eq(2).removeClass('ae-dispnone');
			 		}else if(acSumm >= 14 && acSumm <= 17){
			 			program_item_pinklink.eq(2).removeClass('ae-dispnone');
						header_middle_span4__programs.eq(1).removeClass('ae-dispnone');
						program_cell.eq(0).removeClass('ae-dispnone');
						program_cell.eq(1).removeClass('ae-dispnone');
			 		}else if(acSumm >= 18 && acSumm <= 24){
			 			program_item_pinklink.eq(0).removeClass('ae-dispnone');
						header_middle_span4__programs.eq(2).removeClass('ae-dispnone');
						program_cell.eq(1).removeClass('ae-dispnone');
						program_cell.eq(2).removeClass('ae-dispnone');
			 		}else if(acSumm >= 25 && acSumm <= 28){
			 			program_item_pinklink.eq(1).removeClass('ae-dispnone');
						header_middle_span4__programs.eq(3).removeClass('ae-dispnone');
						program_cell.eq(0).removeClass('ae-dispnone');
						program_cell.eq(2).removeClass('ae-dispnone');
			 		}
			 		$('.ac-block1').slideDown('fast');
			 	}
			});
			

		});
	</script>


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
				<a href="#" class="program_item-link">Подбери себе программу
					<span>
						<i class="fa fa-long-arrow-down program_item-link-icon" aria-hidden="true"></i>
					</span>
				</a>
			</div>
		</div>
	</section>
<!-- *********************** header_middle ***********************-->

<!-- *********************** middle-box ***********************-->

<section  id="justID" class="ac-additional-block">
	<div class="container">
		<div class="ac-additional-borderbox">
			<img src="img/question.png" alt="question" class="ac-borderbox-img">
			<span class="ac-borderbox-span">Пройдите тест и подберите Программу Управления весом специально для вас!</span>
			<ul class="ac-list">
				<li class="ac-list__item ac-list__item-active">1</li>
				<li class="ac-list__item">2</li>
				<li class="ac-list__item">3</li>
				<li class="ac-list__item">4</li>
				<li class="ac-list__item">5</li>
				<li class="ac-list__item">6</li>
				<li class="ac-list__item">7</li>
				<li class="ac-list__item">8</li>
			</ul>
		</div>
		<div class="row ac-row-block">
			<div class="col-md-2 ac-row-block1">
				<a href="#justID" class="ac-circle-left"><img class="ae-dispnone" src="img/arrow-in-circle-left.png" alt="arrow-in-circle-left"></a>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12 ac-row-block2">
				
				<div class="ac-question">
					<span class="ac-row_span">Какой ваш Индекс массы тела?</span>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="1"><span class="ac-link-span"><span class="ac-link-img"></span>ИМТ < 18,5 </span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="2"><span class="ac-link-img"></span><span class="ac-link-span">ИМТ 18,5 - 24,99 </span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="3"><span class="ac-link-img"></span><span class="ac-link-span">ИМТ 25 - 29,99</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="4"><span class="ac-link-img"></span><span class="ac-link-span">ИМТ > 30 </span></a>
					</div>
				</div>

				<div class="ac-question ae-dispnone">
					<span class="ac-row_span">Как вы оцениваете ваш вес?</span>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="4"><span class="ac-link-span"><span class="ac-link-img"></span>Я вешу намного больше, чем хотелось бы</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="3"><span class="ac-link-img"></span><span class="ac-link-span">Я вешу немного больше, чем хотелось бы</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="2"><span class="ac-link-img"></span><span class="ac-link-span">Меня устраивает свой вес</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="1"><span class="ac-link-img"></span><span class="ac-link-span">Я вешу меньше, чем хотелось бы</span></a>
					</div>
				</div>

				<div class="ac-question ae-dispnone">
					<span class="ac-row_span">Как часто вы принимаете пищу?</span>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="1"><span class="ac-link-span"><span class="ac-link-img"></span>1-2 раза в день</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="3"><span class="ac-link-img"></span><span class="ac-link-span">3-4 раз в день</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="2"><span class="ac-link-img"></span><span class="ac-link-span">5-6 раз в день</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="4"><span class="ac-link-img"></span><span class="ac-link-span">7 и более раз в день</span></a>
					</div>
				</div>

				<div class="ac-question ae-dispnone">
					<span class="ac-row_span">Какие блюда вы употребляете чаще всего в течение дня?</span>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="4"><span class="ac-link-span"><span class="ac-link-img"></span>Бутерброды и фастфуд</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="1"><span class="ac-link-img"></span><span class="ac-link-span">Овощные блюда</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="3"><span class="ac-link-img"></span><span class="ac-link-span">Жареные полуфабрикаты</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="2"><span class="ac-link-img"></span><span class="ac-link-span">Запеченные или приготовленные на пару блюда</span></a>
					</div>
				</div>

				<div class="ac-question ae-dispnone">
					<span class="ac-row_span">Как часто вы ощущаете, что переели/чувство тяжести?</span>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="4"><span class="ac-link-span"><span class="ac-link-img"></span>Регулярно, я часто не могу остановиться и съедаю больше, чем нужно</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="3"><span class="ac-link-img"></span><span class="ac-link-span">Иногда, когда ощущаю сильный голод</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="2"><span class="ac-link-img"></span><span class="ac-link-span">Редко, только после большого застолья</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="1"><span class="ac-link-img"></span><span class="ac-link-span">Практически никогда</span></a>
					</div>
				</div>

				<div class="ac-question ae-dispnone">
					<span class="ac-row_span">Любите ли вы сладкое?</span>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="4"><span class="ac-link-span"><span class="ac-link-img"></span>Да, просто жить без него не могу!</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="3"><span class="ac-link-img"></span><span class="ac-link-span">В принципе да, хотя могу и без него обойтись</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="2"><span class="ac-link-img"></span><span class="ac-link-span">Не особенно, но иногда могу съесть кусочек</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="1"><span class="ac-link-img"></span><span class="ac-link-span">Нет, не люблю</span></a>
					</div>
				</div>

                <div class="ac-question ae-dispnone">
                    <span class="ac-row_span">Занимаетесь ли вы спортом/физическими нагрузками?</span>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <a href="#justID" class="ac-row_link" datanumber="4"><span class="ac-link-span"><span class="ac-link-img"></span>Как минимум 2-3 раза в неделю хожу в спортзал</span></a>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <a href="#justID" class="ac-row_link" datanumber="3"><span class="ac-link-img"></span><span class="ac-link-span">Иногда делаю зарядку и бегаю в парке</span></a>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <a href="#justID" class="ac-row_link" datanumber="2"><span class="ac-link-img"></span><span class="ac-link-span">Нет, у меня нет на это времени и сил</span></a>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <a href="#justID" class="ac-row_link" datanumber="1"><span class="ac-link-img"></span><span class="ac-link-span">Нет, не считаю, что мне это нужно</span></a>
                    </div>
                </div>

				<div class="ac-question ae-dispnone">
					<span class="ac-row_span">Каких целей в коррекции веса вы хотели бы достичь?</span>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="1"><span class="ac-link-span"><span class="ac-link-img"></span>Постепенно снизить вес, питаясь полноценно</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="2"><span class="ac-link-img"></span><span class="ac-link-span">Быстро сбросить несколько килограммов, даже если придется себя ограничивать</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="3"><span class="ac-link-img"></span><span class="ac-link-span">Перестроить привычки питания и привести вес в норму</span></a>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#justID" class="ac-row_link" datanumber="4"><span class="ac-link-img"></span><span class="ac-link-span">Поддержать существующий вес и периодически дать организму передышку</span></a>
					</div>
				</div>

				
			</div>
			<div class="col-md-2 ac-row-block3">
				<a href="#justID" class="ac-circle-right"><img src="img/arrow-in-circle-right.png" alt="arrow-in-circle-right"></a>
			</div>
		</div>
	</div>
</section>

<section class="ac-block1 ae-dispnone">
	<div class="container">
		<div class="row ac-row-block">
			<div class="col-md-2 ac-row-block1">
				<!-- <a href="#" class="ac-circle-left"><img src="img/arrow-in-circle-left.png" alt="arrow-in-circle-left"></a> -->
			</div>
			<div class="col-md-8 ac-block2">
				<span class="ac-row_span ac-span">Мы рекомендуем вам попробовать программу: </span>
				<a href="#" class="program_item-pinklink ae-dispnone">Перезагрузка</a>
				<a href="#" class="program_item-pinklink program_item-pinklink_style3 ae-dispnone">Ускорение</a>
				<a href="#" class="program_item-pinklink program_item-pinklink_style2 ae-dispnone">Разгрузочный день</a>
				
				<p class="header_middle-span4__programs ae-dispnone">Несмотря на то, что скорее всего у вас нет лишнего веса, ваше питание не слишком сбалансированно. Поэтому вам может не хватать многих питательных элементов, часто можете чувствовать упадок сил и отсутствие тонуса. Перезагрузка организма на правильный рацион, богатый необходимыми макронутриентами, витаминами и минералами, позволит вам улучшить свое самочувствие и почувствовать себя готовыми к любым свершениям.</p>
				<p class="header_middle-span4__programs ae-dispnone">Скорее всего вы вполне довольны своим весом, вы регулярно питаетесь и ведете активный образ жизни. Но организму надо периодически давать передышку, чтобы он продолжал работать как часы. Периодические разгрузочные дни позволят избавиться от ощущения тяжести и очистить организм, при этом не лишая его необходимых питательных элементов.</p>
				<p class="header_middle-span4__programs ae-dispnone">Вероятнее всего, у вас есть лишний вес, от которого вы хотели бы избавиться. И начать необходимо с перестройки вашего рациона без стресса для организма – 5-разовое питание полезными блюдами вместо вредных жиров и сахара. Постепенно лишние килограммы уйдут, а самочувствие улучшится. А главное, появится привычка правильно питаться, так что проблема лишнего веса навсегда останется в прошлом.</p>
				<p class="header_middle-span4__programs ae-dispnone">Судя по всему, у вас есть лишний вес, и начинать работу над собой необходимо как можно скорее. Снижение веса не только хорошо повлияет на ваш внешний вид, но и значительно улучшит самочувствие. Комбинированная программа, чередующая полноценное 5-разовое питание и разгрузочные дни, поможет вам добиться ускоренных результатов.</p>

			</div>
			<div class="col-md-2 ac-row-block1">
				<!-- <a href="#" class="ac-circle-right"><img src="img/arrow-in-circle-right.png" alt="arrow-in-circle-right"></a> -->
			</div>	
		</div>
	</div>
</section>

<!-- *********************** middle-box ***********************-->

<div class="program-cell ae-dispnone">
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
<div class="program-cell program-cell1 ae-dispnone">
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
<div class="program-cell program-cell2 ae-dispnone">
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

<div class="clearfix"></div>

<!-- *********************** programs.php *********************** -->

	<?php require_once('footer.php'); ?>
	

	
</body>
</html>