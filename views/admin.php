	<?php
echo'	
			<div id="content">
				<form action="" method="POST">
				asasa
					
					<div id="title"><input type="text" name="artikel_title" placeholder="Title"></div>
					<div id="text"><textarea></textarea></div>
					<div id="button"><input type="submit" name="submit" value="Tambahkan"></div>
				</form>
			</div>
			</div>
				';

				//proses dibawah ini akan menggunakan pergantian pada contentnya sesuai dengan link yang ada, atau diberikan
				// itulah kenapa switch $models, karena dari models routing url diatas kondisinya dilihat
				// sehingga pada anchor menu diatas hanya diberikan about,login tanpa ekstensi php

				/*switch ($models){
					case '':
						include('views/home.php');
						break;
					case 'home':
						include ('views/home.php');
						break;
					case 'artikel':
						include ('views/artikel.php');
						break;
					case 'about':
						include ('views/about.php');
						break;
					case 'login':
						include('views/login.php');
						break;
					
					default:
					include('views/home.php');
						break;}*/
		?>