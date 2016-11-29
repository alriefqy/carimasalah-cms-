<?php
$aksi = adm."controllers/user_control.php?model=user&method=";
if (isset($method)):
$data = $user->getUserByUserName($_SESSION['user']);
switch ($method) {
  case '':
  

echo '<br><br><br><br>
  <center>
  <div class="middle_content">
         
          <div class="single_page_area">
            <h1'.$data['name'].'</h1>
            '.$data['user_id'].'
             <blockquote><img width="20%" height="50%" src="'.root.'assets/user/'.$data['foto'].'"> </blockquote>
            <div class="single_content">
              <p>'.$data['user_name'].'</p>
              <blockquote>'.$data['profil'] .'</blockquote>

             </div>
          </div>
           <a href="'.adm.'user/edit">Edit Profil</a>
        </div>
        </center>
';

  break;
  case'edit':
      echo'<br><br><br><br>
     
      <div class="row">
      <div class="col-lg-8 col-sm-8 col-sm-8">
        <div class="contact_area wow fadeInLeftBig">
        <center>
        <form action="'.$aksi.'edit" enctype="multipart/form-data" method="POST" name="form" class="contact_form">
            <p>User</p>
            <input class="form-control" type="text" placeholder="'.$data['user_name'].'" name="user_name">
            <p>Nama</p>
            <input class="form-control" type="text" placeholder="'.$data['name'].'" name="name">
            <p>College</p>
            <input class="form-control" type="text" name="college" placeholder="'.$data['college'].'">
            <p>Profil</p>
            <textarea name="profil" class="form-control" cols="30" rows="10" placeholder="'.$data['profil'].'"></textarea>
            <input type="hidden" value="'.$data['user_id'].'" name="id">
            <p><center>Foto</center></p>
            <input class="form-control" type="file" name="file">
            <input type="submit" name="edit" value="Submit">
          </form>
        </center>
        </div>
      </div>
      <div class="col-lg-4 col-sm-4 col-sm-4">
        <div class="contact_address wow fadeInRightBig">
          <h3>Address</h3>
          <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur.</p>
         <h3>Contact</h3>
          <address>
          <p>Foto Maksimal berukuran 1MB</p>
          <p>Jupiter, JP 80630</p>
          <p>P: 00 (123) 456 78 90</p>
          <a href="mailto:#">first.last@email.com</a>
          </address>
        </div>
      </div>
    </div>

      ';
  break;
  
}



endif;  


?>
