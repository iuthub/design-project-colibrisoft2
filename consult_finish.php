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
	<link rel="stylesheet" type="text/css" href="css/formStyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="shortcut icon" href="img/icon.png">
	<link rel="icon" href="favicon.png" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/process.js"></script>
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
        <li><a href="index.php">ГЛАВНАЯ</a>
        </li>
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
				
				<div class="col-md-offset-4 col-md-4 text-center bannerimg-pad" id="status">
					<h1 style="color:white;" class="wide">В скором времени наша команда свяжется с вами.</h1>
					<h2 style="color:white;" class="wide">Спасибо за ваш выбор!!!</h2>

				</div>
			</div>
		</div>
	</div>
</header> 

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

		<h4 class="text-center">Сайт разработан командой <a class="colibrisoft" href="https://www.instagram.com/colibrisoft" > ColibriSoft </a> </h4>
		<br>
	</div>
</footer>

<?php
	
	$servername = "localhost";
$username = "owlroot";
$password = "Zakerxeon17";
$dbname = "owldb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$timezone  = +4; //(GMT -5:00) EST (U.S. & Canada) 
$gmdate = gmdate("Y/m/j H:i:s", time() + 3600*($timezone+date("I"))); 

$FName= mysqli_real_escape_string($conn, trim($_POST["FName"]));
$LName= $_POST["LName"];
$MNumber= $_POST["MNumber"];
$regType= $_POST["regType"];
$certificateType= $_POST["certificateType"];
$score= $_POST["score"];
$UCountry= $_POST["UCountry"];
$date = $gmdate;


$sql = "INSERT INTO myguests (fName, lName, phone, regType, certificateType, score,  UCountry, reg_date , stat)
VALUES ('$FName', '$LName', '$MNumber','$regType','$certificateType','$score' ,'$UCountry' ,'$gmdate' ,'0')";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
$msg_to_mail='<div style="background-color:grey;">'
.'<h4 style="color:white;">NEW REQUEST </h4>'  
	.'<p style="color:white;">First Name: '  . $FName . '</p>'
	.'<p style="color:white;">Last Name:'  . $LName . '</p>'
	.'<p style="color:white;">Phone :'  . $MNumber . '</p>'
	.'<p style="color:white;">Registration Type:'  . $regType . '</p>'
	.'<p style="color:white;">Certification Type:'  . $certificateType . '</p>'
	.'<p style="color:white;">Score:'  . $score . '</p>'
	.'<p style="color:white;">Preferred Country:'  . $UCountry . '</p>'
	.'<p style="color:white;">Registration date:'  . $gmdate . '</p>'
	 . '</div>'
	;
	 
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->isHTML();
$mail->Username = 'owlconsulting.uzb@gmail.com';
$mail->Password = 'Owlconsulting2018';
$mail->setFrom('owlconsulting.uzb@gmail.com');
$mail->Subject = 'New request!';
$mail->Body = $msg_to_mail;




$mail->addAddress('zokirovbobur93@gmail.com','Ibrokhimii@mail.ru');

if(!$mail->Send()){
  echo 'Error';
} 
else{
  
}



?>


</body>
</html>