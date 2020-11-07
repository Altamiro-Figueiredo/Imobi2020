<?php  
   include 'conexao.php'; 

   //recuperar os valores oriundos do formulário
   $Contrato_ID = trim($_POST['id']); 
   $PRONOME = trim($_POST['ProNome']);
  
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "DELETE FROM contrato WHERE Contrato_ID=?;";
        $query = $pdo->prepare($sql); 
        $query->execute (array($Contrato_ID));
        $sql2 = "UPDATE imovel SET Situacao_locacao='Nao Locado' WHERE Proprietario_Nome=?;";
        $query = $pdo->prepare($sql2); 
        $query->execute (array($PRONOME));
        Conexao::desconectar(); 
        //echo PDO::ERRMODE_EXCEPTION; 
   

   header("location:listarContrato.php"); 