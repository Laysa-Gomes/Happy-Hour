<?php
session_start();

$nomeParticipante = $_SESSION['nomeParticipante'];
$ingresso = $_SESSION['ingresso'];
$assento = $_SESSION['assento'];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=League+Spartan:wght@100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    </head>

    <body>
    <?php include '../components/header/header.php'; ?>
        <main>
            <div class="container">
                <div class="info">
                    <h1>SEU TICKET</h1>
                    <div class="data">
                        <div>
                            <h3>Nome do participante</h3>
                                <?php 
                                    echo" <p>$nomeParticipante</p> ";
                                ?>
                            <h3>Tipo do ingresso</h3>
                                <?php 
                                    echo" <p>$ingresso</p> ";
                                ?>

                                <?php 
                                if(isset($assento)){
                                    echo" 
                                    <h3>Tipo do ingresso</h3> <p>$assento</p> ";
                                }
                                ?>
                                
                            <p class="text">Bem-vindo ao show! Estamos entusiasmados por ter você conosco para uma noite de entretenimento e experiências inesquecíveis. Este ingresso é a chave para um evento exclusivo, onde cada detalhe foi cuidadosamente elaborado para lhe proporcionar momentos de pura emoção. Chegue cedo para aproveitar todas as surpresas que preparamos especialmente para você. Mantenha este ingresso à mão na entrada e siga as orientações da equipe para uma experiência segura e agradável. Prepare-se para uma noite cheia de magia e diversão!</p>
                        </div>
                        <img class="qrcode" src="../images/qr_code.png" alt="qr code">
                    </div>
                </div>
            </div>
            <?php include '../components/atention/atention.php'?>
        </main>
        <?php include '../components/footer/footer.php'; ?>
    </body>
</html>