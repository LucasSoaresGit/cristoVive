<?php
include_once '../database/banco.php';

class Ministracao extends Banco{
    
    public $data;
    public $ministro;
    public $arquivo;
    public $ministracao;
    
    
    public function addMinistracao($ministro,$ministracao,$data,$arquivo) {        
        
        $this->ministracao = $ministracao;
        $this->ministro = $ministro;
        $this->data = $data;
        $this->arquivo = $arquivo;    
        
        return $this;
    }
    
    public function salvaMinistracao($obj){
        
        $banco = new Banco();
        $dbh = $banco->__conn();        
        $obj->ministro;
        $obj->ministracao;
        $obj->ministro;
        $obj->arquivo;        
        
        $query = "INSERT INTO ministracoes (data, ministracao, ministro, arquivo)"
                . " VALUES ('".$obj->data."','".$obj->ministracao."','".$obj->ministro."','".$obj->arquivo."')";        
        
        $dbh->exec($query);
        
        return true;
        
    }
    
    public function buscaMinistracaoId($id){
        $banco = new Banco();
        $dbh = $banco->__conn();
        
        $query = "SELECT * FROM ministracoes WHERE id = ".$id."";
        
        $sth = $dbh->prepare($query);
        
        $sth->execute();

        $result = $sth->fetch(PDO::FETCH_BOTH);
        
        return $result;
    }
    
    public function deletaMinistracaoId($id){
        $banco = new Banco();
        $dbh = $banco->__conn();      
        
        $query = "DELETE FROM ministracoes WHERE id= ".$id."";
        
        $dbh->exec($query);
        
        return true;
                
    }


    public function apagaUltimaMinistracao(){
        $banco = new Banco();
        $dbh = $banco->__conn();
        
        $id = $dbh->lastInsertId();
        
        $query = "DELETE * FROM ministracoes WHERE id=".$id."";
        
        $dbh->exec($query);
    }
    
    public function carregaMinistracao(){
        $banco = new Banco();
        $dbh = $banco->__conn();
        
        $query = "SELECT * FROM ministracoes ORDER BY id DESC";
        
        $sth = $dbh->prepare($query);
        
        $sth->execute();

        $result = $sth->fetchAll(PDO::FETCH_BOTH);
        
        return $result;        
    }    
    
    
}