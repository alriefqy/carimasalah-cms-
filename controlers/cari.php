<?php

	//session_start();
	require('../models/load_class.php');
	require ('../libs/path.php');

	$cari = $_POST['cari'];

	
	header("location:".root."result");

?>