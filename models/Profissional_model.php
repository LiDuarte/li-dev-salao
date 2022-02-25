<?php 

	class Profissional_model{


		public function listar_profissional(){
			include("config/database.php");
			$conn = new database();
			$db = $conn->connect();
			$query = $db->query("SELECT * FROM funcionario");
			return $query->fetchAll(PDO::FETCH_ASSOC);


		}


	}

 ?>