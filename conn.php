<?php 

	$username = 'root';
	$pass = '';
	$dbname = 'signup';

	$db = mysql_connect('localhost', $username, $pass);

	if(!$db){
		 die('failed to connect' . mysql_error());
	}

	$db_selected = mysql_select_db($dbname, $db);


 ?>