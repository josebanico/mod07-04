<?php 
	session_start();
	$username=htmlspecialchars($_POST['username']);
	$password=htmlspecialchars($_POST['password']);
	$hash_password=sha1($password);
	if(authenticate($username,$hash_password)){
		// echo "User has logged in successfully";
		$_SESSION["current_user"]=$username;
		header('location:http://localhost/day11/mod07-04/homepage.php');
	}else{
		// echo "Incorrect user details";
		header('location:http://localhost/day11/mod07-04/error.php');
	}
	function authenticate($uname,$pw){
		$hash_password_to_compare = sha1("secret");
		if($uname == "admin" && $pw === $hash_password_to_compare){
			return true;
		}else{
			return false;
		}
	}
?>