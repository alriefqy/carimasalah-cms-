<?php
if (isset($method)):
	$aksi = adm."controllers/artikel_control.php?model=news&method="; // halaman untuk eksekusi
	//$aksi = ADM."controllers/jejak_control.php?model=jejak&method=";
	date_default_timezone_set('Asia/Makassar');
// set date default dengan parameter lokasi waktu yaitu benua asia spesifik makassar

$date = date('m/d/20y h:i:s a' , time());
// di simpan dalam sebuah variabel dengan format month day dan year kemudian hour menit dan second 
	switch ($method) 
	{
		default: 
			include('404.php');
			break;
		case '':
			
			echo'

		


			<br><br><br><br>
			<div class="middle_content">
			<blockquote><button><a href="'.adm.'news/tambah">Tambah Artikel</a></button></blockquote>
			<ol>
			
			';

			$no = 1;
			$artikeluser = $artikel->getArtikelAuthor();
			foreach ($artikeluser as $artikeluser) 
			
			{
				echo'
				<div class="middle_content">
          
          			<div class="single_page_area">
            		    <div class="single_content">
               				<blockquote><table>
					
				<tr>

					<td>'.$no++.'&nbsp&nbsp&nbsp&nbsp&nbsp</td>
					<td><a href="'.adm.'artikel/view/'.$artikeluser['id'].'">'.$artikeluser['artikel_title'].'</td>
				</tr>
				<tr>
					<td></td><td><button><a href=\'javascript: hapusAlert("'.$artikeluser['id'].'");\'> Hapus </a></button></td>
				</tr>

				</table>
					</blockquote>
           			 	</div>
         		 	</div>
       			
       			 </div>
					
				';
				
			}
		
			echo '
			</ol>'
		;
		 
      
		break;
		
		case 'tambah':
		$data = $user->getUserByUserName($_SESSION['user']);
			 echo'<br><br><br><br>
     
      <div class="row">
      <div class="col-lg-8 col-sm-8 col-sm-8">
        <div class="contact_area wow fadeInLeftBig">
        <center>
        <form action="'.adm.'controllers/artikel_control.php" enctype="multipart/form-data" method="POST" name="form">
            
            <input class="form-control" type="text" name="author" style="visibility: hidden;" value="'.$_SESSION['user'].'">
           	
            <p>Title</p>
            <input class="form-control" type="text" name="artikel_title">
           
            <p>Content</p>
            <textarea name="artikel" class="form-control" cols="30" rows="10" placeholder="Text Here"></textarea>
            <input type="hidden" type="text" name="id_author"  value="'.$data['user_id'].'">
            <input type="hidden" type="text" name="time"  value="'.$date.'">
            <p><center>Foto</center></p>
            <input class="form-control" type="file"  name="file" id="uploadFile">
            	<p>File Terkait Artikel (.pdf/.doc)
             <input class="form-control" type="file"  name="file_doc" id="uploadFile"><br>

            <input type="submit" name="submit" value="Submit">
          </form>
        </center>
        </div>
      </div>
      <div class="col-lg-4 col-sm-4 col-sm-4">
        
      </div>
    </div>



				
			';
		break;
		
		




	}
?>
<script type="text/javascript">
	function hapusAlert(iddokumen) {
		var conBox = confirm("Anda yakin ingin menghapus data ini?");
		if (conBox) {
			location.href = "<?php echo $aksi."hapus"; ?>&id=" + iddokumen;
		} else {
			return false;
		}
	}
</script>
<?php
	endif;
?>
<!--

- 
-

- 



-->
