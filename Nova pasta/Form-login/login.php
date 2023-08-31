<?php 
// include 'php/site.login.php'
?>


<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <div class="login-box bd-black-2 flex-wrap-center">
            <p class="mrg-0 top-10"><strong>Faça seu login:</strong></p>
            <fieldset>
                <form class="flex-wrap-center" method="get" action="php/site.login.php">
                    <label for="email">
                        <p class="flex-wrap-center">Insira seu E-mail:</p>
                        <input class="input bd-black-2" type="email" name="e-mail" placeholder="email@dominio.com" id="email">
                    </label>
                    <label for="senha">
                        <p class="flex-wrap-center">Insira sua senha:</p>
                        <input class="input bd-black-2" type="password" name="senha" placeholder="XXXXXX" id="senha">
                    </label>
                    <button class="input-button bd-black-2 flex-wrap-center" type="submit">Entrar</button>
                </form>
            </fieldset>
            <img src="img/logo.svg" class="logo" alt="logotipo da empresa">
        </div>
    </main>
</body>

</html>