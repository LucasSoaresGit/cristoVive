<?php
include_once '../Model/classMinistracao.php';
$clsMinistracao = new Ministracao();

        $data = $_POST['data'];
        $ministracao = $_POST['ministracao'];
        $ministro = $_POST['ministro'];        
        $dir = "../uploads/ministracoes/";
        $arquivo;$aux;$ext = array(); $size;
        
    if(isset($_FILES)){   
        $arquivo = $_FILES['arquivo']['name'];
        $aux = $_FILES['arquivo']['tmp_name'];
        $extensao = $_FILES['arquivo']['type'];
        $size = $_FILES['arquivo']['size'];
                        
        $obj = $clsMinistracao->addMinistracao($ministro, $ministracao, $data, $arquivo);
        $ext = explode("/", $extensao);
        }else{
            echo "<script>window.history.back()</script>";
        }
    if($ext[1]== "mp3"){    
        if($clsMinistracao->salvaMinistracao($obj)){
               if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir . $_FILES['arquivo']['name'])){
                   echo "<script>window.history.back()</script>"; 
               }  
            }
    }else{
            echo "<script>window.history.back()</script>";
            
    }


