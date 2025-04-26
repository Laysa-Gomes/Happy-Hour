<?php
session_start();

$nome = $_GET['name'];
$email = $_GET['email'];
$idade = $_GET['age'];
$numTelefone = $_GET['number'];
$mensagem = $_GET['mesage'];

if (isset($_GET["gender"])) {
    $genero = $_GET['gender'];
    switch($genero){
    case "1":
        $genero = "Feminino";
        break;
    case "2":
        $genero = "Masculino";
        break;
    case "3":
        $genero = "Outro";
        break;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./info_contact.css">
    </head>

    <body>
        <?php include "../components/header/header.php" ?>
        <main>
        <h2 class="title">Informações enviadas com sucesso!</h2>
            <div class="container">
                
                <div>
                    <?php
                        echo"<h2>Nome </h2> <p>$nome</p>";
                    ?>
                    <?php
                        echo"<h2>E-mail </h2> <p>$email</p>";
                    ?>
                    <?php
                        echo"<h2>Idade </h2> <p>$idade</p>";
                    ?>
                </div>
                <div>
                    <?php
                        echo"<h2>Número de Telefone </h2> <p>$numTelefone</p>";
                    ?>
                    <?php
                        echo"<h2>Genero </h2> <p>$genero</p>";
                    ?>
                    <?php
                        echo"<h2>Mensagem </h2> <p>$mensagem</p>";
                    ?>
                </div>
            </div>
            <?php include '../components/atention/atention.php'?>
        </main>
        <?php include '../components/footer/footer.php'; ?>
    </body>

</html>