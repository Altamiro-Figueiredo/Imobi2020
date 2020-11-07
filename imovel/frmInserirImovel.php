<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Imovel</title>

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
<body class="container" bgcolor="white">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Cadastrar Imovel</h1>
        </div>
    </div>
    <form action="inserirImovel.php" method="POST" id="frmInserirImovel">
        <div class="form-row">
            <div class="form-group col-md-6">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Nome do Proprietario</label>
            <input type="text" class="form-control"  id="Proprietario_Nome" name="Proprietario_Nome" required>
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Telefone</label>
            <input type="text" class="form-control"  id="Proprietario_Telefone" name="Proprietario_Telefone" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Proprietario CPF </label>
            <input type="text" class="form-control"  id="Proprietario_CPF" name="Proprietario_CPF" required>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Tamanho imovel</label>
            <input type="text"  class="form-control"  id="Tamanho_imovel" name="Tamanho_imovel" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">QTD de quartos</label>
            <input  type="text" class="form-control"  id="QTD_quartos" name="QTD_quartos" required>
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">QTD banheiros</label>
            <input  type="text" class="form-control"  id="QTD_Banheiro" name="QTD_Banheiro" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Garagem espaco</label>
            <input   type="text" class="form-control"  id="Garagem_espaco" name="Garagem_espaco" required>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Localizacao</label>
            <input type="text" class="form-control"   id="Localizacao" name="Localizacao" required>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Situacao locacao</label>
            <input disabled value="Nao Locado" type="text" class="form-control"   id="Situacao_locacao" name="Situacao_locacao" required>
        </div> 
        <button type="submit" id="btnInserir" class="btn btn-primary">  Inserir Imovel</button>
        <button type="reset" id="btnLimparr" class="btn btn-primary">  Limpar Dados</button>
        <button type="button" id="btnVoltar" class="btn btn-primary" onclick="JavaScript:location.href='listarImovel.php'">  Lista de Imovel</button>
        </form>
</body>
</html>
