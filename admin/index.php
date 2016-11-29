	<?php
		session_start();
		require('../models/load_class.php');
		// include('libs/path.php');
		require('../libs/path.php');
		//var_dump ($artikel);
		//echo time();
		if (!isset($_SESSION['session_login'])) {
			header('location:'.adm.'login');
		}
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

echo'	
<!DOCTYPE html>
<html>
<head>
<title>Testing</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="'.root.'assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="'.root.'assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="'.root.'assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="'.root.'assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="'.root.'assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="'.root.'assets/css/style.css">



<!--[if lt IE 9]>
<script src="'.root.'assets/js/html5shiv.min.js"></script>
<script src="'.root.'assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>

<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<header id="header">
  <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="'.root.'"><img src="'.root.'images/logo.png" alt=""></a></div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav custom_nav">
          <li class="active"><a href="'.adm.'"id="logo">Beranda</a></li>
          ';
          if ($_SESSION['level'] == 'admin')
          {
          echo'
          <li><a href="'.adm.'user">User</a></li>
          ';
      		}
      		echo'
           <li><a href="'.adm.'news">News</a></li>
         
          
          <li><a href="'.adm.'logout">Logout</a></li>
          
          
        </ul>
      </div>
      <div class="search"><a class="search_icon" href="#"><i class="fa fa-search"></i></a>
        <form action="#">
          <input class="search_bar" type="text" placeholder="Search here">
        </form>
      </div>
    </div>
  </nav>
</header>
';

				//proses dibawah ini akan menggunakan pergantian pada contentnya sesuai dengan link yang ada, atau diberikan
				// itulah kenapa switch $models, karena dari models routing url diatas kondisinya dilihat
				// sehingga pada anchor menu diatas hanya diberikan about,login tanpa ekstensi php

				switch ($models){
					case '':
						include('views/beranda.php');
						break;
					case 'beranda':
						include ('views/beranda.php');
						break;
					case 'artikel':
						include ('views/artikel_admin.php');
						break;
					
					case 'user';
						if($_SESSION['level'] == 'admin')
							{include('views/user.php');}
						else
						{
							include('views/404.php');
						}
						break;
					case 'author':
						include('views/author.php');
						break;
					case 'logout':
					include('login/logout.php');
						break;
					case 'news':
					include('views/news.php');
						break;
					case 'artikeladmin':
					include('views/artikeladmin.php');
					break;			
					default:
					include('views/beranda.php');
						break;}
echo '
		</div>
		
		</body>
	</html>
	';
		?>