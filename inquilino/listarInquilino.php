<?php
    include 'conexao.php';  
    $pdo = Conexao::conectar(); 
    $sql = 'Select * from inquilino order by Inquilino_ID ;';
    $listaInquilino = $pdo->query($sql); 
?> 

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Listar Inquilino</title>
</head>
<body class="container" bgcolor="white" >
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Lista de Inquilino</h1>
  </div>
  <table class="table table-striped table-hover" >
     <thead class="thead-dark">
      <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME Inquilino</th>
      <th scope="col">CPF INQUILINO</th>
      <th scope="col">TELEFONE</th>
      <th scope="col">NOME FIADOR</th>
      <th scope="col">CPF FIADOR</th>
      <th scope="col">TELEFONE FIADOR</th>
      </tr>
     </thead>
        <!-- prencher tabela com dados -->
        <?php
           foreach ($listaInquilino as $Inquilino) {
        ?> 
              <tbody>
   <td><?php echo  $Inquilino['Inquilino_ID']; ?></td>
   <td><?php echo  $Inquilino['Inquilino_Nome']; ?></td>
   <td><?php echo  $Inquilino['Inquilino_CPF']; ?></td>
   <td><?php echo  $Inquilino['Inquilino_Telefone']; ?></td>
   <td><?php echo  $Inquilino['Fiador_Nome']; ?></td>
   <td><?php echo  $Inquilino['Fiador_CPF']; ?></td>
   <td><?php echo  $Inquilino['Fiador_Telefone']; ?></td>
   <td><a class="btn btn-outline-info" onclick="JavaScript:location.href='frmEditarInquilino.php?id=' +
   <?php echo  $Inquilino['Inquilino_ID'];?>">
   <i class="material-icons">edit</i></a></td>
   <td><a class="btn btn-outline-info" onclick="JavaScript:location.href='frmRemoverInquilino.php?id=' +
   <?php echo  $Inquilino['Inquilino_ID'];?>">
   <i class="material-icons">delete</i></a></td>
    <?php }?>
  </tbody>
        
    </table>
    <button type="submit" class="btn btn-success mb-4" onclick="JavaScript:location.href='frmInserirInquilino.php'">Cadastrar Novo Inquilino</button>
    <a href="../menu.php" class="btn btn-primary btn-lg active" role="button">Menu</a>
  </body>
</html>