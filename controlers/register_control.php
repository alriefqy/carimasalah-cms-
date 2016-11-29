<?php

	//session_start();
	require('../models/load_class.php');
	require ('../libs/path.php');
	ob_start();
		
	
	
		//echo 'work';
		if (isset($_POST['register'])) 
		{
			$user = $_POST['user'];
			$password = md5($_POST['password']);
			$repassword = md5($_POST['repassword']);
			$name = $_POST['nama'];
			
			$level = $_POST['level'];
			$college = $_POST['college'];
			//$repassword = $artikel->changeLink($judul);
			$getUser = $akun->getUserByUserName($user);
			//echo $getUser['user_id'];
			$count = count($getUser);
			//echo '<script> alert("'.$count.'") ';
			if(!empty($getUser['user_name']))//pengecekan data apabila data sudah ada
			{
				echo '<script> alert("Already exist");</script>';
				//header("location:".root."views/register");
			}
			else
			{
				if ($password == $repassword)
				{
				
				$adduser = $register->add_user($user,$password,$name,$college,$level);
				header("location:".adm."login");
				echo 'Acount created';
				}
				else
				{

					header("location:".root."views/register");
				}
								
			
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

	?>