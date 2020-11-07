<?php 
    include 'conexao.php';
    
    //recuperar o valor do id passado ao programa pelo método GET
    $Inquilino_ID = $_GET['id']; 

    //recuperar o registro no banco de dados
    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $sql = "SELECT * FROM inquilino WHERE Inquilino_ID=?;";
    $query = $pdo->prepare($sql); 
    $query->execute (array($Inquilino_ID));
    $dados = $query->fetch(PDO::FETCH_ASSOC); 
    $Inquilino_Nome = $dados['Inquilino_Nome'];
    $Inquilino_CPF = $dados ['Inquilino_CPF']; 
    $Inquilino_Telefone = $dados['Inquilino_Telefone']; 
    $Fiador_Nome = $dados['Fiador_Nome'];
    $Fiador_CPF = $dados['Fiador_CPF'];
    $Fiador_Telefone = $dados['Fiador_Telefone'];
   
    Conexao::desconectar(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover de Inquilino</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
     <!-- biblioteca de icones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body class="container" bgcolor="white" >
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="display-4">Remover Inquilino</h2>
        </div>
        <div class="row">
            <form action="removerInquilino.php" method="POST" id="frmRemoverInquilino"
                  name="frmRemoverInquilino" class="col s12"> 
                  <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $Inquilino_ID;?>">
                  
                  <div class="form-group col-md-6">
                    <label for="lblDesc">Nome Inquilino: </label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $Inquilino_Nome;?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="lblDesc">CPF: </label>
                    <input type="text" class="form-control" id="CPF" name="CPF" value="<?php echo $Inquilino_CPF;?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="lblDesc">Telefone: </label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $Inquilino_Telefone;?>"> 
                </div>
                <div class="form-group col-md-6">
                    <label for="lblDesc">Nome Fiador: </label>
                    <input type="text" class="form-control" id="fiadorN" name="fiadorN" value="<?php echo $Fiador_Nome;?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="lblDesc">CPF Fiador: </label>
                    <input type="text" class="form-control" id="fiadorcpf" name="fiadorcpf" value="<?php echo $Fiador_CPF;?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="lblDesc">Fiador Telefone: </label>
                    <input type="text" class="form-control" id="fiadortel" name="fiadortel" value="<?php echo $Fiador_Telefone;?>">
                </div>
                    <button type="submit" class="btn btn-primary">Remover</button>
                    <button type="button" id="btnVoltar" class="btn btn-primary" onclick="JavaScript:location.href='listarInquilino.php'">  Lista de Inquilino</button>
                     

             </for>     
                    
            
        </div> 
    </div>
</body>

</html>