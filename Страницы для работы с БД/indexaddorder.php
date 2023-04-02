<head>
<meta charset="utf-8">
<title>Создать заказ</title>
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
                <li><a href="#section0">Начальная страница</a></li>
                 <li><a href="index.php">Найти производителя</a></li>
                <li><a href="Deleteorder.php">Удалить заказ</a></li>
            </ul>
        </nav>
        
    </div>
</div>
  <section id="section0" class="header">
    <div class="container">
        <div class="headerInner">
            <h2>Создать заказ<br>быстро</h2>
            <p>Сейчас <b class="red">Now!</b></p>
            <div class="row mt-30">
             
               </div>
                <div class="col-md-4 col-sm-6">
                	<form method="post" action="addorder.php">
					
					    <input type="text" name="numberz" placeholder="Номер заказа:" required>
						<div class="select">
						<select  size=1 type="text" name="material" placeholder="Материал:"> 
						<option value="" disabled selected>Материал</option>
						<option value=сталь>сталь</option>
						<option value=медь>медь</option>
						
						
						
						</select>
						</div>
						
						
					    <input class="btn btn-default btn-head mt-20 mb-50" id="submit" type="submit" value="Создать заказ"><br/>
						
                	</form>
                </div>
            </div>
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
    <span>© Поиск производителя, 2023 | <a href="https://vk.com/nikitosbaklanov" style="color:white">Разработчик сайта</a></span>
</footer>



</body>
</html>
