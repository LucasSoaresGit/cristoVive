<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">    

    <title>Cristo Vive</title>
    
     <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/npm.js" type="text/javascript"></script>
        <script src="scripts/funcoesGenericas.js" type="text/javascript"></script>
        
  </head>
  <style>
      body{
          background-image: url(img/c_v_back.jpg);
          background-repeat: no-repeat;
          background-size: 100%;
      }
      .container{
          background-color: rgba(250,250,250, 0.9);
          border-radius: 10px;
      }
  </style>
  <body>
    <div class="container">  
        <div align="center">
            <a href="index.php">
                <img src="img/c_v_banner.png" alt="Cristo Vive" height="15%" width="50%">
            </a>                
        </div>
        
            <form class="form-horizontal" role="form" action="Controller/loginController.php" method="POST">
                <div class="form-group">
                  <label class="control-label col-sm-4 ">CPF:</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" maxlength="14" name="cpf" id="cpf" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-4" for="pwd">Senha:</label>
                  <div class="col-sm-5">
                      <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite a senha" required>
                  </div>
                </div>    
                <div class="form-group">
                  <div class="col-sm-">
                      <div class="control-label col-sm-6">
                          <button type="button" class="btn btn-default" onclick="logar()">Logar</button>
                      </div>                        
                  </div>
                </div>
            </form>
            <div id="logar"></div>
     </div>
      
  </body>
</html>
