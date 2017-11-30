<?php
	
	// CSRF protection
	$token_CSRF = bin2hex(random_bytes(32));

	$_SESSION['token'] = $token_CSRF;

?>
