<?php include "config.php"; ?>
<?php include "config3.php"; ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php 
            $exibe=$conn->prepare("SELECT * FROM `doacao`");
            $exibe->execute();
            if($exibe->rowCount()==0){
                echo "Não há registros";
            }else{
        ?>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">QTD</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row=$exibe->fetch()){ ?>
                <tr>
                <td><?php echo $row['produto']; ?></td>
                <td><?php echo $row['quantidade']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
        <?php
            }
        ?>
        <button type="button" class="btn btn-secondary" onclick="location.href='centro_doacao.php'">voltar</button>
       