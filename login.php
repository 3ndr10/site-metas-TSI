<?php
include 'php/site.config.php';

$msgErro = @$_GET['erro'];
$msgSucesso = @$_GET['sucesso'];

$msg = "";

if ($msgErro != "") {
    $msg = '<div class="mrg-0auto flex center-center w100vw h75 txt-c">
    <p class="red font-2em"><strong>Atenção:</strong> A seguinte mensagem de erro foi informada: '.$msgErro.'</p>
    </div>';
}

if ($msgSucesso != "") {
    $msg = '<div class="mrg-0auto flex center-center w100vw h75 txt-c">
    <p class="green font-2em"><strong>Informação:</strong> A seguinte mensagem de sucesso foi informada: '.$msgSucesso.'</p>
    </div>';
}

criaHeader('login', "");
 
echo $msg;

// echo $msgErro;
?>

<main class="flex grow1 center-center">
    <section class="box-green flex w350 h400 center-center bdrad-15 bkg-gr wrap">
        <form action="php/site.login.php" method="post" class="flex wrap w250 center-center">
            <section class="">
                <label for="email" class="flex font-2em w250 center-center">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu E-mail" required class="flex txt-c small w250 h35 mg-tb-10 bdrad-5">
    
                <label for="senha" class="flex font-2em w250 center-center">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required class="flex txt-c small w250 h35 mg-tb-10 bdrad-5">
            </section>
            <section>
                <input type="submit" value="Entrar" class="flex w80-h40 center-center mg-tb-10 small bdrad-5">
            </section>
        </form>

<?php 
    // echo '<section class="flex font-2em w250 center-center">'.$msgErro.'</section>'
?>

    </section>

</main>

<?php
criaFooter();
?>
