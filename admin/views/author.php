<?php
$auth = $author->getAuthorByUser($parameter);
foreach ($auth as $auth) {
echo '<br><br>

';



echo '
	<center>
  <div class="middle_content">
          
          <div class="single_page_area">
            <h1>'.$auth['name'] .'</h1>
             <blockquote><img width="20%" height="50%" src="'.root.'assets/user/'.$auth['foto'].'"> </blockquote>
            <div class="single_content">
              <p>'.$auth['college'] .'</p>
              <blockquote>'.$auth['profil'] .'</blockquote>

             </div>
          </div>
        </div>
        </center>
';

}
?>