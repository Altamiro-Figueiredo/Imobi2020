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
Conexao::desconectar(); 
        


   

?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Contrato</title>
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.js"></script><style type="text/css"></style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">    
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    
<script type="text/javascript">//<![CDATA[
window.onload=function(){
$(document).ready(function() {
    $('select').material_select();
});
}//]]> 

</script>
</head>
<body class="container" bgcolor="White" >
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="display-4">Adicionar Contrato</h2>
        </div>
        <div class="row">
            <form action="inserirContrato.php" method="POST" id="frmInserirContrato"
                  name="frmInserirContrato" class="col s12">
                  
                <div class="input-field col s8">
                    <label for="lblDesc">Proprietario Nome: </label>
                    <input type="text" class="form-control" id="ProNome" name="ProNome" required>
                </div>
                <div class="input-field col s8">
    <select >
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Materialize Multiple Select</label>
  </div>

                <div class="input-field col s8">
                    <label for="lblDesc">Inquilino Nome: </label>
                    <input type="text" class="form-control" id="InquiNome" name="InquiNome" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblDesc">Fiador Nome: </label>
                    <input type="text" class="form-control" id="FiaNome" name="FiaNome" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblDesc">Data Inicial: </label>
                    <input type="date" class="form-control" id="DataIni" name="DataIni" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblDesc">Data Final: </label>
                    <input type="date" class="form-control" id="DataFim" name="DataFim" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblDesc">Valor Aluguel: </label>
                    <input type="text" class="form-control" id="ValAlug" name="ValAlug"required>
                </div>
                <div class="input-field col s8">
                    <br>
                    <button type="submit" id="btnInserir" class="btn btn-primary">  Inserir Contrato</button>
                   
                    <button type="reset" id="btnLimpar" class="btn btn-primary">  Limpar Dados</button>
                   
                    <button type="button" id="btnVoltar" class="btn btn-primary" onclick="JavaScript:location.href='listarContrato.php'">  Lista de Contrato</button>
       
                    
                </div>
            </form>
        </div>
    </div>
</body>

</html>
