<?php
session_start();

$posterData = [
    1 => [
        "img" => "../images/theatre_01.png",
        "title" => "TO THE SHOW",
        "seats" => "../images/seats.png",
        "font" => "Fonte da imagem: https://img.freepik.com/vetores-gratis/cartaz-de-show-de-teatro-desenhado-a-mao_23-2149828597.jpg?t=st=1730580369~exp=1730583969~hmac=5f96374d6ca3795ca489902cdafa737b1e1f46a740c5859c4007c08afdf7cc2f&w=740",
        "fonts" => "Fonte da imagem: https://i0.wp.com/teatrovillalobos.com.br/wp-content/uploads/2024/07/mapa_final.png?resize=1118%2C1536&ssl=1"
    ],
    2 => [
        "img" => "../images/theatre_02.png",
        "title" => "THE PHANTOM OF THE OPERA",
        "seats" => "../images/seats.png",
        "font" => "Fonte da imagem: https://i.pinimg.com/564x/14/8c/d9/148cd9b48d0b196686806ffb30d1062a.jpg",
        "fonts" => "Fonte da imagem: https://i0.wp.com/teatrovillalobos.com.br/wp-content/uploads/2024/07/mapa_final.png?resize=1118%2C1536&ssl=1"

    ],
    3 => [
        "img" => "../images/theatre_03.png",
        "title" => "ALICE NO PAIS DAS MARAVILHAS",
        "seats" => "../images/seats.png",
        "font" => " Fonte da imagem: https://64.media.tumblr.com/6b174cf07bd4b6126592b0e6a582ccf5/tumblr_ov5m7bz4qV1wnkgodo1_500.jpg",
        "fonts" => "Fonte da imagem: https://i0.wp.com/teatrovillalobos.com.br/wp-content/uploads/2024/07/mapa_final.png?resize=1118%2C1536&ssl=1"
    ],
    4 => [
        "img" => "../images/theatre_04.png",
        "title" => "HAMLET",
        "seats" => "../images/seats.png",
        "font" => "Fonte da imagem: https://www.cm-pvarzim.pt/content/uploads/2019/07/peca-de-teatro-hamlet.jpg",
        "fonts" => "Fonte da imagem: https://i0.wp.com/teatrovillalobos.com.br/wp-content/uploads/2024/07/mapa_final.png?resize=1118%2C1536&ssl=1"
    ],
    5 => [
        "img" => "../images/festival_01.png",
        "title" => "MUSIC FESTIVAL",
        "seats" => "../images/festival_seat.jpg",
        "font" => "Fonte da imagem: https://img.freepik.com/vetores-gratis/cartaz-do-festival-de-musica_52683-36267.jpg",
        "fonts" => "Fonte da imagem:https://pbs.twimg.com/media/F9selWFXwAAycBx?format=jpg&name=small"
    ],
    6 => [
        "img" => "../images/festival_02.png",
        "title" => "RIO JAZZ FEST",
        "seats" => "../images/festival_seat.jpg",
        "font" => "Fonte da imagem: https://event-kraken.s3.amazonaws.com/event/posters/74826/large.jpg",
        "fonts" => "Fonte da imagem:https://pbs.twimg.com/media/F9selWFXwAAycBx?format=jpg&name=small"
    ],
    7 => [
        "img" => "../images/festival_03.jpg",
        "title" => "MUSIC FESTIVAL (special performance)",
        "seats" => "../images/festival_seat.jpg",
        "font" => "Fonte da imagem: https://img.freepik.com/vetores-premium/modelo-de-cartaz-de-evento-de-design-plano_23-2150466890.jpg?semt=ais_hybrid",
        "fonts" => "Fonte da imagem:https://pbs.twimg.com/media/F9selWFXwAAycBx?format=jpg&name=small "
    ],
    8 => [
        "img" => "../images/festival_04.png",
        "title" => "KALORAMA",
        "seats" => "../images/festival_seat.jpg",
        "font" => "Fonte da imagem: https://www.record.pt/fora-de-campo/detalhe/kalorama-o-novo-festival-de-musica-portugues-que-se-estreia-com-os-artic-monkeys ",
        "fonts" => "Fonte da imagem:https://pbs.twimg.com/media/F9selWFXwAAycBx?format=jpg&name=small"
    ],
    9 => [
        "img" => "../images/cinema_01.png",
        "title" => "JOKER",
        "seats" => "../images/cinema_seats.png",
        "font" => "Fonte da imagem: https://gkpb.com.br/wp-content/uploads/2022/08/FZQrlBSXwAEaWWG-edited-1024x1366.jpg.webp",
        "fonts" => "Fonte da imagem: https://imgur.com/5ZxIxuB"
    ],

    10 => [
        "img" => "../images/cinema_02.png",
        "title" => "WILD ROBOT",
        "seats" => "../images/cinema_seats.png",
        "font" => "Fonte da imagem: https://media.fstatic.com/hhMwAXqw93Q-tgIJwddYFlRYyQo=/210x312/smart/filters:format(webp)/media/movies/covers/2024/06/cats_SjmnVve.jpg",
        "fonts" => "Fonte da imagem: https://imgur.com/5ZxIxuB"
    ],
    11 => [
        "img" => "../images/cinema_03.png",
        "title" => "BEETLEJUICE 2",
        "seats" => "../images/cinema_seats.png",
        "font" => "Fonte da imagem: https://a-static.mlcdn.com.br/800x560/poster-cartaz-os-fantasmas-ainda-se-divertem-beetlejuice-beetlejuice-pop-arte-poster/poparteskins2/pos-03755-30x45cm/74ec30641379e24910c935f071473950.jpeg",
        "fonts" => "Fonte da imagem: https://imgur.com/5ZxIxuB"
    ],
    12 => [
        "img" => "../images/cinema_04.png",
        "title" => "DESPICABLE ME 4",
        "seats" => "../images/cinema_seats.png",
        "font" => "Fonte da imagem: https://www.mondomilano.it/wp-content/uploads/2024/08/locandina-film-cattivissimo-me-4-2024.jpeg",
        "fonts" => "Fonte da imagem: https://imgur.com/5ZxIxuB"
    ],
];

