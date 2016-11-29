<?php
// semua class yang ada di panggil dan dimasukkan disini, agar nantinya tinggal dipanggil satu kali
//../libs/connect.php;
require_once('connect.php');

function autoload($class)
{
	$namaFile = $class.'.php';//mencari semua file php dalam folder 
	include_once $namaFile;
	//fungsi autoload_register berfungsi agar semua class yang dibuat tidak perlu di include satu persatu
	//fungsi ini juga akan di include kan ketika pembuatan class baru dilakukan
}
spl_autoload_register('autoload');// include semua nama file yang ber ekstensi php di file 
try
{
	$artikel = new artikel_model($db); 
	$user	= new user_model($db);
	$content = new artikel_model($db);
	$news = new artikel_model($db);
	$coment = new komen_model($db);
	$akun = new user_model($db);
	$author = new author_model($db);
	$register = new register_model($db);
	
}
catch(Exception $e)
{
	die('salah');
}
?>