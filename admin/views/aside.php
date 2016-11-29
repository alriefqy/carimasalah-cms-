<?php
$last = $artikel->last_artikel();echo'
<div class="col-lg-3 col-md-3 col-sm-12">
        <div class="right_sidebar">
        
          <div class="single_widget">
            <h2>Last Post</h2>
            <ul class="ppost_nav wow fadeInDown">
            ';
            
       		 foreach ($last as $last)
       		 	
        	{
        	echo'
              <li>
                <div class="media"><a class="media-left" href=""><img width = "200px" height="150px" src="'.root.'assets/images/'.$last['foto'].'" width="100px" alt=""></a>
                  <div class="media-body"><a class="catg_title" href="artikel/view/'.$last['id'].'/'.$last['link'].'">'.$last['artikel_title'].'</a></div>
                </div>
              </li>
               ';
        }
        echo'
            </ul>
           
          </div>
          <div class="single_widget">
            <ul class="nav nav-tabs custom-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">Recent Post</a></li>
              <li role="presentation" class=""><a href="#recentComent" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false">Recent Comment</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade active in" id="mostPopular">
                <ul class="ppost_nav wow fadeInDown">
                ';
                  		$top = $artikel->recentArtikel();
						foreach ($top as $top)
						{
							 echo'
                  <li>
                 
                    <div class="media"><a class="media-left" href="pages/single_page.html"><img width = "200px" height="150px" src="'.root.'assets/images/'.$top['foto'].'" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="'.adm.'artikel/view/'.$top['id'].'/'.$last['link'].'">'.$top['artikel_title'].'</a></div>
                    </div>

              
                  </li>
                        ';
                }

                echo'
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="recentComent">
                <ul class="ppost_nav wow fadeInDown">
                  <li>
                    <div class="media"><a class="media-left" href="pages/single_page.html"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="pages/single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="pages/single_page.html"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="pages/single_page.html"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_widget">
            <h2>Categories</h2>
            <ul>
              <li class="cat-item"><a href="#">Technology</a></li>
              <li class="cat-item"><a href="#">Games</a></li>
              <li class="cat-item"><a href="#">Business</a></li>
              <li class="cat-item"><a href="#">Gallery</a></li>
              <li class="cat-item"><a href="#">Slider</a></li>
              <li class="cat-item"><a href="#">Life &amp; Style</a></li>
              <li class="cat-item"><a href="#">Sports</a></li>
            </ul>
          </div>
          <div class="single_widget">
            <h2>Category Archive</h2>
            <select class="catgArchive">
              <option>Select Category</option>
              <option>Life styles</option>
              <option>Sports</option>
              <option>Technology</option>
              <option>Treads</option>
            </select>
          </div>
         
        </div>
      </div>
     ';
?>