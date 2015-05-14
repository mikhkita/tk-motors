<?

	$types = array('alfaromeo' => array('img' => 'i/b-1/car/alfaromeo.png', 'logo' => "i/b-1/logo/alfaromeo.png", 'text' => 'Alfa Romeo','class' => 'alfa_romeo'),
			  'chevrolet' => array('img' => 'i/b-1/car/chevrolet.png', 'logo' => "i/b-1/logo/chevrolet.png", 'text' => 'Chevrolet','class' => 'chevrolet'),
			  'ford' => array('img' => 'i/b-1/car/ford.png', 'logo' => "i/b-1/logo/ford.png", 'text' => 'Ford','class' => 'ford')
			);
	$rand = rand(0,2);

	if($rand==0) {
		$type = $types['alfaromeo'];
	}
	if($rand==1) {
		$type = $types['chevrolet'];
	}
	if($rand==2) {
		$type = $types['ford'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="keywords" content=''>
	<meta name="description" content=''>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css/KitAnimate.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css" type="text/css">
	<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">

	<meta name="viewport" content="width=1000">

	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/jssor.js"></script>
	<script type="text/javascript" src="js/jssor.slider.js"></script>
	<script type="text/javascript" src="js/TweenMax.min.js"></script>
	<script type="text/javascript" src="js/swipe.js"></script>
	<script type="text/javascript" src="js/carousel.lite.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/KitProgress.js"></script>
	<script type="text/javascript" src="js/KitAnimate.js"></script>
	<script type="text/javascript" src="js/device.js"></script>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</head>
<body>
	<ul class="ps-lines">
		<li class="v" style="margin-left:-591px"></li>
		<li class="v" style="margin-left:590px"></li>
		<li class="v" ></li>
	</ul>
	<div class="b b-1">
		<div class="b-video-cont">
			<video class="b-video" poster="i/b-1/video.jpg" autoplay loop muted id="bgvideo">
		   		<source src="video/5.mp4" type="video/mp4"></source>
		  	</video>
		</div>
		<div class="b-back">
		 	<div class="b-block">
		 		<div class="head clearfix">
		 			<img src="i/b-1/motors.png">
		 			<p>Немецкий чип-тюнинг 
					   с гарантией результата 
					   в Москве
					</p>
					<div class="clearfix right tel">
						<h2>Есть вопрос? Звоните - поможем!</h2>
						<div class="clearfix">
							<img class="left" src="i/b-1/tel.png">
							<h3 class="right">+7 (499) 399 3509</h3>
						</div>
						<a href="#" class="fancy" data-block="#callback">Заказать звонок</a>
					</div>
		 		</div>
		 		<div class="content">
		 			<p>Сделайте ваш <b><?=$type['text']?></b><br>
					мощнее на <b>32%</b> за <b>20</b> минут</p>
					<h2>Вернем деньги, если не почувствуете результат</h2>
		 		</div>
		 		<div class="clearfix bot">
		 			<div class="left">
		 				<div class="car">
		 					<h2>С сохранением дилерской гарантии</h2>
		 					<p>Современный немецкий чип-тюнинг блок + усилитель педали газа раскроет заложенные производителем мощности автомобиля.</p>
		 				</div>
		 				<img class="<?=$type['class']?>" src="<?=$type['img']?>">
		 			</div>
					
					<div class="clearfix right typecar">
						<div class="clearfix">
							<h2 class="left">Получите 4 варианта чип тюнинга <?=$type['text']?><br>прямо сейчас!</h2>
							<img class="right <?=$type['class']?>" src="<?=$type['logo']?>">
						</div>
						<form action="kitsend.php" method="post" data-block="#b-popup-2">
							<select name="1" data-brand="<?=$type['class']?>" required>
							 	<option value="" disabled selected>Марка вашего автомобиля</option>
							    <option value="alfa_romeo">Alfa Romeo</option>
							    <option value="chevrolet">Chevrolet</option>
							    <option value="ford">Ford</option>
						   	</select>
						   	<input type="hidden" name="1-name" value="Марка"/>
						   	<select name="2" required>
							    <option value="" disabled selected>Модель</option>
						   	</select>
						   	<input type="hidden" name="2-name" value="Модель"/>
						   	<select name="3" required>
							    <option value="" disabled selected>Двигатель</option>
						   	</select>
						   	<input type="hidden" name="3-name" value="Двигатель"/>
							<input type="text" name="phone" placeholder="Введите ваш телефон" required>

							<input type="hidden" name="subject" value="Заявка на чип-тюнинг"/>
							<input type="submit" class="b-green-button ajax" value="Получить 4 варианта чип тюнинга!">
						</form>
						<p>Сегодня рассчитали уже <b>132</b> варианта чип-тюнинга</p>
					</div>
		 				 			
		 		</div>
		 	</div>
		 </div>
	</div>
	<div class="b b-2">
		<div class="clearfix b-block">
			<img class="lock left" src="i/lock.png">
			<p class="left">Для продолжения заполните форму</p>
			<img class="arrow left" src="i/b-1/arrow.png">
		</div>
	</div>
	
	<div style="display:none;">
		<div id="callback">
			<div class="b-popup">
				<div class="clearfix">
					<h2>Заказать обратный звонок</h2>
				</div>
				<form action="kitsend.php" method="post" data-block="#b-popup-2">
					<input type="text" name="name" placeholder="Введите ваше имя" required>
					<input type="text" name="phone" placeholder="Введите ваш телефон" required>
					<input type="hidden" name="subject" value="Обратный звонок"/>
					<input type="submit" class="b-green-button ajax" value="Заказать звонок">
				</form>
				<!-- <p>Сегодня рассчитали уже <b>132</b> варианта чип-тюнинга</p> -->
			</div>
		</div>
		<div id="b-popup-2">
			<div class="b-thanks b-popup">
				<h2>Спасибо!</h2>
				<p>Ваша заявка успешно отправлена.<br/>Наш менеджер свяжется с Вами в течение часа.</p>
				<input type="submit" class="b-green-button" onclick="$.fancybox.close(); return false;" value="Закрыть">
			</div>
		</div>
		<div id="b-popup-error">
			<div class="b-thanks b-popup">
				<h2>Ошибка отправки!</h2>
				<p>Приносим свои извинения. Пожалуйста, попробуйте отправить Вашу заявку позже.</p>
				<input type="submit" class="b-green-button" onclick="$.fancybox.close(); return false;" value="Закрыть">
			</div>
		</div>
	</div>
</body>
</html>