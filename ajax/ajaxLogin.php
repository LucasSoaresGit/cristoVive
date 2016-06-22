<?php
include_once '../Controller/loginController.php';
$lgnController = new loginController();
if($lgnController->logar($_GET['cpf'], $_GET['senha'])){
    ?>
<div class="alert alert-success">
    <div class="row">
        <div class="col-sm-offset-5 col-sm-12">
            <strong>Logado!  <a href="index.php">Acesse o sistema com privilégios <span class="glyphicon glyphicon-check"></span></a></strong> 
        </div>
    <div>    
</div>
    <?php
}else{
    ?>
<div class="alert alert-warning">
    <div class="row">
        <div class="col-sm-offset-4 col-sm-12">
            <strong>CPF ou SENHA não confere!  <a href="index.php">Acesse o sistema sem privilégios <span class="glyphicon glyphicon-alert"></span></a></strong> 
        </div>
    <div>    
</div>    
    <?php
}

