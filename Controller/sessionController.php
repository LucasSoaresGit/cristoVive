<?php
session_start();
include_once '../Model/classUsuario.php';

class sessionController{
    
    public function alimentaSession($cpf){
        
        $userClass = new Usuario();
        
        $usuario = $userClass->selectCpf($cpf);
        
        
            foreach ($usuario as $value) {            
                $_SESSION['usuario']['nome'] = $value['nome'];
                $_SESSION['usuario']['celula'] = $value['celula'];
                $_SESSION['usuario']['permissao'] = $value['permissao'];
                $_SESSION['usuario']['cpf'] = $value['cpf'];
            }
            
        if(isset($_SESSION['usuario']['nome'])){
            return true;
        }
        else{
            return false;
        }
    }
    
    public function confereMasterUser() {
        
        if(isset($_SESSION['usuario']['permissao']) && $_SESSION['usuario']['permissao'] == 1){
            return true;
        }else{
            return false;
        }
        
    }
    
    public function clearSession(){   
    session_destroy();       
    return true;
    }
    
}