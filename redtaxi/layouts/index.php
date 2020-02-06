<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Red taxi</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /> 

    <link href="images/icon.jpg" rel="icon" type="image/x-icon"/>
    <link href="images/icon.jpg" rel="shortcut icon" type="image/x-icon"/>
	
</head>

<body  class="home">

<div class="box_back">
<div class="box_back_center">

<div id="call_window" class="callback2">
<div class="callback_center2">
<img src="images/pop.png" alt="">
<div class="callback_message">ВАШЕ ЗАМОВЛЕННЯ ВІДПРАВЛЕНЕ!</div>
Дякуємо за заявку! Незабаром наш менеджер зв'яжеться з Вами
</div>
<div class="close box"></div>
</div>

</div>
</div>

<div id="top-menu" class="section red-back hide">
	<div class="section-inner">
		<div class="logo">
			<a href="/"><img src="images/logo.png" alt=""></a>
		</div>
		<div class="menu">
			<ul>
				<li class="menu-item"><a href="#price">Тарифи</a></li>
               	<li class="menu-item"><a href="#callback">Зворотній зв’язок</a></li>
                <li class="menu-item menu-beforelang"><a href="#drivers">Водіям</a></li>
                <li class="menu-item menu-lang"><a class="lang lang-active" href="#ua">УКР</a><a class="lang" href="#ru">РУС</a></li>
			</ul>
		</div>	
		<div class="mobmenu">
			<a href="/"><img class="mobmenu1" src="images/mobmenu.png" alt=""><img class="mobmenu2" src="images/mobmenu-close.png" alt=""></a>
		</div>	
	</div>
</div>

