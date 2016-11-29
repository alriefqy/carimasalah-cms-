<?php
	
	define('adm','http://localhost/simplecms/admin/');

	session_start();
	session_unset();
	session_destroy();
	header('location:'.adm);	
	
?>