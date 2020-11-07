<?php  

   include 'conexao.php';

   //recuperar o valor do id passado ao programa pelo método GET
   $Contrato_ID = $_GET['id']; 

   //recuperar o registro no banco de dados
   $pdo = Conexao::conectar(); 
   $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
   $sql = "SELECT * FROM contrato WHERE Contrato_ID=?;";
   $query = $pdo->prepare($sql); 
   $query->execute(array($Contrato_ID));
   $dados = $query->fetch(PDO::FETCH_ASSOC); 
   $Proprietario_Nome = $dados['Proprietario_Nome'];
   $Inquilino_Nome = $dados['Inquilino_Nome']; 
   $Fiador_Nome = $dados['Fiador_Nome']; 
   $Data_inicio = $dados['Data_inicio'];
   $Data_final = $dados['Data_final'];
   $Valor_aluguel = $dados['Valor_aluguel'];
   $sql2 = "SELECT Imovel_ID FROM imovel WHERE Proprietario_Nome=?;";
   $query = $pdo->prepare($sql2); 
   $query->execute(array($Proprietario_Nome));
   $dados2 = $query->fetch(PDO::FETCH_ASSOC); 
   $Imovel = $dados2['Imovel_ID'];
   Conexao::desconectar(); 
        


   

?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover de Contrato</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
     <!-- biblioteca de icones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--jquery validação-->
    <script src="../jquery/jquery.js" type="text/javascript"></script>
        <script src="../jquery/validator.min.js"></script>

</head>
<body class="container" bgcolor="White" >
    <div class="jumbotron jumbotron-fluid">
        <div class="container">  
            <h2 class="display-4">Remover Contrato</h2>
        </div>
        <div class="row">
            <form action="removerContrato.php" method="POST" id="frmRemoverContrato"
                  name="frmRemoverContrato" class="col s12">
                <div class="input-field col s8">
                <input type="hidden" name="id"  id="id" value=" <?php echo $Contrato_ID;?> ">
                <input type="hidden" name="Imovel_ID"  id="Imovel_ID" value=" <?php echo $Imovel['Imovel_ID'];?> ">
                    <label for="lblDesc">Proprietario Nome: </label>
                    <input type="text" class="form-control" id="ProNome" name="ProNome" value=" <?php echo $Proprietario_Nome;?>">
                    
                </div>

                <div class="input-field col s8">
                    <label for="lblDesc">Inquilino Nome: </label>
                    <input type="text" class="form-control" id="InquiNome" name="InquiNome" value=" <?php echo $Inquilino_Nome;?>">
                </div>
                <div class="input-field col s8">
                    <label for="lblDesc">Fiador Nome: </label>
                    <input type="text" class="form-control" id="FiaNome" name="FiaNome" value=" <?php echo $Fiador_Nome;?> ">
                </div>
                <div class="input-field col s8">
                    <label for="lblDesc">Data Inicial: </label>
                    <input type="text" class="form-control" id="DataIni" name="DataIni" value=" <?php echo $Data_inicio;?> ">
                </div>
                <div class="input-field col s8">
                    <label for="lblDesc">Data Final: </label>
                    <input type="text" class="form-control" id="DataFim" name="DataFim" value=" <?php echo $Data_final;?> ">
                </div>
                <div class="input-field col s8">
                    <label for="lblDesc">Valor Aluguel: </label>
                    <input type="text" class="form-control" id="ValAlug" name="ValAlug" value=" <?php echo $Valor_aluguel;?> ">
                </div>
                <div class="input-field col s8">
                    <br>
                    <button type="submit" id="btnInserir" class="btn btn-primary">  Remover Contrato</button>
                    <button type="button" id="btnVoltar" class="btn btn-primary" onclick="JavaScript:location.href='listarContrato.php'">  Lista de Contrato</button>
       
                    
       </div>
   </form>
</div>
</div>
</body>

</html>