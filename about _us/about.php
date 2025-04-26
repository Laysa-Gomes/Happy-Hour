<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="ab.css">
    </head>

    <body>
        <?php include "../components/header/header.php" ?>
        <main>
        <h1 class="title">Sobre</h1>
            <div class="text_cont">
                <p>O Happy Hour é um site de vendas de ingresso criado para fins acadêmicos. Para sua construção foram utilizadas estruturas de sessions, if e switch case. além do css e a estrutura html.Utilizamos sessions para fazer o controle no login do usuário. Na tela inicial o login é solicitado e caso as credenciais estejam certas, o usuário é redirecionado para a pagina principal. E ao clicar em “Exit” localizado na parte superior direita do site, o login é finalizado e, consequentemente, a session também. 
                Utilizamos sessions para transportar algumas variáveis, como por exemplo, para inserir os dados da compra no ticket do cliente.</p>
            </div>
            <h2 class="dev">Desenvolvedores</h2>

            <div class="profile_cont">
                <div class="card_profile">
                    <div class="card_profile_icon">
                        <img src="../images/bitmoji_2.png" alt="avatar do integrante Karina">
                    </div>
                    <div class="description_profile">
                        <h2>Karina Yumi</h2>
                        <p>
                        Implementações back-end e sessions das páginas: Login, home, sobre, contato, parabenização, venda e visualização de ingresso.
                        </p>
                    </div>
                </div>
                <div class="card_profile">
                    <div class="card_profile_icon">
                        <img src="../images/bitmoji_1.png" alt="avatar da integrante Laysa">
                    </div>
                    <div class="description_profile">
                        <h2>Laysa Gomes</h2>
                        <p>
                            Design do site e desenvolvimento front-end das telas: Home, sobre, contato, parabenização, venda e visualização de ingresso. 
                        </p>
                       
                    </div>
                </div>
                <div class="card_profile">
                    <div class="card_profile_icon">
                        <img src="../images/bitmoji_3.png" alt="avatar do integrante Gustavo">
                    </div>
                    <div class="description_profile">
                        <h2>Gustavo Nascimento</h2>
                        <p>
                        Desenvolvimento front-end da página de login.
                        </p>
                    </div>
                </div>
            </div>
            <?php include '../components/atention/atention.php'?>
        </main>
        <?php include '../components/footer/footer.php' ?>
    </body>
</html>