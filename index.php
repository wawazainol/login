<?php

$host="localhost";
$username="root";
$password="";
$db="login";

$mysqli=mysqli_connect($host,$username,$password);
mysqli_select_db($mysqli,$db);


if(isset($_POST["id"]))
{
	$id=$_POST['id'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="Select * from loginform WHERE username='".$username."' AND password='".$password."'
	limit 1";

	$result=mysqli_query($mysqli,$sql);
	if(mysqli_num_rows($result)==1)
	{
		echo "You have successfully loged in";
		exit();
	}
	else
	{
		echo "You have entered a wrong username or password";
		exit();
	}
}


?>


<?php

$host="localhost";
$username="root";
$password="";
$db="userlogin";

$mysqli=mysqli_connect($host,$username,$password);
mysqli_select_db($mysqli,$db);


if(isset($_POST["id"]))
{
	$id=$_POST['id'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="Select * from userlogin WHERE Username='".$username."' AND Password='".$password."'
	limit 1";

	$result=mysqli_query($mysqli,$sql);
	if(mysqli_num_rows($result)==1)
	{
		echo "You have successfully loged in";
		exit();
	}
	else
	{
		echo "You have entered a wrong username or password";
		exit();
	}
}

?>






<html>
	<head>
	</head>
	
	<body>
		<center><table>
			<form method="POST" action="#"> 
				<tr>
				<td colspan="3"><h2>Login Account</h2></td>
				</tr>
				
				<tr>
				<td><label for="id">ID</label></td>
				<td><input type="text" name="id" required placeholder="Enter your ID" ></td>
				<td></td>
				</tr>
				<tr>
				<td><label for="username">Username</label></td>
				<td><input type="text" name="username" required placeholder="Enter your username"></td>
				<td></td>
				</tr>
				<tr>
				<td><label for="password">Password</label></td>
				<td><input type="text" name="password" required placeholder="Enter your password"/></td>
				<td></td>
				</tr>
				<tr><td></td><td></td><td></td></tr>
				<tr>
				<td></td>          
				<td><button type="submit">SUBMIT</button></td>  
				<td></td>     
				</tr>
			</form>
		</table></center>
	</body>
</html>