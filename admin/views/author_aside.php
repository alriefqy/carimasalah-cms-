<?php
$user = $user->getUserById($authorId);
echo'
<div class="col-lg-3 col-md-3 col-sm-4">
        <div class="left_sidebar">
          <div class="single_widget">
            <h2>About Author</h2>
            ';
            
          echo'
            <ul class="postt_nav">
              <li>
                <figure><a href='.adm.'author/v/'.$user['user_name'].'><img width = "200px" height="150px" src="'.root.'assets/user/'.$user['foto'].'" alt="" ></a>
                  <figcaption>'.$user['name'].'</figcaption>
                  <figcaption></figcaption>
                </figure>
              </li>
              
              </li>
              <figure>
                <figcaption>
                  '.$user['college'].'
                </figcaption>
                

              </figure>
               <figure>
                <figcaption>
                  '.$user['profil'].'
                </figcaption>


              </figure>

              ';
            
            echo'
            </ul>
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
      </div>
    ';
    ?>