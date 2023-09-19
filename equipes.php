<?php
session_start();
if($_SESSION["logado"] == 0){
    header('location: login.php?erro=você não está logado');
}


include 'php/site.config.php';
criaHeader('Equipes');
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
