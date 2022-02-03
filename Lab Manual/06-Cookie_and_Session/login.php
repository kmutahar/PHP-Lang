<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Login page</title>
</head>
<body>
<?php
	if(!isset($_POST['submit']))
	{
?>
	<form method="post">
	Username:<input type="text" id="username" name="uname"><br/>
	Password:<input type="password" id="password" name="pass"><br/>
	<button type="submit" name="submit">Login</button>
	</form>
<?php
	}
	else
	{
		$username = $_POST['uname'];
		$password = $_POST['pass'];
		
		if($username == 'your_name' && $password == '123456')
		{
			setcookie('user',$username, time()+86400, '/');
			header('Location: cp/secure.php');
		}
		else
		{
			echo 'Username or password is not cirrect!<br/>';
			echo '<a href="login.php">Try Again!</a>';
		}
	}
?>
</body>
</html>
