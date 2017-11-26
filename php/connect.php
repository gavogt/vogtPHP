<?php

	# Connect to local host
	try
		{
			$db = new PDO('mysql:host=localhost;dbname=db;charset=utf8', 'root', 'Rc3Y06izup3pyT4n');
		}

	catch(Exception $e)
		{
			echo "An error has occured"; # Prevent database details
		}

?>
