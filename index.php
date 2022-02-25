<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Salão</title>
</head>
<body>
<div class="container">
  <div class="row">
  	 <div class="col-10 d-inline p-2 bg-primary text-white">
      <h4 class="text-left">Corte Masculino</h4>
    </div>
    <div class="col-2 d-inline p-2 bg-primary text-white">
      <h4 class="text-left"><span class="fs-6">R$:</span> 25,00</h4>
    </div>
    <div class="col-12 d-inline p-2 bg-dark text-white">
      <span class="fs-6">Selecione um Profissional</span>
    </div>
    <?php 
    	include ("controller/Agendamento.php");
    	$agendamento = new agendamento();
    	$agendamento = $agendamento->profissional();  

      if(!is_null($agendamento)):

          
     ?>
    <div class="col-12">
      <ul class="list-group list-group-horizontal">
        <?php         
        foreach ($agendamento as $key => $selectFuncionario): ?>
      	<li class="list-group-item"><a href="http://localhost/salao/index.php?barbeiro=<?php echo $selectFuncionario["nome_profissional"]; ?>"><img src="img/sem-foto-01.jpg" class="rounded-circle" width="100" alt="..."><br><?php echo $selectFuncionario["nome_profissional"]; ?></a></li>
      <?php endforeach; ?>
      </ul>
    </div>
  <?php  endif; ?>

    	<?php 
    	if(isset($_GET["barbeiro"]) or isset($_SESSION['agendamento'])):
              $_SESSION['agendamento'] = array (
                "funcionario" => $_GET["barbeiro"],
                "data"        => isset($_GET['data']) ? $_GET['data'] : null,
              );
    		include("dia.php");
    	endif;

// var_dump($_SESSION);
      if (isset($_SESSION['agendamento']) and $_SESSION['agendamento']['data'] != null) {
       include("horario.php"); 
      }


    	 ?>

   </div>
</div>
<?php 
	include("calendario.php");
 ?>
<script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>