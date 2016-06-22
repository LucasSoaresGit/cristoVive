<div class="panel panel-default">
    <form action="Controller/arquivoController.php" method="post" enctype="multipart/form-data"> 
        <div class="row" style="padding: 5px;">
            
                <div class="col-lg-3">
                    <div class="input-group">
                      <span class="input-group-addon">Data</span>
                      <input type="date" required name='data' class="form-control" placeholder="Data" aria-describedby="sizing-addon1">
                    </div>
                </div>  
            
                <div class="col-lg-5">            
                    <div class="input-group">
                      <span class="input-group-addon">Ministração</span>
                      <input type="text" name='ministracao' class="form-control" placeholder="Assunto" aria-describedby="sizing-addon1">
                    </div>            
                </div>
            
                <div class="col-lg-4">            
                    <div class="input-group">
                      <span class="input-group-addon">Ministro</span>
                      <input type="text" required name='ministro' class="form-control" placeholder="Nome" aria-describedby="sizing-addon1">
                    </div>            
                </div>
        </div>
        
        <div class="row" style="padding: 5px;">            
            <div class="col-lg-10">
                <div class="input-group">
                      <span class="input-group-addon">Arquivo</span>
                      <input type="file" onchange="upLoadArquivo()" required id="arquivo" name="arquivo" class="form-control" aria-describedby="sizing-addon1">
                </div> 
            </div>            
            <div class="col-lg-2">
                <div class="input-group">
                    <button value='Salvar' style="background-image: url(../img/c_v_upload.png)" class="form-control" aria-describedby="sizing-addon1">Salvar</button>
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10">
                <div class="input-group">                      
                        <div id="infoArquivo"></div>
                        <div id="result"></div>
                </div>
            </div>    
        </div>
        
    </form>
</div>    

