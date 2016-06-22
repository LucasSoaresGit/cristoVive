<?php
include_once '../database/banco.php';
include_once '../Model/classUsuario.php';
include_once 'sessionController.php';


class loginController extends Usuario{
    
    public $cpf;
    public $senha;
    
    public function logar($cpf, $senha){
        
        
        $userClass = new Usuario();
        $sessionController = new sessionController();
        
        if($userClass->confereLogin($cpf, $senha)){  
                $sessionController->alimentaSession($cpf);
                return true;
        }else{
                return false;
        }
    } 
        
}
?>