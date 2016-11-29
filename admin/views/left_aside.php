<?php
$user = $user->getUserByUserName($_SESSION['user']);
echo'
<div class="col-lg-3 col-md-3 col-sm-4">
        <div class="left_sidebar">
          <div class="single_widget">
            <h2>Your Profil</h2>
            ';
            
          echo'
            <ul class="postt_nav">
              <li>
                <figure><a href=><img width = "200px" height="150px" src="'.root.'assets/user/'.$user['foto'].'" alt="" ></a>
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
      </div>
    ';
    ?>