<?php include "config3.php"; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
</script>
<div class="container">
    <div class="row">
        <div class="col p-3">
            <button class="btn btn-success" onclick="location.href='carrinho.php'">Carrinho</button>
            <button type="button" class="btn btn-secondary"onclick="location.href='centro_doacao.php'">cancelar</button>
        </div>
    </div>
    <div class="row">
        <?php 
            $prod=$conn->prepare("SELECT * FROM produtos");
            $prod->execute();
            if($prod->rowCount()==0){
                echo "Não há produtos";
            }else{
                while($row=$prod->fetch()){
                    ?>
                    <div class="col p-3">
                        <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['prod_nome'] ?></h5>
                            <a href="carrinho.php?add&id=<?php echo $row['prod_id'] ?>" class="btn btn-primary">Doar</a>
                        </div>
                        </div>
                    </div>
                    <?php
                }
            }
        ?>
    </div>
</div>