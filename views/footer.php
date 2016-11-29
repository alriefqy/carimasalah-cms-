<?php
$popular = $artikel->gettArtikelPopuler();
echo'
<footer id="footer">
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm3">
          <div class="footer_widget wow fadeInLeftBig">
            <h2>Labels</h2>
            <ul class="labels_nav">
              <li><a href="#">Games</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Slider</a></li>
              <li><a href="#">Life &amp; Style</a></li>
              <li><a href="#">Ver</a></li>
              <li><a href="#">Sports</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm3">
          <div class="footer_widget">
            <h2>Popular Post</h2>
            <ul class="ppost_nav wow fadeInLeftBig">
            ';
            foreach ($popular as $pop)
             {
            
            
            echo'
              <li>
                <div class="media" ><a href="" class="media-left" ><img alt="" src=" '.root.'assets/images/'.$pop['foto'].'" width="100px" height="50%"></a>
                  <div class="media-body"><a href="'.root.'artikel/view/'.$pop['id'].'/'.$pop['link'].'">'.$pop['artikel_title'].'</a></div>
                </div>
              </li>
             ';
           }
             echo'
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm3">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Flickr Images</h2>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm3">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Jetpack Subscription Widget</h2>
            <form action="#" class="subscribe_form">
              <p id="subscribe-text">We promise, we will only send you awesome stuff which will make your day!</p>
              <p id="subscribe-email">
                <input type="text" placeholder="Email Address" name="email">
              </p>
              <p id="subscribe-submit">
                <input type="submit" value="Submit">
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <div class="container">
      <p class="copyright">Copyright &copy; 2045 <a href="index.html">Cyber Tech</a></p>
      <p class="developer">Developed By Al Riefqy</p>
    </div>
  </div>
</footer>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/custom.js"></script>
';
?>