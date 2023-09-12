<?php 

print_r ($_POST);

$login = $_POST['email'];
$senha = $_POST['senha'];

if( $senha == "1234" && $login == "admin@admin"){
   // echo "login certo";
   header('location: ../equipes.php');
} else{
   // echo "login errado";
   header('location: ../login.php?erro=Algo deu errado');
}
?>