$getValue = isset($_GET['value']) ? (int)$_GET['value'] : 0;
$itemPoster = $posterData[$getValue] ?? null;
$seatsType = $itemPoster['seats'] ?? null

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="s.css">
    <title>Happy Hour - Compre seu ingresso</title>
</head>

<body>
    <?php include '../components/header/header.php' ?>
    <main>
        <h1>
            <?php echo $itemPoster['title'] ?>
        </h1>

        <div class="cont_info">
            <div class="info" name="info" id="">
                <div>
                    <img class="img_t" src="<?php echo $itemPoster['img']; ?> " alt="cartaz">
                    <p class="pf"><?php echo $itemPoster['font'] ?></p>
                </div>
                <p class="p1">Você está a um passo de vivenciar um momento especial! Após escolher o evento que mais combina com seu estilo e interesse, é hora de garantir o seu ingresso e assegurar o melhor lugar para essa experiência única. Nesta etapa, você pode selecionar o tipo de ingresso que mais se encaixam no seu plano.
                    Pensamos em cada detalhe para tornar sua jornada simples, rápida e segura, para que você possa se concentrar no que realmente importa: aproveitar ao máximo cada instante. Ao finalizar sua compra, você terá acesso aos detalhes do evento, instruções para o dia e um canal de suporte para qualquer dúvida que possa surgir. Então prepare-se, escolha o que melhor te atende, e que comece a diversão</p>
            </div>
        </div>
        <div class="cont_seats">
            <div class="div_seats">
                <h2>Escolha dos ingressos</h2>
                <img class="sector" src="<?php echo $seatsType ?>" alt="Assentos disponíveis">
                <p class="pf_02"><?php echo $itemPoster['fonts'] ?></p>
            </div>
            <form class="form_one" action="../congratulations/congratulations.php" method="POST">
                <?php
                switch ($seatsType) {
                    case "../images/seats.png":
                        echo "
                                <div class='container'>
                                    <label for='l'>Nome</label>
                                    <input class='inp_decoration' type='text' name='nameParticipant' id='l'>
                                </div>

                                <div class='cont_inp'>
                                    <input type='radio' name='plateia' id='1' value='1' required>
                                    <div class='cont_lab'>
                                        <label for='1'>Plateia Premium</label>
                                        <label for='1'>Valor: $150,00</label>
                                        <br>
                                        <label for='1'>10% de desconto</label>
                                    </div>
                                </div>

                                <div class='cont_inp'>
                                    <input type='radio' name='plateia' id='2' value='2' required>
                                    <div class='cont_lab'>
                                        <label for='2'>Plateia Gold</label>
                                        <label for='2'>Valor: $130,00</label>
                                        <br>
                                        <label for='1'>5% de desconto</label>
                                    </div>
                                </div>

                                <div class='cont_inp'>
                                    <input type='radio' name='plateia' id='3' value='3' required>
                                    <div class='cont_lab'>
                                        <label for='3'>Plateia Silver </label>
                                        <label for='3'>Valor: $110,00</label>
                                    </div>
                                </div>

                                <div class='cont_inp'>
                                    <input type='radio' name='plateia' id='4' value='4'>
                                    <div class='cont_lab'>
                                        <label for='4'>Balcão</label>
                                        <label for='4'>Valor: $90</label>
                                    </div>
                                </div>
                            ";
                        break;
                    case  "../images/cinema_seats.png":
                        echo "
                                <div class='container'>
                                    <label for='l'>Nome</label>
                                    <input class='inp_decoration' type='text' name='nameParticipant' id='l' required>
                                </div>

                                <div class='cont_inp'>
                                    <input type='radio' name='row' id='9' value='5' required>
                                    <div class='cont_lab'>
                                        <label for='9'>Inteira</label>
                                        <label for='9'>Valor: $40,00</label>
                                    </div>
                                </div>

                                <div class='cont_inp'>
                                    <input type='radio' name='row' id='10' value='6' required>
                                    <div class='cont_lab'>
                                        <label for='10'>Meia</label>
                                        <label for='10'>Valor: $20,00</label>
                                    </div>
                                </div>

                                <div class='container'>
                                    <label for='l'>Assento</label>
                                    <input class='inp_decoration' type='text' name='seat' id='l' placeholder='Ex: A6' required>
                                </div>
                            ";
                        break;
                    default:
                        echo "
                                <div class='container'>
                                    <label for='l'>Nome</label>
                                    <input class='inp_decoration' type='text' name='nameParticipant' id='l' required>
                                </div>

                                <div class='cont_inp'>
                                    <input type='radio' name='sector' id='11' value='7' required>
                                    <div class='cont_lab'>
                                        <label for='11'>Pista Vip</label>
                                        <label for='11'>Valor: $150,00</label>
                                        <br>
                                        <label for='1'>20% de desconto</label>
                                    </div>
                                </div>

                                <div class='cont_inp'>
                                    <input type='radio' name='sector' id='12' value='8' required>
                                    <div class='cont_lab'>
                                        <label for='12'>Deck</label>
                                        <label for='12'>Valor: $130,00</label>
                                        <br>
                                        <label for='1'>15% de desconto</label>
                                    </div>
                                </div>

                                <div class='cont_inp'>
                                    <input type='radio' name='sector' id='13' value='9' required>
                                    <div class='cont_lab'>
                                        <label for='13'>Cadeira Premium </label>
                                        <label for='13'>Valor: $110,00</label>
                                    </div>
                                </div>

                                <div class='cont_inp'>
                                    <input type='radio' name='sector' id='14' value='10' required>
                                    <div class='cont_lab'>
                                        <label for='14'>Cadeira nível 2</label>
                                        <label for='14'>Valor: $90</label>
                                    </div>
                                </div>
                                ";
                        break;
                }
                ?>
                <div class="cont_btn">
                    <input class="inp_s" type="submit" name="sub" value="Comprar">
                    <input class="inp_c" type="button" name="can" value="Voltar" onclick="window.location.href='../home_page/home_page.php';">
                </div>
            </form>
        </div>
        <?php include '../components/atention/atention.php' ?>
    </main>
    <?php include '../components/footer/footer.php' ?>
</body>

</html>