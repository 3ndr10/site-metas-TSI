<?php

function criaHeader($titulo) {
    echo '<!DOCTYPE html>
    <html lang="pt-br">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Metas TSI - '.$titulo.'</title>
    
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
        <header class="flex header grow0">
            <nav class="mrg-0auto">
                <div class="left">
                    <a href="" class="deco-none">
                        <h1 class="green-t">Metas - TSI<img src="img/logo.png" alt="logotipo" class="logo"></h1>
                    </a>
                </div>
                <div class="right">
                    <a class="green-h deco-none" href="index.php">Home</a>
                    <a class="green-h deco-none" href="equipes.php">Equipes</a>
                    <a class="green-h deco-none" href="login.php">Login</a>
                </div>
            </nav>
        </header>';
}

function criaFooter() {
    echo '<footer class="flex wrap grow0">

    <div class="roda-pé mrg-0auto">
        <div class="linha-vertical"></div>
        <div class="texto-footer font-1-5em green-t">
            <p>Desenvolvido por alunos do 1º TSI</p>
        </div>
        <div class="linha-vertical"></div>
    </div>

    <div class="linha-roizontal"></div>
</footer>
</body>

</html>';
}

function criaEquipe($nome) {
    return '<div class="box-green flex w450 h150 mg-lr-30 font-2em center-center">
    <p><a href="membros.php" class="black deco-none">Equipe'.$nome.'</a></p>
    </div>';   
}
    // <a href="" class="deco-none">
    // </a>
?>