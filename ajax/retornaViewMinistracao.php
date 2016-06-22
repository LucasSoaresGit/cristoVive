<?php
include_once '../Controller/sessionController.php';
include '../Model/classMinistracao.php';
include_once '../Controller/functionsController.php';

$sessionControler = new sessionController();
if($sessionControler->confereMasterUser()){
include '../Views/uploadArquivos.php';  
}


?>
<div class="panel panel-default">
    <div class="well">
        <div class="row">
        
            <div class="col-lg-2">
                    <h3>Data <span class="glyphicon glyphicon-calendar"></span></h3>
            </div>
            <div class="col-lg-6">
                    <h3>Assunto ministrado <span class="glyphicon glyphicon-book"></span></h3>
            </div>
            <div class="col-lg-2">
                    <h3>Ministro <span class="glyphicon glyphicon-user"></span></h3>
            </div>
            <div class="col-lg-2">
                    <h3>Opções <span class="glyphicon glyphicon-arrow-down"></span></h3>
            </div>
        </div>    
    </div>
    <?php
        include '../Views/listaArquivos.php';      
    ?>
</div>   

        
       
    
     