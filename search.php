<?php 

if(!empty($_GET['q']))
{
	include_once('conn.php');

	$q = $_GET['q'];
	$length = strlen($q);
	$query = "SELECT * FROM signup WHERE fname LIKE '%$q%' LIMIT 3";
	
	$result = mysql_query($query);

	 while($output=mysql_fetch_assoc($result))
	 {	
	 	if(strncasecmp($q, $output['fname'],2))
	 	echo '<a>' .$output['fname'].'</a>'.'</br>'; //search result
	 }



}
 ?>

