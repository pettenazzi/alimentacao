<?php
session_start();
if(!$_SESSION['login']){
    header("location:login.php");
}
?>
<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Doação - Solicitar Itens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylescentro.css">
    <style>
        /* Estilos para a barra de navegação */
        nav {
            background-color: #333;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        nav h1 {
            margin: 0;
            font-size: 24px;
        }

        .login-area {
            display: flex;
            justify-content: flex-end;
            padding: 10px;
        }

        .login-btn {
            background-color: #007BFF;
            color: white;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            margin: 5px;
            transition: background-color 0.3s ease;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }

        /* Estilos da galeria de doações */
        .galeria {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .galeria-item {
            width: 300px;
            margin: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            background-color: #fff;
            transition: transform 0.3s ease;
        }

        .galeria-item:hover {
            transform: translateY(-5px);
        }

        .galeria-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .galeria-item h3, .galeria-item p {
            padding: 10px;
        }

        footer {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .galeria-item {
                width: 90%;
            }

            nav ul {
                flex-direction: column;
                align-items: center;
            }

            nav ul li {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <nav>
        <?php
        
        ?>
        <?php if($_SESSION['tipo']==1){
            echo "Login de Empresa bem sucedido, bem-vindo!";
        } else{
            echo "Login de Usuário bem sucedido, bem-vindo!";
        }
        ?>
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="locais_entrega.php">Locais de Entrega</a></li>
        </ul>
        <div class="login-area">
            <a href="index.php" class="login-btn">Logout</a>
        </div>
    </nav>

    <section class="galeria">
        <div class="galeria-item">
            <img src="esseaqui.png" alt="Item 1">
            <h3>Alimentos</h3>
            <p>Vários tipos de alimentos não perecíveis disponíveis para doação.</p>
            <button type="button" class="btn btn-primary" onclick="location.href='alimentos.php'">Alimentos</button>
        </div>
        <div class="galeria-item">
            <img src="roupas.png" alt="Item 2">
            <h3>Roupas</h3>
            <p>Roupas de diversos tamanhos e estilos, prontas para quem precisa.</p>
            <button type="button" class="btn btn-primary" onclick="location.href='roupas.php'">Roupas</button>
        </div>
        <div class="galeria-item">
            <img src="dinheiro.png" alt="Item 3">
            <h3>Dinheiro</h3>
            <p>Apoio financeiro para cobrir despesas de instituições e famílias.</p>
            <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Dinheiro $$
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><img src="Rickroll.png"></div>
    </div>
  </div>
        </div>
    </section>

    <footer>
        <p>Obrigado por apoiar nossa causa e ajudar a quem precisa!</p>
    </footer>
    <?php if($_SESSION['tipo']==1){ ?>
        <button type="button" class="btn btn-primary" onclick="location.href='ver_doacoes.php'">Ver doações de Alimentos</button>
        <button type="button" class="btn btn-primary" onclick="location.href='ver_doacoes_roupas.php'">Ver doações de Roupas</button>
    <?php } ?>
</body>
</html>
