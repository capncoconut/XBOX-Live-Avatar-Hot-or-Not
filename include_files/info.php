<?
	$dbuser = 'enter in the db user';
	$dbhost = 'localhost';
	$dbname = 'the name of your db';
	$dbpass = 'super secret password like 12345';

	
	$connection = mysql_connect($dbhost, $dbuser, $dbpass);
	mysql_select_db($dbname,$connection);
	
	unset($dbuser, $dbhost, $dbname, $dbpass);
?>