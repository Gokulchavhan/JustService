<?php
	require_once 'db_connect.php';
	$title=$_POST['etitle'];
	$syear=$_POST['syear'];
	$smonth=$_POST['smonth'];
	$sday=$_POST['sday'];
	$eyear=$_POST['eyear'];
	$emonth=$_POST['emonth'];
	$eday=$_POST['eday'];
	$shour=$_POST['shour'];
	$sminute=$_POST['sminute'];
	$ssecond=$_POST['ssecond'];
	$ehour=$_POST['ehour'];
	$eminute=$_POST['eminute'];
	$esecond=$_POST['esecond'];
	$pno=$_POST['pno'];
	$evtPlace=$_POST['evtPlace'];
	$evtUrl=$_POST['evtUrl'];
	$evtPerson=$_POST['evtPerson'];
	$phone1=$_POST['phone1'];
	$phone2=$_POST['phone2'];
	$phone3=$_POST['phone3'];
	$edesc=$_POST['edesc'];
	
	$cat=$_POST['category'];
	
	$dt=$sday."-".$smonth."-".$syear;
	$stime=$shour.":".$sminute.":".$ssecond;
	$etime=$ehour.":".$eminute.":".$esecond;
	$evtphone=$phone1."-".$phone2."-".$phone3;
	
	$qry=mysql_query("INSERT INTO eventcalender VALUES('evtid','$title','$dt','$stime','$etime','$pno','$evtPerson','$evtphone','$evtPlace','$evtUrl','$edesc','Wait')");
	if(!$qry)
	{
		die("could not insert into calendar".mysql_error());
	}	
	header("Location:provider.php?cat=$cat&id=$pno&log=successfully regestered for the service");
?>