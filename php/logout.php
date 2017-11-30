<?php
	
	try
		{
			session_destroy(); # Cookie destroy
		}

	catch(Exception $e)
		{
			echo "An error has occured";
		}

?>
