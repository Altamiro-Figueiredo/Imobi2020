<?php
    include 'conexao.php';  
    $pdo = Conexao::conectar(); 
    $sql = 'Select * from contrato order by Contrato_ID;';
    $listaContrato = $pdo->query($sql); 
?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

   <!-- biblioteca de icones -->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Imovel</title>
</head>
<body class="container" bgcolor="white">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Lista de Contrato</h1>
  </div>
</div>
<table class="table table-striped table-hover" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME PROPRIETARIO</th>
      <th scope="col">NOME INQUILINO</th>
      <th scope="col">NOME FIADOR</th>
      <th scope="col">DATA INICIAL</th>
      <th scope="col">DATA FINAL</th>
      <th scope="col">VALOR DO ALUGUEL</th>
    </tr>
  </thead>
  <?php
    foreach ($listaContrato as $Contrato){
  ?>
  <tbody>
   <td><?php echo  $Contrato['Contrato_ID']; ?></td>
   <td><?php echo  $Contrato['Proprietario_Nome']; ?></td>
   <td><?php echo  $Contrato['Inquilino_Nome']; ?></td>
   <td><?php echo  $Contrato['Fiador_Nome']; ?></td>
   <td><?php echo  $Contrato['Data_inicio']; ?></td>
   <td><?php echo  $Contrato['Data_final']; ?></td>
   <td><?php echo  $Contrato['Valor_aluguel']; ?></td>

   <td><a class="btn btn-outline-info" onclick="JavaScript:location.href='frmRemoverContrato.php?id='+
   <?php echo $Contrato['Contrato_ID'];?>">
   <i class="material-icons">delete</i></a></td>
   
   <?php }?>
  </tbody>
</table>

<button type="submit" class="btn btn-success mb-4" onclick="JavaScript:location.href='frmInserirContrato.php'">Cadastrar Contrato</button>
<a href="../menu.php" class="btn btn-primary btn-lg active" role="button">Menu</a>
</body>
</html>