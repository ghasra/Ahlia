<?php
$servername = "localhost"; //it can be url for paid servers
$username = "theappbh_ahlia"; //DB user name - root only! for localhost
$password = "pCW_O&6%)cmC";     //DB pass
$dbname = "theappbh_ahlia"; // makr code work

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$videoname1 = "A";    ///this is simple ver you can change it to any neme -- make $videoname1 = another $Ver
$url ="b";            // this must be the download lont from youtube
$dblink1 = "c";       //this is for localhost path of the file, servers do not allow's download moving file from server to anther
                      //uploading from URL links is  forbidden for security sersons unless you have root access--> 


// you will ger A,B,C in the DB in the code is correct
$sql = "INSERT INTO youtubeinfo (viedeoname, url, dblink)
VALUES ('$videoname1', '$url', '$dblink1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>