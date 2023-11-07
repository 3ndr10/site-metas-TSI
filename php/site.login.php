<?php 
include 'site.conexao.php';
include 'site.config.php';

session_start();

$login = $_POST['email'];
$password = md5($_POST['senha']);

$usuario = getUsuario($login, $password);

if($usuario != null) {

    $_SESSION["logado"] = 1;
    $_SESSION["id"] = $usuario["id"];
    $_SESSION["email"] = $usuario["email"];
    $_SESSION["login"] = $usuario["login"];

    header('Location: ../equipes.php');

} else {
    //echo 'errado';
    $_SESSION["logado"] = 0;
    header('Location: ../login.php?error=Login/Senha Incorretos');
}
?>