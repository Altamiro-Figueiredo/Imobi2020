<?php  
   include 'conexao.php'; 

   //recuperar os valores oriundos do formulário
   $Inquilino_ID = trim($_POST['id']); 

   
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "DELETE FROM inquilino WHERE Inquilino_ID=?;";
        $query = $pdo->prepare($sql); 
        $query->execute (array($Inquilino_ID));
        Conexao::desconectar(); 
        //echo PDO::ERRMODE_EXCEPTION; 

   header("location:listarInquilino.php"); 

?> 