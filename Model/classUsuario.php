<?php
include_once '../database/banco.php';
include_once '../Controller/functionsController.php';

class Usuario extends Banco{
    
    public $nome;
    public $sobrenome;    
    public $celula;
    public $senha;
    public $permissão;
    
    public function select($arrAtributos,$tabela,$campo,$valor){
        /* arrAtributos recebe um array para que possa ser usado na funÃ§Ã£o gera atributos e gerar as tabelas a serem selecionadas
        from $tabela enviada where o $campo da tabela for igual o valor enviado*/
        
        $banco = new Banco();
        $dbh = $banco->__conn();
        $func = new Functions();
        
        $atributos = $func->GeraAtributos($arrAtributos);
                   
        $query = "SELECT ".$atributos." FROM ".$tabela." WHERE ".$campo." = '".$valor."'";
        
        foreach ($dbh->query($query) as $result) {            
            return $result;
        }
        
    }
    
    public function selectCpf($cpf){
        $banco = new Banco();
        $dbh = $banco->__conn();
        
        $query = "SELECT * FROM usuario WHERE cpf='".$cpf."'";
        
        echo '<script>alert("'.$query.'")</script>';
        
        $sth = $dbh->prepare($query);
        
        $sth->execute();

        $result = $sth->fetchAll(PDO::FETCH_BOTH);
        
        return $result;
    }

    public function confereLogin($cpf, $senha){
        $banco = new Banco();
        $dbh = $banco->__conn();
        
        $statement = "SELECT COUNT(*) FROM usuario WHERE cpf = '".$cpf."' && senha = '".$senha."'";
       
        $sth = $dbh->prepare($statement);
        
        $sth->execute();

        $result = $sth->fetch();
        $return = $result[0];
        
        if($return){
            return true;
        }else{
            return false;
        }
    }
    
}
