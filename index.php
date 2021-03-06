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
		<li class="v" style="margin-left:-501px"></li>
		<li class="v" style="margin-left:500px"></li>
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
		 			<p>Сделайте ваш <b><?=$type['text']?></b> мощнее<br>на <b>32%</b> за <b>20</b> минут</p>
					<h2>Вернем деньги, если не почувствуете результат</h2>
		 		</div>
		 		<div class="clearfix bot">
		 			<div class="car-wrap left">
		 				<div class="car">
		 					<h2>С сохранением дилерской гарантии</h2>
		 					<p>Современный немецкий чип-тюнинг блок + усилитель педали газа раскроет заложенные производителем мощности автомобиля.</p>
		 				</div>
		 				<img class="<?=$type['class']?>" src="<?=$type['img']?>">
		 			</div>
					
					<div class="clearfix right typecar">
						<div>
							<div class="tc">
								<h2>Получите 4 варианта чип тюнинга <?=$type['text']?> прямо сейчас!</h2>
							</div>
							<div class="tc">
								<img class="<?=$type['class']?>" src="<?=$type['logo']?>">
							</div>
						</div>
						<form action="kitsend.php" method="post" data-block="#b-popup-2">
							<select name="1" data-brand="<?=$type['class']?>" required>
							 	<option value="" disabled selected>Марка</option>
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
		 		<div class="sale-cont">
		 			<img src="i/b-1/triangle.png">
		 			<div class="sale clearfix">
		 				<img class="left" src="i/b-1/key.png">
		 				<div class="left">
			 				<h2>Акция!</h2>
			 				<h3>При заявке до 29 мая монтаж - в подарок!</h3>
		 				</div>
		 			</div>
		 		</div>
		 	</div>
		 </div>
	</div>
	<div class="b b-1-1">
		<div class="clearfix b-block">
			<div>
				<img class="lock left" src="i/lock.png">
				<p class="left">Для продолжения заполните форму</p>
			</div>
			<!-- <img class="arrow left" src="i/b-1/arrow.png"> -->
		</div>
	</div>
	<div class="b b-3">
		 <div class="b-block">
		 	<h2>Представьте, что Ваш автомобиль
		 	срывается с места, как только<br> Вы нажали на педаль</h2>
		 	<div class="clearfix">
			 	<div class="describe left">
			 		<p>Двойное ускорение: <b>Усилитель педали газа +
					блок увеличения мощности</b></p>
					<img class="arrow-1" src="i/b-2/arrow-1.png">
					<img class="arrow-2" src="i/b-2/arrow-2.png">
			 	</div>
			 	<ul class="left">
			 		<li class="clearfix">
			 			<div class="part left"></div>
			 			<div class="left">
				 			<h3>Легкий и мощный старт</h3>
				 			<p>Усилитель педали газа снимает
							"врожденную" задержку<br>
							при нажатии</p>
						</div>
			 		</li>
			 		<li class="clearfix">
			 			<div class="part left"></div>
			 			<div class="left">
				 			<h3>До +32% к лошадиным силам<br> 
							и крутящему моменту</h3>
				 			<p>чип-тюнинг блок подает более богатую
							топливную смесь в моменты<br>
							интенсивной работы двигателя</p>
				 		</div>
			 		</li>
			 	</ul>
			 </div>
		 </div>
	</div>
	<div class="b b-4">
		<div class="b-block">
			<div class="triangle"><a href="#"></a></div>
			<h2>Ощутимый прирост мощности</h2>
			<h3>Чип-тюнинг - это новые впечатления от вождения</h3>
			<ul>
				<li class="clearfix">
					<div class="left"></div>
					<p class="left">Резкое ускорение на старте. 
					На низких оборотах двигатель реагирует на педаль <b>в 2 
					раза быстрее</b></p>
				</li>
				<li class="clearfix">
					<div class="left"></div>
					<p class="left">АКПП принимает
					решение <b>на 19% быстрее</b> при<br> переключении передачи</p>
				</li>
				<li class="clearfix">
					<div class="left"></div>
					<p class="left">Эффект непрерывного
					разгона без провалов<br> при переключении передач</p>
				</li>
					<li class="clearfix">
					<div class="left"></div>
					<p class="left">Снижение расхода топлива <b>до 2л<br> на 100км</b> передач </p>
				</li>
			</ul>
		</div>
	</div>
	<div class="b b-5">
		<div class="b-block">
			<a class="b-green-butt" href="#">Рассчитать прибавку мощности для Вашего %Марка авто%</a>
			<h2>Абсолютно безопасно для двигателя</h2>
			<h3>Никакого дополнительного износа. Узнайте, как работает чип-тюнинг</h3>
			<div class="content clearfix">
				<div class="b-form typecar left">
					<p>Выберите Ваше авто:</p>
					<form action="kitsend.php" method="post" data-block="#b-popup-2">
						<select name="1" data-brand="<?=$type['class']?>" required>
						 	<option value="" disabled selected>Alfa Romeo</option>
						    <option value="alfa_romeo">Alfa Romeo</option>
						    <option value="chevrolet">Chevrolet</option>
						    <option value="ford">Ford</option>
					   	</select>
					   	<input type="hidden" name="1-name" value="Марка"/>
					   	<select name="2" required>
						    <option value="" disabled selected>Alfa Romeo</option>
					   	</select>
					   	<input type="hidden" name="2-name" value="Модель"/>
					   	<select name="3" required>
						    <option value="" disabled selected>Alfa Romeo</option>
					   	</select>
					   	<input type="hidden" name="3-name" value="Двигатель"/>

						<input type="hidden" name="subject" value="Заявка на чип-тюнинг"/>
						<input type="submit" class="b-blue-button ajax" value="Попробовать!">
					</form>
				</div>
				<div class="b-tuning left">
					<h3>ЧИП-ТЮНИНГ:</h3>
					<div class="on clearfix">
						<p class="left">on</p>
						<div class="left"></div>
					</div>
				</div>
				<ul class="describe left">
					<li>
						<p>После чип-тюнинга:</p>
					</li>
					<li>
						<p>Мощность:</p>
					</li>
					<li>
						<b>выберите марку</b>
					</li>
					<li>
						<p>Крутящий момент:</p>
					</li>
					<li>
						<b>Выберите модель</b>
					</li>
					<li>
						<p>Расход:</p>
					</li>
					<li>
						<b>Выберите двигатель</b>
					</li>
				</ul>
				<ul class="advantages left">
					<li class="clearfix">
						<img class="left" src="i/b-4/check.png">
						<p class="left">Резкое ускорение на старте.</p>
					</li>
					<li class="clearfix">
						<img class="left" src="i/b-4/check.png">
						<p class="left">АКПП принимает решение<br>на 19% быстрее </p>
					</li>
					<li class="clearfix">
						<img class="left" src="i/b-4/check.png">
						<p class="left">+25 км/ч максимальная скорость </p>
					</li>
					<li class="clearfix">
						<img class="left" src="i/b-4/check.png">
						<p class="left">Эффект непрерывного разгона без </p>
					</li>
				</ul>
			</div>
			<img class="car" src="i/b-4/car.png">
		</div>
	</div>
	<div class="b b-6">
		<div class="b-block clearfix">
			<div class="radio left">
			    <input id="male" type="radio" name="block" value="with">
			    <label for="male">С блоком</label>
			    <input id="female" type="radio" name="block" value="without">
			    <label for="female">Без блока</label>
			</div>
			<div class="left">
				<ul class="steps clearfix">
					<li class="step left">
						<div class="clearfix">
							<div class="clearfix top left">
								<h3 class="left">1</h3>
								<p class="left">При сильном<br> нажатии на<br> педаль</p>
								<img class="arrow" src="i/b-5/arrow-1.png">
							</div>
							<div class="pedalt left"></div>
						</div>
					</li>
					<li class="step left">
						<div class="clearfix">
							<div class="clearfix top">
								<h3 class="left">2</h3>
								<p class="left">Сигнал поступает<br> в блок</p>
								<img class="arrow" src="i/b-5/arrow-2.png">
							</div>
						</div>
					</li>
					<li class="step left">
						<div class="clearfix">
							<div class="clearfix top">
								<h3 class="left">3</h3>
								<p class="left">Блок оптимизирует сигнал</p>
								<img class="arrow" src="i/b-5/arrow-3.png">
							</div>
							<div class="b-orange-border left">
								<div class="text">
									<p>Внутри<br> программа<br> под Ваше авто</p>
								</div>
							</div>
						</div>
					</li>
					<li class="step left">
						<div class="clearfix">
							<div class="clearfix top">
								<h3 class="left">4</h3>
								<p class="left">ЭБУ выбирает<br>более мощный<br>режим</p>
								<img class="arrow" src="i/b-5/arrow-4.png">
							</div>
							<div class="b-orange-border left">
								<ul class="b-profile">
									<li>
										<a href="#">Задушенный режим</a>
									</li>
									<li>
										<a href="#">Мощный режим</a>
									</li>
									<li>
										<a href="">ЭБУ Вашего авто</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="step left">
						<div class="clearfix">
							<div class="clearfix top">
								<h3 class="left">5</h3>
								<p class="left">Результат</p>
							</div>
							<div class="b-orange-border">
								<ul class="characteristics">
									<li class="clearfix">
										<p>Мощность:</p>
									</li>
									<li class="clearfix">
										<img class="left" src="i/b-5/mini-1.png">
										<p>177 л.с +23% </p>
									</li>
									<li class="clearfix">
										<p>Крутящий момент: </p>
									</li>
									<li class="clearfix">
										<img class="left" src="i/b-5/mini-1.png">
										<p>144 Нм +19%  </p>
									</li>
									<li class="clearfix">
										<p>Расход  </p>
									</li>
									<li class="clearfix">
										<img class="left" src="i/b-5/mini-2.png">
										<p>11л/100км -11%</p>
									</li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="b b-7">
		<div class="b-block">
			<h2>Чип-блок даёт автомобилю использовать 
			мощностные режимы, недоступные<br>
			в обычных условиях.</h2>
			<p>На износ это никак не влияет, так как эти режимы уже заложены производителем<br> 
			в родном ЭБУ (электронном блоке управления). Он не может навредить автомобилю 
			программно. И работает в рамках, заложенных производителем</p>
			<div class="graph">
				<div>
					<p><b>Работа чипа на примере
					Toyota Land Cruiser (J20)</b>
					4461 cм2, 173кВ, 613 Нм</p>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-8">
		<div class="b-block">
			<ul>
				<li>
					<img src="i/b-7/1.png">
					<h2>Возможность возврата к заводским<br> 
					настройкам в любой момент</h2>
					<p>Достаточно просто отсоединить блок</p>
				</li>
				<li>
					<img src="i/b-7/2.png">
					<h2>Сохраняется дилерская гарантия</h2>
					<p>Чип-тюнинг безопасен и вносит легко обратимые изменения</p>
				</li>
				<li>
					<img src="i/b-7/3.png">
					<h2>Экономия на страховке и налогах</h2>
					<p>Мощность увеличилась, а платежи остались прежними</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="b b-9">
		<div class="b-block">
			<h2>Первое поколение чип-блоков было 
			разработано в 1995 году в Германии.  
			</h2>
			<p>За 20 лет они были сильно модернизированы и обрели огромную популярность:<br> 
			21 000 продаж в месяц в 37 странах мира!</p>
		</div>
	</div>
	<div class="b b-10 clearfix">
		<a class="triangle" href="#"></a>
		<div class="left-block">
			<div class="b-content-left">
				<h2>Совершенная немецкая<br> электроника
				обрабатывает 8 млн<br> операций в секунду</h2>
				<div class="chip"></div>
				<p><b>Чип-блоки сертифицированы</b> как<br> дополнительно
				оборудование для %марка автомобиля%</p>
				<h4>Сохраняется дилерская гарантия</h4>
				<ul class="clearfix">
					<li class="left">
						<a href="#"><img src="i/b-9/zerf.png"></a>
						<p>Немецкий сертификат качества TUV	</p>
					</li>
					<li class="left">
						<a href="#"><img src="i/b-9/zerf.png"></a>
						<p>ГОСТ 5812-11	</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="right-block">
			<div class="b-content-right">
				<h2>1 индивидуальная программа на<br> каждый двигатель</h2>
				<p><b>Более 5000</b> программ разработаны и<br> протестированы
				индивидуально под<br> каждую модель автомобиля</p>
				<div class="chip-2"></div>
				<p>Легкая установка - <b>оригинальные штекеры</b><br> %марка автомобиля%<br>
				Монтаж сводится к одному щелчку</p>
				<div class="cabel"></div>
			</div>
		</div>
	</div>
	<div class="b b-11">
		<div class="b-block">
			<div class="b-black-form b-11-form">
				<h3>Рассчитайте прирост мощности и крутящего
				момента для Вашего %марка авто% прямо сейчас</h3>
				<div class="b-form typecar">
					<form action="kitsend.php" method="post" data-block="#b-popup-2">
						<select name="1" data-brand="<?=$type['class']?>" required>
						 	<option value="" disabled selected>Alfa Romeo</option>
						    <option value="alfa_romeo">Alfa Romeo</option>
						    <option value="chevrolet">Chevrolet</option>
						    <option value="ford">Ford</option>
					   	</select>
					   	<input type="hidden" name="1-name" value="Марка"/>
					   	<select name="2" required>
						    <option value="" disabled selected>Alfa Romeo</option>
					   	</select>
					   	<input type="hidden" name="2-name" value="Модель"/>
					   	<input type="text" id="phone" name="phone" required="" placeholder="Введите ваш телефон">
						<input type="hidden" name="subject" value="Заявка на чип-тюнинг"/>
						<input type="submit" class="b-green-butt ajax" value="Расчитать прирост!">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-12">
		<div class="b-block">
			<a href="#"><div class="logo"></div></a>
			<h2>ТК-Моторс даёт официальную гарантию 
			возврата средств и безопасности 
			Вашего автомобиля</h2>
			<h3>и еще 4 причины, почему чип-тюнинг стоит делать в ТК-моторс</h3>
			<div class="center clearfix">
				<div class="page left">
					<a class="a-page" href="#"><img src="i/b-11/contract.jpg"></a>
					<a class="a-text" href="#">Посмотреть весь договор</a>
				</div>
				<div class="list left">
					<ul>
						<li class="clearfix">
							<h4 class="left">1</h4>
							<div class="text left">
								<h5>Гарантия 100% возврата средств в течение 3-х недель</h5>
								<p>Без заявлений, анкет и прочей бюрократии. Не почувствовали
								результат или брали просто потестировать - мы легко вернем
								деньги назад</p>
							</div>
						</li>
						<li class="clearfix">
							<div class="circle left"></div>
							<div class="text left">
								<h6><b>1.5.2</b> Выдержка из договора Выдержка из договора Выдержка
								из договора Выдержка из договора Выдержка из договора</h6>
							</div>
						</li>
						<li class="clearfix">
							<h4 class="left">2</h4>
							<div class="text left">
								<h5>Гарантия безопасности для всех агрегатов и устройств автомобиля</h5>
								<p>Устанавливается только сертифицированное дополнительное оборудование</p>
							</div>
						</li>
						<li class="clearfix">
							<div class="circle left"></div>
							<div class="text left">
								<h6><b>1.5.2</b> Продавец подтверждает, что все портативные модули ЭБУ полностью 
								соответствуют требованиям и регламентам безопасности колесных транспортных
								средств Евросоюза и Российской Федерации, о чем свидетельствуют
								соответствующие документы.</h6>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="bottom">
				<ul class="clearfix">
					<li class="left">
						<div class="cont clearfix">
							<div class="pic left">
								<h3>3</h3>
								<img src="i/b-11/1.png">
							</div>
							<div class="clearfix text left">
								<h4>Уже ставили на %Марка машины%</h4>
								<p>Установили уже -27- чипов на %марка машины%, 0 возвратов </p>
							</div>
						</div>
					</li>
					<li class="left">
						<div class="cont clearfix">
							<div class="pic left">
								<h3>4</h3>
								<img src="i/b-11/2.png">
							</div>
							<div class="text left">
								<h4>Монтаж - бесплатно</h4>
								<p>Приезжайте к нам в сервис, и мастер сделает монтаж бесплатно</p>
							</div>
						</div>
					</li>
					<li class="left">
						<div class="cont clearfix">
							<div class="pic left">
								<h3>5</h3>
								<img src="i/b-11/3.png">
							</div>
							<div class="text left">
								<h4>Установка при Вас за 20 минут</h4>
								<p>Монтаж делается при Вас, а мастер подробно объяснит, что и как он делает </p>
							</div>
						</div>
					</li>
					<li class="left">
						<div class="cont clearfix">
							<div class="pic left">
								<h3>6</h3>
								<img src="i/b-11/4.png">
							</div>
							<div class="text left">
								<h4>Адаптировано<br> под Россию</h4>
								<p>Топливо в России часто плохого качества, поэтому программа немного мягче немецкой и адаптирована под наши условия</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="b b-13">
		<div class="b-block">
			<h2>Все еще сомневаетесь? Прочитайте отзывы и узнайте, 
			на какой результат Вы можете рассчитывать</h2>
			<h3>Мы установили 312 чип-блоков за последние 6 месяцев</h3>
			<div class="review clearfix">
				<div class="left-1 left">
					<h4>Volkswagen Tiguan 3.5</h4>
					<div class="part left">
						<img src="i/b-12/1.jpg">
						<p>Было:</p>
						<ul>
							<li>
								<p>Мощность:  </p>
							</li>
							<li>
								<p>145 л.с  </p>
							</li>
							<li>
								<p>Крутящий момент: </p>
							</li>
							<li>
								<p>123 Нм  </p>
							</li>
							<li>
								<p>Расход:  </p>
							</li>
							<li>
								<p>14 л/100 км  </p>
							</li>
						</ul>
					</div>
					<div class="part left">
						<img src="i/b-12/2.jpg">
						<p>Стало:</p>
						<ul>
							<li class="clearfix">
								<p>Мощность:  </p>
							</li>
							<li class="clearfix">
								<div class="left"></div>
								<p>177 л.с +23%  </p>
							</li>
							<li class="clearfix">
								<p>Крутящий момент:</p>
							</li>
							<li class="clearfix">
								<div class="left"></div>
								<p>144 Нм +19%  </p>
							</li>
							<li class="clearfix">
								<p>Расход:  </p>
							</li>
							<li class="clearfix">
								<div class="left"></div>
								<p>11 л/100 км -18%  </p>
							</li>
						</ul>
					</div>
				</div>
				<div class="left-2 left">
					<h4>Алексей, владелец Tiguan:</h4>
					<h5>Я не ожидал такого результата</h5>
					<i>Я перебрала кучу сайтов и форумов,
					поспрашивала у знакомых - попыталась проанализировать
					соотношение предлагаемых сроков и цены, прислушалась к отзывам
					людей, которые уже сделали ремонты. Сразу отбросила те фирмы,
					где люди жаловались на несвоевременность...</i>
					<p>Послушайте аудио-отзыв Алексея</p>
					<img src="i/b-12/audio.jpg">
				</div>
			</div>
			<a href="#">Посмотреть еще отзывы</a>
		</div>
	</div>
	<div class="b b-14">
		<div class="b-block clearfix">
			<div class="left-1 left">
				<h2>Получите бесплатную<br> 
				компьютерную диагностику</h2>
				<img class="arrow" src="i/b-13/arrow.png">
				<ul>
					<li class="clearfix">
						<img class="left" src="i/b-13/check.png">
						<p>За 15 минут точно определим слабые места двигателя  </p>
					</li>
					<li class="clearfix">
						<img class="left" src="i/b-13/check.png">
						<p>Выявим ошибки в ЭБУ  </p>
					</li>
					<li class="clearfix">
						<img class="left" src="i/b-13/check.png">
						<p>Дадим конкретные рекомендации по исправлению  </p>
					</li>
					<li class="clearfix">
						<img class="left" src="i/b-13/check.png">
						<p>Бесплатно при заявке с сайта до 25.05</p>
					</li>
				</ul>
			</div>
			<div class="left-2 left">
				<div class="b-14-form b-black-form">
					<h2>Оставьте заявку на компьютерную диагностику прямо сейчас!</h2>
					<form action="kitsend.php" method="post" data-block="#b-popup-2">
						<input type="text" id="phone" name="phone" required="" placeholder="Введите ваш телефон">
						<input type="submit" class="b-green-butt ajax" value="Расчитать прирост!">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-15">
		<div class="b-block">
			<h2>Приезжайте, будем рады Вас видеть</h2>
			<h3>г. Москва, Гостиничный проезд, д.6 к.2. С 11:00 до 19:00 без выходных</h3>
		</div>
	</div>
	<div class="b b-16">
		
	</div>
	<div class="b b-17">
		<div class="b-block">
			<div class="clearfix">
				<p class="left">Остался вопрос о чип-тюнинге?</p>
				<a class="left" href="#">Задайте его менеджеру</a>
			</div>
		</div>
	</div>
	<div class="b b-18">
		<div class="b-block clearfix">
			<div class="logo left"><a href="#"></a></div>
			<div class="describe left">
				<p>Немецкий чип-тюнинг 
				с гарантией результата 
				в Москве</p>
			</div>
			<div class="contacts right">
				<h3>Есть вопрос? Звоните - поможем!</h3>
				<div class="b-phone clearfix">
					<p class="right">+7 (499) 399 3509</p>
					<img class="right" src="i/b-17/phone.png">
				</div>
				<a href="#">Заказать звонок</a>
			</div>
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