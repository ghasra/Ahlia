<!DOCTYPE html>
<html>
<body>

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

$sql = "SELECT id, viedeoname, url, reg_date, dblink FROM youtubeinfo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> ID: ". $row["id"]. " - Name: ". $row["viedeoname"]. "  " . $row["url"] . " " . $row["reg_date"] . "<br>";
        echo "<a href=". $row["dblink"].">Download here</a>";

    }

} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>