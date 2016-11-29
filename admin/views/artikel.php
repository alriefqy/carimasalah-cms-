<?php	


$hit_artikel = $artikel->get_hit($parameter);
foreach ($hit_artikel as $hit_artikel) 
{
	$hit = $hit_artikel;
}

$hit = $hit+1 ;
// echo $hit;

$artikel->hit_counter($hit,$parameter);

$artikels = $artikel->getArtikelById($parameter);
foreach ($artikels as $artikels ) 
{
		

	echo '
	<div id="content"> 
	
		<div id="image"><img width="100px" height="100px" src="'.root.'assets/images/'.$artikels['foto'].'"></div>

	    <h4> '.$artikels['artikel_title'].'  - <small>Posted '.date('l jS',$artikels['artikel_date']).'</small></h4> 
	    <p> '.$artikels['artikel_content'].'<br> View :    </p>
	      </br>
	</div>
	
	';



	include('aside.php');
}
$data = $news->getArtikelByAuthor();

echo $data['user_id'];

//$author=$author->getAuthorByUser($user);
?>

