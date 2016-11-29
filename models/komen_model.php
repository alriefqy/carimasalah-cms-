<?php
	class komen_model
	{
		private $db;
		public function __construct($database)
		{
			$this->db = $database;
		}
		public function getkomen()
		{
			$query = $this->db->prepare("SELECT * FROM `komentar`");
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
		public function getKomenAuthor()
		{
			$query = $this->db->prepare("SELECT * FROM `komentar` WHERE author = '$_SESSION[session_user]'");
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
		public function getKomenById($id)
		{
			$query = $this->db->prepare("SELECT * FROM `komentar` WHERE slug = '$id'");
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
		public function add_komen($slug,$komen,$author)
		{
			$query = $this->db->prepare("INSERT INTO `komentar` (slug,komen,author) VALUES ($slug,'$komen','$author')");
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


			
		
	}
?>