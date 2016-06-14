<?php 

//Connect to database
	include_once('conn.php');

if(!$db_selected)
{
	die('cannot access' . $dbname . ':' . mysql_error());
 }

//Fetch HTML form details
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $gender = $_POST['gender'];
 $dob = $_POST['dob'];
 $password = $_POST['password'];
 $securityque = $_POST['securityque'];
 $securityans = strtolower($_POST['securityans']);
 

$sql = "INSERT INTO signup (fname, lname, email, gender, dob, password,securityque, securityans) VALUES ('$fname', '$lname', '$email', '$gender', '$dob','$password', '$securityque', '$securityans')";  		

//this error will occur if user already registered because email is UNIQUE
if(!mysql_query($sql))
{
	echo 'user already exists';
}

else{
	echo 'Thank you for signing up ' . $fname;
}

mysql_close();



//Email Validity
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
  $validity = 'unvalid';
 else
  $validity = 'valid';




// // test purposes
// echo 'fname = ' . $fname . '</br>';
// echo 'lname = ' . $lname . '</br>';
// echo 'email = ' . $email . ' ::: ' .$validity .  '</br>';
// echo 'dob = ' . $dob . '</br>';
// echo 'username = ' . $username . '</br>';
// echo 'password = ' . $password . '</br>';

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


 ?>