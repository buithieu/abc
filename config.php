<?php

define('DB_SERVER', 'ec2-52-44-55-63.compute-1.amazonaws.com');
define('DB_USERNAME', 'nzrlssjeofxzeg');
define('DB_PASSWORD', '99f9b4a1e72406f28d3f7ed3a5d922d59998ab6ac356098375bd4ec49109eb70');
define('DB_NAME', 'd371u42e4b5ast');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
