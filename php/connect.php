<?php

	# Connect to local host
	try
		{
			$db = new PDO('mysql:host=localhost;dbname=db;charset=utf8', 'root', 'dunkel1');
		}

	catch(Exception $e)
		{
			echo "An error has occured"; # Prevent database details
		}

?>
