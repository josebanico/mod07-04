<?php 
	session_start();
	session_unset();
	session_destroy();
	echo "<h1>Log out successfully</h1> <br>";
	echo "<a href='session_login.php'>Log In</a>";
 ?>