<div id="pass" class="section pic-back">
	<div class="section-inner">
		<div class="white-block app-block app-block-up up">
				<div class="close-green up-show"></div>
				<div class="pass-title up-show">ПРИ ПЕРШОМУ ЗАМОЛЕНІ ЧЕРЕЗ<br class="mob-show"> МОБІЛЬНИЙ ДОДАТОК <span class="yellow-text">ЗНИЖКА 15%</span></div>
				<div class="app-top">
					<div class="app-top-item"><a href="#app-bottom1"><img class="up-show" src="images/app-green1.png" alt="" title=""></a></div>
					<div class="app-top-item"><a href="#app-bottom2"><img class="up-show" src="images/app-green2.png" alt="" title=""></a></div>
				</div>
				
		</div>
		<div class="left-block white-block">
		<form class="top-form" action="" method="post">
			<div class="pass-title">ЗАМОВ ТАКСІ ОНЛАЙН</div>
			<div class="order-switch">
				<div class="order-switch-item order-switch-item1 sel">
					<input id="order-switch-item1" type="radio" class="order-switch-radio" name="order-switch-item" value="" checked="checked" >
					<label for="order-switch-item1">Замовлення<br> на зараз</label>
				</div>
				<div class="order-switch-item order-switch-item2">
					<input id="order-switch-item2" type="radio" class="order-switch-radio" name="order-switch-item" value="" >
					<label for="order-switch-item2">Екстренне<br> замовлення</label>
				</div>
				<div class="order-switch-item order-switch-item3">
					<input id="order-switch-item3" type="radio" class="order-switch-radio" name="order-switch-item" value="" >
					<label for="order-switch-item3">Попереднє<br> замовлення</label>
				</div>
			</div>
			<div class="form-date-block">
				<div class="form-date date-string icon-right">
					<select id="form-date" class="form-input-item" name="form-date">
						<option value="19.12.2019">19.12.2019</option>
						<option value="20.12.2019">20.12.2019</option>
					</select>
					<img src="images/form-date.png" alt="" title="">
				</div>
				<div class="form-time form-hour date-string">
					<select class="form-input-item" name="form-hour">
						<option value="01">01</option>
						<option value="02">02</option>
					</select>
				</div>
				<div class="form-dots date-string">
					:
				</div>
				<div class="form-time form-minute date-string">
					<select class="form-input-item" name="form-minute">
						<option value="59">59</option>
						<option value="00">00</option>
					</select>
				</div>
			</div>
			<div class="form-flex">
			<div class="form-adr form-input icon-left mg-r-15">
				<input type="text" class="form-input-item" name="form-adr" placeholder="Ваша адреса">
				<img src="images/form-adr.png" alt="" title="">
			</div>
			<div class="form-note form-input mg-l-15">
				<input type="text" class="form-input-item" name="form-note" placeholder="Під'їзд, або коментар для водія ">
			</div>
			</div>
			<div class="form-dest form-input icon-left">
				<input type="text" class="form-input-item" name="form-dest" placeholder="Адреса прибуття">
				<img src="images/form-dest.png" alt="" title="">
			</div>
			<div class="town-stop-block">
				<div class="stop-pool"></div>
				<label class="form-bottom-check town">Поїздка по місту<input type="checkbox"><span class="cont"></span><span class="circle"></span></label>
				<label class="form-bottom-check stop">Додати зупинку<span class="cont">+</span></label>
			</div>
			<div class="type-block">
				<div class="type-item">
					<div class="type-item-img type-string"><img src="images/form-type1.png" alt="" title=""></div>
					<div class="type-item-text type-string">
						<div class="type-item-title">Стандарт</div>
						<div class="type-item-icons"><div class="type-icon-time type-icon"><img src="images/form-time.png" alt="" title=""><span class="pod-text">Подача</span> 2 хв.</div><div class="type-icon-men type-icon"><img src="images/form-men.png" alt="" title="">2 чол.</div><div class="type-icon-bag type-icon"><img src="images/form-bag.png" alt="" title="">2 валізи</div></div>
					</div>
					<div class="type-item-price type-string"><span class="from">від</span> 55 <span class="currency">₴</span></div>
					<div class="type-string-input"><input type="radio" class="type-switch-radio" name="order-type" value="" ></div>
				</div>
				<div class="type-item type-item-selected">
					<div class="type-item-img type-string"><img src="images/form-type2.png" alt="" title=""></div>
					<div class="type-item-text type-string">
						<div class="type-item-title">Універсал</div>
						<div class="type-item-icons"><div class="type-icon-time type-icon"><img src="images/form-time.png" alt="" title=""><span class="pod-text">Подача</span> 2 хв.</div><div class="type-icon-men type-icon"><img src="images/form-men.png" alt="" title="">4 чол.</div><div class="type-icon-bag type-icon"><img src="images/form-bag.png" alt="" title="">4 валізи</div></div>
					</div>
					<div class="type-item-price type-string"><span class="from">від</span> 55 <span class="currency">₴</span></div>
					<div class="type-string-input"><input type="radio" class="type-switch-radio" name="order-type" value="" checked="checked" ></div>
				</div>
				<div class="type-item">
					<div class="type-item-img type-string"><img src="images/form-type3.png" alt="" title=""></div>
					<div class="type-item-text type-string">
						<div class="type-item-title">Комфорт</div>
						<div class="type-item-icons"><div class="type-icon-time type-icon"><img src="images/form-time.png" alt="" title=""><span class="pod-text">Подача</span> 2 хв.</div><div class="type-icon-men type-icon"><img src="images/form-men.png" alt="" title="">3 чол.</div><div class="type-icon-bag type-icon"><img src="images/form-bag.png" alt="" title="">3 валізи</div></div>
					</div>
					<div class="type-item-price type-string"><span class="from">від</span> 125 <span class="currency">₴</span></div>
					<div class="type-string-input"><input type="radio" class="type-switch-radio" name="order-type" value="" ></div>
				</div>
				<div class="type-item">
					<div class="type-item-img type-string"><img src="images/form-type4.png" alt="" title=""></div>
					<div class="type-item-text type-string">
						<div class="type-item-title">Мікроавтобус</div>
						<div class="type-item-icons"><div class="type-icon-time type-icon"><img src="images/form-time.png" alt="" title=""><span class="pod-text">Подача</span> 2 хв.</div><div class="type-icon-men type-icon"><img src="images/form-men.png" alt="" title="">8 чол.</div><div class="type-icon-bag type-icon"><img src="images/form-bag.png" alt="" title="">8 валіз</div></div>
					</div>
					<div class="type-item-price type-string"><span class="from">від</span> 135 <span class="currency">₴</span></div>
					<div class="type-string-input"><input type="radio" class="type-switch-radio" name="order-type" value="" ></div>
				</div>
				
			</div>
			<div class="name-phone-block">
				<input type="text" class="form-input-item form-name mg-r-15" name="form-name" placeholder="Ваше ім’я">
				
				<input class="form-input-item form-phone mg-l-15 form__input input_medium input_phone" type="text" placeholder="+38 0(XX) XXX XX XX"  name="form-phone">
			</div>
			<div class="pay-block">
				<div class="order-switch-item order-switch-item1 sel">
					<input id="order-pay-item1" type="radio" class="order-switch-radio" name="order-pay-item" value="" checked="checked" >
					<label for="order-pay-item1">Оплата готівкою </label>
				</div>
				<div class="order-switch-item order-switch-item2">
					<input id="order-pay-item2" type="radio" class="order-switch-radio" name="order-pay-item" value="" >
					<label for="order-pay-item2">Оплата кредитною карткою</label>
				</div>
			</div>
			<span class="order-note">Тариф орієнтовний і не враховує очікування, а також поточні зміни дорожньої обстановки. Точна вартість розраховується за таксометром по завершенню поїздки.</span>
			<button type="submit" class="form-button">ЗАМОВИТИ ТАКСІ</button>
		</form>
		</div>
		
		
		<div class="right-block">
			<div class="red-block numbers">
				<div class="pass-title">ЗАМОВ ТАКСІ ПО ТЕЛЕФОНУ</div>
				<a href="tel:+380449876543" class="number-item">
					<img src="images/number1.png" alt="">
					<span class="pink-text">+38</span> <span class="yellow-text">(044)</span> 987 65 43 <span class="ital-text"></span>
				</a>
				<a href="tel:+380509876543" class="number-item">
					<img src="images/number2.png" alt="">
					<span class="pink-text">+38</span> <span class="yellow-text">(050)</span> 987 65 43 <span class="ital-text">vodafone</span>
				</a>
				<a href="tel:+380639876543" class="number-item">
					<img src="images/number3.png" alt="">
					<span class="pink-text">+38</span> <span class="yellow-text">(063)</span> 987 65 43 <span class="ital-text">lifecell</span>
				</a>
				<a href="tel:+380679876543" class="number-item">
					<img src="images/number4.png" alt="">
					<span class="pink-text">+38</span> <span class="yellow-text">(067)</span> 987 65 43 <span class="ital-text">kyivstar</span>
				</a>
			</div>
			<div class="red-block slider">
				<div class="red-slider">
					<div class="red-slide1 red-slide red-slide-active">
						<div class="pass-title">ПРИ ПЕРШОМУ ЗАМОЛЕНІ<br> ЧЕРЕЗ МОБІЛЬНИЙ ДОДАТОК<br> <span class="yellow-text">ЗНИЖКА 15%</span></div>
						<div class="pass-slide-text">Другой стороны новая модель организационной деятельности требуют определения</div>
					</div>
					<div class="red-slide2 red-slide">
						<div class="pass-title">2222ПРИ ПЕРШОМУ ЗАМОЛЕНІ<br> ЧЕРЕЗ МОБІЛЬНИЙ ДОДАТОК<br> <span class="yellow-text">ЗНИЖКА 15%</span></div>
						<div class="pass-slide-text">22222Другой стороны новая модель организационной деятельности требуют определения</div>
					</div>
					<div class="red-slide3 red-slide">
						<div class="pass-title">3333ПРИ ПЕРШОМУ ЗАМОЛЕНІ<br> ЧЕРЕЗ МОБІЛЬНИЙ ДОДАТОК<br> <span class="yellow-text">ЗНИЖКА 15%</span></div>
						<div class="pass-slide-text">333Другой стороны новая модель организационной деятельности требуют определения</div>
					</div>
				</div>
				<div class="slide-buttons">
					<a class="slide-button slide-button1 slide-button-active" href="#slide1"></a>
					<a class="slide-button slide-button2" href="#slide2"></a>
					<a class="slide-button slide-button3" href="#slide3"></a>
				</div>
			</div>
			<div class="white-block app-block down">
				<div class="pass-title ">ЗАМОВИТИ ТАКСІ ЧЕРЕЗ<br> МОБІЛЬНИЙ ДОДАТОК</div>
				<div class="app-top">
					<div class="app-top-item"><a href="#app-bottom1"><img src="images/app-top1.png" alt="" title=""></a></div>
					<div class="app-top-item"><a href="#app-bottom2"><img src="images/app-top2.png" alt="" title=""></a></div>
				</div>
				
			</div>
			<div class="app-block-place">
			</div>
		</div>
		
		
	</div>
