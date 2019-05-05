<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
//unset($_SESSION['admin']);
//session_destroy();
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
header("Location: login.php");
?>
Good Luck!
</body>
</html>