<?php
include "conexao.php";

$id = @$_POST["id"];
$nome = @$_POST["nome"];
$email = @$_POST["email"];
$senha = @$_POST["senha"];

$sql = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' WHERE id=$id";

if(mysqli_query($coon, $sql)){
    echo "Usuário atualizado com sucesso";
} else {
    echo "Erro ao atualizar usuário: " . mysqli_error($coon);
}

mysqli_close($coon);
?>