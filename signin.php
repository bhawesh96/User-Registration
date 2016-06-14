<?php 

if(!empty($_POST['signinsubmit']))
{
//Connect to database
	include_once('conn.php');

if(!$db_selected)
{
	die('cannot access' . $dbname . ':' . mysql_error());
 }

 $email = $_POST['email'];
 $enteredPassword = $_POST['password'];
 

 $sql = "SELECT * FROM signup WHERE email = '{$email}'";
 $result = mysql_query($sql);


if(mysql_num_rows($result) > 0) {
    while($row = mysql_fetch_assoc($result)) {
        $fname = $row["fname"];
        $lname = $row['lname'];
        $password = $row['password'];
        $securityQue = $row['securityque'];
        $securityAns = $row['securityans'];
    }

if($password == $enteredPassword)
{
	echo 'Welcome' .' '.  $fname;
}
else
	echo 'Wrong Password';
}

 else {
    echo "User doesn't exist";
}
}
/*
---------------------------------------------------
FORGOT FROM SECURITY
---------------------------------------------------*/

else if(!empty($_POST['forgotsubmit'])){

//Connect to database
	include_once('conn.php');

if(!$db_selected)
{
	die('cannot access' . $dbname . ':' . mysql_error());
 }

 $forgotemail = $_POST['forgotemail'];
 $enteredSecurityAns = $_POST['securityans'];
 

 $sql = "SELECT * FROM signup WHERE email = '{$forgotemail}'";
 $result = mysql_query($sql);


if(mysql_num_rows($result) > 0) {
    while($row = mysql_fetch_assoc($result)) {
        $fname = $row["fname"];
        $lname = $row['lname'];
        $password = $row['password'];
        $securityQue = $row['securityque'];
        $securityAns = $row['securityans'];
    }


if($enteredSecurityAns == $securityAns)
	echo 'new password allowed';
else
	echo 'spammer';


 }
 else
 	echo "user doesn't exist";
}



/*
---------------------------------------------------
FORGOT FROM EMAIL
---------------------------------------------------*/

else if(isset($_POST['email']) && !isset($_POST['forgotans']) &&!isset($_POST['newpassword'])){

//Connect to database
	include_once('conn.php');

if(!$db_selected)
{
	die('cannot access' . $dbname . ':' . mysql_error());
 }

 $forgotemail = $_POST['email']; 

 $sql = "SELECT * FROM signup WHERE email = '{$forgotemail}'";
 $result = mysql_query($sql);


if(mysql_num_rows($result) > 0) {
    while($row = mysql_fetch_assoc($result)) {
        $fname = $row["fname"];
        $lname = $row['lname'];
        $password = $row['password'];
        $securityQue = $row['securityque'];
        $securityAns = $row['securityans'];
    }

    switch($securityQue){
    	case "birthplace":
    		$data='What is your birthplace?';
    		break;
    	case "novel":
    		$data='Which is your favourite novel?';
    		break;
    	case "color":
    		$data='What is your favourite color?';
    		break;
    			
    }

// echo 'Hello '.$fname. '! </br>'. 'We will now proceed to Security Question'. '</br>'.'</br>'.$data.'</br>'."<input type='text' name='forgotanswer'>".'</br>'."<button type='submit'>Ok</button>";

echo 'Hello '.$fname. '! </br>'. 'We will now proceed to Security Question'. '</br>'.'</br>'.$data.'</br>';
// "<input type='text' name='forgotanswer' placeholder='answer'></input>
// <button class='button' type='submit' name='submitforgotanswer' id='submitforgotanswer' value='ok'>Submit</button>"

 }
 else
 	{$data= "DNE"; //user DNE
 	echo $data;
	}
}


else if(!empty($_POST['forgotans'])){


include_once('conn.php');

if(!$db_selected)
{
	die('cannot access' . $dbname . ':' . mysql_error());
 }

 $forgotemail = $_POST['email']; 
 $forgotanswer=$_POST['forgotans'];

 $sql = "SELECT * FROM signup WHERE email = '{$forgotemail}'";
 $result = mysql_query($sql);


if(mysql_num_rows($result) > 0) {
    while($row = mysql_fetch_assoc($result)) {
        $securityAns = $row['securityans'];
    }

	if($forgotanswer == $securityAns)
		echo 'correct answer';
	else
		echo 'wronganswer';

}
}



else if(!empty($_POST['newpassword'])){


include_once('conn.php');

if(!$db_selected)
{
	die('cannot access' . $dbname . ':' . mysql_error());
 }

 $newpassword=$_POST['newpassword'];
 $email = $_POST['email'];

 $sql = "UPDATE signup SET password='{$newpassword}' WHERE email = '{$email}'";

if(!mysql_query($sql)){
	$data='updatefail';
}

else{
	$data = 'updatesuccess';
}
echo $data;

mysql_close();
}

 ?>