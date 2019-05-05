<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/loginStyle.css">
</head>
<body id="bodyPart">


<div id="login_div">
<form action="" method="POST">
    <input type="password" placeholder="Enter Password" name="psw" required>
      <input id="button" type="submit" value="Login">  
   
</form>

</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if($_POST['psw']=='root')
  {
    //$_SESSION['admin']='admi';
    $_SESSION['admin']='admin';
    header("Location: admin.php");
  }
  else {
    echo 'Password is incorrect';
  }

}
?>


</body>
</html>
