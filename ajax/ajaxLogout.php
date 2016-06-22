<?php
include_once '../Controller/sessionController.php';

if(isset($_GET['sair']) && $_GET['sair'] == "true"){

    $sessionControler = new sessionController();
        if($sessionControler->clearSession()){
            echo "<meta HTTP-EQUIV='refresh' CONTENT='0.5; URL=index.php'>";
        }
}