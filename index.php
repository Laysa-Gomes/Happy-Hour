<?php
session_start();

if (!isset($_SESSION['alertaEmitido'])) {
    echo "<script> alert('Login: admin   |   Senha: 123'); </script>";
    $_SESSION['alertaEmitido'] = true;
}
?> 

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./sign_in/index.css">
    <title>Happy Hour - Página de login</title>
</head>

<body>
    <header>
        <img class="logo" src="./images/logo_hh.png" alt="logo do site happy hour relógio colorido">
        <h1>Happy Hour</h1>
    </header>
    <main>
        <div class="box_one">
            <div class="text_box">
                <div class="container">
                    <div class="decoration"></div>
                    <h2>O melhor entretenimento
                        para você.</h2>
                </div>
                <p class="p1">Seu ingresso para os maiores eventos divertidos.Faça seu login para assistir a espetáculos de teatro, festivais, cinema e muito mais!</p>
            </div>
            <img class="friends" src="./images/friends.png" alt="desenho de pessoas segurando um ingresso">
        </div>
        <div class="box_two">

            <div class="cont_h3">
                <h3>Sign in</h3>
            </div>

            <div class="social">
                <img class="fb" src="./images/fb_icon.png" alt="logo da rede social facebook">
                <img class="in" src="./images/in_icon.png" alt="logo da rede social linkedin">
                <img class="ig" src="./images/ig_icon.png" alt="logo da rede social instagram">
            </div>
            <p class="p2">Entre agora e fique por dentro de todas as novidades.</p>
            <form action="./login.php" method="POST">
                <div class="cont_e">
                    <input class="inp_e" type="text" name="sign" placeholder="Email...">
                </div>

                <div class="cont_p">
                    <input class="inp_pswrd" type="password" name="password" placeholder="Password...">
                </div>

                <input class="btn" type="submit" value="Entrar">
            </form>
            <?php include './components/atention/atention.php' ?>
        </div>
    </main>
</body>

</html>

<?php
error_reporting(0);
session_start();

if (isset($_SESSION['erro'])) {
    echo "<script> alert('Usuário ou senha incorretos'); </script>";
    unset($_SESSION['erro']);
}
?>