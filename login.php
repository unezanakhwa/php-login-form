<?php

$conn= mysqli_connect("localhost", "root", "" , "php");
if(isset($_POST['submit_buttn']))
{
	$username = $_POST['user'];
    $password = $_POST['password'];
	$query ="select * from db WHERE user='$username' AND password='$password'";
	$query_run = mysqli_query($conn,$query);.
	if(mysqli_num_rows($query_run)>0)
	{
		echo "Successfully Login";
	}
	else
	{
		echo "Invalid Username/Password";
	}
}
	  	
?>
<!Doctype html>
<html>
<head>
<title>Login</title>
</head>
<body>
<h1>Login Form</h1>
<form method="post">
<table>
<tr>
<td>Username:</td>
<td><input type="text" name="user" class="textInput"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" class="textInput"></td>
</tr>
<tr>
<td><input type="submit" name="submit_buttn" value="Submit"></td>
</tr>
</table>
</body>
</html>