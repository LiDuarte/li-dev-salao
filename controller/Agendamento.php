<?php 
	// include ("models/Profissional_model.php");
	class Agendamento {

		public $profissional;
		public $horario;
		public $data;
		public $cliente;

		function agendar(){



		}

		public function profissional(){
			include ("models/Profissional_model.php");
			$profi = new Profissional_model();
		
             if(isset($_GET['barbeiro'])):
             	// session_start();
             	 $_SESSION['agendamento'] = array (
                "funcionario" => $_GET["barbeiro"],
              );

             endif;
			return  $profi->listar_profissional();


		}




	}


 ?>