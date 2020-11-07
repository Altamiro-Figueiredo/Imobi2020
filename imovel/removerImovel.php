<?php 
   include 'conexao.php'; 

   //recuperar os valores oriundos do formulário
   $idImovel = trim($_POST['id']); 
   
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "DELETE FROM imovel WHERE Imovel_ID=?;";
        $query = $pdo->prepare($sql); 
        $query->execute (array($idImovel));
        Conexao::desconectar(); 
   
   header("location:listarImovel.php"); 

?> 
