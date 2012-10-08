<?php
require_once 'db_connect.php';

$cat=$_GET['cat'];
$id=$_GET['id'];
$comment=htmlentities($_POST['comment']);
$name=htmlentities($_POST['name']);
$email=htmlentities($_POST['email']);



$qry=mysql_query("INSERT INTO comments(comment_id,sp_id,category_id,comment_name,comment_email,comment_desc)VALUES(comment_id,'$id','$cat','$name','$email','$comment')", $con);
if(!$qry)
{
mysql_close($con);
die("Query Failed: ".mysql_error());
}
else
{
mysql_close($con);
header("Location:provider.php?cat=$cat&id=$id");
}
?>