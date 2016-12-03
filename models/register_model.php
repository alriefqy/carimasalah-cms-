<?php
	class register_model
	{
		private $db;
		public function __construct($database)
		{
			$this->db = $database;
		}
		public function getArtikel()
		{
			$query = $this->db->prepare("SELECT * FROM `artikels`");
			try
			{
				$query->execute();
			}
			catch(PDOexception $e)
			{
				die($e->getMessage);
			}
			return $query->fetchAll(PDO::FETCH_ASSOC);//fungsi yang bertugas untuk menarik semua data di tabel artikels dan disimpan di variabel query. kemudian variabel di execute dalam sebuah blog try catch, jika berhasil ataupun tidak maka nilai akan dikembalikan nilai dengan bentuk array
		}
		public function getArtikelAuthor()
		{
			$query = $this->db->prepare("SELECT * FROM `artikels` WHERE id_author = '$_SESSION[id]'");
			try
			{
				$query->execute();
			}
			catch(PDOexception $e)
			{
				die($e->getMessage);
			}
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		public function getArtikelByAuthor()
		{
			$query = $this->db->prepare("SELECT * FROM `user`");
			try
			{
				$query->execute();
			}
			catch(PDOexception $e)
			{
				die($e);
			}
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		public function getArtikelPopuler()
		{
			$query = $this->db->prepare("SELECT * FROM `artikels` ORDER BY artikel_hit desc");
			try
			{
				$query->execute();
			}
			catch(PDOexception $e)
			{
				die($e->getMessage);
			}
			return $query->fetchAll(PDO::FETCH_ASSOC);//fungsi yang bertugas untuk menarik semua data di tabel artikels dan disimpan di variabel query. kemudian variabel di execute dalam sebuah blog try catch, jika berhasil ataupun tidak maka nilai akan dikembalikan nilai dengan bentuk array
		}
		public function getArtikelById($id)
		{
			$query = $this->db->prepare("SELECT * FROM `artikels` WHERE id='$id'");
			try
			{
				$query->execute();
			}
			catch(PDOexception $e)
			{
				die($e->getMessage);
				echo $e;
			}
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function hit_counter($hit,$id)
		{
			$query = $this->db->prepare("UPDATE `artikels` SET artikel_hit = :hit WHERE id = :id");
			$query->bindParam(':hit',$hit);
			$query->bindParam(':id',$id);
			try
			{
				$query->execute();
			}
			catch(PDOexception $e)
			{
				die($e->getMessage);
				echo $e;
			}
			//update tidak memerlukan return quey
		}

		public function get_hit($id)
		{
			$query = $this->db->prepare("SELECT artikel_hit FROM `artikels` WHERE $id = '$id'");
			try
			{
				$query->execute();
			}
			catch(PDOexception $e)
			{
				die($e->getMessage());
				echo $e;
			}
			return $query->fetch(PDO::FETCH_ASSOC);

		}
		public function last_artikel()
		{
			$query = $this->db->prepare("SELECT * FROM `artikels` ORDER BY id desc");
			try
			{
				$query->execute();
			}
			catch(PDOexception $e)
			{
				die($e->getMessage());
				echo $e;
			}
			return $query->fetchAll(PDO::FETCH_ASSOC);

		}	
		public function add_user($user,$password,$name,$college,$foto,$profil,$level)
		{
			echo 'still work';
			$query = $this->db->prepare("INSERT INTO `user` (`user_name`,`password`,`name`,`college`,`foto`,`profil`,`level`) VALUES (?,?,?,?,?,?,?)");

			$query->bindValue(1, $user);
			$query->bindValue(2, $password);
			$query->bindValue(3, $name);
			$query->bindValue(4, $college);
			$query->bindValue(5, $foto);
			$query->bindValue(6, $profil);
			$query->bindValue(7, $level);
			try
			{
				$query->execute();
			}
			catch(PDOexception $e)
			{
				echo $e;
			}
				
		}
		public function delete_artikel($id)
		{
			$sql = "DELETE FROM `artikels` WHERE `id` = ?";
			$query = $this->db->prepare($sql);
			$query->bindValue(1, $id);

			try {
				$query->execute();
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}	
		public function countDataLengkap() {
			$query = $this->db->prepare("SELECT * FROM `artikels`");

			try {
				$query->execute();
				return $query->rowCount();
			} catch(PDOException $e){
				$e->getMessage();
			}
		}

		public function getDataLengkap() {
			$query = $this->db->prepare("SELECT * FROM `artikels` ORDER BY `id` DESC");

			try {
				$query->execute();
			} catch(PDOException $e) {
				die($e->getMessage());
			}

			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function countDataLimit($a, $b) {
			$query = $this->db->prepare("SELECT * FROM `artikels` LIMIT :a,:b");
			$query->bindParam(':a', $a, PDO::PARAM_INT);
			$query->bindParam(':b', $b, PDO::PARAM_INT);

			try {
				$query->execute();
				return $query->rowCount();
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

		public function getDataLimit($a, $b) {
			$query = $this->db->prepare("SELECT * FROM `artikels` ORDER BY `id` DESC LIMIT :a,:b");
			$query->bindParam(':a', $a, PDO::PARAM_INT);
			$query->bindParam(':b', $b, PDO::PARAM_INT);

			try {
				$query->execute();
			} catch(PDOException $e) {
				die($e->getMessage());
			}

			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		public function changeLink($v) {
			$v = strtolower($v);
			$v = trim($v, " ");
			$value = preg_replace('~[\\\\/:*?"<>|.,]~', '', $v);
			$value = preg_replace("~[']~", "", $value);
			$value = str_replace(" ", "-", $value);
			// $value = $value.".html";
			return $value;
		}
		public function uploadFile($folder, $file, $nametag) {
			//kode untuk upload ke folder gambar
			$tmp_name = $file["tmp_name"];
			$ext = explode('.',$file['name']);
			$extension = $ext[sizeof($ext)-1];
			$extension = strtolower($extension);

			$namaberu = $nametag.".".$extension;
			// $namaberu = $id.'_'.$tipe.'.'.$extension;

			$name = $folder.$namaberu;

			//fungsi cut dari temp file ke yang kita mau
			$size = ceil($file['size']/1024); // disini misalkan tidak ada file maka akan 0

			if($size <= 10260) { 
				if(move_uploaded_file($tmp_name, $name)) {
					return $namaberu;
				} else {
					return '';
				}; //fungsi untuk memindahkan gambar 
			} else {
				return false;
			}
		}
		public function uploadImageToFolder($folder, $file) {
			//kode untuk upload ke folder gambar 
			$tmp_name = $file["tmp_name"];
			$ext = explode('.',$file['name']);
			$extension = $ext[sizeof($ext)-1];
			$extension = strtolower($extension);
			$namaberu = uniqid().'.'.$extension;
			$name = $folder.$namaberu;
			
			//fungsi cut dari temp file ke yang kita mau
			$size = ceil($file['size']/1024); // disini misalkan tidak ada file maka akan 0
			@$cek =  empty($file)?array():getimagesize($file['tmp_name']);
			// var_dump($cek);

			if(!empty($cek['mime']) and $size <= 1026) { 
				if($extension == 'png' or $extension == 'jpg' or $extension == 'jpeg' or $extension == 'JPEG' or $extension == 'JPG' or $extension == 'PNG') {
					if(move_uploaded_file($tmp_name, $name)) {
						return $namaberu;
					} else {
						return '';
					}; //fungsi untuk memindahkan gambar 
				} else {
					return '';
				}
			} else {
				return false;
			}
		}
		public function deleteFile($url, $data) {
			$hapus = $url.$data;
			if (file_exists("$hapus")) {
				unlink("$hapus");
				return true;
			} else {
				return false;
			}
		}


			
		
	}
?>