<?php
$servername = "localhost"; //it can be url for paid servers
$username = "theappbh_ahlia"; //DB user name - root only! for localhost
$password = "pCW_O&6%)cmC";     //DB pass
$dbname = "theappbh_ahlia"; // you need to create this DB first , usually in installation we create BD

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table

//table name is youtubeinfo

$sql = "CREATE TABLE youtubeinfo (   
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
viedeoname VARCHAR(500) NOT NULL,
url VARCHAR(5000) NOT NULL,
dblink VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table youtubeinfo created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>