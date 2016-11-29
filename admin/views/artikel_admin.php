<?php

$artikels = $artikel->getArtikelById($parameter);

//$top = 'About Author';
echo'<br><br><br>
';
include('aside.php');

echo'
<div class="col-lg-6 col-md-6 col-sm-8">
        <div class="middle_content">
          <ol class="breadcrumb">
            <li><a href="'.root.'">Home</a></li>
            <li><a href="#">Technology</a></li>
            <li class="active">Mobile</li>
          </ol>
          ';

          foreach ($artikels as $artikels ) 
          {
            echo'
          <div class="single_page_area">
            <h1>'.$artikels['artikel_title'].'</h1>
           
            <div class="post_commentbox"><a href="#"><i class="fa fa-user"></i> '.$artikels['author'].'</a> <span><i class="fa fa-calendar"></i>'.$artikels['time_record'].'</span> <a href="#"><i class="fa fa-tags"></i> Technology</a></div>
            <div class="single_content">
              <p align="justify">'.$artikels['artikel_content'].'
              <blockquote><img width = "100%" height="300px" src="'.root.'assets/images/'.$artikels['foto'].'"></blockquote>
               <blockquote><b>File Terkait artikel &nbsp</b><a href="'.root.'assets/document/'.$artikels['file'].'">'.$artikels['file'].'</a></blockquote>  
             </p>
              ';
              $authorId = $artikels['id_author'];
              echo'
              <button class="btn default-btn">Default</button>
              <button class="btn btn-red">Red Button</button>
              <button class="btn btn-yellow">Yellow Button</button>
              <button class="btn btn-green">Green Button</button>
              <button class="btn btn-black">Black Button</button>
              <button class="btn btn-orange">Orange Button</button>
              <button class="btn btn-blue">Blue Button</button>
              <button class="btn btn-lime">Lime Button</button>
            </div>
            
          </div>

          ';
         
  
        
        }
         
        echo'

        </div>

        
             <section id="content">
       <div class="container">
    <div class="row">
        </div>
    <div class="row">
      <div class="col-lg-8 col-sm-8 col-sm-8">
        <div class="contact_area wow fadeInLeftBig">
          <strong>'.$_SESSION['user'].'</strong>
          <form action="'.adm.'controllers/komen_control.php" class="contact_form" method="post">
          <input type="hidden" name="artikelnum" value="'.$parameter.'">
           <input class="form-control" type="mail" placeholder="Email(Required)" style="visibility:hidden">
           <input type="hidden" name="author" value="'.$_SESSION['name'].'">
            <textarea class="form-control" cols="30" rows="10" placeholder="Message" name="komentar"></textarea>
            <input type="submit" name="submit" value="Submit">
          </form>
        </div>
      </div>
     </div>
     ';
     $coment = $coment->getKomenById($parameter);
     foreach ($coment as $komen)
     {
       echo'
      <div class="contact_address wow fadeInRightBig">
          <h3>'.$komen['author'].'</h3>
          <p align="justify">'.$komen['komen'].'</p>
         
       </div>
       ';
     }

     echo'
  </div>

</section>
      <div class="related_post">
        </div>

      </div>';
    
      include('author_aside.php');
       //include('footer.php');

      echo'
  
      ';

 ?>