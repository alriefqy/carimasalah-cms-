
<?php
	echo'
		<div id="content">
				<form action="'.adm.'controllers/artikel_control.php" enctype="multipart/form-data" method="POST">
					<div id="author"><input type="text" name="author" style="visibility: hidden;" value="'.$_SESSION['session_name'].'"></div>
					<div id="title"><input type="text" name="artikel_title" placeholder="Title"></div>
					<div id="text"><textarea name="artikel"></textarea></div>
					<div id="button"><input type="submit" name="submit" value="Tambahkan"></div>

				</form>
			</div>
			</div>
				';

			
	

?>