<?php
include 'php/site.config.php';
criaHeader('Equipes');
?>

<main class="flex wrap grow1 center-evenly">

<?php
for($ind=1; $ind <=6; $ind++) {
    echo criaEquipe($ind);
}
?>

</main>

<?php
criaFooter();
?>
