<?php

	try
	{
		session_name('test');
		session_start();
		$_SESSION["userName"];

	} catch(exception $e)
	{
		echo "";
	}

?>
