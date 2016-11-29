<?php
require('../../models/load_class.php');
require ('../../libs/path.php');

if (isset($_POST['submit'])) 
		{		
			$slug = $_POST['artikelnum'];
			$komen = $_POST['komentar'];
			$author = $_POST['author'];
			//$link = $artikel->changeLink($judul);
			$addkomen = $coment->add_komen($slug,$komen,$author);
			header("location:".adm."beranda");
		}
?>