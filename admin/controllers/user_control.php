<?php
	session_start();
	if(isset($_GET['method'])):
	require('../../models/load_class.php');
	require ('../../libs/path.php');
	ob_start();
	$model = $_GET['model'];
	$method = $_GET['method'];
	$model;

	if ($model = 'user' AND $method = 'edit')
	{

		if (isset($_POST['edit'])) 
		{
			$id = $_POST['id'];
			//echo 'work';
			$user = $_POST['user_name'];
			$name = $_POST['name'];
			$college = $_POST['college'];
			$profil = $_POST['profil'];
			//$link = $artikel->changeLink($judul);
			$foto = "";

				if ($_FILES['file']['tmp_name'] != "") {
					$foto = $artikel->uploadImageToFolder('../../assets/user/', $_FILES['file'], $user);	//upload
				}

			$updateProfil = $akun->updateProfil($id,$user,$name,$college,$profil,$foto);
			header("location:".adm.'login');
		}
	}
	/*if ($model = 'news' AND $method = 'delete')
	{
		$id = filter_var($_GET['id'],FILTER_VALIDATE_INT);
		$data = $artikel->getArtikelById($id);
		$artikel->delete_artikel($id);
		//header("location:".adm."jejak?act=del");
		header("location:".adm);
	}*/

	if ($model == 'news' AND $method == "hapus") {
			$id = $_GET['id'];
			$data = $news->getArtikelById($id);
			$news->deleteFile("../../assets/images/", $data['foto']);
			$artikel->delete_artikel($id);
			header("location:".adm);
		}

endif;
?>