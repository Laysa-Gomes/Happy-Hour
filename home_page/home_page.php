<?php
session_start();

$theatre = [
    ["value" => 1, "img" => "../images/theatre_01.png", "font" => "Fonte da imagem: https://img.freepik.com/vetores-gratis/cartaz-de-show-de-teatro-desenhado-a-mao_23-2149828597.jpg?t=st=1730580369~exp=1730583969~hmac=5f96374d6ca3795ca489902cdafa737b1e1f46a740c5859c4007c08afdf7cc2f&w=740",],
    ["value" => 2, "img" => "../images/theatre_02.png", "font" => "https://i.pinimg.com/564x/14/8c/d9/148cd9b48d0b196686806ffb30d1062a.jpg",],
    ["value" => 3, "img" => "../images/theatre_03.png", "font" => "https://64.media.tumblr.com/6b174cf07bd4b6126592b0e6a582ccf5/tumblr_ov5m7bz4qV1wnkgodo1_500.jpg",],
    ["value" => 4, "img" => "../images/theatre_04.png", "font" => "https://www.cm-pvarzim.pt/content/uploads/2019/07/peca-de-teatro-hamlet.jpg",],
];
$festivals = [
    ["value" => 5, "img" => "../images/festival_01.png", "font" => "https://img.freepik.com/vetores-gratis/cartaz-do-festival-de-musica_52683-36267.jpg",],
    ["value" => 6, "img" => "../images/festival_02.png", "font" => "https://event-kraken.s3.amazonaws.com/event/posters/74826/large.jpg",],
    ["value" => 7, "img" => "../images/festival_03.jpg", "font" => "https://img.freepik.com/vetores-premium/modelo-de-cartaz-de-evento-de-design-plano_23-2150466890.jpg?semt=ais_hybrid",],
    ["value" => 8, "img" => "../images/festival_04.png", "font" => "https://www.record.pt/fora-de-campo/detalhe/kalorama-o-novo-festival-de-musica-portugues-que-se-estreia-com-os-artic-monkeys ",],
];

$cinema = [
    ["value" => 9, "img" => "../images/cinema_01.png", "font" => "https://gkpb.com.br/wp-content/uploads/2022/08/FZQrlBSXwAEaWWG-edited-1024x1366.jpg.webp ",],
    ["value" => 10, "img" => "../images/cinema_02.png", "font" => "https://media.fstatic.com/hhMwAXqw93Q-tgIJwddYFlRYyQo=/210x312/smart/filters:format(webp)/media/movies/covers/2024/06/cats_SjmnVve.jpg",],
    ["value" => 11, "img" => "../images/cinema_03.png", "font" => "https://a-static.mlcdn.com.br/800x560/poster-cartaz-os-fantasmas-ainda-se-divertem-beetlejuice-beetlejuice-pop-arte-poster/poparteskins2/pos-03755-30x45cm/74ec30641379e24910c935f071473950.jpeg",],
    ["value" => 12, "img" => "../images/cinema_04.png", "font" => "https://www.mondomilano.it/wp-content/uploads/2024/08/locandina-film-cattivissimo-me-4-2024.jpeg",],
]
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="hp.css">
    <title>Home - happy hour</title>
</head>

<body>
    <?php include '../components/header/header.php' ?>
    <main>
        <div class="box_02">
            <h1>HAPPY HOUR</h1>
            <p class="p1">Descubra experiências culturais únicas com o Happy Hour. De shows a festivais, encontre eventos que vão além do entretenimento, proporcionando momentos inesquecíveis. Conecte-se com o que há de melhor na cena cultural ao redor do mundo e faça parte dessas histórias!</p>
            <p class="pf">Fonte das imagens de fundo: https://theatromunicipal.org.br/wp-content/uploads/2019/09/17_espacos-TMSP.jpg e https://br.web.img3.acsta.net/img/6c/71/6c71afa89fd8ed8999b3e04d8d794a0e.jpg </p>
        </div>
        <div class="cont_img">
            <div title="Fonte da imagem: https://outrosrelatos.com.br/wp-content/uploads/2023/11/carnaval-diamantina-2018.jpg" class="img_01">
                <img src="../images/img_1.png" alt="Pessoas em um festival">
                <!-- <p class="pf_02">Fonte da imagem: https://outrosrelatos.com.br/wp-content/uploads/2023/11/carnaval-diamantina-2018.jpg</p> -->
            </div>
            <div title="Fonte da imagem: https://chorandoderirdavida.com.br/wp-content/uploads/2023/09/chorando-de-rir-da-vida-leao-03-750x450.webp" class="img_02">
                <img src="../images/img_2.png" alt="Atriz em uma peça de teatro">
                <!-- <p class="pf_02">Fonte da imagem: https://chorandoderirdavida.com.br/wp-content/uploads/2023/09/chorando-de-rir-da-vida-leao-03-750x450.webp</p> -->
            </div>
            <div title="Fonte da imagem: https://i0.wp.com/babylonradio.com/wp-content/uploads/2024/09/pexels-pavel-danilyuk-7234275-scaled-e1726062427759.jpg?resize=2048%2C1024&ssl=1 " class="img_03">
                <img src="../images/img_3.png" alt="Casal assistindo um filme no cinema">
                <!-- <p class="pf_02"> Fonte da imagem: https://i0.wp.com/babylonradio.com/wp-content/uploads/2024/09/pexels-pavel-danilyuk-7234275-scaled-e1726062427759.jpg?resize=2048%2C1024&ssl=1  </p> -->
            </div>
            <div title="Fonte da imagem:https://folhacatolica.com.br/wp-content/uploads/2024/09/Renzo-Bahury-de-Souza-Ramos.png" class="img_04">
                <img src="../images/img_4.png" alt="Luzes de show">
                <!-- <p class="pf_02">Fonte da imagem:https://folhacatolica.com.br/wp-content/uploads/2024/09/Renzo-Bahury-de-Souza-Ramos.png</p> -->
            </div>
        </div>
        <div>
            <h2>TEATRO</h2>
            <div class="box_03">
                <div class="cont_t">
                    <?php foreach ($theatre as $item):  ?>
                        <a class="a_two" href="../sales_page/sales.php?value=<?php echo $item['value']; ?>">
                            <img title="<?php echo $item['font']; ?>" class="img_poster" src="<?php echo $item['img']; ?>" alt="cartaz de uma peça de teatro" name="img">
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <h2>FESTIVAL</h2>
            <div class="box_03">
                <div class="cont_f">
                    <?php foreach ($festivals as $item):  ?>
                        <a class="a_two" href="../sales_page/sales.php?value=<?php echo $item['value']; ?>">
                            <img title="<?php echo $item['font']; ?>" class="img_poster" src="<?php echo $item['img']; ?>" alt="cartaz de uma peça de teatro" name="img">
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="banner_descont">
                <h2>NÃO PERCA TEMPO!</h2>
                <p>
                    Marque a gente nas redes sociais.
                </p>
                <h3>#MYHAPPYYOUR</h3>
                <p>Fonte da imagem: canva.com</p>
            </div>
            <h2>CINEMA</h2>
            <div class="box_03">
                <div class="cont_c">
                    <?php foreach ($cinema as $item):  ?>
                        <a class="a_two" href="../sales_page/sales.php?value=<?php echo $item['value']; ?>">
                            <img title="<?php echo $item['font']; ?>" class="img_poster" src="<?php echo $item['img']; ?>" alt="cartaz de uma peça de teatro" name="img">
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php include '../components/atention/atention.php' ?>
    </main>
    <?php include '../components/footer/footer.php' ?>
</body>

</html>