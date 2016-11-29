<?php
		require('../../models/load_class.php');
		// include('libs/path.php');
		require('../../libs/path.php');
		$url =isset($_GET['p'])?$_GET['p']:null;//diambil link yang ada, /
		//link yang ada pada url ditarik terlebih dahulu

		$url =rtrim($url,'/');//artinya menghapus string yang diinginkan dari variabel/kemudian di sini semua tanda slash di link
		//kemudian setelah link diambil maka link yang ada di hilangkan backslash nya pada bagian paling kanan. backslash ataupun titik, tergantung apa yang di inginkan.

		$url =filter_var($url, FILTER_SANITIZE_URL);//setelah itu, karakter di filter , karakter di sanitizer // explode digabungkan kembali kemudian di kasih slash, 
		//sanitize url agar nantinya karakter yang tidak dikenali url  akan dihilangkan

		$url =explode('/',$url);//di explode di masukkan ke array 
		// kemudian setiap isi dari sebelum slash(/) akan di jadikan array mulai dari moddels nya.
		
		$models = $url[0];
		// disini lah mulai, models itu adalah array dengan index [0]

		$method = !empty($url[1])? $url[1] : '';
		
		$parameter = !empty($url[2])? $url[2] : null;
		//echo root;
		@session_start();
		session_unset();
		session_destroy();
	echo'
	<!DOCTYPE html>

	<html>
		<head>
			<title>Simple CMS</title>
			<link rel="stylesheet" href=" '.root.'assets/style.css" type="text/css">
			<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
 			 <script>tinymce.init({selector:"textarea" });
 			 </script>
		</head>
	
		<body>
		<div class="container">
			<div class="navbar">	
				
			</div>
				<hr>
	
	';
	switch ($method) {
		case '':
			include ('../views/login.php');
			break;
		
		default:
			include ('../views/login.php');
			break;
	}
	echo'
		<a href="'.root.'register">Register</a>	';
			if (isset($_POST['submit'])) 
		{
			
			
					//session_start();
					
					$username = $_POST['user'];
					$pass = md5($_POST['password']);
					
					$data = $user->getUserByUserName($username);
				
					if ($pass == $data['password']) 
					{
						if(($user && $pass)!= "")
						{
						@session_start();

						//$_SESSION['id']   = $data['user_id'] 
						$_SESSION['user'] = $data['user_name'];
						$_SESSION['id'] = $data['user_id'];
						$_SESSION['name'] = $data['name'];
						$_SESSION['profil'] = $data['profil'];
						$_SESSION['level']  = $data['level'];
						
					
						$_SESSION['session_login'] = 1;
						session_regenerate_id();//menghapus sesi sebelumnya
						header('location:'.adm);
						}
					}

					else 
					{
						echo'<script>alert("Salah")</script>';
					}
				}
				//else
				//{
				//	header('location:'.ROOT);
				//}	
		
		
	
	
?>


