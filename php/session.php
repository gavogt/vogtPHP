<?php

	try
	{
		session_name('test');
		session_start();
		if(!empty($_SESSION["userName"]));

	} catch(exception $e)
	{
		echo "";
	}

?>
