<?php
    include 'conexao.php';  
    $pdo = Conexao::conectar(); 
    $sql = 'Select * from imovel order by Imovel_ID;';
    $listaImovel = $pdo->query($sql); 
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
    <h1 class="display-4">Lista de Imovel</h1>
  </div>
</div>


<table class="table table-striped table-hover" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME PROPRIETARIO</th>
      <th scope="col">TELEFONE</th>
      <th scope="col">CPF PROPRIETARIO</th>
      <th scope="col">TAMANHO IMOVEL</th>
      <th scope="col">QTD QUARTOS</th>
      <th scope="col">QTD BANHEIRO</th>
      <th scope="col">ESPACO GARAGEM</th>
      <th scope="col">LOCALIZACAO</th>
      <th scope="col">SITUACAO</th>
      
    </tr>
  </thead>
  <?php
    foreach ($listaImovel as $Imovel){
  ?>
  <tbody>
   <td><?php echo  $Imovel['Imovel_ID']; ?></td>
   <td><?php echo  $Imovel['Proprietario_Nome']; ?></td>
   <td><?php echo  $Imovel['Proprietario_Telefone']; ?></td>
   <td><?php echo  $Imovel['Proprietario_CPF']; ?></td>
   <td><?php echo  $Imovel['Tamanho_imovel']; ?></td>
   <td><?php echo  $Imovel['QTD_quartos']; ?></td>
   <td><?php echo  $Imovel['QTD_Banheiro']; ?></td>
   <td><?php echo  $Imovel['Garagem_espaco']; ?></td>
   <td><?php echo  $Imovel['Localizacao']; ?></td>
   <td><?php echo  $Imovel['Situacao_locacao']; ?></td>
   <td><a class="btn btn-outline-info" onclick="JavaScript:location.href='frmEditarImovel.php?id=' +
   <?php echo  $Imovel['Imovel_ID'];?>">
   <i class="material-icons">edit</i></a></td>
   <td><a class="btn btn-outline-info" onclick="JavaScript:location.href='frmRemoverImovel.php?id=' +
   <?php echo  $Imovel['Imovel_ID'];?>">
   <i class="material-icons">delete</i></a></td>
    <?php }?>
  </tbody>
</table>
<button type="submit" class="btn btn-success mb-4" onclick="JavaScript:location.href='frmInserirImovel.php'">Cadastrar Novo imovel</button>
<a href="../menu.php" class="btn btn-primary btn-lg active" role="button">Menu</a>
</body>
</html>

