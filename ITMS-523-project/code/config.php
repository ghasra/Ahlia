<?php

$config = array();

$config['site_title'] = 'Ahlia Hack ITMS 523'; // Website Title

$config['site_meta'] = 'Ahlia Hack'; // Site meta description

$config['site_url'] = 'http://i1.temp.domains/~theappbh/ahlia/'; // Site url with slash

$config['enable_ads'] = false; // Enable ads? true / false

$config['server_email'] = 'oghasra@gmail.com'; // Your server email address where all emails will be sent FROM

$config['contact_email'] = 'oghasra@gmail.com'; // Your personal email to receive all contact email

$config['ads_code'] = '<div class="ads"><img src="img/ads.png" alt="ads banner"></div>'; //paste your ad code into the quotemarks

$dbhost = 'localhost';
$dbname = 'theappbh_ahlia';
$dbuser = 'theappbh_ahlia';
$dbpass = 'pCW_O&6%)cmC';
try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $excepiton->getMessage();
}
?>
