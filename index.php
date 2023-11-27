<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="icon" href="assets/icon/icon-atlas-removed.png">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/footer.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <title>Atlas- Locações</title>
</head>
<body>
    <header>
        <div class="main_logo">
            <a href="#Top">
                <img src="assets/icon/icon-atlas-removed.png" alt="Logo - Atlas">
            </a>
        </div>

        <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>

        <nav>
            <ul class="nav-list">
                <li>
                    <a href="index.php" class="link">Página Inicial</a>
                </li>
                <li>
                    <a href="Contato.html" class="link">Contato</a>
                </li>
                <li>
                    <a href="servicos.html" class="link">Serviços</a>
                </li>
                <li>
                    <a href="catalogo.html" class="btn">Catálogo</a>
                </li>
            </ul>
        </nav>
    </header>
<?php

    if (isset($_SESSION['success']) && $_SESSION['success'] === true) {
        echo '<div class="box-suc"><div class="icon-32"></div>
        <div class="sucess"><h3>E-mail enviado com sucesso! Aguarde contato da nossa equipe.</h2></div></div>';

        // Limpa a variável de sessão para evitar exibição repetida
        unset($_SESSION['success']);
    }
?>

    <section class="first">
        <div class="left">
            <h1 class="title-1" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">Atlas Locações</h1>
            <h1 class="title-2" data-aos="fade-right" data-aos-delay="1100" data-aos-duration="1000">O <span class="emphasys">Melhor</span> para sua obra</h1>
            <a href="#orcamento" data-aos="fade-right" data-aos-delay="1600" data-aos-duration="1000"><button class="call-ta"><p>Faça um orçamento!</p> <img class="img-call" src="assets/icon/call-to-action.gif" alt="Animção de Peças"></button></a>
        </div>
        <div class="right">
            <img src="assets/icon/icon-atlas-removed.png" alt="Logo - Atlas" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">
        </div>
    </section>

    <section class="second">
        <div class="cards" data-aos="zoom-in" data-aos-delay="600">
            <div class="card-1">
                <div class="information">
                    <h2>Quem Somos</h2> <div class="icon-32"></div>

                </div>

                <div class="text"> 
                    <p> Somos especializados na locação de equipamentos para construção, oferecendo uma ampla variedade de opções que proporcionam soluções de alta qualidade para atender às necessidades específicas de cada projeto.</p>

                    <p>Conte conosco para impulsionar a eficiência e segurança em seus projetos de construção.</p>
                </div>
                
            </div>
            <div class="card-2">
                <div class="information">
                    <h2>Nossa História</h2> <div class="icon-32"></div>

                </div>

                <div class="text"> 
                    <p> Desde 2023, a Atlas Locações tem um compromisso sólido com a eficácia e honestidade  e, mesmo sendo novos no mercado, buscamos sempre atender com excelência.</p>
                        <p>Inovação e integridade são a essência da nossa jornada, moldando o futuro da locação de equipamentos. Bem-vindo a uma história de confiança e qualidade.</p>

                </div>
            </div>
            <div class="card-3">
                <div class="information">
                    <h2>Sobre o Logotipo</h2> <div class="icon-32"></div>

                </div>

                <div class="text"> 
                    <p> Nosso logotipo é uma representação do titã Atlas, incumbido de carregar o peso do mundo sobre suas costas na mitologia. Inspirado na filosofia de Ayn Rand, notavelmente em seu livro "A Revolta de Atlas", o logotipo encapsula a essência profunda da produtividade.</p>
                    <p>Além disso, ele está intrinsecamente ligado aos nossos escoramentos, simbolizando a capacidade de suportar grandes pesos com força e resistência.</p>

                </div>
            </div>
        </div>
       
    </section>
    <div class="skew skew-1"></div>



    <section class="third" id="orcamento">

        
            <div class="formulario">
                <div class="information" data-aos="zoom-in" data-aos-delay="50">
                <h2>Faça seu Orçamento</h2> <div class="icon-32"></div>
                </div>
                <form action="envio.php" method="POST">
                    <label for="email" data-aos="zoom-in" data-aos-delay="150">Seu email:</label><br>
                    <input type="email" id="email" name="txtemail" placeholder="Insira seu Email" data-aos="zoom-in" data-aos-delay="150" required><br>

                    <label for="assunto" data-aos="zoom-in" data-aos-delay="300">Assunto:</label><br>
                    <input type="text" id="assunto" name="txtassunto" placeholder="Insira o Assunto" data-aos="zoom-in" data-aos-delay="300" required><br>

                    <label for="mensagem" data-aos="zoom-in" data-aos-delay="500">Mensagem:</label><br><br>
                    <textarea type="text" id="mensagem" name="txtmensagem" placeholder="Insira a Mensagem" data-aos="zoom-in" data-aos-delay="500" required></textarea>

                    <input type="submit" name="enviar" class="btn-enviar">
                </form>
            </div>

    </section>

<footer>
    <div class="fot-1">
        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <h2>Navegue</h2>
            <ul>
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="Contato.html">Contato</a></li>
                <li><a href="servicos.html">Serviços</a></li>
                <li><a href="catalogo.html">Catálogo</a></li>
            </ul>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <h2>Serviços</h2>
            <ul>
                <li><a href="servicos.html">Locação de Equipamentos</a></li>
                <li><a href="servicos.html">Andaimes e Escoramentos</a></li>
            </ul>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="500">
            <h2>Catálogo</h2>
            <ul>
            <li><a href="assets/files/catalogo-equipamento.pdf" target="_blank">Equipamentos</a></li>
            <li><a href="assets/files/catalogo-escoramento.pdf" target="_blank">Escoramentos</a></li>
            </ul>
        </div>
    </div>

    <div class="skew-2"></div>

    <div class="fot-2">
        <img src="assets/icon/icon-atlas-removed.png" alt="Logotipo Atlas">
        <div class="box-2">
            <h3>©️Atlas Locações - Todos os direitos Reservados</h3>
            <h3><a href="mailto:locacao@atlasacoealuminio.com.br?">locacao@atlasacoealuminio.com.br</a></h3>
        </div>
    </div>
</footer>


</body>
<script src="scripts/index.js"></script>
</html>