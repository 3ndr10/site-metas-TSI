<?php
session_start();
$user = "";
if($_SESSION["logado"] == 0){
    header('location: login.php?erro=você não está logado');
} else {
    $user = $_SESSION["email"];
}


include 'php/site.config.php';

criaHeader('Equipes',$user);
?>

<main class="flex wrap grow1 center-evenly">
<!-- <nav> -->
<?php
for($ind=1; $ind <=6; $ind++) {
    echo criaEquipe($ind);
}
?>
<!-- </nav> -->
</main>

<?php
criaFooter();
?>
