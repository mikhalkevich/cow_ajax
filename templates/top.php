<?
 require_once('config/config.php');
?>
<!doctype HTML>
<html lang="en">
<head>
    <title>Название приложение</title>
	<meta http-equiv="Pragma" content="no-cache">
    <Meta charset="utf-8">
    <Meta name="description" content="1-2-3 предложения">
    <Meta name="keywords" content="4-10 выражений">
	<link rel="stylesheet" href="media/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="media/css/style.css?time=<?=time()?>" />
	<link rel="stylesheet" href="media/css/video.css?time=<?=time()?>" />
</head>

<body> 
    <div id="header">
	<a href="/index.php">
        <img src="media/img/cow.png" id="logo" />
	</a>	
        <h1 id="logotext">Корова и молоко</h1>
		<br style="clear:right" />
		<div id="auth"> 
 		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto menu">
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Акции
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="#">Акция 1</a>
				  <a class="dropdown-item" href="#">Акция 2</a> 
				</div>
			  </li> 
			  <li class="nav-item">
			  <a href="#" class="btn btn-link btn-my">Вход</a>
			  </li>
			  <li class="nav-item">
			  <a href="#" class="btn btn-link btn-my">Регистрация</a>
			  </li>
			</ul> 
		  </div>
		</nav>
		</div>
        <br style="clear:both" />
    </div>
    <div class="menu"> 
        <a href="/maintext.php?url=about">О нас</a>
		<a href="/news.php">Новости</a>
        <a href="/products.php">Молочные продукты</a>
        <a href="/maintext.php?url=delivery">Доставка</a>
        <a href="/maintext.php?url=discount">Акции</a>
		<a href="/reviews.php">Отзывы</a>
        <a href="/maintext.php?url=contacts">Контакты</a>		
    </div>

    <div id="content">
<div class="container"> 
  <div class="row">
    <div class="col" id="menu-left">
      <a href="#" data-file="moloko1.html?url=sto2" class="btn btn-primary btn-block btn-my">Молоко</a>
	  <a href="#" data-file="syr.html" class="btn btn-success btn-block">Сыр</a>
	  <a href="#" data-file="tvorog.html" class="btn btn-danger btn-block">Творог</a>
	  <a href="#" data-file="smetana.html" class="btn btn-info btn-block">Сметана</a>
    </div>
    <div class="col-8">