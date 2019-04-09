<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BellaFlor - Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section class="loginBox">
        <img class="logoBella" src="assets/img/bellaflor.jpg" alt="Bella Flor" width=200;>
        <form action="" method="post">
            <div class="inputBox">
                <input type="text" name="user" required="">
                <label for="user">Usuário</label>
            </div>
            <div class="inputBox">
                <input type="password" name="pass" required="">
                <label for="pass">Senha</label>
            </div>
            <input type="submit" name="" value="Entrar">  
            <a class="signUp" href="">Cadastre-se</a>   
            <a class="recuvePass" href="">Esqueceu a senha?</a>
        </form>
    </section>
</body>
</html>
