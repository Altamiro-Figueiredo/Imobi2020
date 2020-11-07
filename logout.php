<?php 
//INICIALIZA A SESSÃO 
session_start();

//DESTRÓI AS VARIÁVEIS 
unset($_SESSION['USUARIO']); 
unset($_SESSION['SENHA']);

//REDIRECIONA PARA A TELA DE LOGIN 
Header("Location: index.php"); 
?>