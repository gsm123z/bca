<?php
if (isset($_POST['submit'])) {
	$uname=$_POST['uname'];
	$pass = $_POST['pass'];
	if($uname=='GSS' && $pass='bca')
	{
		echo "Login Success";
	}
	else
	{
		echo "Login Failed";
	}
}


?>