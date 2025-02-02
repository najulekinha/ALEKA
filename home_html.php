<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Aleka</title>
    <link rel="shortcut icon" href="../fotos/favicon.ico" />

    <link rel="shortcut icon" href="../fotos/favicon.ico" />
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    session_start();
    ?>
    <center>
        <div id="mae">

            <div id="cabecalho">

                <div id="logo">

                    <a href="home_html.php"><img src="../fotos/aleka.png" width="120" height="120"></a>

                </div>

                <div id="botoes">
                    <a href="../frontend/home_html.php"><button type="button" class="padrao" id="atual">Home</button></a>
                    <a href="../frontend/cadastro_html.php"><button type="button" class="padrao">Cadastro</button></a>
                    <a href="../frontend/produtos_html.php"><button type="button" class="padrao">Produtos</button></a>
                    <a href="../frontend/des_html.php"><button type="button" class="padrao">Desenvolvimento</button></a>
                    <a href="../frontend/sobre_html.php"><button type="button" class="padrao">Sobre</button></a>
                </div>
                <div id="icones">
                    <br>
                    <?php 
                    if($_SESSION['nome']=="deslogado" || !isset($_SESSION['nome']))
                    { ?>
                    <button class="open-button" onclick="openForm()">
                        <div id="login"><img src="../fotos/login.png" width="50" height="50"></div>
                    </button>
                    <?php       
                    }
                    if($_SESSION['nome']!="deslogado" && isset($_SESSION['nome']))
                    { ?>
                    <button class="popup" onclick="myFunction()">
                        <div id="login"><img src="../fotos/login.png" width="50" height="50"></div>
                        <span class="popuptext" id="myPopup">Bem-vindo <b><?php echo $_SESSION["nome"]."<br><a href='../backend/logout.php' id='buy'>Logout</a>" ; ?></b></span>
                    </button>
                    <?php
                    }
                     ?>
                    <div id="carrinho"><a href="carrinho_html.php"><img src="../fotos/carrinho.png" width="50" height="50"></a></div>
                </div>
            </div>
            <div id="space">

            </div>

            <div id="imgPrincipal">
                <img src="../fotos/imgprincipal.jpg" width="1300" height="636">
                <br><br>
                <h5>Pop Socket</h5>
                O acessório mais versátil para você! <br>
                Conheça mais sobre as utilidades e benefícios do viralizado Pop Socket.
            </div>
            <br>
            <div id="space"></div>
            <div id="space"></div>
            <div id="space"></div>
            <img src="../fotos/divisor.png">
            <br><br><br>
            <div id="space">

            </div>

            <div id="imgSecundarias">

                <div id="icText">
                    <img src="../fotos/img1.png" height="210" width="192">
                </div>

                <div id="icText">
                    <h4>Estilo</h4><br>

                    Personalize seu smartphone e deixe-o da maneira que você mais gosta. Com ótima funcionalidade e melhor acessibilidade.<a href="produtos_html.php">Saiba mais...</a>
                </div>
                <div id="icText">
                    <img src="../fotos/img2.png" width="192" height="210">
                </div>
                <div id="icText">
                    <h4>Personalize-o</h4><br>

                    Os Popsockets vêm em uma variedade de estampas, mas verdadeira diversão ao criar uma estampa para ter seu próprio Popsocket exclusivo. <a href="produtos_html.php">Saiba mais...</a>
                </div>

                <div id="icText">
                    <img src="../fotos/img3.png" width="192" height="210">
                </div>
                <div id="icText">
                    <h4>Utilidades</h4><br>

                    Serve de apoio para assistir vídeos e proporciona melhor aderência para seu dispositivo. <a href="produtos_html.php">Saiba mais...</a>
                </div>
            </div>
            <br><br>
            <img src="../fotos/divisor.png">
            <br><br><br>
            <div id="space">

            </div>
            <div id="videotxt">
                <div id="p1">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/k3z2Y4-YUlg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div id="p1">
                    O Pop Socket é um dispositivo super versátil, que cola na parte de trás do celular ou na capinha, para manusear seu smartphone ou tablet com mais conforto e segurança.
                    Ideal para uso na hora de selfies, para apoiar seu aparelho em qualquer superfície plana para ver vídeos ou fazer vídeo chat, para enrolar o fone de ouvido de uma maneira mais prática.
                    Assista aqui um vídeo explicando suas funcionalidades.
                    <br>
                </div>
            </div>
            <div id="space">

            </div>
            <div id="rodape">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <a href="../frontend/home_html.php"><button type="button" class="btn btn-secondary">Home</button></a>
                    <a href="../frontend/cadastro_html.php"><button type="button" class="btn btn-secondary">Cadastro</button></a>
                    <a href="../frontend/produtos_html.php"><button type="button" class="btn btn-secondary">Produtos</button></a>
                    <a href="../frontend/des_html.php"><button type="button" class="btn btn-secondary">Desenvolvimento</button></a>
                    <a href="../frontend/sobre_html.php"><button type="button" class="btn btn-secondary">Sobre</button></a>

                </div>
                <br><br>
                <a href="#top"><button type="button" class="btn btn-secondary">Voltar ao topo </button></a>
                <?php
                if($_SESSION['admin']=='s')
                {
                ?>
                <a href="../frontend/admin_html.php"><button type="button" class="btn btn-secondary">Administradores</button></a>
                <?php
                }
                ?>

                <br><br>
                Amanda, nº2 - Ana Julia, nº3 <br>
                Eduardo, nº7 - Kaio, nº20 <br>
                Luiz, nº24
                <!-- JAVASCRIPT -->
                <script>
                    function openForm() {
                        document.getElementById("myForm").style.display = "block";
                    }

                    function closeForm() {
                        document.getElementById("myForm").style.display = "none";
                    }

                    function myFunction() {
                        var popup = document.getElementById("myPopup");
                        popup.classList.toggle("show");
                    }

                </script>
                <div class="form-popup" id="myForm">
                    <form method="post" action="../backend/login_certo.php" class="form-container">
                        <h1>Login</h1>
                        <label for="email"><b>E-mail/usuário</b></label>
                        <input type="text" placeholder="Insira e-mail/usuário" name="nome_log" required>
                        <label for="psw"><b>Senha</b></label>
                        <input type="password" placeholder="Insira senha" name="senha_log" required>
                        <a href="esqueci_html.php"><br>Esqueci minha senha</a>
                        <button type="submit" class="btn">Login</button>
                        <button type="button" class="btn cancel" onclick="closeForm()">Fechar</button>
                        Ainda não é cadastrado? <a href="cadastro_html.php">Cadastre-se!</a>
                    </form>
                </div>


            </div>
        </div>
    </center>
</body>

</html>
