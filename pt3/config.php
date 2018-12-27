<?php
   define('DB_SERVER', 'lrgs.ftsm.ukm.my');
   define('DB_USERNAME', 'a161180');
   define('DB_PASSWORD', 'bigpinkbear');
   define('DB_DATABASE', 'a161180');
   $dbconnect = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
   
   if ($dbconnect->connect_error) {
	die('Database Not Connect. Error : ' . $dbconnect->connect_error);
}

?>