<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome da Empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styleteste.css">
</head>
<body>
    <!-- Cabeçalho com nome da empresa e telefone -->
    <header>
        <div class="top-bar">
            <div class="company-name">
                <h1>AlimentAção</h1>
            </div>
            <div class="contact-info">
                <p>Telefone: (11) 1234-5678</p>
                <a href="user_login.php" class="login-btn">Login</a>
            </div>
        </div>

        <!-- Menu de navegação -->
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#o-que-fazemos">O que Fazemos</a></li>
                <li><a href="#quem-somos">Quem Somos</a></li>
                <li><a href="#clientes">Nossos Clientes</a></li>
            </ul>
        </nav>
    </header>

    <!-- Banner -->
    <div class="container mt-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagem13.png" class="d-block w-100" alt="Imagem 1">
                </div>
                <div class="carousel-item">
                    <img src="imagem12.png" class="d-block w-100" alt="Imagem 2">
                </div>
                <div class="carousel-item">
                    <img src="imagem14.png" class="d-block w-100" alt="Imagem 3">
                </div>
                <div class="carousel-item">
                    <img src="imagem4.jpg" class="d-block w-100" alt="Imagem 4">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Seção O Que Fazemos -->

    <section id="o-que-fazemos">
        <h2>O que Fazemos </h2>
        <p>O que Fazemos é conectar doadores de alimentos a pessoas e instituições que precisam. Atuamos como uma plataforma de redistribuição, onde empresas, restaurantes, supermercados e indivíduos podem doar alimentos excedentes que estão em perfeitas condições de consumo.
            Através do nosso sistema, facilitamos o encontro entre esses doadores e organizações comunitárias, como ONGs, abrigos e famílias em situação de vulnerabilidade, garantindo que esses recursos sejam aproveitados ao máximo. </p>
           <img src="imagem14.png">
        </section>
    <section id="nossas-acoes">
        <img src="imagem14.png">
        <p>Cadastro de Doadores: Empresas e pessoas físicas podem se cadastrar para oferecer alimentos que não serão utilizados, evitando o desperdício.
            Solicitação de Doações: Beneficiários, como ONGs e famílias, podem requisitar os alimentos disponíveis de acordo com suas necessidades, de forma rápida e simples.
            Logística e Gestão de Doações: Facilitamos o processo de entrega e recebimento de doações, oferecendo uma interface intuitiva que permite o acompanhamento de todo o ciclo, desde a oferta até a entrega.
            Relatórios de Impacto: Monitoramos as doações realizadas e as entregas concretizadas, gerando relatórios para que doadores e beneficiários possam acompanhar o impacto gerado.
            Nosso objetivo é garantir que alimentos em boas condições cheguem rapidamente às mãos de quem mais precisa, promovendo um ciclo sustentável de solidariedade e aproveitamento de recursos.</p>
            <h2>Nossas Ações</h2>
    </section>

    <!-- Seção Quem Somos -->
    <section id="quem-somos">
         <h2>Quem Somos</h2>
            <p>Uma plataforma criada com o propósito de conectar aqueles que desejam fazer a diferença com quem mais precisa. 
                Somos uma iniciativa comprometida em combater o desperdício de alimentos e reduzir a fome, facilitando a redistribuição de alimentos de forma prática e eficiente.
                Nossa missão é simplificar o processo de doação, criando uma ponte entre doadores e beneficiários, promovendo um impacto positivo na vida de pessoas em situação de vulnerabilidade. 
                Acreditamos que, ao facilitar o acesso a recursos essenciais, estamos contribuindo para uma sociedade mais justa e solidária.</p>
                <img src="imagem14.png">
    </section>
    
            
    <!-- Seção Nossos Clientes -->
    <section id="clientes">
        <h2>Nossos Clientes</h2>
        <p>Empresas e Negócios;<br> 
        Organizações Não-Governamentais (ONGs);<br> 
        Instituições de Caridade;<br> 
        Indivíduos Solidários.</p>
    </section>



    <!-- Agradecimentos -->
    <footer>
        <p>© 2024 - AlimentAção - Todos os direitos reservados.</p>
    </footer>
</body>
</html>
