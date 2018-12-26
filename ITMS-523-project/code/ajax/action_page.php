<?php
$servername = "localhost";
$username = "theappbh_ahlia";
$password = "pCW_O&6%)cmC";
$dbname = "theappbh_ahlia";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query = $_POST["name"];

  $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection

$sql = "SELECT * FROM youtubeinfo WHERE viedeoname LIKE '%".$query."%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>