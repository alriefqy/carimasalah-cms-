<?php
$populer = $artikel->getArtikelPopuler();
echo'
<div class="col-lg-3 col-md-3 col-sm-4">
        <div class="left_sidebar">
          <div class="single_widget">
            <h2>Post of the month</h2>
            ';
             foreach ($populer as $pop)
        
          {
          echo'
            <ul class="post_nav">
              <li>
                <figure class="effect-lily"><a href=><img width = "200px" height="150px" src="'.root.'assets/images/'.$pop['foto'].'" alt="" ></a>
                  <figcaption><a href="'.root.'artikel/view/'.$pop['id'].'/'.$pop['link'].'">'.$pop['artikel_title'].'</a></figcaption>
                </figure>
              </li>
              
              </li>
              ';
            }
            echo'
            </ul>
          </div>
          
        </div>
      </div>
    ';
    ?>