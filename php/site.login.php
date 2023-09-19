<?php 
session_start();

print_r ($_POST);

$login = $_POST['email'];
$senha = md5($_POST['senha']);

if( $senha == "81dc9bdb52d04dc20036dbd8313ed055" && $login == "admin@admin"){
   // echo "login certo";
   $_SESSION["logado"] = true;
   header('location: ../equipes.php');
} else{
   // echo "login errado";
   $_SESSION["logado"] = false;
   header('location: ../login.php?erro=Login ou senha inorreto');
}
?>