</div>

<div id="advant" class="section grey-back">
	<div class="section-inner">
		<div class="block-title">
			НАШІ <span class="red-text">ПЕРЕВАГИ</span>
		</div>
		<div class="advant-block">
			<div class="advant-item">
				<img src="images/advant1.png" alt="">
				<div class="advant-title">ПРИВАБЛИВИЙ ТАРИФ <br>В ГОДИНУ ПІК</div>
				<div class="advant-text">Ми не збільшуємо тариф в 1,5-2 рази в період підвищеного попиту</div>
			</div>
			<div class="advant-item">
				<img src="images/advant2.png" alt="">
				<div class="advant-title">ЗНАЙДЕМО МАШИНУ <br>ЗА 2 ХВИЛИНИ</div>
				<div class="advant-text">Згідно статистичних даних RED TAXI середній час пошуку автомобіля для клієнта - менше 2 хвилин</div>
			</div>
			<div class="advant-item">
				<img src="images/advant3.png" alt="">
				<div class="advant-title">КОНТРОЛЬ ЯКОСТІ <br>ОБСЛУГОВУВАННЯ </div>
				<div class="advant-text">Якщо у вас під час поїздки виникла конфліктна ситуація або ви щось загубили, відділ якості обслуговування допоможе з ними розібратися</div>
			</div>
		</div>
		
		
		
	</div>
