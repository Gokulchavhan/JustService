<?php

require_once 'db_connect.php';

$user=$_POST['user_nm'];
$pass=$_POST['password'];

$qry=mysql_query("SELECT * FROM service_provider WHERE sp_username='$user'", $con);

if(!$qry)
{
	mysql_close($con);
	die("Query Failed: ". mysql_error());
}
else
{
	$row=mysql_fetch_array($qry);
	if($_POST['user_nm']==$row["sp_username"]&& md5($_POST['password'])==$row["sp_password"])
	{
		session_start();
		$_SESSION['name']=$_POST['user_nm'];
		mysql_close($con);
		header("Location:administration.php");
	}
	else
	{
		mysql_close($con);
		header("Location:index.php?log=username or password you entered is incorrect");

	}
}


?>