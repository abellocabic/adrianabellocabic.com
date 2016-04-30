<?php

	session_start();
	include "../db/connection.php";

	$formUsername = $_POST['username'];
	$formPassword = $_POST['password'];


	//Condition to validate password and create a session
	if (isset($_POST['btnLoginSubmit']))
	{
		$stmt = $dbh->prepare("SELECT * FROM `users` WHERE `username` like :username AND `password` like :password");
		$stmt->bindValue(":username", $formUsername);
		$stmt->bindValue(":password", $formPassword);
		$stmt->execute();

		$user = $stmt->fetch(PDO::FETCH_ASSOC);

		if ($user)
		{
			unset($_SESSION['errors']);
			$_SESSION['user']['username'] = $user['username'];
			$_SESSION['user']['id'] = $user['id'];
			$_SESSION['user']['first_name'] = $user['first_name'];
			header("location: dashboard.php");
		}
		else
		{
			$_SESSION['errors'] = "Wrong username and password";
			header('location: login.php');
		}

	}




