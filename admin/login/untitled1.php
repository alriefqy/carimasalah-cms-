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
  echo'
      <div class="col-lg-6 col-md-6 col-sm-8">
        <div class="middle_content">
          <ol class="breadcrumb">
            <li><a href="../index.html">Home</a></li>
            <li><a href="#">Technology</a></li>
            <li class="active">Mobile</li>
          </ol>

          <div class="single_page_area">
           ';
          foreach ($artikels as $artikels ) 
        {
          echo'
           <h1>Get $50 Off Any Tablet Priced $150 Or More</h1>
            <div class="post_commentbox"><a href="#"><i class="fa fa-user"></i> Wpfreeware</a> <span><i class="fa fa-calendar"></i> 6:49 AM</span> <a href="#"><i class="fa fa-tags"></i> Technology</a></div>
            <div class="single_content">
              <p>'.$artikels['artikel_content'].'
              <blockquote><img width="100px" height="100px" src="'.root.'assets/images/'.$artikels['foto'].'"></blockquote>
              </p>
             ';
           }
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
          <h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>
          <ul class="ppost_nav wow fadeInDown">
            <li>
              <div class="media"><a href="single_page.html" class="media-left"><img alt="" src="../images/70x70.jpg"></a>
                <div class="media-body"><a href="single_page.html" class="catg_title">Aliquam malesuada diam eget turpis varius</a></div>
              </div>
            </li>
           
          </ul>
        </div>
      </div>
    ';
    ?>
     