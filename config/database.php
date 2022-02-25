<?php 	
	include("configDB.php");
	class database extends configDB{
			
			public function connect(){

				 try {
				 	return  new PDO("mysql:host={$this->servername}; dbname={$this->dbname}", "{$this->username}", "{$this->passworddb}");
				 }catch(PDOException $e){
				 	echo "Conexao falhou: {$e->getmessage()}";
				 }

				 // mysqli_connect($this->servername, $this->username, $this->password);

			}
			


	}


 ?>