<?php
	session_start();//agar artikel bisa diambil dari yang login
	require('../../models/load_class.php');
	require ('../../libs/path.php');
	ob_start();
	$model = $_GET['model'];
	$method = $_GET['method'];
	$model;
	//echo $model; echo $method;
	if ($model = 'news' AND $method = 'tambah')
	{

		if (isset($_POST['submit'])) 
		{
			$judul = $_POST['artikel_title'];
			$content = $_POST['artikel'];
			$author = $_POST['author'];
			$id_author = $_POST['id_author'];
			$link = $artikel->changeLink($judul);
			$foto = "";

				if ($_FILES['file']['tmp_name'] != "") {
					$foto = $artikel->uploadImageToFolder('../../assets/images/', $_FILES['file'], $judul);	//upload

				}
			$file = "";
				if($_FILES['file_doc']['tmp_name'] != "")
					{
						$file = $artikel->uploadDocumentToFolder('../../assets/document/', $_FILES['file_doc'],$judul);
					}
			
			$time = $_POST['time'];

			/*$document = "";
				if ($_FILES['file_doc']['tmp_name'] != "")
				{
					$document = $artikel->uploadDocumentToFolder('../../assets/document', $_FILES['file_doc'], $judul); 
				}*/
				//document = $_FILES['file_doc']['tmp_name'];
				//echo $_FILES['file_doc']['tmp_name'];
			$addartikel = $artikel->add_artikel($judul,$content,$author,$id_author,$link,$foto,$file,$time);
			header("location:".adm."news");
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

	if ($model = 'news' AND $method = 'hapus') 
	{
		//echo "<br><br>work here" ;
			
			$id = $_GET['id'];
			
			$data = $news->getArtikelById($id);
			//echo "<br><br>work here" ;
			$news->deleteFile("../../assets/images/", $data['foto']);
			$artikel->delete_artikel($id);
			header("location:".adm.'news');
		}


?>