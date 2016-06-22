<?php session_start(); ?>

<html>

<head>
        <meta charset="UTF-8">
        <title></title>
        
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/npm.js" type="text/javascript"></script>
        <script src="scripts/funcoesGenericas.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="scripts/uploadArquivo.js" type="text/javascript"></script>
        
</head>
    
    <style>        
        .container{            
            background-image: url(img/c_v_pattern_back.jpg);
        }
        .body{
            background-image: url(img/c_v_cross_pattern.jpg);
        }
    </style>
    
    <body class="body">
        <div class="container">
            
        <!--    inclusoes de construção da pagina        -->
            <?php    include_once 'Views/viewBanner.php';    ?>           
            <?php    include_once 'Views/viewMenu.php';    ?>  
        
        </div>
        <div class="container">
            <!--                div resultado recebe retorno dos ajax menus -->
                <div id="resultado">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <?php
                                include_once 'Views/viewLeftApresentacao.php';
                                ?>
                            </div>
                            <div class="col-sm-6">
                                <?php
                                include_once 'Views/viewRightApresentacao.php';
                                ?>
                            </div>
                        </div>    
                    </div>   
                </div>
                
            <!--   div de informações do download           -->
            <div id="download"></div>
        </div>
    </body>
</html>
