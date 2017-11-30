<?php
	
	try
		{
			session_destroy(); # Cookie destroy

			# Redirect to thank you if sucessful
            header("Location:/mySite/php/loggedout.php");
		}

	catch(Exception $e)
		{
			echo "An error has occured";
		}

?>
