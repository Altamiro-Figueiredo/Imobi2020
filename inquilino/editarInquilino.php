<?php  
   include 'conexao.php'; 

   //recuperar os valores oriundos do formulário
   $Inquilino_ID = trim($_POST['id']);
   $Inquilino_Nome = trim($_POST['nome']);
   $Inquilino_CPF = trim($_POST['CPF']); 
   $Inquilino_Telefone = trim($_POST['telefone']); 
   $Fiador_Nome = trim($_POST['fiadorN']);
   $Fiador_CPF = trim($_POST['fiadorcpf']);
   $Fiador_Telefone = trim($_POST['fiadortel']);
   
  
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE inquilino SET Inquilino_Nome=?, Inquilino_CPF=?, Inquilino_Telefone=?,
         Fiador_Nome=?, Fiador_CPF=?, Fiador_Telefone=? WHERE Inquilino_ID=?;";
        $query = $pdo->prepare($sql); 
        $query->execute (array($Inquilino_Nome, $Inquilino_CPF, $Inquilino_Telefone, $Fiador_Nome, $Fiador_CPF, $Fiador_Telefone, $Inquilino_ID));
        Conexao::desconectar(); 
        //echo PDO::ERRMODE_EXCEPTION; 
   

   header("location:listarInquilino.php"); 

?> 