<?php
//verification de la session si elle n'est pas demarrer on le demarre
if(session_status()===PHP_SESSION_NONE){
    session_start();

}
try{
    $bdd= new PDO('mysql:host=localhost;dbname=tp_angular','root','');
   // echo 'connexion reussie';
    }catch(Exception $e){
        die("erreur de connexion a la base de donnees:" .$e->getMessage());
    }



?>