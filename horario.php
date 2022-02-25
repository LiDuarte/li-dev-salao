<?php 
  include ("controller/Horario_Controller.php");

  $horario = new Horario_Controller();
  $horario->listar_horario();


 ?>



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> Horário - 1</th>
  </tbody>
</table>