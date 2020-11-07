<?php
	//recupero os valores por meio do método POST
    $Usuario = trim($_POST['username']);
    $Senha = md5(trim($_POST['password']));
 
     include 'conexao.php';
    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $sql = "SELECT * FROM USUARIOS WHERE USUARIO LIKE ?;";
    $query = $pdo->prepare($sql); 
    $query->execute (array($Usuario));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    Conexao::desconectar(); 
    //echo PDO::ERRMODE_EXCEPTION; 
    

    if ($Senha == $dados['SENHA']){
        //echo "Usuario Valido:" . $dados['NOME'];
        session_start();
        $_SESSION['USUARIO'] = $Usuario;
        $_SESSION['NOME'] = $dados['NOME'];;
        header("location: menu.php");
    }
    
    else header("location: index.php");





?>
