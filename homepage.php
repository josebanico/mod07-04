<?php 
	session_start();
	if(isset($_SESSION['current_user'])){
		echo "<h1>" . $_SESSION['current_user'] . "</h1>";
		echo "<a href='logout.php'>Logout</a>";
	}else{
		echo "Please login first";
		echo "<a href='./session_login.php'>Click Here to login</a>";
	}
?>