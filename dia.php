    <div class="col-12 d-inline p-2 bg-danger text-white">
      <h4 class="d-block w-100 text-center" alt="...">

      <?php  echo ($_SESSION['agendamento']['data']) ? "{$_SESSION['agendamento']['funcionario']} no dia {$_SESSION['agendamento']['data']}" : "Escolha o dia com <span class='text-darkn'> {$_SESSION['agendamento']['funcionario']} </span></h4>" ?>

        

    </div>

      <div id="carouselExampleControls" class="col-12  p-2 bg-dark text-white carousel slide" data-bs-ride="carousel">
      	  <div class="carousel-inner">
      	  	<div class="carousel-item active">
              <table class="table ">
                <thead>
                  <tr>
                        <?php 
                          // numero de dias 
                          $limit = 5;
                          for ($i=0; $i < $limit ; $i++) { 
                                $diaSemana = date('D');
                                $dia = date('d');
                                $mes = date('M');
                                $ano = date('y');
                                $date = array(
                                  "date{$i}" => date('d/m/Y', strtotime("+$i days", strtotime("{$dia}-{$mes}-{$ano}")))
                                );
                    
                         ?>
                    <th scope="col"><a href="http://localhost/salao/index.php?barbeiro=<?php echo $_SESSION['agendamento']['funcionario'] ?>&data=<?php echo  $date["date{$i}"]; ?>" class="text-white"><?php echo $date["date{$i}"]; ?></a></th>  
                        <?php } ?>
                  </tr>
                </thead>
              </table>
         
      	  </div>     
                <div class="carousel-item">
                        <table class="table ">
                <thead>
                  <tr>
                        <?php 
                          // numero de dias 
                          $limit = 5;
                          for ($i=0; $i < $limit ; $i++) { 
                                $diaSemana = date('D');
                                $dia = date('d')+5;
                                $mes = date('M');
                                $ano = date('y');
                                $date = array(
                                  "date{$i}" => date('d/m/Y', strtotime("+$i days", strtotime("{$dia}-{$mes}-{$ano}")))
                                );
                    
                         ?>
                    <th scope="col"><a href="http://localhost/salao/index.php?barbeiro=<?php echo $_SESSION['agendamento']['funcionario'] ?>&data=<?php echo  $date["date{$i}"]; ?>" class="text-white"><?php echo $date["date{$i}"]; ?></a></th>  
                        <?php } ?>
                  </tr>
                </thead>
              </table>
              
              </div>

      	  </div>

      	    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      		    <span class="carousel-control-prev-icon" aria-hidden="true" style="margin:10px 0px 120px 0px"></span>
      		    <span class="visually-hidden">Previous</span>
      		  </button>
      		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      		    <span class="carousel-control-next-icon" aria-hidden="true" style="margin:10px 0px 120px 0px"></span>
      		    <span class="visually-hidden" >Next</span>
      		  </button>
    </div>


