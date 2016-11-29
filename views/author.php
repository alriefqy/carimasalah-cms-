<?php	

/*
$hit_artikel = $artikel->get_hit($parameter);
foreach ($hit_artikel as $hit_artikel) 
{
	$hit = $hit_artikel;
}

$hit = $hit+1 ;
// echo $hit;
*/
$author = $author->getAuthorById($parameter);

//$artikels = $artikel->getArtikelById($parameter);
foreach ($author as $author ) 
{
		

	echo '
	<div id="content"> 
		<div id="image"><img width="100px" height="100px" src="'.root.'assets/user/'.$author['foto'].'"></div>

	    <h4> '.$author['name'].' </h4> 
	   
	</div>
	
	';



	include('aside.php');
}
?>

