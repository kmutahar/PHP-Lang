<?php
	unset($_COOKIE[]);
	setcookie('user',NULL, time()-86400,'/');
	header('Location: secure.php');
?>
