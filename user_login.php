<?php include "config.php"; ?>
<script>
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<div class="container">
    <div class="row">
        <form action="user_login.php" method="post">
            <input type="text" name="usu" placeholder="Usuário"
            class="form-control">
            <input type="password" name="senha" placeholder="Senha"
            class="form-control">
            <input type="submit" name="login" value="Entrar"
            class="btn btn-primary">
        </form>
        <?php
            if(isset($_POST['login'])){
                $usu=$_POST['usu'];
                $senha=md5($_POST['senha']);
                $conslog=$conn->prepare("SELECT * FROM `login` 
                WHERE `log_usu` = :usu AND `log_senha` = :senha 
                AND `log_status` = 1");
                $conslog->bindValue(":usu",$usu);
                $conslog->bindValue(":senha",$senha);
                $conslog->execute();
                if($conslog->rowCount()==0){
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Login ou senha inválido!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }else{
                    $row=$conslog->fetch();
                    session_start();
                    $_SESSION['login']=$row['log_id'];
                    $_SESSION['tipo']=$row['log_tipo'];
                    header('location:centro_doacao.php');
                }
            }
        ?>
    </div>
</div>