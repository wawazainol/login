<?php

$host="localhost";
$username="root";
$password="";
$db="login";

mysql_connect($host,$username,$password);
mysql_select_db($db);

if(isset(["id"]))
{
	$id=$_POST['id'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="Select * from loginform where user='".$username."' AND pass='".$password."'
	limit 1";

	$result=mysql_query($sql);
}


?>