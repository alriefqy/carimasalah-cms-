<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=simplecms','root','');//pembuatan objek PDO .
	$db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//penanganan error, dengan dua metode
}
catch(PDOexeption $e)//fungsi modern dari if else ketika mengecek error. sistem akan otomotis menangkap error 
{
	echo $e;//->getMessage();
	die();
}


?>