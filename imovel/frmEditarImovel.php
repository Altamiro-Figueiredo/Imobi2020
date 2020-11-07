<?php 
    include 'conexao.php';

    //recuperar o valor do id passado ao programa pelo método GET
    $Imovel_ID = $_GET['id']; 

    //recuperar o registro no banco de dados
    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $sql = "SELECT * FROM imovel WHERE Imovel_ID=?;";
    $query = $pdo->prepare($sql); 
    $query->execute(array($Imovel_ID));
    $dados = $query->fetch(PDO::FETCH_ASSOC); 
    $Proprietario_Nome = $dados['Proprietario_Nome']; 
    $Proprietario_Telefone = $dados['Proprietario_Telefone'];
    $Proprietario_CPF= $dados['Proprietario_CPF']; 
    $Tamanho_imovel= $dados['Tamanho_imovel']; 
    $QTD_quartos= $dados['QTD_quartos']; 
    $QTD_Banheiro= $dados['QTD_Banheiro']; 
    $Garagem_espaco= $dados['Garagem_espaco']; 
    $Localizacao= $dados['Localizacao'];
    $Situacao_locacao= $dados['Situacao_locacao'];

    Conexao::desconectar(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Imovel</title>
    
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
            <h1 class="display-4">Editar Imovel</h1>
        </div>
    </div>
    <form action="editarImovel.php" method="POST">
    <input type="hidden" name="Imovel_ID" Imovel_ID="Imovel_ID" id=frmEditarImovel value=" <?php echo $Imovel_ID;?> ">
        <div class="form-row" >
            <div class="form-group col-md-6">
            <label for="inputEmail4">Nome do Proprietario</label>
            <input type="text" class="form-control" placeholder="Nome Proprietario" name="Proprietario_Nome" value="<?php echo $Proprietario_Nome;?>">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Telefone</label>
            <input type="text" class="form-control" placeholder="Telefone" name="telefone" value="<?php echo $Proprietario_Telefone;?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Proprietario CPF </label>
            <input type="text" class="form-control" placeholder="CPF" name="CPF" value="<?php echo $Proprietario_CPF;?>">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Tamanho imovel</label>
            <input type="text" class="form-control"  placeholder="Tamanho Imovel" name="Tamanho imovel" value="<?php echo $Tamanho_imovel;?>">
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">QTD de quartos</label>
            <input type="text" class="form-control" placeholder="QTD_quartos" name="QTD_quartos" value="<?php echo $QTD_quartos;?>">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">QTD banheiros</label>
            <input type="text" class="form-control" placeholder="QTD_Banheiro" name="QTD_Banheiro" value="<?php echo $QTD_Banheiro;?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Garagem espaco</label>
            <input type="text" class="form-control" placeholder="Garagem_espaco" name="Garagem_espaco" value="<?php echo $Garagem_espaco;?>">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Localizacao</label>
            <input type="text" class="form-control"  placeholder="Localizacao" name="Localizacao" value="<?php echo $Localizacao;?>">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Situacao locacao</label>
            <input disabled type="text" class="form-control"  placeholder="Situacao_locacao" name="Situacao_locacao" value="<?php echo $Situacao_locacao;?>">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
        <button type="button" id="btnVoltar" class="btn btn-primary" onclick="JavaScript:location.href='listarImovel.php'">  Lista de Imovel</button>
       
    </form>
</body>

</html>
