<?php
$sessionControler = new sessionController();
$ministracao = new Ministracao();
$func = new Functions();
$min = $ministracao->carregaMinistracao();
$arrMin = $func->listaMinistracao($min);

foreach ($arrMin as $key => $value) {?>
            <div class="well">
                <div id="crud"></div>
                <div class="row">
                    <div class="col-lg-2 col-md-1">
                        <span class="glyphicon glyphicon-calendar"> <?php echo $arrMin[$key]['data']; ?></span>
                    </div>
                    <div class="col-lg-6 col-md-1">
                        <span class="glyphicon glyphicon-book"> <?php echo $arrMin[$key]['ministracao']; ?></span>
                    </div>
                    <div class="col-lg-2 col-md-1">
                            <span class="glyphicon glyphicon-user"> <?php echo $arrMin[$key]['ministro']; ?></span>
                    </div>
                    <div class="col-lg-2 col-md-1">
                        <a href="uploads/ministracoes/<?php echo $arrMin[$key]['arquivo']; ?>" class="glyphicon glyphicon-play" alt="Ouvir"></a>&nbsp;&nbsp;&nbsp;
                        <a href="uploads/ministracoes/<?php echo $arrMin[$key]['arquivo']; ?>" class="glyphicon glyphicon-download-alt" alt="Baixar" download></a>&nbsp;&nbsp;&nbsp;
                        <?php if ($sessionControler->confereMasterUser()) {?>
                        <a href="#" class="glyphicon glyphicon-remove" id="<?php echo $arrMin[$key]['id']; ?>" style="color: red;" alt="Apagar" onclick="deletar(this.id,0)"></a>&nbsp;&nbsp;&nbsp;
                        <?php }?>
                    </div>
                </div>
            </div>

<?php }?>