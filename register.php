<?php

	if($conn = mysqli_connect('localhost', 'root', '', 'register'))
	{
		//echo 'connected';
	}
	else
	{
		echo 'not connected';
	}

	$email = $_POST['email'];
	$pswd = $_POST['password'];

	$q = "INSERT INTO users(email, password) VALUES('$email', '$pswd')";
	if(mysqli_query($conn, $q))
	{
		echo 'register success';
	}
	else
	{
		echo 'error';
	}

?>