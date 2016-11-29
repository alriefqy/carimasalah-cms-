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
echo'<br><br><br><br>';
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
            <h1'.$artikels['artikel_title'].'</h1>
            <div class="post_commentbox"><a href="#"><i class="fa fa-user"></i> '.$artikels['author'].'</a> <span><i class="fa fa-calendar"></i> 6:49 AM</span> <a href="#"><i class="fa fa-tags"></i> Technology</a></div>
            <div class="single_content">
              <p align="justify">'.$artikels['artikel_content'].'
              <blockquote><img width = "100%" height="300px" src="'.root.'assets/images/'.$artikels['foto'].'"></blockquote>
              <blockquote><b>File Terkait artikel &nbsp</b><a href="'.root.'assets/document/'.$artikels['file'].'">Download Here</a></blockquote>
             </p>
              
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
        <div class="social_link">
          <ul class="social_nav">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
          </ul>
        </div>
        <div class="related_post">
          
        </div>
      </div>
';
include('left_aside.php');
      ?>