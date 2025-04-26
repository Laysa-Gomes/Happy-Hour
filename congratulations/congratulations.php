<?php
session_start();
error_reporting(0);

$valor = 0;
$nomeParticipante = $_POST['nameParticipant'];
$ingresso = '';
$assento = $_POST['seat'];

if (isset($_POST["plateia"])) {
    $tipoIngressoTeatro = $_POST['plateia'];
    switch ($tipoIngressoTeatro) {
        case "1":
            $valor = 150 - (150*0.10);
            $ingresso = "Pista Vip";
            break;
        case "2":
            $valor = 130 - (130*0.05);
            $ingresso = "Deck";
            break;
        case "3":
            $valor = 110;
            $ingresso = "Cadeira Premium";
            break;
        case "4":
            $valor = 90;
            $ingresso = "Cadeira Nível 2";
            break;
    }
} elseif (isset($_POST["row"])) {
    $tipoIngressoCinema = $_POST['row'];
    switch ($tipoIngressoCinema) {
        case "5":
            $valor = 40;
            $ingresso = "Inteira";
            break;
        case "6":
            $valor = 20;
            $ingresso = "Meia-Entrada";
            break;
    }

} elseif (isset($_POST["sector"])) {
    $tipoIngressoFestival = $_POST['sector'];
    switch ($tipoIngressoFestival) {
        case "7":
            $valor = 150 - (150*0.20);
            $ingresso = "Pista Vip";
            break;
        case "8":
            $valor = 130 - (130*0.15);
            $ingresso = "Deck";
            break;
        case "9":
            $valor = 110;
            $ingresso = "Cadeira Premium";
            break;
        case "10":
            $valor = 90;
            $ingresso = "Cadeira Nível 2";
            break;
    }
}

$_SESSION['nomeParticipante'] = $nomeParticipante;
$_SESSION['ingresso'] = $ingresso;
$_SESSION['assento'] = $assento;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="congratulation.css">
</head>
<body>
    <?php include '../components/header/header.php'; ?>
    <main>
        <div class="container">
            <h1> <?php echo "$nomeParticipante"; ?>, pedido realizado com sucesso!</h1>
            <div class="content">
                <div class="cont_img">
                    <img class="fun" src="../images/fun.png" alt="Desenho de pessoas pulando">
                    <p>fonte da imagem: canva.com</p>
                </div>
                <div class="cont_text">
                    <p>Parabéns! Seu ingresso foi garantido, e agora a contagem regressiva para o evento começou! Prepare-se para momentos especiais, pois sua experiência está 
                        prestes a ser inesquecível. Aqui estão os detalhes essenciais: certifique-se de verificar o horário do evento e, se necessário, programe-se para chegar 
                        com antecedência. Se o evento inclui orientações adicionais ou requisitos específicos, como áreas designadas, restrições de idade ou normas de segurança, fique 
                        atento às instruções para que tudo ocorra da melhor forma possível. Agradecemos por escolher nossa plataforma e desejamos um evento incrível. Nos vemos lá!</p>
                    <h2>Valor total - R$<?php echo "$valor"; ?></h2>
                    <a class="btn" href="../ticket_view/ticket.php" class="view">Clique aqui e veja seu ingresso! </a>
                </div>
            </div>
        </div>
        <?php include '../components/atention/atention.php'?>
    </main>
   <?php include '../components/footer/footer.php'; ?>
</body>
</html>
