<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>

<?php
session_start();

include("conn.php");

/*$username=$_POST["txtunm"];
$password=$_POST["field1"];
$newpassword=$_POST["field2"];
$conpassword=$_POST["field4"];*/


/*$result=mysql_query("SELECT password FROM member WHERE user_id='$username'");
if(!$result)
	{
	echo "the username you entered does not exist";
	}
	else if($password!=mysql_result($result,0))
	{
	echo " you entered an incorrect password";
	
	}
	
	if($newpassword=$conpassword)
	$sql=mysql_query("UPDATE member SET password ='$newpassword' where user_id='$username'");
	if($sql)
	{
	echo "You have successfully changed your password";
	}
	else
	{
	echo "Passwords do not match";
	
	}*/





if(isset($_POST["Submit"])=="Submit")
{

	$password=$_POST["field1"];
	$newpassword=$_POST["field2"];
	$conpassword=$_POST["field4"];

	$q="update reg set pass='$newpassword' where pass='$password'";

	/*mysql_query($q,$link)or die('Failed to Update');*/

	if($conn -> query($q) === TRUE)
    {
	
			echo"<script>alert('Password Updated')</script>";
			header("Location:password.php ? idd=update");
			exit();
	}
}

?>
</body>
</html>
