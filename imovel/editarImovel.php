<?php 
   include 'conexao.php'; 

   //recuperar os valores oriundos do formulário
   $Imovel_ID = trim($_POST['Imovel_ID']); 
   $Proprietario_Nome = trim($_POST['Proprietario_Nome']); 
   $Proprietario_Telefone = trim($_POST['telefone']);
   $Proprietario_CPF= trim($_POST['CPF']); 
   $Tamanho_imovel= trim($_POST['Tamanho_imovel']); 
   $QTD_quartos= trim($_POST['QTD_quartos']); 
   $QTD_Banheiro= trim($_POST['QTD_Banheiro']); 
   $Garagem_espaco= trim($_POST['Garagem_espaco']); 
   $Localizacao= trim($_POST['Localizacao']);
   $Situacao_locacao= trim($_POST['Situacao_locacao']);
   
  
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE imovel SET Proprietario_Nome=?, Proprietario_Telefone=?, Proprietario_CPF=?, Tamanho_imovel=?, QTD_quartos=?, QTD_Banheiro=?,
         Garagem_espaco=?, Localizacao=?, Situacao_locacao=? WHERE Imovel_ID =?;";
        $query = $pdo->prepare($sql); 
        $query->execute (array($Proprietario_Nome, $Proprietario_Telefone, $Proprietario_CPF, $Tamanho_imovel, $QTD_quartos, $QTD_Banheiro,
         $Garagem_espaco, $Localizacao, $Situacao_locacao, $Imovel_ID));
        Conexao::desconectar();
     
        header("location:listarImovel.php"); 
?>  
   