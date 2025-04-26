<?php
session_start();

$login = $_POST['sign'];
$senha = $_POST['password'];

$login_valido = "admin";
$senha_valida = "123";

if ($login === $login_valido && $senha === $senha_valida) { 
    $_SESSION['user'] = $login;
    header("Location: ./home_page/home_page.php");
} else {
    $_SESSION['erro'] = "Usuário ou senha incorretos";
    
    header("Location: ./index.php");
}
exit();
?>