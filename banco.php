<?php

class Banco{
    
    public function __conn() {
        
        $pass = "cristovive";
        $user = "u775295677_user";
        try {          
         $dbh = new PDO('mysql:host=localhost;dbname=u775295677_cvive', $user, $pass);       
         return $dbh;
        } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";        
        die();
        }       
      }
      
    public function die_conn(){
        die();
    }
}
?>