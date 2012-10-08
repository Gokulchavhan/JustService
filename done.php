<?php

require_once 'db_connect.php';
session_start();
if($_SESSION['name']=="" || $_SESSION['name']==null)
{
	header("Location:login_page.php");
}

$id=$_REQUEST['pro'];

$result=mysql_query("Update eventcalender set status='Done' where evt_id='$id'",$con);

echo "Thankyou for providing service<br/> Wait while we redirect you back";
header("Refresh:5; url=administration.php")
?>

