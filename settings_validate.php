<?php 
	require_once 'db_connect.php';
	session_start();
	if($_SESSION['name']=="" || $_SESSION['name']==null)
	{
		header("Location:login_page.php");
	}

	$qry=mysql_query("UPDATE service_provider SET sp_name= '$_REQUEST[full_nm]', sp_address='$_REQUEST[address]', sp_contact='$_REQUEST[contact]',sp_city='$_REQUEST[city]',sp_state='$_REQUEST[state]',sp_email='$_REQUEST[email]' WHERE sp_username='$_SESSION[name]'",$con);
	if(!qry)
	{
		die('Could not update query'.mysql_error());
	}
	header("Location:administration.php");
?>