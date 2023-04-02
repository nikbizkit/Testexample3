<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Найденые заказы</title>
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
               <li><a href="materialfind.php">Найти материал</a></li>
			                  <li><a href="indexaddorder.php">Создать заказ</a></li>

                <li><a href="Deleteorder.php">Удалить заказ</a></li>

            </ul>
        </nav>
        
    </div>
</div>
  
<section id="section0" class="header">
   <?php
require ('connect.php');
$order_num = trim($_REQUEST['Number']);

$ceh_name = trim($_REQUEST['Ceh']);
$status = trim($_REQUEST['Statuss']);

$sql = "SELECT * FROM ceh_proizv WHERE  ceh_name='$ceh_name' ";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result);
echo "<table align='center' class='vivod'>
<th class='vivodth' align='right' style='width:200px;'>id Производителя</th> 
<th  class='vivodth' align='center' style='width:200px;'>Название производителя</th> 
</tr>
</table>";

do {
if($row)
{
echo "<table class='vivodtd' align='center'> 
<tr class='vivodtd' align='center'> 
<td class='vivodtd' align='center' style='width:200px;'>".$row['ceh_id']."</td>
<td class='vivodtd' align='center' style='width:200px;'>".$row['ceh_name']."</td>



</tr>
</table>";
	
}
else{echo '<p style="text-align: center; color:orange; width: 1500px;font-weight: 800; font-size: 150%;">'."Не найдено таких производителей :(".'</p>';}
}
while($row = mysqli_fetch_array($result));
?>
<br></br>
<div class="text-center">
<a class="btn btn-default" href="index.php">Искать еще</a>
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