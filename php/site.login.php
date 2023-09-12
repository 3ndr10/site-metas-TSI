<?php 

print_r ($_POST);

$login = $_POST['email'];
$senha = $_POST['senha'];

if( $senha == "1234" && $login == "admin@admin"){
    echo "login certo";
} else{
    echo "login errado";
}
?>