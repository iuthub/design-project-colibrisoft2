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

// sql to delete a record
$sql = "DELETE FROM myguests WHERE stat='100'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();


$msg_to_mail='<div style="background-color:grey;"><h4 style="color:white;">Database is cleared from successful students </h4></div>';
	 
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
$mail->Subject = 'Db is cleared!';
$mail->Body = $msg_to_mail;




$mail->addAddress('zokirovbobur93@gmail.com','Ibrokhimii@mail.ru');

if(!$mail->Send()){
  echo 'Error';
} 
else{
  
}


?>