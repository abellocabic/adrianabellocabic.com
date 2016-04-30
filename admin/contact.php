<?php

	include '../db/connection.php';


	echo "<pre>";
	print_r($contact_errors);
	echo "</pre>";

	//Information from index form
	$contact_firstname = $_POST['contact_firstname'];
	$contact_lastname = $_POST['contact_lastname'];
	$contact_email = $_POST['contact_email'];
	$contact_message = $_POST['contact_message'];
	$btnContactSubmit = $_POST['btnContactSubmit'];
	$contact_errors = [];


	if (isset($_POST['btnContactSubmit']))
	{
		if (empty($_POST['contact_firstname']))
		{
			$contact_errors[] = "<li>Vous n'avez pas indiqué votre Prénom<li>";
			header('location: ../index.html');
		}
		elseif (!isset($contact_email))
		{
			$contact_errors[] = "<li>Vous n'avez pas indiqué votre email<li>";
			header('location: ../index.html');
		}	


		// $stmt=$dbh->prepare("INSERT INTO `messages`(`contact_firstname`, `contact_lastname`, `contact_email`, `contact_message`) VALUES (:contact_firstname, :contact_lastname, :contact_email, :contact_message)");
		// $stmt->bindValue(":contact_firstname", $contact_firstname, PDO::PARAM_STR);
		// $stmt->bindValue(":contact_lastname", $contact_lastname, PDO::PARAM_STR);
		// $stmt->bindValue(":contact_email", $contact_email, PDO::PARAM_STR);
		// $stmt->bindValue(":contact_message", $contact_message, PDO::PARAM_STR);
		// $stmt->execute();

		// echo "message sent";
	}