</div>

<div id="price" class="section white-back">
	<div class="section-inner">
		<div class="block-title">
			ВИГІДНІ <span class="red-text">ТАРИФИ</span>
		</div>
		<div class="price-block">
			<div class="price-item mg-r-20 mg-b-60">
				<img src="images/price1.png" alt="">
				<div class="price-title">СТАНДАРТ</div>
				<div class="price-text">Зручні та сучасні автомобілі</div>
				<div class="price-table">
				<div class="price-table-row">
				<div class="price-cell">Замовлення:</div><div class="price-cell pr1"><a class="price-active" href="#price-lik1">На даний час</a></div><div class="price-cell pr2"><a href="#price-link2">Екстрене</a></div><div class="price-cell pr3"><a href="#price-link3">Попереднє</a></div><div class="price-cell"></div>
				</div>
				<div class="price-table-row red-back0">
				<div class="price-cell">Тарифний план</div><div class="price-cell">Посадка</div><div class="price-cell">Поїздка</div><div class="price-cell">Стоянка</div><div class="price-cell">Очікування*<br>простой**</div>
				</div>
				<div class="price-table-row red-back-dark">
				<div class="price-cell text-al-l">День</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">35</span><span class="p2">45</span><span class="p3">55</span></span> грн</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">7.5</span><span class="p2">8.5</span><span class="p3">9.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">9.5</span><span class="p2">10.5</span><span class="p3">11.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">1.5</span><span class="p2">2.5</span><span class="p3">3.5</span></span> грн/км</div>
				</div>
				<div class="price-table-row red-back-light">
				<div class="price-cell text-al-l">Час-Пік</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">35</span><span class="p2">45</span><span class="p3">55</span></span> грн</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">7.5</span><span class="p2">8.5</span><span class="p3">9.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">9.5</span><span class="p2">10.5</span><span class="p3">11.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">1.5</span><span class="p2">2.5</span><span class="p3">3.5</span></span> грн/км</div>
				</div>
				<div class="price-table-row red-back-dark">
				<div class="price-cell text-al-l">Ніч</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">35</span><span class="p2">45</span><span class="p3">55</span></span> грн</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">7.5</span><span class="p2">8.5</span><span class="p3">9.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">9.5</span><span class="p2">10.5</span><span class="p3">11.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">1.5</span><span class="p2">2.5</span><span class="p3">3.5</span></span> грн/км</div>
				</div>
				</div>
			</div>
			<div class="price-item mg-l-20 mg-b-60">
				<img src="images/price2.png" alt="">
				<div class="price-title">УНІВЕРСАЛ</div>
				<div class="price-text">Зручні сучасні автомобілі для великої кількості багажу</div>
				<div class="price-table">
				<div class="price-table-row">
				<div class="price-cell">Замовлення:</div><div class="price-cell pr1"><a class="price-active" href="#price-lik1">На даний час</a></div><div class="price-cell pr2"><a href="#price-link2">Екстрене</a></div><div class="price-cell pr3"><a href="#price-link3">Попереднє</a></div><div class="price-cell"></div>
				</div>
				<div class="price-table-row red-back0">
				<div class="price-cell">Тарифний план</div><div class="price-cell">Посадка</div><div class="price-cell">Поїздка</div><div class="price-cell">Стоянка</div><div class="price-cell">Очікування*<br>простой**</div>
				</div>
				<div class="price-table-row red-back-dark">
				<div class="price-cell text-al-l">День</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">35</span><span class="p2">45</span><span class="p3">55</span></span> грн</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">7.5</span><span class="p2">8.5</span><span class="p3">9.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">9.5</span><span class="p2">10.5</span><span class="p3">11.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">1.5</span><span class="p2">2.5</span><span class="p3">3.5</span></span> грн/км</div>
				</div>
				<div class="price-table-row red-back-light">
				<div class="price-cell text-al-l">Час-Пік</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">35</span><span class="p2">45</span><span class="p3">55</span></span> грн</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">7.5</span><span class="p2">8.5</span><span class="p3">9.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">9.5</span><span class="p2">10.5</span><span class="p3">11.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">1.5</span><span class="p2">2.5</span><span class="p3">3.5</span></span> грн/км</div>
				</div>
				<div class="price-table-row red-back-dark">
				<div class="price-cell text-al-l">Ніч</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">35</span><span class="p2">45</span><span class="p3">55</span></span> грн</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">7.5</span><span class="p2">8.5</span><span class="p3">9.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">9.5</span><span class="p2">10.5</span><span class="p3">11.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">1.5</span><span class="p2">2.5</span><span class="p3">3.5</span></span> грн/км</div>
				</div>
				</div>
			</div>
			<div class="price-item mg-r-20">
				<img src="images/price3.png" alt="">
				<div class="price-title">КОМФОРТ</div>
				<div class="price-text">Автомобілі підвищеної комфортності (Д клас і вище)</div>
				<div class="price-table">
				<div class="price-table-row">
				<div class="price-cell">Замовлення:</div><div class="price-cell pr1"><a class="price-active" href="#price-lik1">На даний час</a></div><div class="price-cell pr2"><a href="#price-link2">Екстрене</a></div><div class="price-cell pr3"><a href="#price-link3">Попереднє</a></div><div class="price-cell"></div>
				</div>
				<div class="price-table-row red-back0">
				<div class="price-cell">Тарифний план</div>
				<div class="price-cell">Посадка</div><div class="price-cell">Поїздка</div><div class="price-cell">Стоянка</div><div class="price-cell">Очікування*<br>простой**</div>
				</div>
				<div class="price-table-row red-back-dark">
				<div class="price-cell text-al-l">День</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">35</span><span class="p2">45</span><span class="p3">55</span></span> грн</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">7.5</span><span class="p2">8.5</span><span class="p3">9.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">9.5</span><span class="p2">10.5</span><span class="p3">11.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">1.5</span><span class="p2">2.5</span><span class="p3">3.5</span></span> грн/км</div>
				</div>
				<div class="price-table-row red-back-light">
				<div class="price-cell text-al-l">Час-Пік</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">35</span><span class="p2">45</span><span class="p3">55</span></span> грн</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">7.5</span><span class="p2">8.5</span><span class="p3">9.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">9.5</span><span class="p2">10.5</span><span class="p3">11.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">1.5</span><span class="p2">2.5</span><span class="p3">3.5</span></span> грн/км</div>
				</div>
				<div class="price-table-row red-back-dark">
				<div class="price-cell text-al-l">Ніч</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">35</span><span class="p2">45</span><span class="p3">55</span></span> грн</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">7.5</span><span class="p2">8.5</span><span class="p3">9.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">9.5</span><span class="p2">10.5</span><span class="p3">11.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">1.5</span><span class="p2">2.5</span><span class="p3">3.5</span></span> грн/км</div>
				</div>
				</div>
			</div>
			<div class="price-item mg-l-20">
				<img src="images/price4.png" alt="">
				<div class="price-title">МІКРОАВТОБУС</div>
				<div class="price-text">Автомобілі для великої компанії (6-8 чоловік)</div>
				<div class="price-table">
				<div class="price-table-row">
				<div class="price-cell">Замовлення:</div><div class="price-cell pr1"><a class="price-active" href="#price-lik1">На даний час</a></div><div class="price-cell pr2"><a href="#price-link2">Екстрене</a></div><div class="price-cell pr3"><a href="#price-link3">Попереднє</a></div><div class="price-cell"></div>
				</div>
				<div class="price-table-row red-back0">
				<div class="price-cell">Тарифний план</div><div class="price-cell">Посадка</div><div class="price-cell">Поїздка</div><div class="price-cell">Стоянка</div><div class="price-cell">Очікування*<br>простой**</div>
				</div>
				<div class="price-table-row red-back-dark">
				<div class="price-cell text-al-l">День</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">35</span><span class="p2">45</span><span class="p3">55</span></span> грн</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">7.5</span><span class="p2">8.5</span><span class="p3">9.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">9.5</span><span class="p2">10.5</span><span class="p3">11.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">1.5</span><span class="p2">2.5</span><span class="p3">3.5</span></span> грн/км</div>
				</div>
				<div class="price-table-row red-back-light">
				<div class="price-cell text-al-l">Час-Пік</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">35</span><span class="p2">45</span><span class="p3">55</span></span> грн</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">7.5</span><span class="p2">8.5</span><span class="p3">9.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">9.5</span><span class="p2">10.5</span><span class="p3">11.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">1.5</span><span class="p2">2.5</span><span class="p3">3.5</span></span> грн/км</div>
				</div>
				<div class="price-table-row red-back-dark">
				<div class="price-cell text-al-l">Ніч</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">35</span><span class="p2">45</span><span class="p3">55</span></span> грн</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">7.5</span><span class="p2">8.5</span><span class="p3">9.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">9.5</span><span class="p2">10.5</span><span class="p3">11.5</span></span> грн/км</div>
				<div class="price-cell"><span class="yellow-text"><span class="p1 cell-active">1.5</span><span class="p2">2.5</span><span class="p3">3.5</span></span> грн/км</div>
				</div>
				</div>
			</div>
		</div>
		
		<div class="time-block tight">
			<div class="time-item">
				<div class="time-title">Час дії тарифних планів</div>
				<div class="time-table">
				<div class="time-table-row time-red">
				<div class="time-cell"></div><div class="time-cell">Понеділок—четвер</div><div class="time-cell">П'ятниця</div><div class="time-cell">Субота, неділя</div>
				</div>
				<div class="time-table-row grey-back-dark">
				<div class="time-cell text-al-l">День</div><div class="time-cell">10:30-16:00; 20:00-23:00</div><div class="time-cell">10:30-16:00; 20:00-23:00</div><div class="time-cell">10:30-16:00; 20:00-23:00</div>
				</div>
				<div class="time-table-row grey-back-light">
				<div class="time-cell text-al-l">Час-Пік</div><div class="time-cell">10:30-16:00; 20:00-23:00</div><div class="time-cell">10:30-16:00; 20:00-23:00</div><div class="time-cell">10:30-16:00; 20:00-23:00</div>
				</div>
				<div class="time-table-row grey-back-dark">
				<div class="time-cell text-al-l">Ніч</div><div class="time-cell">10:30-16:00; 20:00-23:00</div><div class="time-cell">10:30-16:00; 20:00-23:00</div><div class="time-cell">10:30-16:00; 20:00-23:00</div>
				</div>
				</div>
			</div>
			<div class="disclamer"><div class="star">*</div>Вартість очікування пасажира - Після подачі машини за адресою, клієнту доступні 8 безкоштовних хвилин очікування, по закінченню цього часу за кожну наступну хвилину простою стягується плата згідно обраного тарифного плану.</div>
			<div class="disclamer"><div class="star">**</div>Простой в заторі - в разі падіння швидкості нижче 20 км/год протягом 40 секунд, за кожну наступну хвилину нараховується плата згідно обраного тарифного плану. Після зростання швидкості понад 20 км/год нарахування плати за пробки припиняється.</div>
			<div class="disclamer"><div class="star">***</div>Простой в заторі - в разі падіння швидкості нижче 20 км/год протягом 40 секунд,  за кожну наступну хвилину нараховується плата згідно обраного тарифного </div>
		</div>
		
	</div>
