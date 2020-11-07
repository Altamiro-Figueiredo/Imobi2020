<?php 
   include 'conexao.php'; 

   //recuperar os valores oriundos do formulário
  
   $Proprietario_Nome = trim($_POST['Proprietario_Nome']); 
   $Proprietario_Telefone = trim($_POST['Proprietario_Telefone']);
   $Proprietario_CPF= trim($_POST['Proprietario_CPF']); 
   $Tamanho_imovel= trim($_POST['Tamanho_imovel']); 
   $QTD_quartos= trim($_POST['QTD_quartos']); 
   $QTD_Banheiro= trim($_POST['QTD_Banheiro']); 
   $Garagem_espaco= trim($_POST['Garagem_espaco']); 
   $Localizacao= trim($_POST['Localizacao']);
   $Situacao_locacao= 'Nao Locado';
  
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO imovel (Proprietario_Nome, Proprietario_Telefone, Proprietario_CPF, Tamanho_imovel, QTD_quartos, QTD_Banheiro,
         Garagem_espaco, Localizacao, Situacao_locacao) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $query = $pdo->prepare($sql); 
        $query->execute (array($Proprietario_Nome, $Proprietario_Telefone, $Proprietario_CPF, $Tamanho_imovel, $QTD_quartos, $QTD_Banheiro,
        $Garagem_espaco, $Localizacao, $Situacao_locacao));
        Conexao::desconectar(); 
        //echo PDO::ERRMODE_EXCEPTION; 
   

   header("location:listarImovel.php"); 

?> 