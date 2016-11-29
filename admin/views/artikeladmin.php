<?php
echo 'ERROR BITCH';
	//session_start();
$artikels = $artikel->getArtikelById($parameter);
foreach ($artikels as $artikels) 
{
	echo '
	DAMN ITT!!!
	<div id="content"> 
		 <img src="'.root.'assets/images/'.$artikels['foto'].'" width="200px" height="200px"><br>
	    <h4> '.$artikels['artikel_title'].'  - <small>Posted '.date('l jS',$artikels['artikel_date']).'</small></h4> 
	    <p> '.$artikels['artikel_content'].'<br> View :'.$artikels['artikel_hit'].'    </p>
	      </br>
	      <br>

	<form action="'.adm.'controllers/komen_control.php" method="POST">
	<table>
	<tr>
		<td><h3>'.$_SESSION['name'].'</h3></td>
	</tr>
	<tr>
		<td><input type="hidden" name="artikelnum" value="'.$parameter.'"></td>
		<td><input type="hidden" name="author" value="'.$_SESSION['name'].'"></td>
	</tr>
	<tr>
		<td><textarea width="40%" height="400px" placeholder="Komentar" name="komentar"></textarea><br>
	</tr>
	<tr>
	<td><input type="submit" name="submit" value="komentar"></td>
	</tr>
	
	'

	;
}
	echo'
	<div id="coment">
	
	<br>
	</div>
	
	<br>
	<br>
	

	';
	$komen = $coment->getKomenById($parameter);
	foreach ($komen as $komen) 
	{
		echo'
		<b>'.$komen['author'].'</b>
		<p>'.$komen['komen'].'</p>
		';
	}






	


?>