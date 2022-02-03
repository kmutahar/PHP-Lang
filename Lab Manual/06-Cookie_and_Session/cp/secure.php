<?php
	if(! isset ($_COOKIE['user']))
	{
		header('location: ../login.php');
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Control Panel</title>
</head>
<body>
	<p>Welcome <?=$_COOKIE['user']?>!</p>
	<h1>This is a secure contents!</h1>
	Do you want to exit?, click <a href="logout.php">here</a>
</body>
</html>
