<div class="row">            
   
                <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand" href="#">Cristo Vive</a>
                    </div>
                    
                    <ul class="nav navbar-nav">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="#" onclick="abreview(this.id)" id="1">Ministrações</a></li>
<!--                      <li><a href="#" onclick="abreview(this.id)" id="2">Fotos</a></li> 
                      <li><a href="#" onclick="abreview(this.id)" id="3">Louvores</a></li>                 -->
                    </ul>                        
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(isset($_SESSION['usuario']['nome'])){ ?>                        
                        <li id="logado"><a>Logado Como: <?php echo $_SESSION['usuario']['nome']; ?></a></li>
                        <li><a><button class="glyphicon glyphicon-log-out" onclick="sair()"></button></a></li>                        
                        <?php } else{ ?>                        
                        <li><a href="Login.php" class="glyphicon glyphicon-log-in"> Entrar</a></li>                         
                        <?php }?>
                        
                    </ul>  
                  </div>
                </nav>                               
           
    <div id="sair"></div>
 </div>