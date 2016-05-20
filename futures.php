
        

<section class="futures">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="future">
					<div class="futures__img-box">
						<img src="img/fut1.png" alt="">
					</div>		
					<span id="canvas" class="futures__title">-Посчитайте свой ИМТ-</span>
					<div class="futures__text">
						Расчитайте свой индекс массы 
						тела и выбирайте подходящую 
						программу
					</div>
					<a href="#" class="button-1">Посчитать</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="future">
					<div class="futures__img-box">
						<img src="img/fut2.png" alt="">
					</div>		
					<span class="futures__title">-Выберите программу-</span>
					<div class="futures__text">
						Мы подготовили 3 программы
						для разных людей и разных 
						потребностей
					</div>
					<a href="#" class="button-1">Выбрать</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="future">
					<div class="futures__img-box">
						<img src="img/fut3.png" alt="">
					</div>		
					<span class="futures__title">-Узнайте о продуктах-</span>
					<div class="futures__text">
						Полезные продукты которые 
						помогут вам управлять 
						своим весом
					</div>
					<a href="#" class="button-1">Узнать</a>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container">
			
			
			<section class="main">				
				<div id="arc-wrapper" class="arc-wrapper">
					<h3>пупу упукпу упу уп упку</h3>
					
				</div>
			</section>
			
			
        </div>
<script type="text/javascript" src="js/jquery.arctext.js"></script>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script type="text/javascript">
			
		
			var $word1		= $('#arc-wrapper').find('h3').hide();
			
			
			
			
			google.load('webfont','1');
			
			google.setOnLoadCallback(function() {
				WebFont.load({
					google		: {
						families	: ['Montserrat','Concert One']
					},
					fontactive	: function(fontFamily, fontDescription) {
						init();
					},
					fontinactive	: function(fontFamily, fontDescription) {
						init();
					}
				});
			});
			
			function init() {
			
				
					
				$word1.show().arctext();
				$word2.show().arctext({radius: -1, dir: -1});
				
				
				
			
			};
		</script/>