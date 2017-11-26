<?php

	include 'connect.php';

	if (isset($_POST['submit']))
	{

		// New Array

		$user = array();
		$user[0] = $_POST["firstName"];
		$user[1] = $_POST["lastName"];
		$user[2] = $_POST["userName"];
		$user[3] = $_POST["password"];
		$user[4] = $_POST["email"];
		$user[5] = $_POST["comments"];

		// Verify
		
		$stmt = $db->prepare("SELECT userName FROM users WHERE userName = ':userName'");
		$stmt->bindParam(':username', $user[2]);

		// The prepared statement

		$stmt->execute();
		if ($stmt->rowCount() > 0)
		{
			echo "Please choose another name";
		}
		else
		{

			// Redirect to thank you if sucessful

			header("Location:/mySite/php/thankyou.php");
		}
	}
	else
	{
		echo 'Error!'; // Note to redesign
	}

?>