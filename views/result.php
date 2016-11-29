<?php

if (isset($method)):
  switch ($method)
    {
      default:
        include('404.php');
      break;

      case'':
         // include('aside.php');
          $cari = (isset($_GET['cari'])) ? $_GET['cari'] : NULL;
          if ($news->countDataFind($cari) > 0) 
          {
            $semua = $news->countDataFind($cari);
            $limit = 2; // jumlah query per berita 
            $pages = ceil($semua / $limit); // melihat total blok yang ada
            $page = (isset($_GET['page']))? (int)$_GET['page'] : 1; // default page
            $start = ($page - 1) * $limit; //startnya 
            $no = ($page - 1) * $limit + 1; // menentukan asending nomor tiap paging
            //$author = $author->getAuthorByUser($parameter);
          
          $data = $news->findArtikel($cari,$start,$limit);
          echo'
          <section id="content">
          <div class="row">
              <!--<div class="col-lg-12 col-md-12 col-sm-12">
                <div class="topadd_bar"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>
              </div>-->
            </div>
           
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-8">
                  <div class="middle_content">
                    <h2>What’s Hot</h2>
                    <ul class="featured_nav">
                    ';
                    foreach ($data as $data) 
                   {
                    echo'
                      <li class="wow fadeInDown">
                        <figure class="featured_img"><a href="#"><img src="'.root.'assets/images/'.$data['foto'].'" alt=""></a></figure>
                        <article class="featured_article">
                          <div class="article_category"><a href="#">Technology <i class="fa fa-angle-right"></i></a><a href="#">Mobile <i class="fa fa-angle-right"></i></a><a href="#">Samsung</a></div>
                          <h2 class="article_titile"><a href="'.root.'artikel/view/'.$data['id'].'/'.$data['link'].'">'.$data['artikel_title'].'</a></h2>
                          <p>'.substr($data['artikel_content'], 0, 420).'...</p></p>
                        </article>
                      </li>
                     ';
                    }
                 
                     echo'
                        </ul>
                        <nav>
                          <ul class="pagination">
                          ';
                              $root = root.$models.'?cari='.$_GET['cari'];
                              $blok = 12;
                              $ini = ceil($page / $blok);

                              $mulai = ($blok * $ini) - ($blok - 1);
                              $selesai = ($blok <= $pages)? ($ini * $blok) : $pages;

                              $kurang1 = $page - 1;
                              $tambah1 = $page + 1;
                         if ($pages >= 1 && $page <= $pages) 
                         {

                          //http://localhost/cyber-tech/result?page=2&cari=haji
                          echo ($page != 1 OR empty($page))? '<li style="cursor: pointer;"> <a href="'.$root.'&page='.$kurang1.'"><<</a> </li>': '';

                            for ($x = $mulai; $x <= $selesai; $x++) 
                            {
                              if ($x == $page)
                              {
                                echo '<li style="cursor: pointer;" class="active"> <a>'.$x.'</a> </li>';
                              } 
                              else
                              {
                                echo '<li style="cursor: pointer;"> <a href="'.$root.'&page='.$x.'">'.$x.'</a> </li>';
                              };
                            }

                           echo ($page != $pages)? '<li style="cursor: pointer;"> <a href="'.$root.'&page='.$tambah1.'">>></a> </li>' : '';
                         };
                      echo'
                         </ul>
                        </nav>
                    </div>
                  </div>
                </div>
            </div>
          </section>
          ';
       break;
    }
  }
endif;

include('footer.php');
?>