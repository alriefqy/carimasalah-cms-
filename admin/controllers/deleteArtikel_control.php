<?php
	//session_start();
	require('../../models/load_class.php');
		$id = filter_var($_GET['id'],FILTER_VALIDATE_INT);
		$data = $artikel->getArtikelById($id);
		$artikel->delete_artikel($id);
		header("location:".adm);
	
	/*if ($model == 'prestasi' AND $method == 'hapus') {
			$id = filter_var($_GET['id'],FILTER_VALIDATE_INT);
			$data = $sejarah->getDataById($id);
			$libs->deleteFile("../../assets/images/history/",$data['foto']);
			
			$sejarah->deleteData($id);
			header("location:".ADM."prestasi?act=del");
		}*/

?>
