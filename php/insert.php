<?php

	include 'connect.php';

	if (isset($_POST['submit']))

	    {
	    # New Array
	    $user = array();
	    $user[0] = $_POST["firstName"];
	    $user[1] = $_POST["lastName"];
	    $user[2] = $_POST["userName"];
	    $user[3] = $_POST["password"];
	    $user[4] = $_POST["email"];
	    $user[5] = $_POST["comments"];
	    # Note to test SQL Injections
	    $stmt = $db->prepare("INSERT INTO `userinfo` (`firstName`, `lastName`, `userName`, `password`, `email`, `comments`) VALUES (:firstName, :lastName, :userName, :password, :email, :comments)");
	    # Parameter, Value
	    $stmt->bindValue(':firstName', $user[0]);
	    $stmt->bindValue(':lastName', $user[1]);
	    $stmt->bindValue(':userName', $user[2]);
	    $stmt->bindValue(':password', $user[3]);
	    $stmt->bindValue(':email', $user[4]);
	    $stmt->bindValue(':comments', $user[5]);
	    # The prepared statement
	    $stmt->execute();

	    # Redirect to thank you if sucessful
	    header("Location:/mySite/php/thankyou.php");
	    }
	  else
	    {
	    echo 'Error!'; # Note to redesign
	    }

?>