<?php
session_start();

?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$servername = "localhost";
$username = "owlroot";
$password = "Zakerxeon17";
$dbname = "owldb";

$id = $_POST["id"];
$status = $_POST["Status"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE myguests SET stat='$status' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "<meta http-equiv='refresh' content='0'>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
}
else {
  $isAdmin = $_SESSION['admin'];
  if($isAdmin !='admin')
  {
    header("Location: login.php");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/adminStyle.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div  class="header">
  <h2 style="margin:5px">Ro'yhat</h2>
 
 <div id= "bt_change" >
<button  onclick="giveProcess()" class="dropbtn">Status O'zgartirish</button> 

      <div id="myDropdown" class="dropdown-content">
      
      <form id="form_for_admin" action="" method="post" >
        <input class="dropbtn" size="40" id="out_id" name="id" placeholder="Id" onclick="showDivStatus()" >
        <div style="display: none;/**  *********************  */" id="form_divStatus" >
        <p >Bosqich:</p>
        <input  id="stat_" class="dropbtn" type="range" name="Status" min="0" max="100" step="10" onchange="updateTextInput(this.value);"><p id="status_number"></p>
        <br>
        <p id="status_info"></p>
        
        <input type="submit" >  
        </div>
        
      </form>

      </div>  

<button onclick="confirm_clear()" type="" class="dropbtn">Tozalash</button>
<a href="session_delete.php">Chiqish</a>
</div>


</div>


<table class="w3-table-all">
    <thead>
      <tr class="w3-green">
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        
        <th>Phone</th>
        <th>regType</th>
        <th>CertificateType</th>
        <th>score</th>
        <th>PrefCountry</th>
        <th>Reg Date </th>
        <th>Last Change </th>
        <th>Status</th>
      </tr>
    </thead>


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
    
    $sql = "SELECT * FROM myguests";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          
            $id = $row["id"];
            $fName = $row["fName"];
            $lName = $row["lName"];
            $phone = $row["phone"];
            $regType = $row["regType"];
            $certfificateType = $row["certificateType"];
            $score = $row["score"];
            $UCountry = $row["UCountry"];
            $stat = $row["stat"];
            $reg_data = $row["reg_date"];
            $last_change_date = $row["last_change_date"];

            echo '<tr >';
            echo "<td>$id</td>";
            echo "<td>$fName</td>";
            echo "<td>$lName</td>";
            echo "<td>$phone</td>";
            echo "<td>$regType</td>";
            echo "<td>$certfificateType</td>";
            echo "<td>$score</td>";
            echo "<td>$UCountry</td>";
            echo "<td>$reg_data</td>";
            echo "<td>$last_change_date</td>";
            
            echo "<td>$stat</td>";
            echo'</tr>';

        }
    } else {
        echo "0 results";
    }
    
    $conn->close();

    ?>
  </table>


<script>

function loadDoc() {
  /* AJAX request */
  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "adm_clear.php", true);
  xhttp.send();
/*refresh page*/
  document.location.reload(true);
}
</script>
<script>
function confirm_clear() {
    var txt;
    var r = confirm("Are you sure?");
    if (r == true) {
loadDoc();
        
    } else {

        
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>
<script>
function myFunction() {
    location.reload(true);
}
</script>
<script>


function showDivStatus(){
  document.getElementById("form_divStatus").style.display="block"
}
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function giveProcess() {
    document.getElementById("myDropdown").classList.toggle("show");
    
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
         document.getElementById("form_divStatus").style.display="none";
      }
    }
  }
}

function updateTextInput(val) {
          document.getElementById('status_number').innerHTML=val;
          if(val=='10')
          {
            document.getElementById('status_info').innerHTML="Sending message from client to owlConsulting";
          }
          else  if(val=='20')
          {
            document.getElementById('status_info').innerHTML="Achieving mail by owlConsulting";
          } 
          else  if(val=='30')
          {
            document.getElementById('status_info').innerHTML="1st Validation successful";
          }  
          else  if(val=='40')
          {
            document.getElementById('status_info').innerHTML="Waiting for payment";
          }   
          else  if(val=='50')
          {
            document.getElementById('status_info').innerHTML="Payment is successful";
          }
          else  if(val=='60')
          {
            document.getElementById('status_info').innerHTML="2nd Validation started";
          }
          else  if(val=='70')
          {
            document.getElementById('status_info').innerHTML="2nd Validation successful";
          }
          else  if(val=='80')
          {
            document.getElementById('status_info').innerHTML="Document translation";
          }
          else  if(val=='90')
          {
            document.getElementById('status_info').innerHTML="Submission to University";
          }
          else  if(val=='100')
          {
            document.getElementById('status_info').innerHTML="Bough ticket";
          }
        }











</script>







</body>
</html>
