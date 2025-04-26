<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="contato.css">
</head>

<body>
    <?php include "../components/header/header.php" ?>
    <main>
        <h1>Deixe suas Informações para contato!</h1>
        <form action="../contact_info/contact_info.php" method="GET">
            <div class="cont_inp">
                <label for="name">Nome</label>
                <input  class="inp" type="text" maxlength="200" minlength="1"  name="name" id="name" placeholder="Digite seu nome...">
                <label for="email">Email</label>
                <input class="inp" type="email" name="email" id="email" placeholder="Digite seu email...">
                <label for="age">Idade</label>
                <input  class="inp" type="number" max="100" min="15" id="age" name="age" placeholder="Digite sua idade Ex:18">
                <label for="num">Número de Telefone</label>
                <input  class="inp" type="number" id="num" name="number" placeholder="Digite seu número de telefone">
            </div>
            <div class="cont_inp">
                    <label for="mesage">Mensagem: </label>
                    <input  class="inp" type="textarea" id="mesage" maxlength="200" name="mesage" placeholder="Digite sua mensagem">
                    <div class="cont_gender">
                        <p>Gênero</p>
                        <div><input type="radio" name="gender" value="1" id="f"><label for="f">Feminino</label></div>
                        <div><input type="radio" name="gender" value="2" id="m"><label for="m">Masculino</label></div>
                        <div><input type="radio" name="gender" value="3" id="o"><label for="o">Outro</label></div>
                    </div>
                <br>

                <input class="btn" type="submit" value="Enviar">
            </div>
        </form>
        <?php include '../components/atention/atention.php'?>
    </main>
    <?php include '../components/footer/footer.php'; ?>
</body>

</html>