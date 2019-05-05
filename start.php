<?php


// sql to create table
$servername = "localhost";
$username = "owlroot";
$password = "Zakerxeon17";
$dbname = "owldb";


// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




// sql to create table
$sql = "CREATE TABLE if not exists MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
fName VARCHAR(30) NOT NULL,
lName VARCHAR(30) NOT NULL,
phone VARCHAR(50) NOT NULL,
regType VARCHAR(50) NOT NULL,
certificateType VARCHAR(50) NOT NULL,
score VARCHAR(50) NOT NULL,
UCountry VARCHAR(50) NOT NULL,
stat INT(6) UNSIGNED ,
reg_date datetime, 
last_change_date TIMESTAMP
)";


if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>