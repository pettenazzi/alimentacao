<?php include "config3.php"; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<div class="container">
    <div class="row">
        <div class="col p-3">
            <button class="btn btn-success" 
            onclick="location.href='alimentos.php'">
            Continuar Doando</button>
        </div>
    </div>
    <div class="row">
        <div class="col">   
            <?php
                session_start();
                if(!isset($_SESSION['carrinho'])){
                    $_SESSION['carrinho'] = array();
                }
                
                if(isset($_GET['add'])){
                    $id = $_GET['id'];
                    if(!isset($_SESSION['carrinho'][$id])){
                        $_SESSION['carrinho'][$id] = 1;
                    } else {
                        $_SESSION['carrinho'][$id] += 1;
                    }
                }

                if(isset($_GET['del'])){
                    $id = $_GET['id'];
                    unset($_SESSION['carrinho'][$id]);
                }
                
                if(count($_SESSION['carrinho']) == 0){
                    echo "Carrinho vazio";
                } else {
                    ?>
                <form action="carrinho.php" method="POST">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Produto</th>
                                <th scope="col">KG</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            foreach($_SESSION['carrinho'] as $id => $qtd){
                                $cons = $conn->prepare("SELECT * FROM produtos WHERE prod_id = :id");
                                $cons->bindValue(":id", $id);
                                $cons->execute();
                                $row = $cons->fetch();
                                ?>
                        <tr>
                            <th scope="row"><?php echo $row['prod_nome']; ?></th>
                            <td><?php echo $qtd; ?></td>
                            <td><a href="carrinho.php?del&id=<?php echo $row['prod_id']; ?>" class="btn btn-danger">X</a></td>
                        </tr>
                        <?php 
                            } ?>
                        </tbody>
                    </table>
                    <button type="submit" name="finalizar" class="btn btn-primary">Finalizar Doação</button>
                </form>
                <?php
                }

                // Lógica para salvar os itens no banco de dados
                if(isset($_POST['finalizar'])){
                    foreach($_SESSION['carrinho'] as $id => $qtd){
                        $cons = $conn->prepare("SELECT prod_nome FROM produtos WHERE prod_id = :id");
                        $cons->bindValue(":id", $id);
                        $cons->execute();
                        $row = $cons->fetch();
                        
                        $insert = $conn->prepare("INSERT INTO doacao (produto, quantidade) VALUES (:produto, :quantidade)");
                        $insert->bindValue(":produto", $row['prod_nome']);
                        $insert->bindValue(":quantidade", $qtd);
                        $insert->execute();
                    }
                    // Limpar o carrinho após finalizar
                    $_SESSION['carrinho'] = array();
                    echo "<div class='alert alert-success'>Doação realizada com sucesso!</div>";
                }
            ?>
        </div>
    </div>
</div>