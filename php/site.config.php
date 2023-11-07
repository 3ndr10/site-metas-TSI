<?php

function getUsuario($login, $senha_md5) {

    include './site.conexao.php';
    
    $sql = "SELECT * FROM `usuarios` WHERE (`login` LIKE '$login' OR `email` LIKE '$login') AND `senha` LIKE '$senha_md5';";
    

    $result = mysqli_query($conn, $sql);    
    if (mysqli_num_rows($result) > 0) {
    
        $row = mysqli_fetch_assoc($result);

        return $row;
       
    } else {
       return null;
    }
    
    mysqli_close($conn);

}

function criarMenu($usuario) {
    $menu = "";
    if($usuario != "")
    {
        $menu = ' <div class="right">
        <a class="green-h deco-none" href="index.php">Home</a>
        <a class="green-h deco-none" href="equipes.php">Equipes</a>
        <a class="deco-none" href="sair.php">
        '.$usuario.'
        <iconify-icon icon="ph:user-light"></iconify-icon>
        </a>
        <a class="green-h deco-none href="sair.php">Sair</a>
        </div>';
    } else {
        $menu = ' <div class="right">
        <a class="green-h deco-none" href="index.php">Home</a>
        <a class="green-h deco-none" href="equipes.php">Equipes</a>
        <a class="green-h deco-none" href="login.php">Logar</a>
        </div>';
    }

    return $menu;
}

function criaHeader($titulo, $usuario) {
    echo '<!DOCTYPE html>
    <html lang="pt-br">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Metas TSI - '.$titulo.'</title>
    
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    </head>
    
    <body>
        <header class="flex header grow0">
            <nav class="mrg-0auto">
                <div class="left">
                    <a href="" class="deco-none">
                        <h1 class="green-t">Metas - TSI<img src="img/logo.png" alt="logotipo" class="logo"></h1>
                    </a>
                </div>
                '.criarMenu($usuario).'
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