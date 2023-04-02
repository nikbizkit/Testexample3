
<head>
<meta charset="utf-8">
<title>Удалить заказ</title>
<!--=================================
Style Sheets
=================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">  <!--================================= разметка страницы=================================-->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> <!--================================= конвертик и телефон=================================-->
<link rel="stylesheet" href="css/main.css"> <!--================================= дизайн сайта=================================-->
</head>
<body class="eschool" >  <!--================================= ??основа сайта=================================-->
<!--====================================
Body Content
=======================================-->

<div class="navbar-custom">
    <div class="container">
        <a href="index.php" class="logo"><img src="img/1.jpg" alt=""></a>
        <nav id="navbar">
           
            <ul class="main-menu nav">
                <li><a href="index.php">Начальная страница</a></li>
                                <li><a href="index.php">Найти производителя</a></li>
               <li><a href="materialfind.php">Найти материал</a></li>
               <li><a href="indexaddorder.php">Создать заказ</a></li>

                <li><a href="#section5">Контакты</a></li>
            </ul>
        </nav>
        
    </div>
</div>
    
<section id="section0" class="header">
    <div class="container">
        <div class="headerInner">
            <h2>Удалить<br>заказ</h2>
            <p>Введите <b class="red">номер и дату:</b></p>
            <div class="row mt-30">
                <div class="col-md-4 col-sm-6">
                	<form class="default-form" method="POST">
                    	<input type="text" name="numberz" placeholder="Номер заказа:" required>
 
						
 
						<input type="text" name="dataz" placeholder="ГГ.ММ.ДД:" required>
						<button class="btn btn-default btn-head mt-20 mb-50" type="submit">Удалить заказ</button>
                	</form>
                </div>
	 <?php
require ('connect.php');
if(isset($_POST['numberz']) and isset($_POST['dataz'])){
$numberz = trim($_REQUEST['numberz']);
$dataz = trim($_REQUEST['dataz']);

$sql = "DELETE FROM orders WHERE  order_num='$numberz' ";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result);
{echo '<p style="text-align: center; color:orange; width: 1500px;font-weight: 800; font-size: 150%;">'."Заказ успешно удален :(".'</p>';}}
?>
            </div>
        </div>
    </div>
</section>



<section id="section5" class="trial mt-40 mb-30 text-bold">
    <div class="container">
        <h2 class="text-center" style="color:#000">Контактная информация</h2>
        <div class="row">
    	 	<div class="col-xs-12 col-sm-6" >
    	 		<h6>Телефон:</h6>
    	 		<h3 style="color:#000"><i style="color:#ffc000" class="fa fa-phone-square" aria-hidden="true"></i><a href="tel:+79854240634" style="color:black"> +7 (985) 424-06-34</a></h3>
        	</div>
        	<div class="col-xs-12 col-sm-6" style="text-align:left">
    	 		<h6>Email:</h6>
    	 		<h3 style="color:#000"><i style="color:#ffc000" class="fa fa-envelope" aria-hidden="true"></i><a style="color:#000" href="mailto:nikbaklanov1999@yandex.ru"> Отправить email</a></h3>
        	</div>
    	</div>
    	<div class="text-center">
    		<a class="btn btn-default" href="tel:+79854240634">Позвонить</a>
    	</div>
        
    </div>
</section>
    
<footer class="text-center color-white text-bold">
    <span>© Поиск ресторанов, 2021 | <a href="https://vk.com/nikitosbaklanov" style="color:white">Разработчик сайта</a></span>
</footer>



</body>
</html>