</div>

<div id="callback" class="section tight grey-back">
	<div class="section-inner">
		<div class="block-title">
			ЗВОРОТНІЙ <span class="red-text">ЗВ'ЯЗОК</span>
		</div>
		<div class="callback-text">
			Якщо у вас під час поїздки виникла конфліктна ситуація, ви щось загубили чи є інші питання, пов'язані з нашою роботою, зателефонуйте або напишіть нам і менеджер з відділу контролю якості зв'яжеться з вами і допоможе розібратися.
		</div>
		
		<form class="callback-form" action="" method="post">
		<div class="callback-input">
			<input type="text" class="callback-input-item" name="callback-name" placeholder="Ваше Ім’я">
			<input class="callback-input-item input-phone form-input-item form-phone mg-l-15 form__input input_medium input_phone" type="text" placeholder="+38 0(XX) XXX XX XX"  name="callback-phone">
			<input type="text" class="callback-input-item" name="callback-email" placeholder="Пошта (не обов'язково)">
		</div>
		<textarea type="text" class="callback-input-textarea" name="callback-message" placeholder="Ваш коментар"></textarea>
		<button type="submit" class="callback-button">ВІДПРАВИТИ</button>
		</form>
		
	</div>
</div>


<div id="footer" class="section black-back">
	<div class="section-inner">
		<div class="logo logo-bottom">
			<a href="/"><img src="images/logo2.png" alt=""></a>
		</div>
		<div class="menu menu-bottom">
			<ul>
				<li class="menu-item"><a class="current" href="#pass">Пасажирам</a></li>
				<li class="menu-item"><a href="#price">Тарифи</a></li>
                <li class="menu-item"><a href="#drivers">Водіям</a></li>
				<li class="menu-item"><a href="#callback">Зворотній зв’язок</a></li>
                
			</ul>
		</div>	
		<div class="menu social-bottom">
			<ul>
				<li class="menu-item"><a href="#fb"><img src="images/fb-icon.png" alt="Facebook" title="Facebook"></a></li>
				<li class="menu-item"><a href="#inst"><img src="images/inst-icon.png" alt="Instagram" title="Instagram"></a></a></li>
                <li class="menu-item"><a href="#yt"><img src="images/yt-icon.png" alt="Youtube" title="Youtube"></a></li>
                
			</ul>
			<div class="copyright">© 2019. <a href="#/">RedTaxi.</a> Усі права захищено.</div>
		</div>
		<div class="app-bottom">
			<div class="app-bottom-item"><a href="#app-bottom1"><img src="images/app-bottom1.jpg" alt="" title=""></a></div>
			<div class="app-bottom-item"><a href="#app-bottom2"><img src="images/app-bottom2.jpg" alt="" title=""></a></div>
		</div>
	</div>
</div>







<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/jquery.maskedinput.js"></script> 
<script src="js/functions.js"></script> 



</body>
</html>