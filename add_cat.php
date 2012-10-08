<?php
	require_once 'db_connect.php';
	
	$cat=$_REQUEST['cat'];
	$desc=$_REQUEST['desc'];
	
	$qry=mysql_query("INSERT INTO categories VALUES('category_id','$cat','$desc')");
	if(!qry)
	{
		die("Cannot add to categories".mysql_error());
	}
	header("Location:register.php");
?>