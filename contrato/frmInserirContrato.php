<?php  

include 'conexao.php';

$pdo = Conexao::conectar();
$sql = "SELECT * FROM imovel ORDER BY Imovel_ID;";
$listaImovel = $pdo->query($sql);
Conexao::desconectar();

$pdo = Conexao::conectar();
$sql = "SELECT * FROM inquilino ORDER BY Inquilino_ID;";
$listaInquilino = $pdo->query($sql);
Conexao::desconectar();

$pdo = Conexao::conectar();
$sql = "SELECT * FROM inquilino ORDER BY Inquilino_ID;";
$listaFiador = $pdo->query($sql);
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
                <select name="propnome" id="propnome" class="form-control">
                <?php
                    $i=0;
                    foreach ($listaImovel as $Imovel) {
                        if ($i==0) {?>
                            <option value="" disabled selected>Selecione sua opção</option>
                            <option value="<?php echo $Imovel['Proprietario_Nome']; ?>" selected><?php echo $Imovel['Proprietario_Nome']; ?><input type="hidden" name="Imovel_ID"  id="Imovel_ID" value=" <?php echo $Imovel['Imovel_ID'];?> "></option>
                        <?php } else { ?>
                            <option value="<?php echo $Imovel['Proprietario_Nome']; ?>"><?php echo $Imovel['Proprietario_Nome']; ?><input type="hidden" name="Imovel_ID"  id="Imovel_ID" value=" <?php echo $Imovel['Imovel_ID'];?> "></option>
                    <?php }
                    $i++;
                }
                ?>  
                </select>
                      <label>Proprietario Nome:</label>
                    </div>

                    <div class="input-field col s8">
                <select name="inquinome" id="inquinome" class="form-control">
                <?php
                    $i=0;
                    foreach ($listaInquilino as $Inquilino) {
                        if ($i==0) {?>
                            <option value="" disabled selected>Selecione sua opção</option>
                            <option value="<?php echo $Inquilino['Inquilino_Nome']; ?>" selected><?php echo $Inquilino['Inquilino_Nome']; ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $Inquilino['Inquilino_Nome']; ?>"><?php echo $Inquilino['Inquilino_Nome']; ?></option>
                    <?php }
                    $i++;
                }
                ?>  
                </select>
                      <label>Inquilino Nome:</label>
                    </div>

                    <div class="input-field col s8">
                <select name="fianome" id="fianome" class="form-control">
                <?php
                    $i=0;
                    foreach ($listaFiador as $Fiador) {
                        if ($i==0) {?>
                            <option value="" disabled selected>Selecione sua opção</option>
                            <option value="<?php echo $Fiador['Fiador_Nome']; ?>" selected><?php echo $Fiador['Fiador_Nome']; ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $Fiador['Fiador_Nome']; ?>"><?php echo $Fiador['Fiador_Nome']; ?></option>
                    <?php }
                    $i++;
                }
                ?>  
                </select>
                      <label>Fiador Nome:</label>
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
