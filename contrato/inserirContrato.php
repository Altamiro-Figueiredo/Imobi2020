<?php  
   include 'conexao.php'; 

   //recuperar os valores oriundos do formulário
   $Imovel_ID  = trim($_POST['Imovel_ID']);
   $Proprietario_Nome = trim($_POST['propnome']);
   $Inquilino_Nome = trim($_POST['inquinome']); 
   $Fiador_Nome = trim($_POST['fianome']); 
   $Data_inicio = trim($_POST['DataIni']);
   $Data_final = trim($_POST['DataFim']);
   $Valor_aluguel = trim($_POST['ValAlug']);

  
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO contrato (Proprietario_Nome, Inquilino_Nome, Fiador_Nome, Data_inicio, Data_final, Valor_aluguel) VALUES (?, ?, ?, ?, ?, ?)";
        $query = $pdo->prepare($sql); 
        $query->execute (array($Proprietario_Nome, $Inquilino_Nome, $Fiador_Nome, $Data_inicio, $Data_final, $Valor_aluguel));
        $sql2 = "UPDATE imovel SET Situacao_locacao='Locado' WHERE Imovel_ID=?;";
        $query = $pdo->prepare($sql2); 
        $query->execute (array($Imovel_ID));
        Conexao::desconectar(); 
        //echo PDO::ERRMODE_EXCEPTION; 
       
   

   header("location:listarContrato.php"); 

?> 