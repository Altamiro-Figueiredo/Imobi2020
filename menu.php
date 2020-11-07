<?php
  session_start();
  if(!isset($_SESSION['USUARIO']))
  header("location: index.php");
 
 
 ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>MENU</title>
</head>
<body class="container" bgcolor="White" >
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Sistema de Imobiliaria</h1>
  <a  href="./imovel/listarImovel.php" class="btn btn-primary btn-lg active" role="button">Lista de Imovel</a>
  <br> <br>
  <a href="./inquilino/listarInquilino.php" class="btn btn-primary btn-lg active" role="button">Lista de Inquilino</a>
  <br> <br>
  <a href="./contrato/listarContrato.php" class="btn btn-primary btn-lg active" role="button">Lista de Contrato</a>
  <br> <br>
  <a href="logout.php" class="btn btn-primary btn-lg active" role="button">Logout</a>
  
</body>

</html>
