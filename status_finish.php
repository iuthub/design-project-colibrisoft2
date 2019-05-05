<!DOCTYPE html>
<html>
<head>
	<title> OWL Consulting | Найдите университет вашей мечты!  </title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/font-awesome.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="shortcut icon" href="img/icon.png">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="icon" href="favicon.png" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/navLogo.png" alt="Company Logo"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">ГЛАВНАЯ</a></li>
        
      </ul>
    </div>
  </div>
</nav>
	
<header id="main">
<div class="main-banner">
	<div class="container">

		<div class="row">
			<div class="col-md-offset-4 col-md-4 text-center banner-pad">
				<img class="bannerimg-pad" src="img/TranspLogo.png" >
			</div>
			
			<div class="col-md-offset-4 col-md-4 text-center bannerimg-pad">
			
			</div>
			<div id="status_result" class="col-md-offset-4 col-md-4 text-center bannerimg-pad">
			


			<div class="w3-light-grey w3-xxlarge">
    <div class="w3-container w3-green" id="progress_bar"
		>
			<?php 
		
		$servername = "localhost";
$username = "owlroot";
$password = "Zakerxeon17";
$dbname = "owldb";

$phone= $_POST["phone"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT fName, lName,stat FROM myguests where phone = '$phone'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
			
				$stat=  $row["stat"];
				
	}
	
	if($stat==0)
	{
		echo '<td  id="status_number">',$stat , '%</td>';
		echo '<style type="text/css">
			#progress_bar {
				width:0;
				
			}
			</style>';
	
		echo '<h2  style="color: black;">Ожидается получение документов</h2>';
	}
	else
	{
		echo '<td  id="status_number">',$stat , '%</td>';
		echo '<style type="text/css">
			#progress_bar {
				width:',$stat, '%;
			}
			</style>';
	
		echo '<h2  style="color: white;">',
		
		status_info($stat),
		
		'</h2>';
	}
	
} else {
    echo "Raqam topilmadi";
}


$conn->close();
		
		
		?> </div>
	</div>
	<?php




	function status_info($val){
        
	if($val=='10')
	{
	  return "Доставка документов в офис OwlConsulting";
	}
	else  if($val=='20')
	{
		return "Начальный этап работы с документами";
	} 
	else  if($val=='30')
	{
		return "Все документы в порядке";
	}  
	else  if($val=='40')
	{
		return "Ожидание оплаты";
	}   
	else  if($val=='50')
	{
		return "Оплата была произведена успешно";
	}
	else  if($val=='60')
	{
		return "Перепроверка на наличии всех документов";
	}
	else  if($val=='70')
	{
		return "Финальная обработка документов заверщена";
	}
	else  if($val=='80')
	{
		return "Перевод документов";
	}
	else  if($val=='90')
	{
		return "Передача документов в университет";
	}
	else  if($val=='100')
	{
		return "Покупка билетов";
	}
}


	
	?>





			</div>
			
		</div>
	</div>
</div>
</header> 



<!--<img src="footer.png"> -->
<footer class="white mfooter">
	<div class="container">
		<div class="row">
			<div class="col-md-3 text-center" style="margin:30px 0;">
				<a href="index.php"><img src="img/footerLogo.png"></a>
			</div>
			<div class="col-md-3 text-center footer-text" style="margin:10px 0;">
				<h4 class="text-uppercase ">Контакты: </h4> <br>

				<p>+998 95 170-42-22</p>
				<p>+998 90 329-62-21</p>
				<div class="text-center">


					<a href="https://www.facebook.com/OwlConsult/" target="_blank"><i class="fa fa-facebook" style="font-size: 24px;"></i></a>
					<a href="https://www.instagram.com/OwlConsult" target="_blank"><i class="fa fa-instagram" style="font-size: 24px;"></i></a>
					<a href="https://t.me/OwlConsult" target="_blank">
						<i class="fa fa-telegram" style="font-size: 24px;">
					</i></a>
				</div>
			</div>
			<div class="visible-lg visible-md ">
				<div class="col-md-3  footer-text" style="margin:10px 0; ">
					<h4 class="text-uppercase"> Рабочие дни: </h4> <br>
					<table class="table">
						<tbody><tr>
							<td>Понедельник</td>
							<td>9 <sup>00</sup> – 18 <sup>00</sup></td>
						</tr>
						<tr>
							<td>Вторник</td>
							<td>9 <sup>00</sup> – 18 <sup>00</sup></td>
						</tr>
						<tr>
							<td>Среда</td>
							<td>9 <sup>00</sup> – 18 <sup>00</sup></td>
						</tr>
					</tbody></table>
				</div>
				<div class="col-md-3" style="margin:10px 0;">
					<h4 class="text-uppercase"><b></b><br><br>
					</h4><table class="table">
						<tbody><tr>
							<td>Четверг</td>
							<td>9 <sup>00</sup> – 18 <sup>00</sup></td>
						</tr>
						<tr>
							<td>Пятница</td>
							<td>9 <sup>00</sup> – 18 <sup>00</sup></td>
						</tr>
						<tr>
							<td>Суббота</td>
							<td>9 <sup>00</sup> – 18 <sup>00</sup></td>
						</tr>
					</tbody></table>
				</div>
			</div>
		</div>

		<h4 class="text-center">Сайт разработан командой <a class="colibrisoft" href="https://www.instagram.com/colibrisoft.team" > ColibriSoft </a> </h4>
		<br>
	</div>
</footer></body>

</html>