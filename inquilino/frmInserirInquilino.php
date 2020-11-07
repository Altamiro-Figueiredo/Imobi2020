<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserção de Inquilino</title>

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
<body class="container" bgcolor="white" >
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="display-4">Adicionar Inquilino</h2>
        </div>
        <div class="row">
            <form action="inserirInquilino.php" method="POST" id="frmInserirInquilino"
                  name="frmInserirInquilino" class="col s12">
                <div class="input-field col s8">
                    <label for="lblDesc">Nome Inquilino: </label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblDesc">CPF: </label>
                    <input type="text" class="form-control" id="CPF" name="CPF" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblDesc">Telefone: </label>
                    <input type="text" class="form-control" id="telefone" name="telefone" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblDesc">Nome Fiador: </label>
                    <input type="text" class="form-control" id="fiadorN" name="fiadorN" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblDesc">CPF Fiador: </label>
                    <input type="text" class="form-control" id="fiadorcpf" name="fiadorcpf" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblDesc">Fiador Telefone: </label>
                    <input type="text" class="form-control" id="fiadortel" name="fiadortel" required>
                </div>
              

                

                <div class="input-field col s8">
                    <br>
                    <button type="submit" id="btnInserir" class="btn btn-primary">  Inserir Inquilino</button>
                   
                    <button type="reset" id="btnLimpar" class="btn btn-primary">  Limpar Dados</button>
                   
                    <button type="button" id="btnVoltar" class="btn btn-primary" onclick="JavaScript:location.href='listarInquilino.php'">  Lista de Inquilino</button>
       
                    
                </div>
            </form>
        </div>
    </div>
</body>
</html>


