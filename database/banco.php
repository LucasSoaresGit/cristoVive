<?php

class Banco{
    
    public function __conn() {
        
        $pass = "";
        $user = "root";
        try {          
         $dbh = new PDO('mysql:host=localhost;dbname=bd_cristo_vive', $user, $pass);       
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