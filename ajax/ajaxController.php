<?php
include_once '../Model/classMinistracao.php';
$ministracao = new Ministracao();
$result = $ministracao->buscaMinistracaoId($_GET['id']);

if(isset($_GET['op']) && isset($_GET['id'])){
    if($ministracao->deletaMinistracaoId($_GET['id'])){
        unlink("../uploads/ministracoes/".$result['arquivo']."")
    ?>
        <div class="alert alert-success">
            <span>Ministração Deletada <strong><?php echo $result['ministracao']; echo $result['arquivo']; ?></strong>
                
        </div>
    <?php
    }
}

?>
<div class="alert alert-danger">
    <span>Tem certeza que deja deletar a ministração <strong><?php echo $result['ministracao']; ?>
    </strong> <a onclick="deletar(<?php echo $result['id'].",1"; ?>)" style="cursor: pointer">SIM</a> / <a style="cursor: pointer">NÃO</a> </span>
</div>

