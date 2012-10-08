<?php
	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		die('Could not connect to database'.mysql_error());
	}
	
	 $dataselect=mysql_select_db("justservice", $con);
	 
	 if(!$dataselect)
{
	die("Database namelist not selected".mysql_error());
}
?>