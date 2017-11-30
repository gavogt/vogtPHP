<?php
include ('connect.php') ?>

<?php

	include ('session.php');

	$password = $_POST["password"];
	$userName = $_POST["userName"];
	
	try
	{
		if (isset($_POST["submit"]))
		{
			if (empty($_POST["userName"]) || empty($_POST["password"]))
			{

				# Display error if field is empty
				echo "Missing fields";
			}
			else
			{
				$query = "SELECT * FROM userinfo WHERE userName = :userName and password = :password";
				$stmt = $db->prepare($query);
				$stmt->execute(array(
					':userName' => $userName,
					':password' => $password
				));
				$row = $stmt->fetch(PDO::FETCH_BOTH);
				$count = $stmt->rowCount();
				if ($count > 0)
				{
					# Set up username message
					$_SESSION["userName"] = $_POST["userName"];

					# Redirect to thank you if sucessful
					header("Location:/mySite/php/myWelcome.php");
				}
				else
				{

					# If username or password is incorrect
					echo "The Username and Password combination isn't correct";
				}
			}
		}
	}

	catch(Exception $e)
	{
		echo "An error has occured";
	}

?>