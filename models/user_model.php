<?php
	class user_model
	{
		private $db;
		public function __construct($database)
		{
			$this->db = $database;
		}
		public function getUserByUsername($username)
		{
			$query = $this->db->prepare("SELECT * FROM user WHERE user_name = ? ");
			$query->bindValue(1, $username);
			try
			{
				$query->execute();
				return $query->fetch();
			}
			catch(PDOexception $e)
			{
				die($e->getMessage);
			}
			return $query->fetch(PDO::FETCH_ASSOC);//fungsi yang bertugas untuk menarik semua data di tabel artikels dan disimpan di variabel query. kemudian variabel di execute dalam sebuah blog try catch, jika berhasil ataupun tidak maka nilai akan dikembalikan nilai dengan bentuk array
		}
		public function getUserById($id)
		{
			$query = $this->db->prepare("SELECT * FROM user WHERE user_id = ? ");
			$query->bindValue(1, $id);
			try
			{
				$query->execute();
			}
			catch(PDOexception $e)
			{
				die($e->getMessage);
			}
			return $query->fetch(PDO::FETCH_ASSOC);//fungsi yang bertugas untuk menarik semua data di tabel artikels dan disimpan di variabel query. kemudian variabel di execute dalam sebuah blog try catch, jika berhasil ataupun tidak maka nilai akan dikembalikan nilai dengan bentuk array
		}
		public function getUserName()
		{
			$query = $this->db->prepare("SELECT * FROM `user`");
			try
			{
				$query->execute();
			}
			catch(PDOException $e)
			{
				die($e->getMessage);
			}
		}
		public function getUser($username)
		{
			$query = $this->db->prepare("SELECT * FROM user WHERE user_name ='$_SESSION[session_user]'");
			try
			{
				$query->execute();
			}
			catch(PDOexception $e)
			{
				die($e->getMessage);
			}
			return $query->fetch(PDO::FETCH_ASSOC);//fungsi yang bertugas untuk menarik semua data di tabel artikels dan disimpan di variabel query. kemudian variabel di execute dalam sebuah blog try catch, jika berhasil ataupun tidak maka nilai akan dikembalikan nilai dengan bentuk array
		}
		public function updateProfil($id,$user,$nama  ,$college,$profil,$foto)
		{
				$query = $this->db->prepare("UPDATE `user` SET user_name = ?,
																name = ?,											
																college = ?,
																profil = ?,
																foto = ?
																WHERE user_id = ?

			");

			$query->bindValue(1, $user);
			$query->bindValue(2, $nama);
			$query->bindValue(3, $college);
			$query->bindValue(4, $profil);
			$query->bindValue(5, $foto);
			$query->bindValue(6, $id);
			

			try {
				$query->execute();
				return true;
			} catch(PDOException $e) {
				return	die($e->getMessage());
			}
		}
		public function getArtikelPopuler()
		{
			$query = $this->db->prepare('SELECT * FROM artikels ORDER BY artikel_hit desc');
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
			$query = $this->db->prepare("SELECT * FROM artikels WHERE id='$id'");
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
			$query = $this->db->prepare("UPDATE `artikels` SET `artikel_hit` = :hit WHERE id = :id");
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
			$query = $this->db->prepare("SELECT artikel_hit FROM artikels WHERE $id = '$id'");
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
			$query = $this->db->prepare("SELECT * FROM artikels ORDER BY id desc");
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
		
	}
?>